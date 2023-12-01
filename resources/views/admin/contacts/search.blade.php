<link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
<h1>Searching for: "{{ $nome}}" </h1>


<table>
    <thead>
        <th>Nome</th>
        <th>Telefone</th>
        <th>       </th>
    </thead>
    <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->nome }}</td>
                    <td>{{ $contact->telefone }}</td>
                    <td><a href="{{ route('contacts.show', $contact->id) }}"><button>Detalhes</button></a></td>
                </tr>
            @endforeach
    </tbody>
</table>

<a href="{{ route('contacts.index') }}"><button>Voltar à lista</button></a>