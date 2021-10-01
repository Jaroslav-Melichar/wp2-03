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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prvni pole</title>
</head>
<body>

<h1>Můj Počítač</h1>

Procesor :      <?= $computer ['CPU'] ?>            <br>
Ram paměť :     <?= $computer ['RAM'] ?>            <br>
SSD disk :      <?= $computer ['SDD'] ?>            <br>
Case na PC :    <?= $computer ['CASE'] ?>           <br>
Klávesnice :    <?= $computer ['KEYBOARD'] ?>       <br>
Grafická karta :<?= $computer ['GPU'] ?>            <br>
Myš :           <?= $computer ['MOUSE'] ?>          <br>
Sluchátka :     <?= $computer ['HEADPHONES'] ?>     <br>
Monitor :       <?= $computer ['DISPLAZ'] ?>        <br>
Základní deska :<?= $computer ['MAINBOARD'] ?>      <br>
Větrák :        <?= $computer ['FAN'] ?>            <br>



</body>
</html>