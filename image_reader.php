<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>image reader</title>
</head>
<body>
<h1>Вывод картинок из папки</h1>
<?php
$images = glob("images/*.{jpg,png,gif}", GLOB_BRACE);
foreach ($images as $image) {
    echo "<img src='$image' height='200' width='250'>";
}
?>
</body>
</html>
