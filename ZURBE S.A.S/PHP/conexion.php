<?php 

    $server = 'localhost';
    $user = 'root';
    $pasword = '';
    $dbname = 'zurbe';

    try {
        $conn = mysqli_connect($server, $user, $pasword, $dbname );
        if (!$conn) {
            die("Conexión no establecida" . mysqli_connect_error());
        }
    } catch (ErrorException $e) {
        echo $e->getMessage();
    }

?>