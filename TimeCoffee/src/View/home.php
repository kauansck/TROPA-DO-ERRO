<?php
    require dirname(__DIR__) . "/Controller/auth_verify.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    
        <!-- Meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" type="imagex/png" href="img/timecoffeeicon.ico">
               
        <!-- Fontwesome - Icons -->
        <script src="https://kit.fontawesome.com/b1e6413798.js" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="css/fontawesome.min.css"/>
        
        <!-- Bootstrap via cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/style.css">

        <title>Home - Time Coffee</title>
    </head>

    <body">

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <header>
            <nav class="navbar navbar-expand-md navbar-transparente fixed-top bgHF">
                <div class="container-fluid mb-1">
                    
                    <div class="collapse navbar-collapse">
                        <a href="#" class="mt-1"><img class="img-fluid rounded-circle imgLogo" style="margin-left:150px;" src="img/TCoffee-Logo.svg" width="190" alt="Logotipo Time Coffee"></a>
                        <ul class="navbar-nav m-lg-auto menuHeader hoverCoffee">
                            <li class="nav-item">
                                <a href="#" class="nav-link ml-5 mr-5 nav-underline text-uppercase disabled">Início</a>
                            </li>                      

                            <li class="nav-item">
                                <a href="#" class="nav-link mr-5 text-uppercase">ADM</a>
                            </li>                           

                            <li class="nav-item">
                                <a href="../Controller/Coffee.php?operation=findAll" class="nav-link text-uppercase">Catálogo</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav m-lg-auto BtnPrimary">
                            <!-- Icons -->
                            <li class="nav-item hoverCoffee">
                                <a href="#" class="btn ml-3 text-white"><i class="fa-solid fa-user fa-xl"></i></i></a>
                            </li>

                            <li class="nav-item hoverCoffee">
                                <a href="#" class="btn ml-3 mr-5 text-white"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
                            </li>

                            <li class="nav-item text-white">
                                </span>Bem-vindo(a) <strong style="color:#D59920;"><?= $_SESSION["user_data"]["name"]?></strong></span>
                                <a href="../Controller/Auth.php?operation=logout" class="btn btn-outline-secondary ml-4 shadow-sm">Sair</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
        
        <!-- Conteúdo da Home -->
        <main>
            <div class="container-fluid">

                <section class="home mx-5 p-5" id="home">
                    <div class="content">
                        <h3>TIME COFFE</h3>
                        <p>Seja muito bem-vindo ao TimeCoffee, um refúgio acolhedor onde o aroma tentador do café fresco dança no ar. Aqui, cada xícara é uma história. </p>
                    </div>
                </section>

                <section class="mb-5">
                    <div class="container-fluid align-self-center">
                        <div class="row">
    
                            <div class="col-md-12 capa">
                                
                                <div id="carousel-coffee" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner"> 
                                    <!-- Inner -->
                                    <div class="carousel-item p-1 active">
                                        <h2>Affogato Cremoso</h2>
                                        <div class="card border-0">
                                            <img class="img-fluid rounded-circle" src="img/Affogato Gelado.jpg" alt="Cafeteria">
                                        </div>
                                    </div>

                                    <div class="carousel-item p-1">
                                    <h2>Cold Brew Refrescante</h2>
                                        <div class="card border-0">
                                            <img class="img-fluid rounded-circle" src="img/Cold Brew Refrescante.jpg" alt="Cafeteria">
                                        </div>
                                    </div>

                                    <div class="carousel-item p-1">
                                    <h2>Mocha Especial</h2>
                                        <div class="card border-0">
                                            <img class="img-fluid rounded-circle" src="img/Mocha Especia.jpg" alt="Cafeteria">
                                        </div>
                                    </div>            
                                </div> 
                                <!-- Inner -->

                                <!-- Controles -->
                                <a href="#carousel-coffee" class="carousel-control-prev" data-slide="prev">
                                    <i class="fas fa-angle-left fa-3x"></i>
                                </a>

                                <a href="#carousel-coffee" class="carousel-control-next" data-slide="next">
                                    <i class="fas fa-angle-right fa-3x"></i>
                                </a>
                                
                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="about mt-5 m-3 p-5" id="about">
                    <h1 class="heading"> <span>Sobre</span> Nós</h1>
                        <div class="row">
                            <div class="image">
                                <img class="img-fluid" src="img/cafeteria.jpeg" alt="Cafeteria">
                            </div>
                        <div class="content">
                            <h3>QUEM SOMOS ESTABELECIMENTO E MISSÃO</h3>
                            <p> No coração da cidade, a Cafeteria Time Coffee se destaca como um refúgio acolhedor para amantes de café. Com um ambiente aconchegante e um cardápio diversificado, </p>
                            <p>proporcionamos uma experiência única para todos os apreciadores da bebida dos deuses. Nossa missão é transcender o simples ato de servir café, buscando criar momentos memoráveis para nossos clientes, onde cada xícara conta uma história de paixão pela qualidade e atendimento excepcional. Seja para uma rápida pausa ou uma reunião descontraída, na Time Coffee, o tempo é saboreado a cada gole.</p>
                            <a href="#" class="btn">saber mais</a>
                        </div>
                    </div>
                </section>               
            </div>
        </main>
        <!--   -->

        <footer class="bgHF">
            <div class="container-fluid">
                <div class="row mt-5 mb-3 justify-content-between">
                
                    <div class="d-flex mt-5" style="margin-left:125px;">                      
                        <p>
                        <span class="cinzaClaro">Contato:</span> timecoffee@gmail.com
                        </p>
                    </div>

                    <div class="d-flex mt-5" style="margin-right:100px;">                      
                        <a href="#" class="disabled"><i class="mr-3 fa-brands fa-cc-mastercard fa-2xl" style="color: #DF5229;"></i></a>
                        
                        <a href="#" class="disabled"><i class="mr-3 fa-brands fa-cc-visa fa-2xl" style="color: #377CEE;"></i></a>

                        <a href="#" class="disabled"><i class="mr-3 fa-brands fa-cc-diners-club fa-2xl" style="color: #e4d63f;"></i></a>

                        <a href="#" class="disabled"><i class="mr-3 fa-brands fa-cc-paypal fa-2xl" style="color: #2B68CD;"></i></a>            
                    </div>

                    <div class="d-flex mt-5 hoverCoffee" style="margin-right:122px;">                      
                        <a class="text-light mr-4" href="#">
                            <i class="fa-brands fa-facebook fa-2xl"></i>
                        </a>

                        <a class="text-light mr-4" href="#">
                            <i class="fa-brands fa-x-twitter fa-2xl"></i>
                        </a>

                        <a class="text-light mr-4" href="#">
                            <i class="fa-brands fa-instagram fa-2xl"></i>
                        </a>

                        <a class="text-light" href="#">
                            <i class="fa-brands fa-youtube fa-2xl"></i>
                        </a>
                    </div>
                </div>

                <div class="row mx-5 justify-content-between">
                    <div class="d-flex" style="margin-left:60px;">
                        <p>
                            Time Coffee · <span class="tdsDireitos">2023 © Todos os direitos reservados</span>
                        </p>
                    </div>
                    
                    <div class="d-flex hoverCoffee" style="margin-right:60px;">                      
                        <a class="text-light mr-4 text-decoration-none" href="#">
                            <p>Quem somos</p>
                        </a>

                        <a class="text-light mr-4 text-decoration-none" href="#">
                            <p>Termos de uso</p>
                        </a>

                        <a class="text-light mr-4 text-decoration-none" href="#">
                            <p>Política de privacidade</p>
                        </a>

                        <a class="text-light text-decoration-none" href="#">
                            <p>Política de Cookies</p>
                        </a>                      
                    </div>
                </div>
            </div>
        </footer>

    </body>