<link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
<h1>List of contacts</h1>

<form action="{{ route('contacts.filter') }}" method="get">
    <input type="text" name="nome" placeholder="Search">
    <button type="submit">Pesquisar</button>
    <h1>
        <button><a href="{{ route('contacts.create') }}">Criar novo contato</a></button>
    </h1>
</form>



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
                    <td><a href="{{ route('contacts.show', $contact->id) }}"><button>Detalhes</button></a></td>
                </tr>
            @endforeach
    </tbody>
</table>