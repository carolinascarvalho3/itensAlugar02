<x-layout titulo="Página Inicial">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        h2{
            font-weight: 800;
            letter-spacing: 3px;
            color: #939393;
            margin-top: 40px;
        }

        .i{
            font-weight: 800;
            letter-spacing: 3px;
            color: #939393;
            margin-top: 150px;
        }
    </style>
    <style>
        #sobrenos{
            width: 70%;
            height: 210px;
            text-align: center;
            background-color: #EAEAEA;
            border-radius: 20px;
            margin-left: 230px;
            justify-content: center;
        }

        article{
            width: 60%;
            height: 150px;
            text-align: center;
            margin-left: 200px;
            padding: 16px;
        }

        .itens{
            width: 100%;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
        }

        .card{
            background-color: #9BB9A1;
            border-color: #9BB9A1;
        }

        #botao1{
            background-color: #5C6D5E;
            border-color: #5C6D5E;
        }

        #botao2{
            background-color: #5C6D5E;
            border-color: #5C6D5E;
        }

        #botao3{
            background-color: #5C6D5E;
            border-color: #5c6d5e;
        }

        #botao4{
            background-color: #5C6D5E;
            border-color: #5c6d5e;
        }

        #botao5{
            background-color: #5C6D5E;
            border-color: #5c6d5e;
        }

        #botao6{
            background-color: #5C6D5E;
            border-color: #5c6d5e;
        }

        #botao7{
            background-color: #5C6D5E;
            border-color: #5c6d5e;
        }

        #botao8{
            background-color: #5C6D5E;
            border-color: #5c6d5e;
        }

        #botao9{
            background-color: #5C6D5E;
            border-color: #5c6d5e;
        }

    </style>





    <h2>SOBRE NÓS</h2>
    <div class="container" id="sobrenos">
        <article>
            <p>
            A LOCALHEROES é uma iniciativa inovadora que visa promover a troca de itens e serviços entre os moradores de uma mesma região, reduzindo o consumismo e incentivando a economia colaborativa. Com foco na sustentabilidade, a plataforma permite que usuários compartilhem objetos que não estão mais sendo utilizados, além de oferecer serviços de vendas. Ao fortalecer as conexões comunitárias, LOCALHEROES não apenas ajuda a reduzir o desperdício, mas também cria uma rede de apoio entre vizinhos, tornando as relações mais solidárias e a convivência mais sustentável.
            </p>
        </article>
    </div>


    <h2 class="i">ITENS E SERVIÇOS</h2>
    <div class="itens" id="itens">

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('imagens/furadeira.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>FURADEIRA</strong></h5>
                <p class="card-text">20R$ p/ dia</p>
                <a href="/reserva" id="botao1" class="btn btn-dark">ALUGAR</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('imagens/chaves.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>CHAVES PHYLIPS</strong></h5>
                <p class="card-text">10R$ p/ dia</p>
                <a href="/reserva" id="botao2" class="btn btn-dark">ALUGAR</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('imagens/martelo.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>MARTELO</strong></h5>
                <p class="card-text">50,00R$</p>
                <a href="/comprar" id="botao4" class="btn btn-dark">COMPRAR</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('imagens/moto.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>MOTOSSERRA</strong></h5>
                <p class="card-text">120,00R$</p>
                <a href="/comprar" id="botao5" class="btn btn-dark">COMPRAR</a>
            </div>
        </div>
        <br><br><br>


            </div>

    </div>

        
</x-layout>