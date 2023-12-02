<?php
$estDebug = false;
if ($estDebug) {
	ini_set('display_errors', 1);
}
function debug(?array $valeur): void
{
	echo "<pre>";
	print_r($valeur);
	echo "</pre>";
}

function transformationChaineCaractere(array $valeursARemplacer, array $valeurRemplacement, string $valeurs): string
{
	return str_replace($valeursARemplacer, $valeurRemplacement, $valeurs);
}