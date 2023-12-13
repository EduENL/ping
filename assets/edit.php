<?php
if (!session_id()) {
    session_start();
}

include_once('assets/config.php');

function forget() {
    $validade = time() - 3600;
    setcookie('lembrar_login', $_SESSION['email'], $validade, "/", "", false, true);
    setcookie('lembrar_senha', $_SESSION['senha'], $validade, "/", "", false, true);
}

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

} if (isset($_POST['excluir'])) {
    
    $stmt = $conexao->prepare("DELETE FROM usuarios WHERE idusuarios = $id");
    
    if ($stmt->execute()) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        forget();
        print_r($_SESSION['email']);
        header('Location: index.php');
    exit();
    } else {
        header('Location: editar.php');
    exit();
    }


    $stmt->close();
}

if (isset($_SESSION['email'])) {
    $sql = "SELECT sexo FROM usuarios WHERE email = '{$_SESSION['email']}'";
    $results = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($results);
    $sexo = $row['sexo'];
    
    if ($sexo === 'option1') {
        $_SESSION['homem'] = true;
    } elseif ($sexo === 'option2') {
        $_SESSION['mulher'] = true;
    }
}

if (empty($_SESSION['email']) || empty($_SESSION['senha'])) {
    $_SESSION['com_perfil'] = true;
} else {
    $_SESSION['sem_perfil'] = true;
}

$conexao->close();
?>
