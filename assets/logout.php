<?php
if (!session_id()) {
    session_start();
}

include_once('..\testLogin.php');

unset($_SESSION['email']);
unset($_SESSION['senha']);
forget();

header("Location: ..\Login copy.php");
exit();

?>
