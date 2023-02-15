<html>

<body>
    <?php
    $usuario = $_POST['id'];
    $pass = $_POST['password'];

    $datos = verificarDatos($usuario, $pass);

    if ($verificarDatos)
        echo 'Ingreso con exito el usuario ' . $usuario;
    else

        echo "<script>window.location='usuario.php'</script>";


    function verificarDatos($usuario, $pass)
    {
        if ($usuario == 200 && $pass == 123)
            return true;
        else
            return false;
    }

    ?>
</body>

</html>