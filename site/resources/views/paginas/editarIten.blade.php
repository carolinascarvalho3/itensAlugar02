<x-layout titulo="Edite seu Iten">
      <form action="../atualizarIten/{{$dado->id}}" method="get">
        <label>Id </label>
        <input type="number" id="number" value="{{$dado->id}}" disabled required/>
        <br><br>

        <label>Nome</label>
        <input type="text" id="nomeProduto" name="nomeProduto" value="{{$dado->nomeProduto}}" required/>
        <br><br>

        <label>Tipo de anuncio</label>
        <input type="text" id="anuncio" name="anuncio" value="{{$dado->anuncio}}" required/>
        <br><br>
        
        <label>Preço</label>
        <input type="number" id="preco" name="preco" value="{{$dado->preco}}" required/>
        <br><br>

        
        
        <button type="submit">Atualizar</button>
    </form>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Excluir
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir esse iten?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <a type="button" class="btn btn-primary" href="/excluirIten/{{$dado->id}}">Sim</a>
      </div>
    </div>
  </div>
</div>

<a href="/"><button>Voltar</button>
</x-layout>