<x-layout titulo="Cadastrar">
    <form action="cadastrar/salvar" method="GET">
        @csrf <!--Abrir as portas do servidor-->
        <label name="nome">Nome</label>
        <input type="text" name="nome" required>
        <br><br>
        
        <label name="email">Email</label>
        <input type="text" name="email" required>
        <br><br>

        <label name="senha">Senha</label>
        <input type="password" name="senha" required>
        <br><br>

        <label name="endereco">Endereço</label>
        <input type="text" name="endereco" required>
        <br><br>

        <label name="dataNascimento">Data de Nascimento</label>
        <input type="date" name="dataNascimento" required>
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>
    <a href="/"><button>Voltar</button></a>

</x-layout>