
<?php
$a = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$b = array(
    array(7, 8, 9),
    array(4, 5, 6),
    array(1, 2, 3)
);

$m = count($a);
$n = count($a[0]);
$p = count($b);
$q = count($b[0]);

echo "First Matrix:<br>";

for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $n; $col++)
        echo $a[$row][$col] . " ";
    echo "<br>";
}

echo "Second Matrix:<br>";

for ($row = 0; $row < $p; $row++) {
    for ($col = 0; $col < $q; $col++)
        echo $b[$row][$col] . " ";
    echo "<br>";
}

// Transpose of First Matrix
echo "Transpose of First Matrix:<br>";

for ($row = 0; $row < $n; $row++) {
    for ($col = 0; $col < $m; $col++)
        echo $a[$col][$row] . " ";
    echo "<br>";
}

// Transpose of Second Matrix
echo "Transpose of Second Matrix:<br>";

for ($row = 0; $row < $q; $row++) {
    for ($col = 0; $col < $p; $col++)
        echo $b[$col][$row] . " ";
    echo "<br>";
}

// Addition of Transpose Matrices
if ($m == $p && $n == $q) {
    echo "Addition of Transpose Matrices:<br>";

    for ($row = 0; $row < $n; $row++) {
        for ($col = 0; $col < $m; $col++)
            echo ($a[$col][$row] + $b[$col][$row]) . " ";
        echo "<br>";
    }
}
?>
