<html>
    <head>
        <body>
            <h1>Tabla de multiplicar con for</h1>
            <br>
            <?php
            //cree dos variables
            $multiplicando = 10;
            $multiplicador;
            //use el for para crear un bucle que sea hasta el 10
            for($multiplicador= 1; $multiplicador <=10 ; $multiplicador++){
                //retrono el resulado en pantalla
                echo "$multiplicando * $multiplicador = ".$multiplicador*$multiplicando."<br/><br/>";
            }
            ?>
            <br>
            <h1>Tabla de multiplicar con while de mayor a menor</h1>
            <?php      
            $multiplicador = 10;
            $multiplicando1 = 10;
            while ($multiplicador >= 1) {             
                echo " $multiplicando1 * $multiplicador = ".$multiplicador*$multiplicando1."<br/><br/>";
                $multiplicador--;
            }
            ?>       
        </body>
    </head>
</html>  