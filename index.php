<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEMASE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="js/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        button {
            position: relative;
            display: inline-block;
            cursor: pointer;
            outline: none;
            border: 0;
            vertical-align: middle;
            text-decoration: none;
            background: transparent;
            padding: 0;
            font-size: inherit;
            font-family: inherit;
        }

        button.learn-more {
            width: 12rem;
            height: auto;
        }

        button.learn-more .circle {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: relative;
            display: block;
            margin: 0;
            width: 3rem;
            height: 3rem;
            background: #282936;
            border-radius: 1.625rem;
        }

        button.learn-more .circle .icon {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background: #fff;
        }

        button.learn-more .circle .icon.arrow {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            left: 0.625rem;
            width: 1.125rem;
            height: 0.125rem;
            background: none;
        }

        button.learn-more .circle .icon.arrow::before {
            position: absolute;
            content: "";
            top: -0.29rem;
            right: 0.0625rem;
            width: 0.625rem;
            height: 0.625rem;
            border-top: 0.125rem solid #fff;
            border-right: 0.125rem solid #fff;
            transform: rotate(45deg);
        }

        button.learn-more .button-text {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.75rem 0;
            margin: 0 0 0 1.85rem;
            color: #282936;
            font-weight: 700;
            line-height: 1.6;
            text-align: center;
            text-transform: uppercase;
        }

        button:hover .circle {
            width: 100%;
        }

        button:hover .circle .icon.arrow {
            background: #fff;
            transform: translate(1rem, 0);
        }

        button:hover .button-text {
            color: #fff;
        }

        /*+++++++++++++++++++++++++++++++++++++++++++++*/
        .btnn {
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: grey;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        .btnn:hover {
            background-color: #760d26;
            box-shadow: 0px 15px 20px #f32e3d;
            color: #fff;
            transform: translateY(-7px);
        }

        .btnn:active {
            transform: translateY(-1px);
        }

        .propaganda {
            background-color: #485969;
            background-image: linear-gradient(43deg, #485969 38%, #515151 77%, #7a7a7a 99%);

            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(17, 25, 40, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.125);
        }

        .propaganda p {
            color: #fff;
        }

        .texto-p {
            margin: 0 10px;
            text-align: center;
        }


        .col-md-6 img {
            width: 80%;
        }

        .button {
            margin: 10px;
            padding: 15px;
            background-color: white;
            color: black;
            border-radius: 16px;
            border: 1px solid black;
            text-decoration: none;
        }

        .button:hover {
            background-color: rgba(166, 43, 49, 1);
            transition: 0.6s;
            color: white;
        }

        .mto {
            margin-top: 70px;
        }

        .servicos {
            color: #000;
        }

        .slider-card {
            border-color: #008bf8;
            box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
        }

        .slider-card:hover .card-button {
            transform: translate(-50%, 50%);
            opacity: 1;
        }

        .card-button {
            transform: translate(-50%, 125%);
            width: 60%;
            border-radius: 1rem;
            border: none;
            background-color: grey;
            color: #fff;
            font-size: 1rem;
            padding: .5rem 1rem;
            position: absolute;
            left: 50%;
            bottom: 0;
            opacity: 0;
            transition: 0.3s ease-out;
        }
        .card-button:hover{
            transition: 0.6s;
            box-shadow: 0 4px 18px 0 white;
        }
    </style>
</head>

<body>

    <header>

        <?php
        include('header.php');
        ?>

    </header>
    <hr>
    <!---+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

        <section>
            <div class="container">
                
            </div>
        </section>

    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <section class="servicos mt-6">

        <section id="slider" class="pt-5 mt-6">
            <div class="container">
                <h1 class="text-center" style="background-color: #4859692f;">Serviços</h1>
                <div class="slider">
                    <div class="owl-carousel">

                        <div class="slider-card">

                            <h5 class="mb-0 text-center pt-5"><b>Mecanica Em Geral</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div>


                        <div class="slider-card">
                            <h5 class="mb-0 text-center pt-5"><b>Correia Dentada</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div>

                        <div class="slider-card">

                            <h5 class="mb-0 text-center pt-5"><b>Embragem</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div>

                        <div class="slider-card">

                            <h5 class="mb-0 text-center pt-5"><b>Arrefecimento</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div> 

                        <div class="slider-card">

                            <h5 class="mb-0 text-center pt-5"><b>Freio</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div>

                        <div class="slider-card">

                            <h5 class="mb-0 text-center pt-5"><b>Suspensão</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div>

                        <div class="slider-card">

                            <h5 class="mb-0 text-center pt-5"><b>Oleo e Filtros</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div>

                        <div class="slider-card">

                            <h5 class="mb-0 text-center pt-5"><b>Bicos</b></h5>
                            <p class="text-center p-4 pt-5">...
                            </p>
                            <button class="card-button">Mais Informações</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++-->

    <section>
        <div class="container">
            <h2 class="text-center" style="background-color: #4859692f;">Nossa Unidade</h2>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14641.884386062635!2d-46.7488691!3d-23.4434657!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe32dedab56743f2!2sJemase%20Servi%C3%A7os%20Automotivos!5e0!3m2!1spt-BR!2sbr!4v1670436825981!5m2!1spt-BR!2sbr" width="60%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <h5>
                Venha Fazer uma visita a nossa unidade Localizada no Jaragua/Sp - Vila Aurora
            </h5>
        </div>
    </section>

    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <section class="propaganda mto">
        <div class="container">
            <h2 class="titulo">Sobre a JEMASE</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 mb-3">
                    <img src="imagem/jemase-logot.png" alt="">
                </div>
                <div class="col-md-6 text-center mt-2 pt-2">
                    <p>Mecanica especializada em Mecanica em Uma forma Geral
                        Estamos no jaragua des de 2016 e no ponto atual des de 2017
                        Mecanico com mais de 20 Anos de Experiencia já trabalhando na Siemens e na Frison</p>
                    <br>
                    <button class="learn-more mb-1">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Ver Mais</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------------------------------->
    <section>
        <div class="redes">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/jemase_s.a/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>Desenvolvido por Marcelo || 2022</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/a342c01441.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="js/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="js/owlcarousel/js/script.js"></script>
</body>

</html>