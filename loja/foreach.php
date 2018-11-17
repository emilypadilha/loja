<?php

    require 'model/CategoriaDAO.php';
//INSERT
    $cat = new Categoria();
    $cat->setNome("Material de Escritório");
    $cat->setDescricao("Tudo para seu escritório");

    $dao = new CategoriaDAO();
    if ($dao->insert($cat)){
        echo "Inserido";
    }else{
        echo "Não inserido";
    }

//UPDATE
$cat = new Categoria();
$cat->setId(9);
$cat->setNome("Categoria alterada");
$cat->setDescricao("Descrição alterada");

$dao = new CategoriaDAO();
if ($dao->update($cat)){
    echo "Alterado";
} else {
    echo "Não alterado";
}

//DELETE
$cat = new Categoria();
$cat->setId(9);

$dao = new CategoriaDAO();
if ($dao->delete($cat)){
    echo "Excluído";
} else {
    echo "Não excluído";
}

