<?php
//$waysOfSplit = $_GET['waysOfSplit'];
//$tabCost = $_GET['tabCost'];
//$serviceRating = $_GET['serviceRating'];
//$roundUp = $_GET['roundUp'];

$form = new DWA\Form($_GET);
$waysOfSplit = $form->get('waysOfSplit');
$tabCost = $form->get('tabCost');
$serviceRating = $form->get('serviceRating');
$roundUp = $form->get('roundUp');
if ($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'waysOfSplit' => 'required|numeric',
            'tabCost' => 'required|numeric',
        ]
    );
    if ($roundUp == 1) {
        $owns = round(((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit);
    } else {
        $owns = ((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit;
    }
}
?>