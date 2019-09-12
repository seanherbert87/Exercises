<?php

// FizzBuzz example
$output = '';
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        $output .= 'Fizz';
    } elseif ($i % 5 === 0) {
        $output .= 'Buzz';
    } else {
        $output .= $i;
    }
    $output .= ',';
}
$output = trim($output, ',');
echo $output;
