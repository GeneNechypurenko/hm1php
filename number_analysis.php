<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>number analysis</title>
</head>
<body>
<h1>Анализ числа</h1>
<?php
$number = 347689;
$digits = str_split($number);
$count = count($digits);
$max = max($digits);
$min = min($digits);
$sum = array_sum($digits);
$average = $sum / $count;

echo "number: $number<br>";
echo "digits: " . implode(", ", $digits) . "<br>";
echo "count: $count<br>";
echo "max: $max<br>";
echo "min: $min<br>";
echo "total: $sum<br>";
echo "average: " . round($average, 2) . "<br>";
?>
</body>
</html>
