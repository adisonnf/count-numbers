<?php
function process($inputString)
{
    $arr = explode(' ', $inputString);
    $positive = 0;
    $negative = 0;
    $zero = 0;

    foreach ($arr as $v) {
        if ($v > 0) {
            $positive++;
        } elseif ($v < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    return "Выше нуля: $positive, ниже нуля: $negative, равны нулю: $zero";
}

// Ввод с консоли
$inputString = trim(fgets(STDIN));
echo process($inputString) . PHP_EOL;
