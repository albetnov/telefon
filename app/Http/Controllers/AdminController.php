<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\CountryCode;
use App\Models\CSContact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function pesandata()
    {
        return view('admin/tablepesan', ['tablepesan' => CSContact::all()->lazy()]);
    }

    public function ccdata()
    {
        return view('admin/tablecc', ['tablecc' => CountryCode::all()->lazy()]);
    }

    public function ccedit(CountryCode $cc)
    {
        return view('admin.ccedit', ['dcc' => $cc]);
    }

    public function actadd_cc(Request $request)
    {
        $request->validate(
            [
                'code' => 'required|string|unique:country_code,code,',
                'country' => 'required|string|min:1|max:128'
            ]
        );
        $data = [
            'code' => $request->code,
            'country' => $request->country
        ];
        $query = CountryCode::create($data);
        if (!$query) {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'Country Code gagal di buat'
            ];
        } else {
            $notif = [
                'tipe' => 'success',
                'pesan' => 'Country Code berhasil di buat.'
            ];
        }
        return redirect()->route('tablecc')->with($notif);
    }

    public function actedit_cc(Request $request, CountryCode $cc)
    {
        $request->validate(
            [
                'code' => 'required|string|unique:country_code,code,' . $cc->id,
                'country' => 'required|string|min:1|max:128'
            ]
        );
        $data = [
            'code' => $request->code,
            'country' => $request->country
        ];
        $query = CountryCode::where('id', $cc->id)->update($data);
        if (!$query) {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'Country Code gagal di edit'
            ];
        } else {
            $notif = [
                'tipe' => 'success',
                'pesan' => 'Country Code berhasil di edit.'
            ];
        }
        return redirect()->route('tablecc')->with($notif);
    }

    public function actdel_cc(CountryCode $cc)
    {
        CountryCode::where('id', $cc->id)->delete();
        $notif = [
            'tipe' => 'success',
            'pesan' => 'Country Code berhasil dihapus.'
        ];
        return redirect()->back()->with($notif);
    }

    public function panel()
    {
        return view('admin/tablecontact', ['tablecontact' => Contact::with('con_code', 'user_by')->lazy()]);
    }

    public function userdata()
    {
        return view('admin/tableuser', ['tableuser' => User::all()->lazy()]);
    }

    public function userdetail(User $user)
    {
        return view('admin/userdetail', ['user' => $user]);
    }

    public function edituser(User $user)
    {
        return view('admin.useredit', ['user' => $user]);
    }

    public function actedit(Request $request, User $user)
    {
        $request->validate(
            [
                'nama' => 'required|string|min:1|max:48',
                'username' => 'required|string|min:3|max:64|unique:users,username,' . $user->id,
                'level' => 'required|string|min:3|max:48'
            ]
        );
        $data = [
            'nama' => $request->nama,
            'username' => $request->username,
            'level' => $request->level
        ];
        $query = User::where('id', $user->id)->update($data);
        if (!$query) {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'User gagal diedit.'
            ];
            return redirect()->back()->with($notif);
        }
        $notif = [
            'tipe' => 'success',
            'pesan' => 'User berhasil diedit.'
        ];
        return redirect()->route('tableuser')->with($notif);
    }

    public function actpassmod(Request $request, User $user)
    {
        $request->validate([
            'pass' => 'required_with:conpass|same:conpass|string|min:8|max:128',
            'conpass' => 'string|min:8|max:128'
        ]);
        $query = User::where('id', $user->id)->update([
            'password' => bcrypt($request->pass)
        ]);
        if (!$query) {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'Password gagal diedit.'
            ];
        } else {
            $notif = [
                'tipe' => 'success',
                'pesan' => 'Password berhasil diedit.'
            ];
        }
        return redirect()->back()->with($notif);
    }

    public function deluser(User $user)
    {
        User::where('id', $user->id)->delete();
        $notif = [
            'tipe' => 'success',
            'pesan' => 'User berhasil dihapus'
        ];
        return redirect()->back()->with($notif);
    }


    public function detailcontact(Contact $contact)
    {
        return view('admin/detailcontact', ['c_info' => $contact]);
    }

    public function create_contact()
    {
        $country_code = CountryCode::all();
        return view('admin.inputcontact', ['con_code' => $country_code]);
    }

    public function save_contact(Request $request)
    {
        $request->validate(
            [
                'country_code' => 'required|integer',
                'nomor' => 'required|integer|unique:telepon',
                'nama_nomor' => 'required|string|min:1|max:56',
                'alamat' => 'required|string|min:1|max:128',
                'deskripsi' => 'required|string|min:1|max:1024',
                'photo' => 'mimes:jpg,jpeg,png|max:4096',
                'verified' => 'required|string'
            ]
        );
        $data = [
            'country_code' => $request->country_code,
            'nomor' => $request->nomor,
            'nama_nomor' => $request->nama_nomor,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'created_by_id' => Auth::user()->id,
            'status' => $request->verified
        ];
        $photo = $request->photo;
        if ($photo) {
            $photo_name = time() . '.' . $photo->getClientOriginalName();
            Storage::disk('public')->putFileAs('contact', $photo, $photo_name);
            $data['photo'] = $photo_name;
        }
        $query = Contact::create($data);
        if (!$query) {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'Kontak gagal dibuat'
            ];
            return redirect()->back()->with($notif);
        }
        $notif = [
            'tipe' => 'success',
            'pesan' => 'Kontak berhasil dibuat'
        ];
        return redirect()->route('tablecontact')->with($notif);
    }

    public function edit_view(Contact $contact)
    {
        $country_code = CountryCode::all();
        return view('admin.contactedit', ['con_code' => $country_code, 'c_info' => $contact]);
    }

    public function edit_contact(Request $request, Contact $contact)
    {
        $request->validate(
            [
                'country_code' => 'required|integer',
                'nomor' => 'required|integer|unique:telepon,nomor,' . $contact->id,
                'nama_nomor' => 'required|string|min:1|max:56',
                'alamat' => 'required|string|min:1|max:128',
                'deskripsi' => 'required|string|min:1|max:1024',
                'photo' => 'mimes:jpg,jpeg,png|max:4096',
                'verified' => 'required|string'
            ]
        );
        $data = [
            'country_code' => $request->country_code,
            'nomor' => $request->nomor,
            'nama_nomor' => $request->nama_nomor,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'status' => $request->verified
        ];
        $photo = $request->photo;
        if ($photo) {
            if (!is_null($contact->photo)) {
                Storage::disk('public')->delete('contact/' . $contact->photo);
            }
            $photo_name = time() . '.' . $photo->getClientOriginalName();
            Storage::disk('public')->putFileAs('contact', $photo, $photo_name);
            $data['photo'] = $photo_name;
        }
        $query = Contact::where('id', $contact->id)->update($data);
        if (!$query) {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'Kontak gagal diedit'
            ];
            return redirect()->back()->with($notif);
        }
        $notif = [
            'tipe' => 'success',
            'pesan' => 'Kontak berhasil diedit'
        ];
        return redirect()->route('tablecontact')->with($notif);
    }

    public function del_contact(Contact $contact)
    {
        if (!is_null($contact->photo)) {
            Storage::disk('public')->delete('contact/' . $contact->photo);
        }
        Contact::where('id', $contact->id)->delete();
        $notif = [
            'tipe' => 'success',
            'pesan' => 'Kontak berhasil dihapus'
        ];
        return redirect()->back()->with($notif);
    }

    public function ccdetail(Contact $contact)
    {
        return view('admin/ccdetail', ['c_info' => $contact]);
    }

    public function pesandetail(CSContact $cscontact)
    {
        return view('admin/pesandetail', ['cs' => $cscontact]);
    }

    public function delpesan(CSContact $cscontact)
    {
        CSContact::where('id', $cscontact->id)->delete();
        $notif = [
            'tipe' => 'success',
            'pesan' => 'Data Pesan Pengguna berhasil dihapus'
        ];
        return redirect()->back()->with($notif);
    }

    public function contact_detail(Contact $contact)
    {
        return view('admin/contactdetail', ['c_info' => $contact]);
    }
}
