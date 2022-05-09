<?php include_once 'lock.php';
if (!isset($_POST['cadastrar']) || empty($_POST['nome']) || empty($_POST['marca']) || empty($_POST['anos']))
{
    header('location:index.php?msg=cadembranco');
}
else
{
    $nome   = $_POST['nome'];
    $marca  = $_POST['marca'];
    $anos   = $_POST['anos'];

    include_once '../database/whisky.dao.php';

    $result = salvar_whisky($nome, $marca, $anos);

    if ($result)
    {
        header('location:index.php?msg=cadastrado');
    }
    else
    {
        header('location:index.php?msg=errocadastro');
    }
}
?>