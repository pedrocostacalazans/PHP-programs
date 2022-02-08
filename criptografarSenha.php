<?php
    if(!function_exists("readline")) {
        function readline($prompt = null){
            if($prompt){
                echo $prompt;
            }
            $fp = fopen("php://stdin","r");
            $line = rtrim(fgets($fp, 1024));
            return $line;
        }
    }

    $senha = readline('Digite senha: ');

    $hash = md5($senha);

    echo "O código 'hash' da senha: $senha -> $hash".PHP_EOL;