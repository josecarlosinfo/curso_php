<html>

<body>

    <?php
    //cree un vector de numeros del 1 aL 10
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    //Reinicio resultado
    echo '<h1>Numeros al cuadrado y al cubo</h1>';
    //un bucle for para recorrer y poder mostrar los datos 
    for ($i = 0; $i < count($numeros); $i++) {
        //uso pow que es una funcion de php para crear valores elevados al numero que necesitemos
        $resultado = $numeros[$i] . '² = ' . pow($numeros[$i], 2) .
            ' <br/> ' . $numeros[$i] . '³ = ' . pow($numeros[$i], 3) . '<br/><br/>';
        //imprimo el resultado 
        echo $resultado;
    }
    ?>
</body>

</html>