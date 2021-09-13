<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', ['contact' => Contact::with('con_code', 'user_by')->lazy()]);
    }
    public function contact_detail(Contact $contact)
    {
        return view('contactdetail', ['c_info' => $contact]);
    }
}
