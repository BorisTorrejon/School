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
        <div class="center"><?php echo $this->mensaje;?></div>
        <form action="<?php echo constant('URL'); ?>student/registerStudent" method="POST">
            <label for="matricula">Matricula</label>
            <input type="text" name="matricula" required><br>
            <label for="name">Nombre</label>
            <input type="text" name="name" required><br>
            <label for="surname">Apellido</label>
            <input type="text" name="surname" required><br>
            <input type="submit" value="Registrar Alumno">
        </form>
        <!--if student is not empty create table -->
        <?php if(!empty($this->students)){
        ?>
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($this->students as $row)
                    {
                        $student = new StudentM();
                        $student = $row;
                ?>
                <tr>
                    <td><?php echo $student->matricula?></td>
                    <td><?php echo $student->name?></td>
                    <td><?php echo $student->surname?></td>
                    <td><a href="#">editar</a></td>
                    <td><a href="#">eliminar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php };?>
    </div>
    <?php require "./views/footer.php";?>
</body>
</html>