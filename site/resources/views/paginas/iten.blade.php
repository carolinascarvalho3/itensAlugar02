<x-layout titulo="Registro de itens">
    <form action="iten/salvar" method="GET">
        @csrf <!--Abrir as portas do servidor-->
        <label name="nomeProduto">Nome do iten</label>
        <input type="text" name="nomeProduto" required>
        <br><br>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="anuncio" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Venda
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="anuncio" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Aluguel
            </label>
        </div>
        <br><br>

        <label name="preco">Preço do iten</label>
        <input type="number" name="preco" required>
        <br><br>

        <div class="input-group mb-3">
            <input type="file" name="imagen" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02"></label>
        </div>
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>
    <a href="/"><button>Voltar</button></a>

</x-layout>