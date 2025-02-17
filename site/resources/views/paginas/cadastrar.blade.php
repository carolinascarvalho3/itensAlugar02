<x-layout titulo="Cadastrar">
    <form action="cadastrar/salvar" method="GET">
        @csrf <!--Abrir as portas do servidor-->
        <label name="nome">Nome</label>
        <input type="text" name="nome">
        <br><br>
        
        <label name="email">Email</label>
        <input type="text" name="email">
        <br><br>

        <label name="senha">Senha</label>
        <input type="password" name="senha">
        <br><br>

        <label name="endereco">Endereço</label>
        <input type="text" name="endereco">
        <br><br>

        <label name="dataNascimento">Data de Nascimento</label>
        <input type="date" name="dataNascimento">
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>
    <a href="/"><button>Voltar</button></a>

</x-layout>