<x-layout titulo="Reservar">
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
        .reservaP{ 
            width: 70%;
            height: 420px;
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
            margin-left: 163px;
            background-color: #d9d9d9;
       }

       
    </style>

    <h2>RESERVA</h2>

    <div class="reservaP">
        <form action="reserva/salvar" method="GET" class="form">
            @csrf <!-- Abrir as portas do servidor -->

                <br>
                <label name="nome">Nome</label>
                <input class="form-control" name="nomeReserva" type="text" placeholder="Digite seu nome completo" aria-label="default input example" required>
                <br><br>

                <label name="endereco">Endereço</label>
                <input class="form-control" name="enderecoReserva" type="text" placeholder="Ex.: Rua Nascimento, 400" aria-label="default input example" required>
                <br><br>

                <label name="dataInicio">Data de Inicio</label>
                <input type="date" name="dataInicio" placeholder="00/00/0000" required>
                <label name="dataFinal">Data de Fim</label>
                <input type="date" name="dataFinal" placeholder="00/00/0000" required>
                <br><br>

                <label name="horario">Horário de retirada</label>
                <input type="time" name="horario" placeholder="00:00" required>
                <br><br>



        

                <button type="submit" id="botao0" class="btn btn-dark btn-lg">RESERVAR</button>
        </form>
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Reserva realizada com sucesso!</p>
                </div>
                </div>
            </div>
            </div>

    </div>
    <br><br>
    <a href="/"><button type="button" id="voltar" class="btn btn-primary btn-sm">VOLTAR</button></a>


</x-layout>