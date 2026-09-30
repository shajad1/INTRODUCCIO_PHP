<?php
$hora = date("H");

if ($hora >= 5 && $hora < 14) {
    echo "Bon dia";
} elseif ($hora >= 14 && $hora < 19) {
    echo "Bona tarda";
} else {
    echo "Bona nit";
}

echo "<br> L'hora del servidor és: " . date("H:i:s");
?>