<?php
$changes = [
	"USD_EUR" => 0.945760628,
	"USD_GBP" => 0.802796945,
	"EUR_USD" => 1.05735,
	"EUR_GBP" => 0.848837349,
	"GBP_USD" => 1.245645,
	"GBP_EUR" => 1.178082,
	"EUR_EUR" => 1,
	"GBP_GBP" => 1,
	"USD_USD" => 1
];

$simbolLeft = [
	"USD" => [true, "$"],
	"EUR" => [false, "€"],
	"GBP" => [true, "£"]

];

function conversion($valor, $from, $to){
	global $changes;
	$new_valor = round(($valor * $changes[$from."_".$to]), 2 );

	$old_valor_string = addSymbol($valor, $from);

	$new_valor_string = addSymbol($new_valor, $to);

	echo $old_valor_string." se convierte en ".$new_valor_string;

}

function addSymbol($valor, $simbolo){
	global $simbolLeft;
	return ($simbolLeft[$simbolo][0] ? 
		$simbolLeft[$simbolo][1] : "").
	round($valor, 2).
	(!$simbolLeft[$simbolo][0] ? 
		$simbolLeft[$simbolo][1] : "");
}

conversion(10, 'EUR', 'USD');
echo"<br>";
conversion(10, 'GBP', 'EUR');

?>
