<html>
    <body>
    <?php
    
   // Recorrer la siguiente lista con un bucle imprimiendo el doble de cada número:
    $my_list = array(1,9,3,8,5,7);
    for ($i=0; $i < count($my_list) ; $i++) {

        $doble = 2;
        echo 'el doble de mi lista es  : '.$my_list[$i]*$doble."<br/>";
    }
    
    ?>  

    </body>
</html>
