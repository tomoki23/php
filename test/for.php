<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<hr>";


for ($i = 1; $i <= 31; $i++) {
    echo $i . "&nbsp;";
    if ($i % 7 == 0) {
        echo "<br>";
    }
}
