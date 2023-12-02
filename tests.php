<?php
require_once('utilitaires.php');
require_once('handlers/jour1Handler.php');

testJour1Puzzle1();
testJour1Puzzle2();

function testResultat($numeroJour, $numeroPuzzle, $resultatAttendu, $resultatObtenu)
{
	$resultatTest =  "Test Jour " . $numeroJour . " Puzzle " . $numeroPuzzle . " : ";
	if ($resultatAttendu == $resultatObtenu) {
		$resultatTest .= " : OK";
	} else {
		$resultatTest .= " : KO - Valeur attendue : " . $resultatAttendu . " / Valeur obtenue : " . $resultatObtenu;
	}

	echo $resultatTest . "<br/>";

}
function testJour1Puzzle1()
{
	$resultatAttendu = 56465;
	$resultatObtenu = getTotalFromInput(1);
	testResultat(1, 1, $resultatAttendu, $resultatObtenu);
}

function testJour1Puzzle2()
{
	$resultatAttendu = 55470;
	$resultatObtenu = getTotalFromInput(2);
	testResultat(1, 2, $resultatAttendu, $resultatObtenu);
}