<?php

$ano = 2020;
function mostrar(){
	GLOBAL $ano;
	$ano++;
	return $ano;
}
echo "<br/> Ano: ".$ano;
echo "<br/> Ano: ".mostrar();
echo "<br/> Ano: ".mostrar();
echo "<br/> Ano: ".$ano;

?>
