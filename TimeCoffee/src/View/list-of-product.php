<?php
    require dirname(__DIR__) . "/Controller/auth_verify.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

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
        
        <title>Catálogo - Time Coffee</title>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-transparente fixed-top bgHF">
                <div class="container-fluid mb-1">
                        
                    <div class="collapse navbar-collapse">
                        <a href="#" class="mt-1"><img class="img-fluid rounded-circle imgLogo" style="margin-left:125px;" src="img/TCoffee-Logo.svg" width="190" alt="Logotipo Time Coffee"></a>
                        <ul class="navbar-nav m-lg-auto menuHeader hoverCoffee">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link ml-5 mr-5 text-uppercase">Início</a>
                            </li>                      

                            <li class="nav-item">
                                <a href="#" class="nav-link mr-5 text-uppercase ">ADM</a>
                            </li>                           

                            <li class="nav-item">
                                <a href="../Controller/Coffee.php?operation=findAll" class="nav-link text-uppercase disabled">Catálogo</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav m-lg-auto BtnPrimary">
                            <!-- Icons -->
                            <li class="nav-item hoverCoffee">
                                
                            </li>

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

        <main id="mainMarg">
            <div class="justify-content-around row w-100">
                <div class="hoverCoffee">
                    <a href="add-new-product.php" class="btn btn-secondary shadow-sm px-3 btnAdd">Adicionar produto</a>
                </div>
                <div class="mt-2 mr-5 bg-transparent">        
                    <input type="text" class="form-control-sm bg-transparent" id="myInput" onkeyup="myFunction()" placeholder="Buscar..."></i></input>      
                </div>
            </div>
            
            <table class="table table-sm table-responsive-sm table-borderless table-active table-striped text-center mx-5 mb-4 mt-3" id="myTable" style="max-width: 95%;">
                <thead class="header">
                    <th>#</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Tamanho</th>
                    <th>Complemento</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php
                    if (empty($_SESSION["list_of_product"])) :
                    ?>
                        <td colspan=7 class="text-center fw-bold">Não existem produtos cadastrados.</td>
                    <?php
                    endif;
                    foreach ($_SESSION["list_of_product"] as $coffee) :
                    ?>
                        <tr>
                            <td>
                                <?= $coffee["id"] ?>
                            </td>
                            <td>
                                <?= $coffee["name"] ?>
                            </td>
                            <td>
                                <?= $coffee["quantity"] ?>
                            </td>
                            <td>
                                <?= "R$ ".number_format($coffee["price"],2,",",".") ?>
                            </td>
                            <td>
                                <?= $coffee["size"] ?>
                            </td>
                            <td>
                                <?= $coffee["complements"]?>
                            </td>
                            <td>
                                <?= ($coffee["description"]) ? $coffee["description"] : "Nenhuma descrição" ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="../Controller/Coffee.php?operation=findOne&code=<?= $coffee["id"] ?>" class="btn btn-warning" title="Editar o produto">
                                    <i class="fa-regular fa-pen-to-square fa-sm"></i>
                                    </a>
                                    <a href="../Controller/Coffee.php?operation=delete&code=<?= $coffee["id"] ?>" class="btn btn-danger" title="Deletar o produto">
                                    <i class="fa-regular fa-trash-can fa-sm"></i>
                                </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
            <div class="justify-content-center row w-100">
                <div class="hoverCoffee">
                    <a href="add-new-product.php" class="btn btn-secondary shadow-sm px-3 btnAdd1">Adicionar produto</a>
                </div>
            </div>
        </main>

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

        <script src="src/View/js/searchBar.js"></script> 

    </body>
</html>