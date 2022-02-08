<?php
echo 'Ordem crescente alfabetica: ' . "\n";
$cars = array("Volvo", "BMW", "Toyota");
echo "Antes: ";
print_r($cars);

sort($cars);

echo "Depois: ";
print_r($cars);
echo "\n";

echo 'Ordem decrescente numerica: ' . "\n";
$numbers = array(4, 6, 2, 22, 11);
echo "Antes: ";
print_r($numbers);

rsort($numbers);

echo "Depois: ";
print_r($numbers);
echo "\n";


// Ordem crescente de acordo com o valor
echo 'Ordem crescente de acordo com o valor: ' . "\n";
echo "Antes: ";
$age = array("Pedro"=>"19", "Joao"=>"17", "Lucas"=>"18");
print_r($age);
asort($age);

echo "Depois: " . "\n";
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "\n";
}
echo "\n";

// Ordem crescente de acordo com a chave
echo 'Ordem crescente de acordo com a chave: ' . "\n";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Antes: ";
print_r($age);

ksort($age);

echo "Depois: " . "\n";
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "\n";
}
?>