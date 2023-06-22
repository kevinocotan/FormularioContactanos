<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Nuevo Contacto</title>
</head>
<body>
    <div class="text-center">
        <img src="img/infinitysoftware.png" class="img-fluid mt-3" style="width:150px">
    </div>

    <h1 class="text-center mb-3">Formulario de Contacto.</h1>
        <form class="w-50 mx-auto" method="POST" action="guardarcontacto.php"> 
            
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">País</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="pais" name="pais">
                <option selected>Seleccione el país: </option>
                <option value="El Salvador">El Salvador</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Honduras">Honduras</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Costa Rica">Costa Rica</option>
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Electrónico</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="mail" name="mail">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Asunto</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="asunto" name="asunto">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mensaje</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="floatingTextarea" id="mensaje" name="mensaje"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-dark ms-3 mb-3">Guardar</button>
        </form>
</body>
</html>