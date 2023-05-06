<?php
for ($i = 10; $i > 0; $i--) {
    echo $i . "&nbsp;";
}

echo "<hr>";

$i = 10;
while ($i > 0) {
    echo $i . "&nbsp;";
    $i--;
}

echo "<hr>";

$total = 10;

switch ($total) {
    case 10:
        echo "10";
        break;
    case 20:
        echo "20";
        break;
    default:
        echo "その他";
}
