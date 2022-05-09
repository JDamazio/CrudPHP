<?php include_once 'lock.php';

if (!isset($_GET['id_whisky']))
{
    header('location:index.php?msg=idinvalido');
}
else
{
    $id_whisky = $_GET['id_whisky'];

    include_once'../database/whisky.dao.php';

    $result = deletar_whisky($id_whisky);

    if ($result) {
        header('location:index.php?msg=deletado');
    }
    else {
        header('location:index.php?msg=errodeletar');
    }
}

?>