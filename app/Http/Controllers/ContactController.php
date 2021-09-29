<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\CSContact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', ['contact' => Contact::with('con_code', 'user_by')->lazy()]);
    }

    public function panel()
    {
        return view('tablecontact', ['tablecontact' => Contact::with('con_code', 'user_by')->lazy()]);
    }

    public function contact_detail(Contact $contact)
    {
        return view('contactdetail', ['c_info' => $contact]);
    }

    public function send_contact(Request $req)
    {
        $verify = Validator::make($req->all(), [
            'nama_cs' => 'required|min:5|max:56',
            'email_cs' => 'email|required|min:3|max:128',
            'subject_cs' => 'required|min:3|max:56',
            'message_cs' => 'required|min:5|max:1536'
        ]);
        if ($verify->fails()) {
            return response()->json(['status' => 0, 'error' => $verify->errors()->toArray()]);
        } else {
            $value = [
                'nama_cs' => $req->nama_cs,
                'email_cs' => $req->email_cs,
                'subject_cs' => $req->subject_cs,
                'message_cs' => $req->message_cs
            ];
            CSContact::create($value);
            return response()->json(['status' => 1, 'msg' => 'Pesan berhasil dikirim.']);
        }
    }

    public function search_contact(Request $req)
    {
        $query = $req->input('query');
        $search = Contact::join('users', 'users.id', '=', 'telepon.created_by_id')->join('country_code', 'country_code.id', '=', 'telepon.country_code')->where('nomor', 'LIKE', "%{$query}%")->orWhere('nama_nomor', 'LIKE', "%{$query}%")->orWhere('alamat', 'LIKE', "%{$query}%")->orWhere('deskripsi', 'LIKE', "%{$query}%")->orWhere('users.nama', 'LIKE', "%{$query}%")->orWhere('country_code.code', 'LIKE', "%{$query}%")->get();
        if (empty($query) || count($search) <= 0) {
            $data = [
                'search' => null
            ];
        } else {
            $data = [
                'search' => $search
            ];
        }
        return view('search', $data);
    }
}
