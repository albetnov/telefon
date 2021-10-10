<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\CountryCode;
use App\Models\RequestVerify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getUserContact($optional = null, $id = null)
    {
        if ($optional === 'validation') {
            return Contact::with('con_code', 'user_by')->where('id', $id)->first();
        } else if ($optional === 'reqverif') {
            return RequestVerify::where('created_by_id', Auth::user()->id);
        } else if ($optional === 'statscheck') {
            return Contact::with('con_code', 'user_by')->where('created_by_id', Auth::user()->id)->where('status', 'default');
        }
        return Contact::with('con_code', 'user_by')->where('created_by_id', Auth::user()->id);
    }

    public function validateUser($id)
    {
        $contact = $this->getUserContact('validation', $id);
        if ($contact->created_by_id != Auth::user()->id) {
            abort(404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.tablecontact', ['contact' => $this->getUserContact()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.inputcontact', ['country_code' => CountryCode::all()->lazy()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'country_code' => 'required|integer',
                'nomor' => 'required|integer|unique:telepon',
                'nama_nomor' => 'required|string|min:1|max:56',
                'alamat' => 'required|string|min:1|max:128',
                'deskripsi' => 'required|string|min:1|max:1024',
                'photo' => 'mimes:jpg,jpeg,png|max:4096'
            ]
        );
        $data = [
            'country_code' => $request->country_code,
            'nomor' => $request->nomor,
            'nama_nomor' => $request->nama_nomor,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'created_by_id' => Auth::user()->id,
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
        return redirect()->route('usrtablecontact')->with($notif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $this->validateUser($contact->id);
        return view('user.detailcontact', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $this->validateUser($contact->id);
        return view('user.contactedit', ['ct' => $contact, 'con_code' => CountryCode::all()->lazy()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $this->validateUser($contact->id);
        $request->validate(
            [
                'country_code' => 'required|integer',
                'nomor' => 'required|integer|unique:telepon,nomor,' . $contact->id,
                'nama_nomor' => 'required|string|min:1|max:56',
                'alamat' => 'required|string|min:1|max:128',
                'deskripsi' => 'required|string|min:1|max:1024',
                'photo' => 'mimes:jpg,jpeg,png|max:4096'
            ]
        );
        $data = [
            'country_code' => $request->country_code,
            'nomor' => $request->nomor,
            'nama_nomor' => $request->nama_nomor,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi
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
        return redirect()->route('usrtablecontact')->with($notif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $this->validateUser($contact->id);
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

    public function showverify()
    {
        if ($this->getUserContact('reqverif')->where('status', 'pending')->count() > 0) {
            return view('user.dataverifikasi', ['data' => $this->getUserContact('reqverif')->get(), 'pending' => true]);
        } else if ($this->getUserContact('reqverif')->count() > 0) {
            return view('user.dataverifikasi', ['data' => $this->getUserContact('reqverif')->get(), 'contact' => $this->getUserContact('statscheck')->lazy()]);
        }
        return view('user.dataverifikasi', ['contact' => $this->getUserContact('statscheck')->lazy()]);
    }

    public function store_verify(Request $request)
    {
        $id = $request->req_verify;
        $this->validateUser($id);
        $request->validate([
            'req_verify' => 'required|integer'
        ]);
        $data = [
            'contact_id' => $id,
            'created_by_id' => Auth::user()->id,
            'status' => 'pending'
        ];
        $query = RequestVerify::create($data);
        if ($query) {
            $notif = [
                'tipe' => 'success',
                'pesan' => 'Permintaan berhasil diajukan.'
            ];
        } else {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'Permintaan gagal dibuat.'
            ];
        }
        return redirect()->back()->with($notif);
    }

    /**
     * @param \App\Models\RequestVerify $reqver
     * @return \Illuminate\Http\Response
     */
    public function del_verify(RequestVerify $reqver)
    {
        $this->validateUser($reqver->contact_id);
        $query = RequestVerify::where('id', $reqver->id)->delete();
        if ($query) {
            $notif = [
                'tipe' => 'success',
                'pesan' => 'Data berhasil dihapus.'
            ];
        } else {
            $notif = [
                'tipe' => 'error',
                'pesan' => 'data gagal di hapus.'
            ];
        }
        return redirect()->back()->with($notif);
    }
}
