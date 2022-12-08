<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - JEMASE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>

        textarea {
            width: 80%;
            border-radius: 8px;
        }

        .left {
            text-align: left;
        }

        .button {
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

        .mbt {
            padding: 0 0 10px 0;
        }

        .contatos {
            text-align: left;
        }
    </style>
</head>

<body>
    <header>
        <?php
        include ("header.php")
        ?>
    </header>
    <section>
        <div class="container" style="margin-top: 35px;">
            <h2 class="titulo mb mto">Contato</h2>

            <div class="row">
                <div class="col-6">
                    <div class="msg">
                        <h2 class="mt mb">Deixe sua mensagem</h2>
                        <form action="">
                            <div class="mb">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nome Sobrenome">
                            </div>
                            <div class="mb">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="nome@exemplo.com">
                            </div>
                            <label for="nome">
                                <h3 class="mb mt form-label">Mensagem:</h3>
                            </label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea2"></textarea>
                                <label for="floatingTextarea2">Comentario</label>
                            </div>
                            <br>
                            <a href="" class="btn btn-primary btn-secondary">Enviar</a>
                        </form>
                        <br>
                        <div class="redes">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/jemase_s.a/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="contatos">
                        <h2 class="mt mbt">Contatos</h2>
                        <form>
                            <label for="email" class="form-label">contatos@site.com.br</label>
                            <br>
                            <label for="email" class="form-label">(11) 99999-9999</label>
                            <br>
                            <label for="email" class="form-label">(11) 99999-9999</label>
                            <br>
                        </form>

                        <h2 class="mt mb">Endereço</h2>
                        <p class="mb">Av. Alexios Jafet, 1487 - Ipanema, São Paulo - SP, 05181-010</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14641.884386062635!2d-46.7488691!3d-23.4434657!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe32dedab56743f2!2sJemase%20Servi%C3%A7os%20Automotivos!5e0!3m2!1spt-BR!2sbr!4v1666132769322!5m2!1spt-BR!2sbr"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <?php
    include ("redes.php")
    ?>
    <footer>
        <div class="container">
            <p>Desenvolvido por Marcelo || 2022</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/a342c01441.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>