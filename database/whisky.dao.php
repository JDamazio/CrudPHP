<?php
include_once 'conn.php';

function salvar_whisky($nome, $marca, $anos)
{
    $conn = conectar();

    $sql = "INSERT INTO whiskys_tb (nome, marca, ano)
    VALUES ('$nome', '$marca', $anos)";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    return false;
    }

function buscar_whiskys()
{
    $conn = conectar();

    $sql = "SELECT * FROM whiskys_tb";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
    {
        return $result;
    }
    return null;
}

function exibir_whiskys()
{
    $result = buscar_whiskys();

    if ($result == null)
    {
        $retorno = '<h3>Não há whiskys cadastrados';
    }
    else
    {
        $retorno = '<div class = "col-12">';
        $retorno .= '<table class="table table-success table-hover"';
        //Montando a primeira linha da tabela 
        $retorno .= '<tr>';
        $retorno .= '<th>#';    //Coluna de cabeçalho = th = table header 
        $retorno .= '<th>Nome';
        $retorno .= '<th>Marca';
        $retorno .= '<th>Anos de Maturação';
        $retorno .= '<th>Deletar';
        $retorno .= '<th>Editar';

        while ($whisky = mysqli_fetch_assoc($result))
        {
            //Neste laço estamos montando novas linhas para a tabela:
            $retorno .= '<tr>';
            // coluna simples da tabela = td = table data 
            $retorno .= "<td>"  . $whisky['id_whisky']  ;
            $retorno .= "<td>"  . $whisky['nome']       ;
            $retorno .= "<td>"  . $whisky['marca']      ;
            $retorno .= "<td>"  . $whisky['ano']        ;
            $retorno .= "<td>"  . link_deletar($whisky['id_whisky']);
            $retorno .= "<td>"  . link_editar($whisky['id_whisky']);
        }
    }
    return $retorno;
}

function link_deletar($id_whisky) //Function para criar o link "deletar"
{
    $link = '<a href="deletar.php?id_whisky='.$id_whisky.'" 
    onclick="return confirm(\'Tem certeza que deseja excluir esse whisky?\')"class="btn btn-danger btn-sm">Deletar</a>';

    return $link;
}

function link_editar($id_whisky)
{
    $link = '<a href="editar.php?id_whisky='.$id_whisky.'"class="btn btn-warning btn-sm">Editar</a>';

    return $link;
}

function deletar_whisky($id_whisky) //Function para deletar
{
    $conn = conectar();

    $sql = "DELETE FROM  whiskys_tb WHERE id_Whisky = $id_whisky";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    return false;
}

function buscar_whisky($id_whisky)
{
    $conn =  conectar ();

    $sql = "SELECT * FROM whiskys_tb WHERE id_whisky = $id_whisky";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return $result;
    }
    return null;
}

function editar_whisky($id_whisky, $nome, $marca, $anos)
{
    $conn = conectar();

    $sql = "UPDATE whiskys_tb SET nome = '$nome', marca = '$marca', ano = $anos
    WHERE id_whisky=$id_whisky";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    else {
        return false;
    }
}



