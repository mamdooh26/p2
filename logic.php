<?php
$waysOfSplit = $_GET['waysOfSplit'];
$tabCost = $_GET['tabCost'];
$serviceRating = $_GET['serviceRating'];
$roundUp = $_GET['roundUp'];
if ($roundUp == 1) {
    $owns = round(((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit);
} else {
    $owns = ((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit;
}
?>