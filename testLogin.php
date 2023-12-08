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
        
        function remember() {
            // Verifica se as sessões 'email' e 'senha' estão definidas
            if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
                // Define um cookie para lembrar o e-mail e a senha do usuário
                $validade = strtotime("+1 month");
                setcookie('lembrar_login', $_SESSION['email'], $validade, "/", "", false, true);
                setcookie('lembrar_senha', $_SESSION['senha'], $validade, "/", "", false, true);
            }
        }        
        
        if ($row == 1) {
            $row2 = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $emailLowerCase;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $row2['nome'];
            

            if (isset($_POST['lembrar']) == 'on') {
                // Chama a função remember para definir os cookies
                remember();
            }

            
            header('Location: perfilwelcome.php');
            exit();
        } else {
            header('Location: Login copy.php');

        }
    }

    $email_entrar = (isset($_COOKIE['lembrar_login'])) ? $_COOKIE['lembrar_login'] : '';
    $senha_entrar = (isset($_COOKIE['lembrar_senha'])) ? $_COOKIE['lembrar_senha'] : '';

    $sql = "SELECT sexo FROM usuarios WHERE email = '{$_SESSION['email']}'";
    $results = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($results);
    $sexo = $row['sexo'];
    
    if($sexo === 'option1') {
        $_SESSION['homem'] = true;
    } elseif ($sexo === 'option2') {
        $_SESSION['mulher'] = true;
    }
    // else
    // {
    // //     // Não acessa
    //     header('Location: Login copy.php');
    // }
    ?>