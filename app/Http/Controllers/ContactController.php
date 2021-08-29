<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->Contact = new Contact();
    }

    public function index()
    {
        return view('contact', ['contact' => $this->Contact->get_contact()]);
    }
}
