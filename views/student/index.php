<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
</head>
<body>
    <?php require "./views/header.php";?>
    <div id="main">
        <h1 class="center"> Nuevo Alumno</h1>
        <form action="<?php echo constant('URL'); ?>student/registerStudent" method="POST">
            <label for="matricula">Matricula</label>
            <input type="text" name="matricula" required><br>
            <label for="name">Nombre</label>
            <input type="text" name="name" required><br>
            <label for="surname">Apellido</label>
            <input type="text" name="surname" required><br>
            <input type="submit" value="Registrar Alumno">
        </form>
    </div>
    <?php require "./views/footer.php";?>
</body>
</html>