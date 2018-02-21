<?php
#$form = new DWA\Form($_GET);
$form = new Mamdouh\MyForm($_GET);
$calculate = new DWA\Calculate();
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
    $owns = $calculate->own($waysOfSplit, $tabCost, $serviceRating, $roundUp);
    /*if ($roundUp == 1) {
        $owns = round(((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit);
    } else {
        $owns = ((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit;
    }*/
}
?>