<?php
if (!session_id()) {
    session_start();
}

include_once('assets/config.php');

$sql = "SELECT idusuarios, email, nome, telefone, senha FROM usuarios WHERE email = '{$_SESSION['email']}' AND senha = MD5('{$_SESSION['senha']}')";
$results = mysqli_query($conexao, $sql);

if ($results) {
    $row = mysqli_fetch_assoc($results);

    if ($row) {
        $id = $row['idusuarios'];
        $email2 = $row['email'];
        $nome2 = $row['nome'];
        $telefone2 = $row['telefone'];
        $senha2 = $row['senha'];
    }
} else {
    echo "Erro na consulta: " . mysqli_error($conexao);
}

if (isset($_POST['atualizar'])) {
    // Recupera os dados do formulário
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    // Atualiza os dados no banco de dados
    $stmt = $conexao->prepare("UPDATE usuarios SET nome = ?, telefone = ?, email = ?, senha = ? WHERE idusuarios = ?");
    $stmt->bind_param("ssssi", $name, $phone, $email, $senha, $id);
    
    if ($stmt->execute()) {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = MD5('$senha')";
        $resultado= mysqli_query($conexao, $sql);
        $row2 = mysqli_fetch_assoc($resultado);
            $nome2 = $_POST['name'];
            $email2 = $_POST['email'];
            $_SESSION ['senha'] = $_POST['senha'];
            $_SESSION ['email'] = $_POST['email'];
            $_SESSION ['nome'] = $_POST['name'];

        header('Location: perfilwelcome.php');
    exit();
    } else {
        header('Location: editar.php');
    exit();
    }

    $stmt->close();
}

$conexao->close();
?>
