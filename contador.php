<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$contador = $_POST['n3'];

while ($n1 <= $n2) {
    echo $n1."<br>";
    $n1+=$contador;
}