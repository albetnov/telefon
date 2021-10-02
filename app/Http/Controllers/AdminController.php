<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\CSContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel()
    {
        return view('admin/tablecontact', ['tablecontact' => Contact::with('con_code', 'user_by')->lazy()]);
    }

    public function userdata()
    {
        return view('admin/tableuser', ['tableuser' => Contact::with('con_code', 'user_by')->lazy()]);
    }

    public function userdetail(Contact $contact)
    {
        return view('admin/userdetail', ['c_info' => $contact]);
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
