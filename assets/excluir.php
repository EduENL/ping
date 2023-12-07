<?php
if (!session_id()) {
    session_start();
}

include_once('assets/config.php');

$sql = "SELECT idusuarios FROM usuarios WHERE email = '{$_SESSION['email']}' AND senha = MD5('{$_SESSION['senha']}')";
$results = mysqli_query($conexao, $sql);

if ($results) {
    $row = mysqli_fetch_assoc($results);

    if ($row) {
        $id = $row['idusuarios'];
    }
} else {
    echo "Erro na consulta: " . mysqli_error($conexao);
}

echo $id;

if (isset($_POST['Excluir'])) {
    
    $stmt = $conexao->prepare("DELETE FROM usuarios WHERE id = $id");
    
    if ($stmt->execute()) {
        header('Location: index.php');
    exit();
    } else {
        header('Location: editar.php');
    exit();
    }

    $stmt->close();
}

$conexao->close();
?>