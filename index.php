<?php
include 'classes/characterBasedDrawing.php';

$xDraw = new CharacterBasedDrawing([0, 4], [1, 3], [2], [1, 3], [0, 4]);
$crossDraw = new CharacterBasedDrawing([2], [1, 2, 3], [2], [2], [2]);

$xDraw->printOnConsole();
echo "\n";
$crossDraw->printOnConsole();
?>