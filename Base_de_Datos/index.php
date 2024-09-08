<?php

$pdo = new PDO('mysql:host=localhost;dbname=escuela', 'root', '');


$stmt = $pdo->prepare("SELECT * FROM estudiantes");
$stmt->execute();

$estudiantes = $stmt->fetchAll(PDO::FETCH_NUM);
echo "<br><br>FETCH NUM <br><pre>";
print_r($estudiantes);
echo "</pre>";

$stmt = $pdo->prepare("SELECT * FROM estudiantes");
$stmt->execute();

?>