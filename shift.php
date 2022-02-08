<?php
    // deslocar posições no vetor
    function rotacionar($vetor, $posicoes) {
        $vetor = array_values($vetor);
        $tamanho = count($vetor);
        $posicoes = $posicoes % $tamanho;
        $vetor = array_merge(array_slice($vetor, $posicoes), array_slice($vetor, 0, $posicoes));
        return $vetor;
    }

    $vetor = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    echo 'Vetor original: ';
    print_r($vetor);
    $posicoes = readLine('Digite a quantidade de posições para rotacionar: ');
    echo 'Vetor rotacionado: ';
    print_r(rotacionar($vetor, $posicoes));
