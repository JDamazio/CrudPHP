<?php
//buscando um usuário no banco de dados
function buscar_usuario($usuario,$senha)
{
    include_once 'conn.php';
    
    $conn = conectar();     //Conectar com o banco de dados

    //Buscando na tabela usuarios-tb
    $sql = "SELECT * FROM usuarios_tb WHERE usuario ='$usuario' AND senha = '$senha'";
    
    $result = mysqli_query($conn, $sql);
    
    //Verificando o numero de linhas afetadas pelo sql
    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    return false;
}
