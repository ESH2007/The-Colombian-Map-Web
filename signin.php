<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $base_datos = "init";

    $enlace = mysqli_connect($servidor, $usuario, $password, $base_datos);

    if(!$enlace){
        echo "Error: No se pudo conectar a MySQL.";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="post">
            <a href="index.html"><img class="mb-4" src="./img/logo2-removebg-preview.png" alt="" width="322" height="131"></a>
            <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>

            <div class="form-floating">
                <input name="nombre" type="username" class="form-control" id="floatingInput" placeholder="username" required>
                <label for="floatingInput">Your Username</label>
            </div>
            <div class="form-floating">
                <input name="fecha_de_nacimiento" type="date" class="form-control" id="floatingInput" placeholder="date" required>
                <label for="floatingInput">Your date of birth</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="correo" type="email" class="form-control" id="floatingInput" placeholder="name@example.com"required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <select name="sexo" type="sex" class="form-control" id="floatingInput" placeholder="name@example.com"required>
                    <option value="Male">Male</option>
                    <option value="Women">Women</option>
                </select>
                <label for="floatingInput">Sex</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button name='signIn' class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>


</body>

</html>
<?php
    if(isset($_POST['signIn'])){
        $nombre = $_POST["nombre"];
        $fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
        $correo = $_POST["correo"];
        $sexo = $_POST["sexo"];
        $password = $_POST["password"];
        $id__usuarios = rand(1,99);

        $insertar_datos = "INSERT INTO usuarios VALUES('$id__usuarios',
                                                    '$nombre',
                                                    '$sexo',
                                                    '$correo',
                                                    '$fecha_de_nacimiento',
                                                    '$password')";
        $ejecutarInsertar = mysqli_query($enlace, $insertar_datos);

        if(!$ejecutarInsertar){
            echo "Error en la linea sql";
        }
    }
?>