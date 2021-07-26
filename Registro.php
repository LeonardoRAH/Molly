<?php
//conexión a bd
$conect=new mysqli('localhost', 'Leonardo','VisualStudioCode','login');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./img/candado.jpg" type="image/x-icon">
</head>
<body>
    <style>
        body{
            background: url(https://cochinaditaselhit.com/wp-content/uploads/2015/01/fondo-nuevo4.gif) ;
        }

        table{
            border: 4px solid #353A46;
            background-color: #E0DD15;
        }

        input[type=text], input[type=password]{
            width: 100%;
            padding: 16px 40px;
            border: 4px solid #ccc;
            box-sizing: border-box;
        }

        table img{
          width: 200px; 
          height: 200px;  
        }

        label{
            font-size: 28px;
            font-weight: bold;
            font-family: arial;
        }

        input[type=submit]{
            background-color: #1C94C8;
            color:white;
            padding: 16px 20px;
            border: solid;
            cursor: pointer;
            width: 80%;
        }
    </style>
    <center>
        <img src="./img/Bienvenido.jpg" alt="">
        <form action="" method="post">
            <table>
                <tr>
                    <td colspan="2" style="background-color:#E06815; padding-bottom:5px; padding-top:5px;"><label>REGISTRO</label></td>
                </tr>
                <tr>
                    <td align="center" rowspan="5"><img src="./img/candado.jpg" alt=""></td>
                    <td><label>Usuario</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtusuario" placeholder="Ingrese su usuario"></td>
                </tr>
                <tr>
                <td><label>Password</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="txtpassword" placeholder="Ingrese su contraseña"></td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                </tr>
                <!-- <tr>
                    <td><input type="submit" value="REGISTRATE" style="background-color:#E01E15"></td>
                </tr> -->
            </table>
        </form>
    </center>
</body>
</html>

<?php
error_reporting(0);
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$consulta=mysqli_query($conect,"INSERT INTO `login`(`usuario`, `password`) VALUES ('$nombre','$pass')");
$nr = mysqli_num_rows($query);
if($nr == 1){
    header("Location: PaginaPrincipal.html");
}elseif($nr == 1){
    header("Location: Registro.php");
}

?>