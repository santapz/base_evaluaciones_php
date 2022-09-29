<?php
    session_start();
    $mail_form = $_POST['correo'];
    $pass_form = $_POST['contrasena'];

    if($mail_form == 'cliente@gmail.com' && $pass_form == 'phpintermedio') {
        $_SESSION['clientes'] = $mail_form;
        header("Location: clientes.php?ok#contenido");
    } else {
        header("Location: clientes.php?error#contenido");
    }


?>