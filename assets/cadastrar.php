<?php
if (!session_id()) {
    session_start();
}

include_once ('assets/config.php');

if(isset($_POST['submit']))
{
    // print_r($_POST['nome']);
    // print_r($_POST['telefone']);
    // print_r($_POST['email']);
    // print_r($_POST['senha']);
    // print_r($_POST['sexo']);
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }
    $nome = trim($_POST['nome']); 
    $telefone = trim($_POST['telefone']); 
    $email = trim($_POST['email']); 
    $senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);
    $sexo = trim($_POST['sexo']); 
    
    $nome = strtolower($email);

    $sql = "select count(*) as total from usuarios where email = '$email'";
    $result1 = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result1);

    if($row['total'] == 1) {
        $_SESSION['email_existe'] = true;
        header("Location: cadastro.php");
        exit;
    }

    $result =  mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone,email,senha,sexo) VALUES('$nome','$telefone','$email','$senha','$sexo')" );
}

    $conexao->close();
?>