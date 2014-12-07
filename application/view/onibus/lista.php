<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <title>Projeto POS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap-theme.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Projeto Pós - OO</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Inicio</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://projetoposoo.local/?page=onibus">Cadastrar</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="row">

        <h1>Listagem</h1>
        <p><a class="btn btn-success btn-sm" href="/index.php?page=onibus&novo=true">Adicionar &raquo;</a></p>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Poltronas</th>
                <th>Empresa</th>
                <td>Ações</td>
            </tr>
            </thead>
            <tbody>
            <?php  foreach($dados as $onibus): ?>

                <tr>
                    <?php echo"<td>{$onibus['marca']}</td>" ?>
                    <?php echo"<td>{$onibus['modelo']}</td>" ?>
                    <?php echo"<td>{$onibus['ano']}</td>" ?>
                    <?php echo"<td>{$onibus['poltronas']}</td>" ?>
                    <?php echo"<td>{$onibus['empresa']}</td>" ?>
                    <td>
                        <a href="/index.php?page=onibus&editar=true&id=<?php echo $onibus['cod_onibus']; ?>">Editar</a>
                        <a href="/index.php?page=onibus&excluir=true&id=<?php echo $onibus['cod_onibus']; ?>">Excluir</a>
                    </td>

                </tr>

            <?php endforeach ?>

            </tbody>
        </table>


    </div>

    <hr>
    <footer>
        <p>&copy; 2014 by Grupo 2 pos Ltd. All rights reserved.</p>
    </footer>
</div> <!-- /container -->
</body>
</html>
</title>
</head>
<body>

