<?php
	$dtz = new DateTimeZone("America/Sao_Paulo");
	$dt = new DateTime("now", $dtz);
	$data = $dt->format('Y.m.d H:i');

	// Limpar tela no linux, MacOS, Windows(Powershell)
	system('clear');
	system('git add -A');
	system('git commit -m "' . $data . '"');
	system('git push');
?>
