<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
        <?php
            $usuario="root";
            $contraseña="";
            if($mbd = new PDO('mysql:host=localhost;dbname=pruebas', $usuario, $contraseña)){
                echo "conexion existosa";
                $val=$mbd->prepare('select * from persona');
                $val->execute();
                $arrDatos = $val->fetchAll(PDO::FETCH_ASSOC);
                echo '<pre>';
                var_dump($arrDatos);
                echo '</pre>';
            }
            
        ?>
    </body>
</html>
