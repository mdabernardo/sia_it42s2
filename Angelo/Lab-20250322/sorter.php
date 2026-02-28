<?php
$numbers = [];

echo "Enter 10 numbers:\n";

for ($i = 1; $i <= 10; $i++) {
    echo "Number $i: ";
    $input = trim(fgets(STDIN));
    $numbers[] = $input;
}

sort($numbers);

echo "\nSorted Numbers (Ascending Order):\n";
foreach ($numbers as $num) {
    echo $num . "\n";
}
?>