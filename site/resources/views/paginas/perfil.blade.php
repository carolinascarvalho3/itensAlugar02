<x-layout titulo="Perfil do Usuário">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        h2{
            font-weight: 800;
            letter-spacing: 2px;
            color: #5A5858;
            margin-top: 40px;
            margin-right: 1100px;
        }
    </style>
    <style>
         #o1{
            border-color: #819C84;
            color: #819c84;
        }

        #o2{
            border-color: #819C84;
            color: #819c84;
        }

        #o3{
            border-color: #819C84;
            color: #819c84;
        }

        #botoes{
            margin-top: 30px;
        }

        .divisoria{
            max-width: 1920px;
            min-width: 320px;
            height: 1px;
            background-color: black;
            text-align: center;
            margin-top: 30px;
        }
    </style>
    <div class="container" id="botoes">
        <a href="/iten"><button type="button" id="o1" class="btn btn-outline-dark">Cadastrar Produtos</button></a>
        <a href="/consultar"><button type="button" id="o2" class="btn btn-outline-dark">Consultar Produtos</button></a>
        <a href="#"><button type="button" id="o3" class="btn btn-outline-dark">Meus Anúncios</button></a>
    </div>

    <div class="divisoria"></div>

    <h2>MEUS ANÚNCIOS</h2>

</x-layout>