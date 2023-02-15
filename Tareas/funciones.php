<html>

<head>

<body>
  <?php
  //cree 3 variales 
  $pi = 3.1416;
  $radio = 2;
  $altura = 2;

  //cree una funcion de le llame calculo
  function calculo($pi, $radio, $altua)
  {
    //cree una variable donde almaceno el calculo que voy a realizar
    $volumen = $pi * $radio * $radio * $altua;

    //retorno el calculo 
    return $volumen;
  }
  //imprimo el calculo que realizo con la funcion que llame 
  echo calculo($pi, $radio, $altura);

  ?>
</body>
</head>

</html>