<?php 

    include ('./conexion.php');

    if(isset($_POST['send'])){
        $nrodocumento = $_POST['nrodocumento'];
        $nombreusuario = $_POST['nombreusuario'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $departamento = $_POST['departamento'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];

        $query = "INSERT INTO Registro (nrodocumento, nombreusuario, email, password, departamento, ciudad, direccion, telefono) 
            VALUES ('$nrodocumento', '$nombreusuario', '$email', '$password', '$departamento', '$ciudad', '$direccion', '$telefono')";

        if (mysqli_query($conn, $query)) {
            header('Location: ../indexR.html');
        } else {
            echo "Error";
        }
    }
?>