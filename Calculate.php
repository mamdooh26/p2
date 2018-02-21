<?php
namespace DWA;

class Calculate
{
    private $owns;

    public function own($waysOfSplit, $tabCost, $serviceRating, $roundUp)
    {
        if ($roundUp == 1) {
            $this->owns = round(((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit);
        } else {
            $this->owns = ((($tabCost / 100) * $serviceRating) + $tabCost) / $waysOfSplit;
        }

        return $this->owns;
    }
}