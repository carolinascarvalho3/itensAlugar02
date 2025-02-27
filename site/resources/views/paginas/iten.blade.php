<x-layout titulo="Cadastro de Produtos"> 
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        h2{
            font-weight: 800;
            letter-spacing: 3px;
            color: #939393;
            margin-top: 40px;
        }
    </style>
    <style>
        .cadastroProduto{ 
            width: 70%;
            height: 550px;
            text-align: center;
            background-color: #f1f1f1;
            border-radius: 20px;
            margin-left: 235px;
            justify-content: center;
            margin-top: 100px;
        }

        #voltar{
            background-color: #5C6D5E;
            border-color: #5C6D5E;
        }
        #botao0{
            background-color: #5C6D5E;
            border-color: #5C6D5E;
        }

       .form-control{
            width: 70%;
            text-align: center;
            margin-left: 170px;
            background-color: #d9d9d9;
       }

       #inputGroupFile02{
            margin-right: 160px;
       }
       
       #eeeee{
            width: 70%;
       }
    </style>

    <h2>CADASTRAR PRODUTOS</h2>

    <div class="cadastroProduto">
        <form action="iten/salvar" method="GET" class="form">
            @csrf <!-- Abrir as portas do servidor -->

                <br>
                <label name="nome">Nome do produto:</label>
                <input class="form-control" name="nomeProduto" type="text" placeholder="Digite o nome do produto" aria-label="default input example" required>
                <br><br>

                <label name="selecao">Selecione como vai anúnciar este produto:</label><br>
                <input class="form-check-input" name="anuncio" type="checkbox" value="venda" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Venda
                </label>
                <input class="form-check-input" name="anuncio" type="checkbox" value="aluguel" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Aluguel
                </label>
                <br><br><br>

                <label name="preco">Preço estimado:</label>
                    <input type="number" name="preco" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" required>
                <br><br>
        

                <button type="submit" id="botao0" class="btn btn-dark btn-lg">CADASTRAR</button>
        </form>

    </div>
    <br><br>
    <a href="/"><button type="button" id="voltar" class="btn btn-primary btn-sm">VOLTAR</button></a>

</x-layout>