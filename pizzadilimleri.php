<?php

$pizza  = "dilim1 dilim2 dilim3 dilim4 dilim5 dilim6";
$dilimler = explode(" ", $pizza);

echo $dilimler[0]; // dilim1
echo $dilimler[1]; // dilim2

$pizzaYeni = array();

foreach (range(1,8) as $dilim) {
    $pizzaYeni[] = "Dilim-" . $dilim;
}

echo "Yeni pizza toplam " . count($pizzaYeni) . " dilimdir.";
print_r($pizzaYeni);

?>
