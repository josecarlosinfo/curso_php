<?php
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
if ($n1 > $n2) {
    echo "<script>alert('El numero uno es mayor')</script>";
    echo "<script>window.location='tabla.php'</script>"; //regresa a la pagina
} else {
    if ($n1 == $n2) {
        echo "<script>alert('Los numeros son iguales')</script>";
        echo "<script>window.location='tabla.php'</script>";
    } else {
        echo "<script>alert('El numero dos es mayor')</script>";
        echo "<script>window.location='tabla.php'</script>";
    }
}
