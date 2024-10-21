<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>multiplication table</title>
</head>
<body>
<h1>Таблица умножения от 2 до 10</h1>
<table>
    <?php
    for ($i = 2; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>$i × $j = " . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
