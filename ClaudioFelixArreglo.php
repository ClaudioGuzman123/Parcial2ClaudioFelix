<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$carros=[
["carro" =>'Bugatti Chiron',  "precio"=> '2100'],
["carro" =>'Ferrari SF90',     "precio"=> '2000'],
["carro" =>'Porsche 911 Turbo S',  "precio"=> '1900'],
["carro" =>'Lamborghini Aventador Ultimae',  "precio"=> '2300'],
];
uasort($carros,function($a,$b){
return$a['precio'] <=> $b['precio'];
});

echo "<br>";
foreach ($carros as $carro) {
echo "El carro ". $carro['carro']. " tiene un precio de :". $carro['precio'];
echo "<pre>";
}
echo "carros ordenados por precio";
echo "<br>";

array_push($carros, ["carro" =>'Tesla Model S Plaid' , "precio"=>'20400']);
array_push($carros, ["carro" =>'Mercedes-AMG GT Black Series' , "precio"=>'50400']);
foreach ($carros as $carro) {
echo "El carro ". $carro['carro']. " tiene un precio de :". $carro['precio'];
echo "<pre>";
}
?>
</body>
</html>