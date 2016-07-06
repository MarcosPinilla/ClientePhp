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
    .letra{font-size: large}
    </style>
    <body>
        <?php include("menu.php");?>
        <div class="row" >
            <center>
                <h2>
                    <b>Grupos de un Contacto</b>
                </h2>
            </center>
        </div>
        <center>
            <form class="form-inline"method="post" action="gruposDeContacto.php">
                <div class="row">
                    <div class="form-group">
                        <h4>Uid del Contacto:</h4><input type="text" placeholder="uid contacto" class="form-control" name="uid" />
                        <input type="submit" name="submit" value="Enviar" />
                    </div>
                </div>
            </form>
        </center>
        <center>
            <table class="table table-striped">
                <thead>
                <tr>
                <th>Uid</th>
                <th>Nombre Grupo</th> 
                <th>Descripción Grupo</th> 
                <th>Fecha Creación</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        $wsdl_url = 'http://localhost:8080/PruebaFinalProgra/Servicio?WSDL';
                        $client = new SOAPClient($wsdl_url);
                        $params = array(
                            'uid_cont' => $_POST['uid']
                        );
                        $result = $client->gruposDeContactoServicioWeb($params);
                        $gru=  json_decode($result->return);

                        for ($a = 0; $a < count($gru); $a++) {  
                            echo "<tr>";  
                            echo "<td>",$gru[$a]->{'uid_grupo'},"</td>";  
                            echo "<td>",$gru[$a]->{'nombre_grupo'},"</td>";  
                            echo "<td>",$gru[$a]->{'descripcion_grupo'},"</td>";  
                            echo "<td>",$gru[$a]->{'fecha_grupo'},"</td>";  
                            echo "</tr>";  
                        }  

                    } catch (Exception $e) {
                        echo "Exception occured: " . $e;
                    }
                    ?>    
                </tbody>
            </table>
        </center>
    </body>
</html>
