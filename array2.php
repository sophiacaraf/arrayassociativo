<?php
$livros = array(
    array("nome" => "O Senhor dos Anéis", "genero" => "Fantasia", "paginas" => 1200),
    array("nome" => "Dom Casmurro", "genero" => "Romance", "paginas" => 256),
    array("nome" => "Clean Code", "genero" => "Tecnologia", "paginas" => 464),
    array("nome" => "1984", "genero" => "Distopia", "paginas" => 328)
);


echo "<pre>";
print_r($livros);
echo "</pre>";


echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nome</th><th>Gênero</th><th>Páginas</th></tr>";

foreach ($livros as $l) {
    echo "<tr>";
    echo "<td>".$l["nome"]."</td>";
    echo "<td>".$l["genero"]."</td>";
    echo "<td>".$l["paginas"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>
