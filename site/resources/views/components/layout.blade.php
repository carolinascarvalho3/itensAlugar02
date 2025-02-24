<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>{{$titulo}}</title>
    <style>
        nav{
            background-color: #819C84;
        }

        #reserva{
            background-color: #819C84;
            border-color: #819C84;
            color: white;
        }

        footer{
            background-color: #819C84;           
        }

        main{
            height: auto;
            max-width: 1960px;
            min-width: 320px;
            justify-content: center;
            text-align: center;
            margin-bottom: 300px;
        }

        .navbar-brand{
            color: white;
        }

        .form-select{
            width: 100px;
            height:50px;
            margin-left: 800px;
            background-color: #EAEAEA;
            border-color: #EAEAEA;
       }

       a{
            color: white;
            text-decoration: none;
       }

    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        h1{
            font-weight: 800;
            letter-spacing: 3px;
            color: #939393;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-body-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="imagens/logo2.png"><img src="{{ asset('imagens/logo2.png') }}" alt="" height="90" width="90"><strong>L O C A L H E R O E S</strong></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">HOME</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#sobrenos">SOBRE</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#itens">ITENS E SERVIÇOS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/cadastrar">CADASTRE-SE</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/entrar">ENTRAR</a>
                            </li>
                        </ul>
                        </div>
                    </div>

                    <!--<div class="conta">
                        <select>
                            <option value="cadastrar"><a href="/cadastrar">CADASTRAR</a></option>
                            <option value="entrar">ENTRAR</option>
                        </select>
                    </div> !-->
                </nav>

                <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('imagens/Design sem nome (1).png') }}" class="d-block w-100" alt="imagem de pessoas">
                    <div class="carousel-caption d-none d-md-block">
                        <button id="reserva" type="button" class="btn btn-dark btn-lg"><a href="#itens">Faça uma reserva já!</a></button>
                    </div>
                    </div>
            </div>
    <div>

        <main>
            {{$slot}}       
        </main>

    </div>

    <section class="">
            <!-- Footer -->
            <footer class="text-center text-white" style="background-color: #819C84;">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">Cadastre-se!</span>
                    <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
                        Cadastro
                    </button>
                    </p>
                </section>
                <!-- Section: CTA -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </section>
</body>
</html>