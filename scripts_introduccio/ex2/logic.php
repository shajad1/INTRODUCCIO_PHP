<?php
if ($_POST) {
    $euro_dolar = $_POST['euro_dolar'];
    $conv_euro_dolar = $euro_dolar * 1.1; 
    echo "El valor del euro en dólares es: " . $conv_euro_dolar;

    $dolar_euro = $_POST['dolar_euro'];
    $conv_dolar_euro = $dolar_euro * 0.91;
    echo "<br>El valor del dólar en euros es: " . $conv_dolar_euro;
} 
?>