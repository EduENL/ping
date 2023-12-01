    <?php
    if (!session_id()) {
        session_start();
    }

    include_once('assets/config.php');

    // print_r($_REQUEST);
    if( !empty($_POST['email']) && !empty($_POST['senha']))

    {
        if ($conexao->connect_error) {
            die("Erro na conexão: " . $conexao->connect_error);
        }
        // Acessa
        $emailLowerCase = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email:' . $email);
        // print_r('<br>');
        // print_r('Senha' . $senha);

        $sql = "SELECT idusuarios , nome from usuarios WHERE email = '$emailLowerCase' and senha = md5('$senha')";


        $result = mysqli_query($conexao, $sql);
        $row = mysqli_num_rows($result);
        
        
        if ($row == 1) {
            // print_r('Não existe');
            $row2 = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $emailLowerCase;
            $_SESSION['nome'] = $row2['nome'];
            header('Location: perfilwelcome.php');
            exit();
            // Adicione um parâmetro para indicar um erro
        } else {
            // print_r('Existe');
            header('Location: Login copy.php');

        }
    }
    // else
    // {
    // //     // Não acessa
    //     header('Location: Login copy.php');
    // }
    ?>