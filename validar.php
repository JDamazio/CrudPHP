<?php
if (!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha']))
{
    //mandando o usuário novamente para a home
    header('location:index.php?msg=embranco');
}
else
{
    $usuario =  $_POST['usuario'];
    $senha   =  $_POST['senha'];

    include_once 'database/usuario.dao.php';

    $result = buscar_usuario($usuario, $senha);

        
    if ($result)
    {
        session_start();    //Iniciando a sessão
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha']   = $senha;

        header('location:sistema/index.php');    //Redirecionando o usuário para a pg restrita
    }
    else 
    {
        header('location:index.php?msg=invalido');
    }
}