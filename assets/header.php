<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
  <div class="container-fluid mx-5">
    <a class="navbar-brand" href="index.php">PING</a>
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
                <li><a class="dropdown-item" href="index.php">Reviews</a></li>
                <li><a class="dropdown-item" href="index.php">G(old)</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="index.php">Notícias</a></li>
            </ul>
          </li>
        <li class="nav-item">
            <a class="nav-link active"  id="nav-botao" aria-current="page" href="index.php">Notícias</a>
        </li>
        
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" id="nav-botao" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle roxo"></i>
              </a>
              <ul class="dropdown-menu">
              <?php
                  if(isset($_SESSION['com_perfil'])):
                ?>
                <li><a class="dropdown-item" href="Login copy.php">Login</a></li>
                <?php
                  endif;
                  unset($_SESSION['com_perfil']);
                ?>
                <?php
                  if(isset($_SESSION['sem_perfil'])):
                ?>
                <li><a class="dropdown-item" href="perfilwelcome.php">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="assets/logout.php">Logout</a></li>
                <?php
                  endif;
                  unset($_SESSION['sem_perfil']);
                ?>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>