<html>
    <head>
        <body>

          <h1>Numero random #1</h1>
          <?php

          $num = rand(1,100);
          
          switch ($num) {
            case $num<= 50:
              echo 'El numero es menor a 50 y es: '.$num;           
                break;
            case $num> 50:
              echo 'El numero es mayor a 50 y es: '.$num;
                break;  
            default:
              echo 'Horror :P';
              break;
        }
          
          ?>
          
          <h1>Generar valor aleatorio #2</h1>

          <?php

          $num = rand(1,5);
          echo '';
          switch ($num) {
            case 1:
              echo 'Uno => '.$num;       
                break;
            case 2:
              echo 'Dos => '.$num;
                break;
            case 3:
              echo 'Tres => '.$num;
                break;  
            case 4:
              echo 'Cuatro => '.$num;
                break; 
            case 5:
              echo 'Cinco => '.$num;
                break; 
            default:
              echo 'Seguro que es un numero del 1 al 5?  1 :P';
              break;
        }
          ?>
          
        </body>
        
    </head>
</html>
