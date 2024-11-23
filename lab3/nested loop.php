<?php
for ($i = 0; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 4-$i; $j++) {
        echo "".$j." ";
    }
    echo "<br>";
}
echo "<br>";
$letters = ['A', 'B', 'C', 'D', 'E', 'F'];
$index = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 4 - $i; $j++) {
        echo $letters[$index++] . " ";
    }
    echo "<br>";
}
?>