<?php include_once'lock.php'; 

if (!isset($_POST['cadastrar']) || empty($_POST['nome']) || empty($_POST['marca']) || empty($_POST['anos']))
{
    header('location:index.php?msg=edtembranco');
}
else
{
    $id_whisky  = $_POST['id_whisky'];
    $nome       = $_POST['nome'];
    $marca      = $_POST['marca'];
    $anos       = $_POST['anos'];

    include_once '../database/whisky.dao.php';

    $result = editar_whisky($id_whisky, $nome, $marca, $anos);

    if ($result)
    {
        header('location:index.php?msg=editado');
    }
    else
    {
        header('location:index.php?msg=erroeditar');
    }  
}