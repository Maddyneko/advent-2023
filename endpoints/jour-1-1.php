<?php
require_once('../utilitaires.php');
require_once('../handlers/jour1Handler.php');

$total = 0;
$valeurEntree = getValeurEntree();
$valeureEntreeNombre = getNettoyageCaracteresAlphabetiques($valeurEntree);
$datas = explode('-', $valeureEntreeNombre);

$total = calculTotalFromDatas($datas);
echo $total;//56465