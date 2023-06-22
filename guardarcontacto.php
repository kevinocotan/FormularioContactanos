<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Guardar Contacto</title>
</head>
<body>
    <h1 class="text-center mb-3" >Se ha guardado el contacto con éxito. </h1>
    <a type="button" class="btn btn-dark ms-3 mb-3" href="listadocursos.php">Ver Listado</a>
    <?php
    $conexion=new mysqli("localhost","root","Catolica10@","cursos_online");
    $resultado=$conexion->query("insert into contactos set nombre='{$_POST["nombre"]}', pais='{$_POST["pais"]}', mail='{$_POST["mail"]}', asunto='{$_POST["asunto"]}', mensaje='{$_POST["mensaje"]}'" );
    ?>
</body>
</html>