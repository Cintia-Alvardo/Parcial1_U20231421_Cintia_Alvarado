<?php

$resultadoOperacion = '';
$errorOperacion = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $primerNumero = $_POST['primerNumero'];
    $segundoNumero = $_POST['segundoNumero'];
    $Operacion = $_POST['tipoOperacion'];

    switch ($Operacion) {
        case 'suma':
            $resultadoOperacion = $primerNumero + $segundoNumero;
            break;
        case 'resta':
            $resultadoOperacion = $primerNumero - $segundoNumero;
            break;
        case 'multiplicacion':
            $resultadoOperacion = $primerNumero * $segundoNumero;
            break;
        case 'division':
            if ($segundoNumero == 0) {
                $errorOperacion = 'Error: División por cero no permitida.';
            } else {
                $resultadoOperacion = $primerNumero / $segundoNumero;
            }
            break;
        default:
            $errorOperacion = 'Operación no válida.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }
        input[type="number"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result,
        .error {
            margin-top: 20px;
            font-size: 18px;
            text-align: center;
        }
        .result {
            color: #007bff;
        }
        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora Simple</h1>
        <form method="post" action="">
            <label for="primerNumero">Número 1:</label>
            <input type="number" id="primerNumero" name="primerNumero" step="any" required>
            
            <label for="segundoNumero">Número 2:</label>
            <input type="number" id="segundoNumero" name="segundoNumero" step="any" required>
            
            <label for="tipoOperacion">Operación:</label>
            <select id="tipoOperacion" name="tipoOperacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
            
            <input type="submit" value="Calcular">
        </form>

        <?php
        
        if ($errorOperacion) {
            echo "<p class='error'>$errorOperacion</p>";
        } elseif ($resultadoOperacion !== '') {
            echo "<p class='result'>Resultado: $resultadoOperacion</p>";
        }
        ?>
    </div>
</body>
</html>
