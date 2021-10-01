<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prvni pole</title>
</head>
<body>

<?php
$computer = array(
'CPU' =>         "AMD Ryzen 7 3700x",
'RAM' =>         "2X HyperX Predator 8GB DDR4 3200",
'SDD' =>         "Samsung SSD 860 Pro, 2,5 - 1TB",
'CASE' =>        "Thermaltake View 21 TG RGB PLUS",
'KEYBOARD' =>    "Logitech G213 Prodigy, US",
'GPU' =>         "MSI GeForce GTX 1660 GAMING 6G, 6GB GDDR5",
'MOUSE' =>       "A4Tech Bloody V7 Ultra Core 3",
'HEADPHONES' =>  "HyperX Cloud II Wireless",
'DISPLAY' =>     "Dell S2721HGF - LED monitor 27",
'MAINBOARD' =>    "GIGABYTE B450M DS3H - AMD B450",
'FAN' =>          "Arctic Freezer 7 X",
);
?>

<h1>Můj Počítač</h1>
Procesor :      <?= $computer ['CPU'] ?>
Ram paměť :     <?= $computer ['RAM'] ?>
SSD disk :      <?= $computer ['SDD'] ?>
Case na PC :    <?= $computer ['CASE'] ?>
Klávesnice :    <?= $computer ['KEYBOARD'] ?>
Grafická karta :<?= $computer ['GPU'] ?>
Myš :           <?= $computer ['MOUSE'] ?>
Sluchátka :     <?= $computer ['HEADPHONES'] ?>
Monitor :       <?= $computer ['DISPLAZ'] ?>
Základní deska :<?= $computer ['MAINBOARD'] ?>
Větrák :        <?= $computer ['FAN'] ?>

</body>
</html>