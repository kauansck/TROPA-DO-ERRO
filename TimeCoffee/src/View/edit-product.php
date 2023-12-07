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
        
        <title>Editar produto</title>
  </head>

  <body>
    
    <header>
      <nav class="navbar navbar-expand-lg fixed-top bgHF">
        <div class="container-fluid mb-1">
                        
          <div class="collapse navbar-collapse">
            <a href="#" class="mt-1"><img class="img-fluid rounded-circle bg-light" style="margin-left:125px;" src="img/TCoffee-Logo.svg" width="200" alt="Logotipo Time Coffee"></a>
            <ul class="navbar-nav m-lg-auto menuHeader hoverCoffee">
              <li class="nav-item">
                  <a href="home.php" class="nav-link ml-5 mr-5 text-uppercase">Início</a>
              </li>                      

              <li class="nav-item">
                <a href="#" class="nav-link mr-5 text-uppercase ">ADM</a>
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

    <main>
      <h3 class="text-center">Adicionar produto ao catálogo</h3>
      <div class="d-flex m-5 rounded-lg justify-content-center align-items-center cardBG w-auto">      
        
        <form action="../Controller/Coffee.php?operation=edit" method="post" class="w-25 p-4 my-5 rounded-lg bg-white">
        <a href="#" style="color: #252525;" class="alert-link hoverCoffee" onclick="history.back()"><i class="fa-solid fa-arrow-left fa-xl "></i></a>
          
          <input type="hidden" id="code" name="code" value="<?= $_SESSION["coffee"]["id"] ?>">
          <input type="text" id="product_name" name="product_name" class="form-control form-control-plaintext my-4" value="<?= $_SESSION["coffee"]["name"] ?>" placeholder="Nome do produto " required />
          <input type="number" id="quantity" name="quantity" class="form-control form-control-plaintext my-4" value="<?= $_SESSION["coffee"]["quantity"] ?>" placeholder="Quantidade" required />     
          <input type="number" id="price" name="price" class="form-control form-control-plaintext my-4" value="<?= $_SESSION["coffee"]["price"] ?>" placeholder="Preço" required />
          
          <label for="size" class="d-block mt-5">Tamanho:</label>
          <select name="size" id="size" class="form-control form-control-plaintext w-auto mt-2 mb-5" value="<?= $_SESSION["coffee"]["size"] ?>" placeholder="Tamanho">
            <option value="">Selecione</option>
            <option value="Pequeno 200ml">Pequeno 200ml</option>
            <option value="Médio 300ml">Médio 300ml</option>
            <option value="Grande 400ml">Grande 400ml</option>
          </select>

          <label for="complement" class="d-block mt-5">Complemento:</label>
          <select name="complement" id="complement" class="form-control form-control-plaintext w-auto mt-2 mb-5" value="<?= $_SESSION["coffee"]["complements"] ?>" placeholder="Complemento">
            <option value="">Selecione</option>
            <option value="açúcar">Açúcar</option>
            <option value="creme">Creme</option>
            <option value="açúcar-creme">Açúcar e creme</option>
            <option value="açucar-mascavo">Açucar mascavo</option>
            <option value="caramelo">Caramelo</option>
          </select>
          <textarea name="description" id="description" cols="30" rows="3" class="form-control form-control-plaintext mb-3 my-4" value="<?= $_SESSION["coffee"]["description"] ?>" placeholder="Descrição"></textarea>
          
          <div class="justify-content-between hoverCoffee">
            <button class="btn btn-secondary my-1 px-5 rounded-lg w-100">Salvar</button>
          </div>
          <hr class="cardBG w-50" />
          <div class="justify-content-between hoverCoffee">
            <a href="#" class="btn btn-secondary mt-1 px-5 rounded-lg w-100 " onclick="history.back()">Cancelar</a>
          </div>
          
        </form>

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

  </body>
</html>