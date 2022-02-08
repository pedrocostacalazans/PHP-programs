<?php
//verificar palindromo
$palavra = readline("Digite uma palavra para verificar se é palindromo: ");
$palindromo = str_split($palavra);
$palindromo = array_reverse($palindromo);
$palindromo = implode($palindromo);

if ($palavra == $palindromo) {
    echo 'É palindromo';
} else {
    echo 'Não é palindromo';
}