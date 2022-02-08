<?php
    $linguagem = array(
    	'first' => 'C',
    	'second' => 'Python',
    	'third' => 'PHP'
    );

    print($linguagem['third'] . "\n");

    $linguagens = ['C', 'Python', 'PHP'];
    $tipos = ['compilada', 'interpretada', 'interpretada'];

    
    print_r(array_map(function($language, $type) {
        return "$language é $type\n";
    }, $linguagens, $tipos));

?>