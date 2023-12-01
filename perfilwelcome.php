<?php
session_start();
// print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: Login copy.php');
}

$logado = $_SESSION['email'];
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

    <link rel="stylesheet" href="perfilwelcome.css">  
    <title>Bem-Vindo!</title>
</head>
    <body>

        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-auto text-center chups">
                    <img class="chupeta mx-auto" src="assets/28d576ff2cd266730032fe84457c550413d89252d35bbd05fb2e9dd963bc9407_3.jpg" alt="">
                    <h1 class="my-3">Seja Bem-Vindo!</h1>
                <div class="d-flex flex-column">
                    <button class="btn btn-primary btn-lg mb-4" id="button">Editar perfil</button>
                    <button class="btn btn-primary btn-sm w-75 mx-auto" id="button">Voltar para Home</button>
                </div>
                </div>
            </div>
        </div>


            
    </body>
</html>