<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cursos Online</title>
</head>
<body>
    <div class="text-center">
        <img src="img/infinitysoftware.png" class="img-fluid mt-3" style="width:150px">
    </div>
    
    <h1 class="text-center mt-2">Listado de Contactos.</h1>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>País</th>
                <th>Correo Electrónico</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $conexion=new mysqli("localhost","root","Catolica10@","cursos_online");
                $registros=$conexion->query("Select * from contactos order by id_contacto");
                while($fila=$registros->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>{$fila["id_contacto"]}</td>";
                    echo "<td>{$fila["nombre"]}</td>";
                    echo "<td>{$fila["pais"]}</td>";
                    echo "<td>{$fila["mail"]}</td>";
                    echo "<td>{$fila["asunto"]}</td>";
                    echo "<td>{$fila["mensaje"]}</td>";
                    echo "<td>
                    <a type='button' class='btn btn-dark ms-3 mb-3' href='editarcontacto.php?id={$fila["id_contacto"]}'>Editar</a>
                    <a type='button' class='btn btn-dark ms-3 mb-3' href='eliminarcontacto.php?id={$fila["id_contacto"]}'>Eliminar</a>
                    </td>";
                    echo "</tr>";
                }               
            ?>
        </tbody>
    </table>
</body>
    <a type="button" class="btn btn-dark ms-3 mb-3" href="nuevocontacto.php">Nuevo Contacto</a>
</html>