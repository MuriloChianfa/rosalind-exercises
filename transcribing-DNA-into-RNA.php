<?php

// ID:  RNA
// RUN: php transcribing-DNA-into-RNA.php

declare(strict_types=1);

// settuping input DNA string
$input = 'GATGGAACTTGACTACGTAAATT';

// result RNA string
$match = 'GAUGGAACUUGACUACGUAAAUU';

// showing input and expecting result
echo "Entering input as: {$input}" . PHP_EOL;
echo "Expecting ouput as: {$match}" . PHP_EOL;

// replacing letters
$output = str_replace('T', 'U', $input);

// verify is its ok
if ($output === $match) {
    echo "Its correct output: {$output}" . PHP_EOL;
    exit(0);
}

echo "This logic is not correct, output: {$output}" . PHP_EOL;

