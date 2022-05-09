<?php include_once'lock.php'; ?>
<?php include_once'../database/whisky.dao.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Projeto-PHP Área restrita</title>
</head>
<body class="container-fluid">


    <h1 id="text">Damazio's - Área de cadastro</h1>


    <div  id="text">
        <p>
            <a href="logout.php" class="btn btn-danger btn-sm">Sair do sistema</a>
        </p>
    </div>

    <div id="msg" class = "col-4">
        <?php
        if (isset($_GET['msg']))
        {
            include_once'../util.php';
            echo validar_msg($_GET['msg']);
        }
        ?>
    </div>

    <h3 id="text">Cadastrar Whisky:</h3>

    <div id="formulario" class="col-4">
        <form action="cadastrar.php" method="post">

            <p>
                <label class="form-label">Nome:</label><br>
                <input type="text" name="nome" required class="form-control">
            </p>

            <p>
                <label class="form-label">Marca:</label><br>
                <input type="text" name="marca" class="form-control">
            </p>

            <p>
                <label class="form-label">Anos de maturação:</label><br>
                <input type="number" name="anos" class="form-control">
            </p>

            <p id="text"><button type="submite" name="cadastrar" class="btn btn-light">Cadastrar</button></p>

        </form>
    </div>

    <div>
        <h3 id="text">Whiskys Cadastrados:</h2>
        <?php
            echo exibir_whiskys();
        ?>
    </div>

</body>
</html>