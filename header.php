<?php

'<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <img src="imagem/jemase-logot.png" alt="" width="100%">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <img src="imagem/jemase-logot.png" alt="">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">ex-1</a></li>
                            <li><a class="dropdown-item" href="#">ex-2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agendamento.html">Agendamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.html">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
'

?>