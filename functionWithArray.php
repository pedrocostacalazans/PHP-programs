<?php
class Example {
    public function addOne($item) {
        return $item + 1;
    }
    public function doCalculation() {
        $array = array(1, 2, 3, 4, 5);
        $newArray = array_map(array($this, 'addOne'), $array);
        return $newArray;
    }
}

$teste = new Example();
$result = $teste->doCalculation();
print_r($result);