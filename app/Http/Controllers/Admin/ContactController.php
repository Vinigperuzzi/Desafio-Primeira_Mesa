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

    public function create()
    {

        return view('admin/contacts/create');
    }

    public function store(Request $request, Contact $contact)
    {
        $data = $request->all();
        $contact->create($data);

        return redirect()->route('contacts.index');
    }

    public function show(string|int $id)
    {
        if (!$contact = Contact::find($id)){
            return back();
        }
        return view('admin/contacts/show', compact('contact'));
    }

    public function edit(Contact $contact, string|int $id)
    {
        if (!$contact = $contact->find($id)){
            return back();
        }
        return view('admin/contacts/edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact, string $id)
    {
        if (!$contact = $contact->find($id)){
            return back();
        }
        $contact->update($request->only(
            'nome',
            'email',
            'CEP',
            'Rua',
            'Numero',
            'Complemento',
            'Bairro',
            'Cidade',
            'Estado',
            'Nota'
        ));

        return redirect()->route('contacts.index');
    }

    public function destroy(string|int $id)
    {
        if (!$contact = Contact::find($id)){
            return back();
        }
        $contact->delete();

        return redirect()->route('contacts.index');
    }

    public function filter(Request $request, Contact $contact)
    {
        $data = $request->only('nome');
        $contacts = $contact->where('nome', 'like', $data['nome'] . '%')->get();

        return view('admin/contacts/search', compact('contacts')); 
    }

}
