<?php
    libxml_use_internal_errors(use_errors:true);

    $html = file_get_contents('https://www.climatempo.com.br/previsao-do-tempo/cidade/107/belohorizonte-mg');
    $domDocument = new DOMDocument();
    $domDocument->loadHTML($html);

    $spanTags = $domDocument->getElementsByTagName("span");

    foreach ($spanTags as $span) {
        if ($span->getAttribute('class') == '_margin-l-5') {
            $texto = $span->textContent;
            $arr = explode("-\n", $texto);
            echo 'Web Scrapping com conteudo do site climatempo.com.br'. "\n";
            echo 'Chance de chuva em BH: '. $arr[1] . "\n";
        }
    }