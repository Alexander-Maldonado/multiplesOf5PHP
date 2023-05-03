<?php
$i=0;
$number = 5;

for ($i = 0; $i < 1000001; $i++) {
    if ($i % $number == 0) {
        echo $i. '<br>';
    }
}

?>