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
    <link href="/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
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
        <h4>Novo Onibus</h4>

        <form action="index.php?page=onibus" method="post">
            <br>

            <input type="hidden" name="acao" value="criar">

            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
            </div>

            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo">
            </div>

            <div class="form-group col-md-6">
                <input type="text" class="form-control"  name="ano" id="ano" placeholder="Ano">
            </div>

            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="poltronas" id="poltronas" placeholder="Poltronas">
            </div>

            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa">
            </div>


            <button type="submit" class="btn btn-primary">Gravar</button>
        </form>
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

