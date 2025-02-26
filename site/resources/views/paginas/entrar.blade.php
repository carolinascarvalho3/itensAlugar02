<x-layout titulo="Entrar">

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
        .entrarP{ 
            width: 70%;
            height: 330px;
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

    <h2>LOGIN</h2>
       
    <div class="entrarP">
        <form action="entrar" method="GET" class="form">
            @csrf <!-- Abrir as portas do servidor -->
            

                <br> 
                <label name="emailLog">Email</label>
                <input type="email" class="form-control" name="emailLog" id="exampleFormControlInput1" placeholder="name@example.com" required>
                <br><br>

                <label name="senhaLog">Senha</label>
                <input type="password" name="senhaLog" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                <div id="passwordHelpBlock" class="form-text">
                </div>
                <br><br>

                <button type="submit" id="botao0" class="btn btn-dark btn-lg">ENTRAR
                @foreach($ids as $id)
                
                    <?php
                        if('emailLog' == $id->email){
                            return redirect('/perfil');
                        }
                    ?>
                
                @endforeach
                </button>
        </form>

    </div>
    <br><br>
    <a href="/"><button type="button" id="voltar" class="btn btn-primary btn-sm">VOLTAR</button></a>
</x-layout>