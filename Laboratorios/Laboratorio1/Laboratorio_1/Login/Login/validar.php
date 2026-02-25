<?php

if(isset($_POST['usuario']) && isset($_POST['password'])){

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Usuario definido directamente en el código
    $usuario_correcto = "LuisBenjaminFabianHerrera@gmail.com";
    $password_correcto = "123456";

    if($usuario === $usuario_correcto && $password === $password_correcto){
        echo "ok";
    } else {
        echo "error";
    }

}else{
    echo "error";
}

?>