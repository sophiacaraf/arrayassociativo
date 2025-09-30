<?php


$carros = ["BMW", "gol", "saveiro", "uno", "palio"];
echo "<pre>";
print_r ($carros);
echo "</pre>";

echo "\$carros[1]:".$carros[1]."<br>";

echo "<ul>";
for ($i = 0; $i < count ($carros); $i++)
{
    echo "<li>".$carros[$i]."</li>";

}
echo "</ul>";


$carros = array();
echo "<pre>";
print_r($carros);
echo "</pre";


$carros = array();
$carros [1] = "gol";
$carros [2] = "saveiro";
$carros[3] = "uno";
$carros [4] = "palio";

echo "<pre>";
print_r($carros);
echo "</pre";

array_push($carros, "BMW");
array_push($carros, "S10");

echo "<pre>";
print_r ($carros);
echo "</pre>";

array_pop($carros);
echo "<pre>" ;
print_r ($carros);
echo "</pre>"

$pessoa = array ("nome"=>"fernando",
"idade" => 32,
"altura" => 177,
"Solteiro"=>true);



?>
