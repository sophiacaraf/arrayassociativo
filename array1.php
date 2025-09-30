<?php
$produtos = array(
    array("produto" => "Camiseta", "valor" => 99.00),
    array("produto" => "Boné", "valor" => 20.00),
    array("produto" => "Vestido", "valor" => 299.00),
    array("produto" => "Sandália", "valor" => 199.90)
);


echo "<pre>";
print_r($produtos);
echo "</pre>";

echo "<ul>";
foreach ($produtos as $p) {
    echo "<li>".$p["produto"]." - R$ ".number_format($p["valor"],2,",",".")."</li>";
}
echo "</ul>";
?>
