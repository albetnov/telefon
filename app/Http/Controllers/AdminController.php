<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel()
    {
        return view('tablecontact', ['tablecontact' => Contact::with('con_code', 'user_by')->lazy()]);
    }

    public function detailcontact(Contact $contact)
    {
        return view('detailcontact', ['c_info' => $contact]);
    }

    public function contact_detail(Contact $contact)
    {
        return view('contactdetail', ['c_info' => $contact]);
    }
}
