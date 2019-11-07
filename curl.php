<?php

$link = $_SERVER['SERVER_NAME']. '/api/index.php';

$post = array(
	"key" => array(
		"cpf" => 25383193820
	)
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'accept: application/json', 
	'connection: keep-alive',
	'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3163.100 Safari/537.36'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

$response = curl_exec($ch);
$json = json_decode($response);

$name = $json->result->data->name;
$number = $json->result->data->number;
$email = $json->result->data->email;
$cpf = $json->result->data->cpf;

$purchases = $json->result->purchases->check;
if ($purchases) {
	$purchases = "SIM";
	$purchasesValue = $json->result->purchases->value;
}

$moreFarma = $json->result->more->farma;
($moreFarma) ? $moreFarma = "SIM" : $moreFarma = "NÃO";

$moreDepedencies = $json->result->more->dependencies->check;
if ($moreDepedencies){
	$moreDepedencies = "SIM";
	$moreDepedenciesValue = $json->result->more->dependencies->value;
}

echo '<h1>' . $name . '</h1>';
echo 'Telefone: <b>' . $number . '</b><br />';
echo 'E-mail: <b>' . $email . '</b><br />';
echo 'CPF: <b>' . $cpf . '</b><br />';
echo 'Farma: <b>' . $moreFarma . '</b><br />';
echo 'Dependencies: <b>' . $moreDepedencies . '</b><br />';
echo 'Quantidade de dependencias: <b>' . $moreDepedenciesValue . '</b><br />';
echo 'Compras: <b>' . $purchases . '</b><br />';
echo 'Quantidade de compras: <b>' . $purchasesValue . '</b><br />';