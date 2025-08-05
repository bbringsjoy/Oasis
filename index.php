
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/all.min.css"> <!-- Font Awesome -->
    
    <link href="imagens/pokebola.webp" rel="shortcut icon">

    <title> Oásis </title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"><!-- animação git -->

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid col-12">
              <a class="navbar-brand" href="home">
                Logo
                <img src="" alt="Logo" class="w-100">
              </a>
              <button class="navbar-toggler" type="botao button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar"><i class="fa-solid fa-bars"></i></span>
              </button>
              <div class= listas>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">
                       Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="sobre">
                       Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login">
                       </a>
                  </li>
                </div>
            </div>
          </div>
          </nav>
      
          
    </header>
    <main class="container">
    <?php
    include "array.php";

    $pagina = $_GET["param"] ?? "home";

    if (isset($_GET["param"])) {
      $param = explode("/", $_GET["param"]);
      $pagina = $param[0] ?? "home";
      $id = $param[1] ?? NULL;
    }

    $pagina = "pages/{$pagina}.php";

    if (file_exists($pagina)) include $pagina;
    else include "pages/erro.php";
      ?>
    </main>
    <footer>
  <div class="desenvolvedor">
  <p class="user-select-none text-center">
  © Todos os direitos reservados
  </p>
  <br>
      <p class="user-select-none text-center"> Desenvolvido por:
      <a href="https://www.linkedin.com/in/beatriz-gomes-santana-0197b5289?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
        Beatriz Santana
      </a>
      <a>
        e 
      </a>
      <a href="">
       Francesco Gris
      </a>
    </p>
  </div>
     
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))// const do popOver do bootstrap
</script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><!-- script animaçao -->
<script>
  AOS.init();
</script>

 <script src="https://cdn.jsdelivr.net/npm/fslightbox/index.js" type="module"></script><!-- script lightbox -->
 


</body>
</html>