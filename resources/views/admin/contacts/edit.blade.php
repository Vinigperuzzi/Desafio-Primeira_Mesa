<link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
<h1>Editar o contato {{ $contact->nome }}</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf()
    @method('PUT')
    <input type="text" placeholder="Nome" name="nome" value="{{ $contact->nome }}">
    <input type="text" placeholder="E-mail" name="email" value="{{ $contact->email }}">
    <input type="text" placeholder="CEP" name="CEP" value="{{ $contact->CEP }}">
    <input type="text" placeholder="Rua" name="Rua" value="{{ $contact->Rua }}">
    <input type="text" placeholder="Numero" name="Numero" value="{{ $contact->Numero }}">
    <input type="text" placeholder="Complemento" name="Complemento" value="{{ $contact->Complemento }}">
    <input type="text" placeholder="Bairro" name="Bairro" value="{{ $contact->Bairro }}">
    <input type="text" placeholder="Cidade" name="Cidade" value="{{ $contact->Cidade }}">
    <input type="text" placeholder="Estado" name="Estado" value="{{ $contact->Estado }}">
    <input type="textarea" placeholder="Nota" name="Nota" cols='30' rows='5' value="{{ $contact->Nota }}">
    <button type="submit">Salvar alterações</button>
</form>