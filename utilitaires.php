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