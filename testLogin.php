<?php
if (!session_id()) {
    session_start();
}
include_once('assets/config.php');

print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))

{
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }
    // Acessa
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email:' . $email);
    // print_r('<br>');
    // print_r('Senha' . $senha);

    $sql = "SELECT COUNT(*) as total from usuarios WHERE email = '$email' and senha = '$senha'";

    $result1 = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result1);

    print_r($sql);
    print_r($result1);

    if ($row['total'] == 1) {
        // print_r('Não existe');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: perfilwelcome.php');
        // Adicione um parâmetro para indicar um erro
    } else {
        // print_r('Existe');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Login copy.php?erro=1');

    }
}
// else
// {
// //     // Não acessa
//     header('Location: Login copy.php');
// }
?>