<?php
declare(strict_types=1); // Strict requirement

function addNumbers(int $a, int $b) {
    return $a + $b;
}

echo addNumbers(5, 5); // Throws an error in strict mode
?>
