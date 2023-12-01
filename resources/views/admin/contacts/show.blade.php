<link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
<h1>Detalhes de {{ $contact->nome }}</h1>

<ul>
    <li>Nome: {{ $contact->nome }}</li>
    <li>Telefone: {{ $contact->telefone }}</li>
    <li>E-mail: {{ $contact->email }}</li>
    <li>CEP: {{ $contact->CEP }}</li>
    <li>Rua: {{ $contact->Rua }}</li>
    <li>Numero: {{ $contact->Numero }}</li>
    <li>Complemento: {{ $contact->Complemento }}</li>
    <li>Bairro: {{ $contact->Bairro }}</li>
    <li>Cidade: {{ $contact->Cidade }}</li>
    <li>Estado: {{ $contact->Estado }}</li>
    <li>Nota: {{ $contact->Nota }}</li>
</ul>

<a href="{{ route('contacts.index') }}"><button>Voltar à lista</button></a>
<a href="{{ route('contacts.edit', $contact->id) }}"><button>Editar esse contato</button></a>
<form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Remover esse contato</button>
</form>