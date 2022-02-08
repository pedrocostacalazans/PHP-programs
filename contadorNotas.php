<?php

   $valor = readLine('Digite um valor: ');

   while($valor > 0){
        if($valor % 100 == 0){
                echo(($valor/100)." nota(s) de 100\n");
                $valor -= (($valor/100) * 100);
        } else if($valor % 50 == 0){
                echo(($valor/50)." nota(s) de 50\n");
                $valor -= (($valor/50) * 50);
        } else if($valor % 25 == 0){
                echo(($valor/25)." nota(s) de 25\n");
                $valor -= (($valor/25) * 25);
        } else if($valor % 10 == 0){
                echo(($valor/10)." nota(s) de 10\n");
                $valor -= (($valor/10) * 10);
        } else if($valor % 5 == 0){
                echo(($valor/5)." nota(s) de 5\n");
                $valor -= (($valor/5) * 5);
        } else if($valor % 2 == 0){
                echo(($valor/2)." nota(s) de 2\n");
                $valor -= (($valor/2) * 2);
        } else if($valor % 1 == 0){
                echo(($valor/1)." nota(s) de 1\n");
                $valor -= (($valor/1) * 1);
        }
   }

?>