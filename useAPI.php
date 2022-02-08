<?php
    $contents = file_get_contents('https://economia.awesomeapi.com.br/json/last/USD-BRL');
    $jsonValues = json_decode($contents, true);

    $json = json_encode($jsonValues, JSON_PRETTY_PRINT);
    echo $json;

    $valor = $jsonValues['USDBRL']['high'];
    $hora = $jsonValues['USDBRL']['create_date'];
    
    echo "\n\nÀs $hora o valor do dólar é R$$valor\n";
?>