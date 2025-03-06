<x-layout titulo="Cadastrar">

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
        .cadastroP{ 
            width: 70%;
            height: 630px;
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

       
    </style>

    <h2>CADASTRE-SE</h2>

    <div class="cadastroP">
        <form action="cadastrar/salvar" method="GET" class="form">
            @csrf <!-- Abrir as portas do servidor -->

                <br>
                <label name="nome">Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite seu nome completo" aria-label="default input example" required>
                <br><br>

                <label name="email">Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                <br><br>

                <label name="senha">Senha</label>
                <input type="password" name="senha" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                <div id="passwordHelpBlock" class="form-text">
                    Sua senha deve conter de 8-20 caracteres, conter letras e números, sem conter espaços ou caracteres especiais.
                </div>
                <br><br>

                <label name="endereco">Endereço</label>
                <input class="form-control" name="endereco" type="text" placeholder="Ex.: Rua Nascimento, 400" aria-label="default input example" required>
                <br><br>

                <label name="dataNascimento">Data de Nascimento</label>
                <input type="date" name="dataNascimento" placeholder="00/00/0000" required>
                <br><br>

                

                <!--<button type="submit" id="botao0" class="btn btn-dark btn-lg" data-bs-toggle="modal">CADASTRAR</button>-->

                <button type="submite" id="voltar" class="btn btn-dark btn-lg" class="btn btn-primary" class="nav-link"> 
                    <a href="/">CADASTRAR</a>
                </button>

                
        </form>

    </div>
    <br><br>
    <a href="/"><button type="button" id="voltar" class="btn btn-primary btn-sm">VOLTAR</button></a>
</x-layout>