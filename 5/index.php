<?php 
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 85, 81, 55, 90, 91, 98];

$result = array_intersect($bil1, $bil2);
echo "<h4>Bilangan yang ada di kedua variabel:</h4>";
echo implode(", ", $result);

$beda1 = array_diff($bil1, $bil2);
$beda2 = array_diff($bil2, $bil1);
echo "<h4>Bilangan yang tidak ada di kedua variabel:</h4>";
echo implode(", ", ( array_merge($beda1, $beda2)));
