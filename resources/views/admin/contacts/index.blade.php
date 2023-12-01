<link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
<h1>List of contacts</h1>

<h1><button><a href="{{ route('contacts.create') }}">Criar novo contato</a></button></h1>

<table>
    <thead>
        <th>Nome</th>
        <th>E-mail</th>
    </thead>
    <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->nome }}</td>
                    <td>{{ $contact->email }}</td>
                </tr>
            @endforeach
    </tbody>
</table>