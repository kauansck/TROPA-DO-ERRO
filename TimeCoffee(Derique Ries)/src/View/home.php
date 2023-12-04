<?php
    require dirname(__DIR__) . "/Controller/auth_verify.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    
        <!-- Meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
               
        <!-- Fontwesome - Icons -->
        <script src="https://kit.fontawesome.com/b1e6413798.js" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="css/fontawesome.min.css"/>
        
        <!-- Bootstrap via cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <!-- CSS externo -->
        
        <title>Home - Time Coffee</title>
        
    </head>

    <body">

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <header>
            <nav class="navbar navbar-expand-lg fixed-top bgHF">
                <div class="container-fluid mb-1">
                    
                    <div class="collapse navbar-collapse">
                        <a href="#" class="mt-1"><img class="img-fluid rounded-circle bg-light" style="margin-left:125px;" src="img/TCoffee-Logo.svg" width="200" alt="Logotipo Time Coffee"></a>
                        <ul class="navbar-nav m-lg-auto menuHeader hoverCoffee">
                            <li class="nav-item">
                                <a href="#" class="nav-link ml-5 mr-3 text-uppercase disabled">Início</a>
                            </li>                      

                            <li class="nav-item">
                                <a href="#" class="nav-link mr-3 text-uppercase ">Time Coffee</a>
                            </li>                           

                            <li class="nav-item">
                                <a href="#" class="nav-link mr-3 text-uppercase">Catálogo</a>
                            </li>

                        </ul>

                        <ul class="navbar-nav m-lg-auto BtnPrimary">
                            <!-- Icons -->
                            <li class="nav-item hoverCoffee">
                                <a href="#" class="btn ml-5 text-white"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a>
                            </li>

                            <li class="nav-item hoverCoffee">
                                <a href="#" class="btn ml-3 text-white"><i class="fa-solid fa-user fa-xl"></i></i></a>
                            </li>

                            <li class="nav-item hoverCoffee">
                                <a href="#" class="btn ml-3 mr-5 text-white"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
                            </li>

                            <li class="nav-item text-white">
                                </span>Bem-vindo(a) <strong style="color:#D59920;"><?= $_SESSION["user_data"] ?></strong></span>
                                <a href="../Controller/Auth.php?operation=logout" class="btn btn-outline-secondary ml-4 shadow-sm">Sair</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
        
        <!-- Conteúdo da Home -->
        <main class="text-center">
            <div style="height:600px;">

                <h2>Conteúdo da home aqui</h2>
                
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