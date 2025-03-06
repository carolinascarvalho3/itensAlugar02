<x-layout titulo="Consultar">
    @csrf
    <style>

    </style>
    <?php
        
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
                <th scope="col">Endereço</th>
                <th scope="col">Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ids as $id)
            <tr>
                <td>{{$id->nome}}</td>
                <td>{{$id->email}}</td>
                <td>{{$id->senha}}</td>
                <td>{{$id->endereco}}</td>
                <td>{{$id->dataNascimento}}</td>
                <th><a href="/editar/{{$id->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                            </svg>
                                        </a>

            </tr>
        @endforeach
        </tbody>
    </table>
        
    <a href="/"><button>Voltar</button></a>
</x-layout>