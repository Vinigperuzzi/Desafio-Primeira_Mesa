<link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
<h1>Searching for $data</h1>


<table>
    <thead>
        <th>Nome</th>
        <th>E-mail</th>
        <th>       </th>
    </thead>
    <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->nome }}</td>
                    <td>{{ $contact->email }}</td>
                    <td><a href="{{ route('contacts.show', $contact->id) }}">Detalhes</a></td>
                </tr>
            @endforeach
    </tbody>
</table>

<a href="{{ route('contacts.index') }}"><button>Voltar à lista</button></a>