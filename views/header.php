<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/default.css">
</head>
<body>
    <div id="header">
        <nav id="menu">
        <!--we create anchor with absolute references-->
        <a id="logo" href="<?php echo constant('URL')?>main"><h3>San Bernardo</h3></a>
            <ul>
                <li><a href="<?php echo constant('URL')?>main">Inicio</a></li>
                <li><a href="<?php echo constant('URL')?>mission">Mision</a></li>
                <li><a href="<?php echo constant('URL')?>program">Programa</a></li>
                <li><a href="<?php echo constant('URL')?>student">Alumno</a></li>
                <li><a href="<?php echo constant('URL')?>contact">Contacto</a></li>
            </ul>
        </nav>
        <a href="<?php echo constant('URL')?>login">Login</a>
    </div>
</body>
</html>