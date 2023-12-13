<?php
if (!session_id()) {
    session_start();
}

include_once('assets/config.php');

if (isset($_POST['submit'])) {
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = trim($_POST['nome']);
    $telefone = trim($_POST['telefone']);
    $email = trim($_POST['email']);
    $senha = md5($_POST['senha']);
    $sexo = trim($_POST['sexo']);

    $emailLowerCase = strtolower($email); // Nova variável para armazenar o e-mail em minúsculas

    $sql = "select count(*) as total from usuarios where email = '$emailLowerCase'";
    $result1 = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result1);

    if ($row['total'] == 1) {
        $_SESSION['email_existe'] = true;
        header("Location: cadastro.php");
        exit;
    } else {
        header('location: Login copy.php');
    }

    $result =  mysqli_query($conexao, "INSERT INTO usuarios(nome, telefone, email, senha, sexo) VALUES('$nome', '$telefone', '$emailLowerCase', '$senha', '$sexo')");
}

if (empty($_SESSION['email']) || empty($_SESSION['senha'])) {
    $_SESSION['com_perfil'] = true;
} else {
    $_SESSION['sem_perfil'] = true;
}

$conexao->close();
?>
