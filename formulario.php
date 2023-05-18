<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleform.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="scriptform.js"></script>
</head>
<body>
    <div>
        <fieldset>
            <div class="form-container">
                <form method="post" name="myForm" action="" >
                    <legend>Formulario de Registro</legend>
                        <div>
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="nombre" oninput=validateName()  required>
                            <i id="check-name"></i>
                            <span name="prueba" id="u_name_msj"></span>
                            
                        </div>
                        <div>
                            <label for="Apellido">Apellido</label>
                            <input type="text" name="apellido" oninput=validateLastname()  required>
                            <i id="check-lastname"></i>
                            <span name="prueba" id="u_lastname_msj"></span>
                            
                        </div>
                        <div>
                            <label for="Email">Email</label>
                            <input type="email" name="email" oninput=validateEmail() required>
                            <i id="check-mail"></i>
                            <span id="u_mail_msj" name="prueba"></span>
                        </div>
                            <input type="submit" name="u_submit" value="Registrar">
                </form>
            </div>
        </fieldset>
    <?php
        if ($_POST){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $email=$_POST['email'];
            
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="cursoSQL";

            //Conexión con la base de datos

            $conn = new mysqli( $servername, $username, $password, $dbname);

            //Verificar conexión
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

            //Consulta para buscar si ya existe email
            $sql = "SELECT * FROM usuarios WHERE email='$email'";
            $result = $conn->query($sql);
            
            //Verificar si la consulta devolvió algun resultado

            if ($result->num_rows > 0) {
                echo "<div class='message'>";
                echo "<h2>Error</h2>";
                echo "<p>Ya existe un usuario con el mismo correo electrónico $email </p>";
                echo "</div>";
            } else {
                $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
            }

            if($conn->query($sql)===TRUE){
                echo "<div class='message'>";
                echo "<h1>Formulario enviado correctamente</h1>";
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Apellido: $apellido</p>";
                echo "<p>Email: $email</p>";
                echo "</div>";
            } 
            //Cerrar coneccion
            $conn->close();
        }
    ?>
</div>
</body>
</html>
