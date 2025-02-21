<x-layout titulo="Reservar">
    <form action="reserva/salvar" method="GET">
        @csrf <!--Abrir as portas do servidor-->
        <label name="nomeReserva">Nome</label>
        <input type="text" name="nomeReserva" required>
        <br><br>

        <label name="enderecoReserva">Endereço</label>
        <input type="text" name="enderecoReserva" required>
        <br><br>

        <label name="dataInicio">Data de ínicio</label>
        <input type="date" name="dataInicio" required>
        <br><br>

        <label name="dataFinal">Data de fim</label>
        <input type="date" name="dataFinal" required>
        <br><br>

        <label name="horario">Horário</label>
        <input type="time" name="horario" required>
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>
    <a href="/"><button>Voltar</button></a>

</x-layout>