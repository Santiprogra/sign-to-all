<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="contai" >
        <div class="container">
            <div class="logo">
                <img src="https://unagallega.files.wordpress.com/2020/03/debujos-animados-famosos.jpg?w=980&h=600&crop=1" alt="Logo de la empresa">
            </div>
            <form method="post">
                <div class="form-group">
                    <label for="username">Documento</label>
                    <input type="text" id="documento" name="documento" placeholder="Ingrese su Documento" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Iniciar Sesión" name="login">
                </div>
            </form>
        </div>
        <div class="container">
            <div class="logo">
                <img src="https://unagallega.files.wordpress.com/2020/03/debujos-animados-famosos.jpg?w=980&h=600&crop=1" alt="Logo de la empresa">
            </div>
            <form method="post">
                <div class="form-group">
                    <label for="username">Documento</label>
                    <input type="number" id="documento" name="doc" placeholder="Ingrese su Documento" required>
                </div>
                <div class="form-group">
                    <label for="password">Nombre</label>
                    <input type="text" id="password" name="nom" placeholder="Ingrese su Nombre" required>
                </div>
                <div class="form-group">
                    <label for="password">Apellido</label>
                    <input type="text" id="password" name="ape" placeholder="Ingrese su Apellido" required>
                </div>
                <div class="form-group">
                    <label for="password">Rol</label>
                    <select name="rol" id="">
                        <option value="Estudiante">Estudiante</option>
                        <option value="Profesor">Profesor</option>

                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Registrarse" name="enviar">
                </div>
            </form>
        </div>
    </section>


</body>

</html>