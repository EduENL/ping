<?php
    session_start();
    include_once('assets/edit.php');
?>

<?php
    include_once('assets/header.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="editar.css">
    <title>Bem-Vindo!</title>
</head>

<body>
    <div class="container">
    <?php
        if(isset($_SESSION['homem_sexo']) && $_SESSION['homem_sexo']):
    ?>
    <div class="img">
        <img class="chupeta" src="assets/homem.png" alt="">
    </div>
    <?php
         endif;
        unset($_SESSION['homem_sexo']);
    ?>
    <?php
        if(isset($_SESSION['homem_sexo']) && $_SESSION['homem_sexo']):
    ?>
    <div class="img">
        <img class="chupeta" src="assets/mulher.png" alt="">
    </div>
    <?php
        endif;
        unset($_SESSION['homem_sexo']);
    ?>
        <div class="texto">
            
            <form action="editar.php" method="post">
                <div class="conjuntao">
                    <div class="conj1">
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <div class="butao"><input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $nome2; ?>" required></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone:</label>
                            <div class="butao"><input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $telefone2; ?>" required></div>
                        </div>
                    </div>
                    <div class="conj2">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <div class="butao"><input type="text" class="form-control" id="email" name="email" placeholder="Digite o E-mail" value="<?= $email2; ?>" required></div>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <div class="butao"><input type="text" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" value="<?= $_SESSION['senha']; ?>" required></div>
                        </div>
                    </div>
                    <div class="conj3">
                        <div class="input-group">
                            <input type="submit" name="atualizar"class="butao" value="Atualizar">
                        </div>
                        <div class="input-group">
                            <input type="submit" name="excluir"class="butao" value="Excluir"></input>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
