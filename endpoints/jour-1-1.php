<?php
require_once('../utilitaires.php');
require_once('../handlers/jour1Handler.php');

$valeurEntree = getValeurEntree();
;
$lettres = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$remplacement = array("");
$valeureEntreeNombre = str_replace($lettres, $remplacement, $valeurEntree);
$datas = explode('-', $valeureEntreeNombre);

$total = 0;
foreach ($datas as $data) {
	$datasDetail = str_split($data);
	$nombre =  $datasDetail[0] . $datasDetail[count($datasDetail) - 1];
	$total  += $nombre;
}
echo $total;//56465