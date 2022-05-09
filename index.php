<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Projeto-PHP</title>
</head>
<body class="container-fluid">

    <h1 id="text">Login</h1>

    <div id="msg" class = "col-4">
        <?php
        if (isset($_GET['msg']))
        {
            include_once'util.php';
            echo validar_msg($_GET['msg']);
        }
        ?>
    </div>

    <div id="formulario" class="col-3">
        <form action="validar.php" method="post">
            <p>
                <label class="form-label">Usuário</label><br>
                <input type="text" name="usuario" required  class="form-control">
            </p>

            <p>
                <label class="form-label">Senha</label><br>  
                <input type="password" name="senha" required  class="form-control">  
            </p>

            <p id="text">
                <button type="submit" name="entrar" class="btn btn-light">Entrar</button>
            </p>
        </form>
    </div>

</body>
</html>