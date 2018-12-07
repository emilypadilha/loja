<?php
//capturo o objeto categoria que foi passado em $dados
$categoria = $dados['categorias'][0];
?>
<h1>Detalhes da categoria</h1>

<p>ID: <?= $categoria->getId() ?></p>
<p>Nome: <?= utf8_encode($categoria->getNome()) ?></p>
<p>Descrição:<?= utf8_encode($categoria->getDescricao()) ?></p>

