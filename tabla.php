<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
</head>
<body>
    <h1>Tabla del: </h1>
    <table border="1">
        <?php

    $numero = intval($_GET['numero']);
    if (isset($_GET['numero']) && is_numeric($_GET['numero'])) {
        if ($numero >= 1 && $numero <= 10) {
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$numero x $i = " . ($numero * $i) . "</td>";
                echo "</tr>";
            }
        }
    }
    
    ?>
</table>
</body>
</html>