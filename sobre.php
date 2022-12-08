<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - JEMASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <header>
        <?php
            include ("header.php")
        ?>
    </header>
    <section>
        <div class="container mto">
            <h2 class="titulo mb">Quem Somos?</h2>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <img src="imagem/jemase-logot.png" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Titulo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reiciendis repellendus ad
                        eveniet earum dolores libero, nesciunt cum eum iure natus quisquam veniam officiis similique
                        ipsam pariatur commodi error odio.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <h3 class="text-center">Titulo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reiciendis repellendus ad
                        eveniet earum dolores libero, nesciunt cum eum iure natus quisquam veniam officiis similique
                        ipsam pariatur commodi error odio.</p>
                </div>
                <div class="col-md-6">
                    <img src="imagem/jemase-logot.png" alt="">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <img src="imagem/jemase-logot.png" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Titulo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reiciendis repellendus ad
                        eveniet earum dolores libero, nesciunt cum eum iure natus quisquam veniam officiis similique
                        ipsam pariatur commodi error odio.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <h3 class="text-center">Titulo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reiciendis repellendus ad
                        eveniet earum dolores libero, nesciunt cum eum iure natus quisquam veniam officiis similique
                        ipsam pariatur commodi error odio.</p>
                </div>
                <div class="col-md-6">
                    <img src="imagem/jemase-logot.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">E-mail ou Telefone</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Guardar</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>