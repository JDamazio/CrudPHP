<?php include_once'lock.php'; ?>
<?php include_once'../database/whisky.dao.php';

if (!isset($_GET['id_whisky']))
{
    header('location:index.php?msg=idinvalido');
}
else
{
    $result = buscar_whisky($_GET['id_whisky']);

    if ($result == null) {
        header('location:index.php?msg=idinvalido');    
    }
    else
    {
        $whisky = mysqli_fetch_assoc($result);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Projeto-PHP Editar Whisky</title>
</head>
<body class="container-fluid">

    <h1 id="text">Damazio's - Editar whisky</h1>

    <p id="text">
        <a href="index.php" class="btn btn-danger btn-sm">Cancelar Edição</a>
    </p>

    <h3 id="text">Editar dados do Whisky:</h3>

    <div id="formulario" class="col-4">
        <form action="editado.php" method="post">
            <p>
                <label class="form-label">Nome:</label><br>
                <input type="text" name="nome" required value="<?= $whisky['nome']?>" class="form-control">
            </p>

            <p>
                <label class="form-label">Marca:</label><br>
                <input type="text" name="marca" required value="<?= $whisky['marca']?>" class="form-control">
            </p>

            <p>
                <label class="form-label">Anos de maturação:</label><br>
                <input type="number" name="anos" required value="<?= $whisky['ano']?>" class="form-control">
            </p>

            <p id="text"><button type="submite" name="cadastrar" class="btn btn-light">Salvar Alterações</button></p>

            <input type="hidden" name="id_whisky" value="<?= $whisky['id_whisky']?>">
        </form>
    </div>

</body>
</html>