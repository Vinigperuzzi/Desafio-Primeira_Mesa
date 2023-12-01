<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Contact $contact)
    {
        $contacts = $contact->all();
        return view('admin/contacts/index', compact('contacts'));    
    }

    public function create(){

        return view('admin/contacts/create');
    }

    public function store(Request $request, Contact $contact)
    {
        $data = $request->all();
        $contact->create($data);

        return redirect()->route('contacts.index');
    }
}
