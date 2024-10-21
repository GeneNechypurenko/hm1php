<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>random number generator</title>
</head>
<body>
<h1>Генерация 100 случайных чисел</h1>
<?php
$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[] = rand(1, 1000);
}
echo "numbers: " . implode(", ", $numbers) . "<br>";
echo "max: " . max($numbers) . "<br>";
echo "min: " . min($numbers) . "<br>";
?>
</body>
</html>
