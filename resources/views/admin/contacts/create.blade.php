<link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
<h1>Inserir novo contato</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf()
    <input type="text" placeholder="Nome" name="nome">
    <input type="text" placeholder="E-mail" name="email">
    <input type="text" placeholder="CEP" name="CEP">
    <input type="text" placeholder="Rua" name="Rua">
    <input type="text" placeholder="Numero" name="Numero">
    <input type="text" placeholder="Complemento" name="Complemento">
    <input type="text" placeholder="Bairro" name="Bairro">
    <input type="text" placeholder="Cidade" name="Cidade">
    <input type="text" placeholder="Estado" name="Estado">
    <input type="textarea" placeholder="Nota" name="Nota" cols='30' rows='5'>
    <button type="submit">Criar</button>
</form>

<a href="{{ route('contacts.index') }}"><button>Voltar à lista</button></a>