<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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
            return redirect()->back()->with($notif);
        }
        $notif = [
            'tipe' => 'success',
            'pesan' => 'Password berhasil diedit.'
        ];
        return redirect()->back()->with($notif);
    }

    public function detailcontact(Contact $contact)
    {
        return view('admin/detailcontact', ['c_info' => $contact]);
    }

    public function contact_detail(Contact $contact)
    {
        return view('admin/contactdetail', ['c_info' => $contact]);
    }
}
