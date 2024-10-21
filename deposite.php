<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>deposit</title>
</head>
<body>
<h1>Расчет депозита на 20 лет</h1>
<table>
    <tr><th>year</th><th>total</th><th>profit</th></tr>
    <?php
    $deposit = 300;
    $rate = 0.20;

    for ($year = 1; $year <= 20; $year++) {
        $profit = $deposit * $rate;
        $deposit += $profit;
        echo "<tr><td>$year</td><td>" . round($deposit, 2) . "</td><td>" . round($profit, 2) . "</td></tr>";
    }
    ?>
</table>
</body>
</html>
