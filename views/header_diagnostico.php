<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="es">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title = isset($title) ? $title : 'AUGUR10'; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../misc/style.css">
    <link href="../../css/jmenu.min.css" rel="stylesheet"/>
    <link href="../../css/estilos.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript" src="../../js/functions.js"></script>
    <script type="text/javascript" src="../../js/ajax.js"></script>
</head>
<body>
<div class="container-fluid" id="cabecera">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-8 pt-4">
                <img alt="" class="imagen img-fluid" height="100%" src="../../images/logo_bolivar.svg" width="150px">
                </img>
            </div>
            <div class="col-md-12 col-xs-12 col-lg-4 pt-3">
                <nav class="jmenu">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="../../images/btn_edit.svg" class="btn_edit" height="30px">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../../images/btn_diagnostico.svg" class="btn_edit" height="30px">
                            </a>
                        </li>
                        <li>
                            <a href="../logout.php">
                                <input type="submit" value="SALIR" class="boton1" name="new">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-6 col-lg-12 mb-4 text-center">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <img alt="" class="imagen2 img-fluid" height="100%" src="../../images/logo_bolivar.svg" width="150px" />
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
        <!-- enlaces -->
        <div class="row">
            <div class="collapse navbar-collapse col-md-12 col-xs-12 menu" id="opciones">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">SALIR</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>