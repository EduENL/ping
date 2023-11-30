<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" href="img/Logo ping(favicon).png" type="image/x-icon">

</head>
<body>
    <!-- _________HEADER__________ -->
    <?php
        include_once("assets/header.php")
    ?>
    <!-- ________________________________________ -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!-- ________________________________________ -->

    <!-- ________________________________________ -->
    <div class="row border rounded-5 p-3  box-area" id="main-div">
    <!-- ________________________________________ -->

    <!-- ________________________________________ -->
    <!-- ________________________________________ -->

    <!-- ________________________________________ -->
    <div class="col-md-6 right-box">
        <div class="row align-items-center">
            <div class="header-text text-white mb-4">
                <h2>Seja Bem-vindo!</h2>
                <p>Complete os campos e realize seu cadastro.</p>
            </div>
            <div>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="nome" id="nome" class="form-control form-control-lg bg-light fs-6" placeholder="Nome:">
                        <input type="tel" name="telefone" id="telefone" class="form-control form-control-lg bg-light fs-6 ms-3" placeholder="Telefone:">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email:">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="senha" id="senha" class="form-control form-control-lg bg-light fs-6" placeholder="Senha:">
                        <input type="password" name="senhaC" id="senhaC" class="form-control form-control-lg bg-light fs-6 ms-3" placeholder="Confirmar senha:">
                    </div>
                    <div class="input-group mb-3 d-flex justify-content-between">
                        <div>
                            <p class="text-white">Sexo:</p>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="sexo-m" name="sexo" value="option1">
                            <label class="form-check-label text-white" for="sexo-m">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="sexo-f" name="sexo" value="option2">
                            <label class="form-check-label text-white" for="sexo-f">Feminino</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6" style="background-color: #2F1062; border-color: black;" >Cadastrar-se</button>
                    </div>
                </form>
            </div>
                    
            <div class="row">
                <small class="text-white-50">Já tem uma conta? <a href="Login copy.php">Login</a></small>
            </div>
        </div>
    </div>
    <!-- ________________________________________ -->
    <!-- ________________________________________ -->
    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #2F1062;">

        <div class="featured-image mb-3">
            <img src="img/cadastro/section-cadas.jpeg" class="img-fluid" style="width: 400px; margin-top: 20px; border-radius: 25px;">
        </div>

        <p class="text-white fs-2" style="font-family: 'Courier Nes', Courier, monospace; font-weight: 600;"></p>

        <small class="text-white text-wrap text-center"  id="text-section">Inicie sua aventura conosco!</small>
    </div>
    <!-- ________________________________________ -->
    </div>
    </div>
    <script src="cadastro.js"></script>

</body>
</html>
