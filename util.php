<?php

function validar_msg($msg)
{
    switch ($msg)
    {
        case 'embranco':
            $retorno = '<h3 class="alert alert-warning">Preencha todos os campos para realizar o login!';
            break;

        case 'invalido':
            $retorno = '<h3 class="alert alert-danger">Atenção: Usuário ou senha inválidos!';
            break;

        case 'cadembranco':
            $retorno = '<h3 class="alert alert-warning">Informe todos os dados do Whisky para cadastrar!';
            break;

        case 'edtembranco':
            $retorno = '<h3 class="alert alert-warning">Informe todos os dados do Whisky para editar!';
            break;    
        
        case 'cadastrado':
            $retorno = '<h3 class="alert alert-success">Whisky cadastrado com sucesso!';
            break;

        case 'errocadastro':
            $retorno = '<h3 class="alert alert-danger">Erro ao cadastrar. Tente novamente';
            break;

        case 'idinvalido':
            $retorno = '<h3 class="alert alert-warning">Whisky invalido. Tente novamente';
            break;

        case 'deletado':
            $retorno = '<h3 class="alert alert-success">Whisky deletado com sucesso!';
            break;

        case 'errodeletar':
            $retorno = '<h3 class="alert alert-danger">Erro ao deletar o Whisky. Tente novamente';
            break;

        case 'editado':
                $retorno = '<h3 class="alert alert-success">Dados do Whisky alterados com sucesso!';
                break;

        case 'erroeditar':
                $retorno = '<h3 class="alert alert-danger">Erro ao editar o Whisky. Tente novamente';
                break;

        default:
            $retorno = '';
            break;
    }

    return $retorno;
}