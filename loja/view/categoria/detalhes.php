<?php
//Capturo o objeto categoria que foi passado em $dados

$categoria = $dados['categorias'][0];
?>

<h1>Detalhes da categoria</h1>

<button><a href="index.php?acao=atualizar&id=<?=$categoria->getId()?>">Atualizar</a></button>

<button><a href="index.php?acao=excluir&id=<?=$categoria->getId()?>">Excluir</a></button>

<p>ID: <?= $categoria->getId() ?></p>
<p>Nome: <?= $categoria->getNome() ?></p>
<p>Descrição: <?= $categoria->getDescricao() ?></p>