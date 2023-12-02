<?php
require_once('../utilitaires.php');
require_once('../handlers/jour1Handler.php');

$total = 0;
$valeurEntree = getValeurEntree();
$valeureEntreeNumerique = getTransformerNombresAlphabetiquesEnNombresNumeriques($valeurEntree);
$valeureEntreeNombre = getNettoyageCaracteresAlphabetiques($valeureEntreeNumerique);
$datas = getTableauFromString($valeureEntreeNombre);

$total = calculTotalFromDatas($datas);

echo $total;// 55470