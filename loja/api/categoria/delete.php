<?php 

require_once "../../model/Categoria.php";
require_once "../../model/CategoriaDAO.php";

// Recebendo os dados enviados
$dadosRecebidos = file_get_contents('php://input');

// Transformando os dados em um array
$dados = json_decode($dadosRecebidos, true);

// Criando variáveis para receber valores do array
$id = $dados['id'];
// caso fosse um objeto, a variável id receberia os dados através do código: $dados->id;

// Instanciando categoriaDAO
$catdao = new CategoriaDAO();

// Chamando a função de update de CategoriaDAO
$catdao->delete($id);