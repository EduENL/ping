<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="img/Logo ping(favicon).png" type="image/x-icon">

</head>
<body>
    <!-- _________HEADER__________ -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
  <div class="container-fluid mx-5">
    <a class="navbar-brand" href="index.html">PING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" id="nav-botao" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Games
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.html">Reviews</a></li>
                <li><a class="dropdown-item" href="index.html">G(old)</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="index.html">Notícias</a></li>
            </ul>
          </li>
        <li class="nav-item">
            <a class="nav-link active"  id="nav-botao" aria-current="page" href="index.html">Notícias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.html"><i class="bi bi-person-circle roxo"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- ________________________________________ -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!-- ________________________________________ -->

    <!-- ________________________________________ -->
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!-- ________________________________________ -->

    <!-- ________________________________________ -->
    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #951e8a;">

        <div class="featured-image mb-3">
            <img src="img/4.jpg" class="img-fluid" style="width: 400px; margin-top: 20px; border-radius: 25px;">
        </div>

        <p class="text-white fs-2" style="font-family: 'Courier Nes', Courier, monospace; font-weight: 600;"></p>

        <small class="text-white text-wrap text-center" id="text-section" style="font-size: 20px;">Retome suas grandes aventuras nos games!</small>
    </div>
    <!-- ________________________________________ -->

    <!-- ________________________________________ -->
    <div class="col-md-6 right-box">
        <div class="row align-items-center">
            <div class="header-text mb-4">
                <h2>Olá Novamente!</h2>
                <p>Estamos contentes com o seu retorno.</p>
            </div>
            <div>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email:">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" name="senha" id="senha" class="form-control form-control-lg bg-light fs-6" placeholder="Senha:">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Lembrar de mim</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Esqueceu a senha?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6" style="background-color: #951e8a; border-color: black;">Login</button>
                    </div>
                </form>
            </div>
            <div class="input-group mb-3">
               <button class="btn btn-lg btn-light w-100 fs-6"><img src="img/i606944.webp" style="width: 20px;" class="me-2"><small>Sign in with Google</small></button> 
            </div>
            <div class="row">
                <small>Não tem uma conta? <a href="cadastro.html">Cadastrar-se</a></small>
            </div>
        </div>
    </div>
    <!-- ________________________________________ -->
    </div>
    </div>
      
</body>
</html>
