<?php

if(!isset($_POST["nome"]) || !isset($_POST["login"]) !isset($_POST["senha"])){
    header("Location:cadastro_usuarios.php?error=faltando_dados");
    exit();
}
require_once "index.php";

cadastro_usuarios(. . .);
?>