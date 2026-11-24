
<html>
<body>
<?php

$states = "Mississippi Alabama Texas Massachusetts Kansas";

$b = explode(' ', $states);

echo "<br>ORIGINAL ARRAY :<br>";

foreach ($b as $i => $value) {
    echo "states[$i] = $value<br>";
}

$d = array();

foreach ($b as $c) {
    $n = strlen($c);
    if (substr($c, -3) == "xas") {
        $d[0] = $c;
    }

    if ($c[0] == 'K' && $c[$n-1] == 's') {
        $d[1] = $c;
    }

    if ($c[0] == 'M' && $c[$n-1] == 's') {
        $d[2] = $c;
    }
    if ($c[$n-1] == 'a') {
        $d[3] = $c;
    }
}

ksort($d);

echo "<br>RESULTANT ARRAY :<br>";

foreach ($d as $i => $value) {
    echo "statesList[$i] = $value<br>";
}

?>
</body>
</html>
