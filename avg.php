<?php
function srednia($numbers) {
    return array_sum($numbers) / count($numbers);
}
?>

<?php
function srednia_wazona($numbers, $weights) {
    $sum = 0;
    $weight_sum = 0;
    foreach ($numbers as $index => $number) {
        $sum += $number * $weights[$index];
        $weight_sum += $weights[$index];
    }
    return $sum / $weight_sum;
}
?>

Inne wagi 7=>9, 3=q>1
