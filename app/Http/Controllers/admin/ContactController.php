<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
}
