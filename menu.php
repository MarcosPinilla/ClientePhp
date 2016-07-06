<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PHP Page</title>
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
        integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        
    </head>
    <style type="text/css">
    body { background: #00404F !important}
    h2 {font-family: 'Fjalla One', sans-serif;}
    </style>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
                            aria-expanded="false">
                        <span class="sr-only"> Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php"><img src="icono/home.png" width="30" height="30"></a>
                    
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-brand">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <img src="icono/contacto.png" width="55" height="27"><span class="caret"></span></a>
                            <ul class="dropdown-menu"> 
                                <li><a href="gruposDeContacto.php"> Grupos de Contacto</a></li>
                                <li><a href="verActividadesDeGrupo.php"> Ver Actividades</a></li>
                                <li><a href="verNotificacionesDeGrupo.php"> Ver Notificaciones</a></li>
                                <li><a href="verLecturasActividad.php"> Quien leyó la Actividad?</a></li>
                                <li><a href="verLecturasNotificacion.php"> Quien leyó la Notificación?</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
    </body>
</html>