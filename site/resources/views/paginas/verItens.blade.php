<x-layout titulo="Consultar seus itens">
    @csrf
    <?php
        
    ?>

    <table class="table">
    <thead>
        <tr>
            <th>Nome do iten</th>
            <th>Anuncio</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ids as $id)
        <tr>
            <td>{{$id->nomeProduto}}</td>
            <td>{{$id->anuncio}}</td>
            <td>{{$id->preco}}</td>
        <th>
        
                
    @endforeach
    </tbody>
    </table>
    <a href="/"><button>Voltar</button></a>
</x-layout>