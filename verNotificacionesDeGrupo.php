<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PHP Page</title>
        <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    </head>
    <style type="text/css">
    body {font-family: 'Fjalla One', sans-serif !important;
        color: lightseagreen !important}
    </style>
    <body>
        <?php include("menu.php");?>
        <div class="row" >
            <center>
                <h2>
                    <b>Notificaciones de un Grupo</b>
                </h2>
            </center>
        </div>
        <center>
            <form class="form-inline"method="post" action="verNotificacionesDeGrupo.php">
                <div class="row">
                    <div class="form-group">
                        <h4>Uid del Grupo:</h4><input type="text" placeholder="uid grupo" class="form-control" name="uid" />
                        <input type="submit" name="submit" value="Enviar" />
                    </div>
                </div>
            </form>
        </center>
        <center>
            <table class="table table-striped">
                <thead>
                <tr>
                <th>Uid Notificación</th>
                <th>Uid Grupo</th> 
                <th>Mensaje Notificación</th>
                <th>Fecha Creación</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        $wsdl_url = 'http://localhost:8080/PruebaFinalProgra/Servicio?WSDL';
                        $client = new SOAPClient($wsdl_url);
                        $params = array(
                            'uid_grupo' => $_POST['uid']
                        );
                        $return = $client->verNotificacionesDeGrupoServicioWeb($params);
                        $gru=  json_decode($return->return);

                        for ($index = 0; $index < count($gru); $index++) {  
                            echo "<tr>";  
                            echo "<td>",$gru[$index]->{'uid_noti'},"</td>";  
                            echo "<td>",$gru[$index]->{'uid_grupo'},"</td>";  
                            echo "<td>",$gru[$index]->{'mensaje_noti'},"</td>";  
                            echo "<td>",$gru[$index]->{'fecha_noti'},"</td>";  
                            echo "</tr>";  
                        }  
                        echo "</table>";
                    } catch (Exception $e) {
                        echo "Exception occured: " . $e;
                    }
                    ?>    
                </tbody>
            </table>
        </center>
    </body>
</html>