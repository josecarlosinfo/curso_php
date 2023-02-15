<html>

<head>
    <title>Ejemplo de PHP</title>
</head>

<body>
    <?php
    echo strlen("12345"), "<br>"; //devuelve el número de caracteres

    $palabras = str_split("Esto es una prueba", 5);

    $j = count($palabras);

    for ($i = 0; $i < $j; ++$i)
        echo $palabras[$i] . "<br>";

    $resultado = sprintf("8x5 = %d <br>", 8 * 5);
    echo $resultado . "<br>";
    $nom3 = '<input type="text" name="" id="">';
    echo $nom3;


    echo substr("Devuelve una subcadena de otra", 9, 3), "<br><br>";
    if (chop("Cadenas \n\n ") == "Cadena") //elimina saltos de línea y espacios
        echo "Iguales<br><br>";
    else {
        echo "Difetentes<br><br>";
    }
    echo strpos("Busca la palabra dentro de la frase", "la"), "<br><br>";

    $nom1 = 'Carlos';
    $nom2 = 'Jose ';
    echo str_replace($nom3, $nom2, "Un pez de color Carlos, como Carlos es la
hierba."), "<br>";

    ?>
</body>

</html>