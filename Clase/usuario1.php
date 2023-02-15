<html>

<body>
    <?php
    $nombre = $_POST['id'];
    $apellido = $_POST['ap'];
    $sexo = $_POST['sexo'];
    $titulo =  $_POST['titulo'];
    echo 'Bienvenido ' . $nombre . ' ' . $apellido . '<br>' . 'Tipo de sexo: ' . $sexo
        . '<br>' . 'Tipo de título: ' . $titulo;
    ?>
</body>

</html>