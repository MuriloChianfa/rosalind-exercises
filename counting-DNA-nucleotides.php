<?php

// ID:  DNA 
// RUN: php counting-DNA-nucleotides.php

declare(strict_types=1);

// settuping input DNA string
$input = 'AGCTTTTCATTCTGACTGCAACGGGCAATATGTCTCTGTGTGGATTAAAAAAAGAGTGTCTGATAGCAGC';

// Expecting result
$match = (object) ['A' => 20, 'C' => 12, 'G' => 17, 'T' => 21];

// couting letters
define('GROUP_BY_LETTER', 1);
$sample = count_chars($input, GROUP_BY_LETTER);

// grouping by letters
$output = (object) array_merge(...array_map(function ($letter, $occurrences) {
    return [chr($letter) => $occurrences];
}, array_keys($sample), array_values($sample)));

// Showing the result
echo "Expecting:  A={$match->A}, T={$match->T}, C={$match->C}, G={$match->G}" . PHP_EOL;
echo "Calculated: A={$output->A}, T={$output->T}, C={$output->C}, G={$output->G}" . PHP_EOL;

if ($match == $output) {
    echo "Its the same." . PHP_EOL;
    exit(0);
}

echo "Its not equals!" . PHP_EOL;

