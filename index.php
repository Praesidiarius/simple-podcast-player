<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bullshit Theorie</title>
</head>
<body>
<h1>
    Bullshit Theorie
</h1>
<?php
for($i = 1;$i <= 49;$i++) {
?>
<h2>
    Teil <?=$i?>
</h2>
<audio controls>
    <source src="Sprache 0<?=str_pad($i, 2, "0", STR_PAD_LEFT)?>.m4a" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<?php
}
?>
</body>
</html>