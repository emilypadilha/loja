<?php 

require_once "../../model/Categoria.php";
require_once "../../model/CategoriaDAO.php";

// Recebendo os dados enviados
$dadosRecebidos = file_get_contents('php://input');

// Transformando os dados em um array
$dados = json_decode($dadosRecebidos, true);

// Criando variáveis para receber valores do array
$nome = $dados['nome'];
// caso fosse um objeto, a variável nome receberia os dados através do código: $dados->nome;
$descricao = $dados['descricao'];

// Instanciando categoria e passando os parâmetros nome e descrição
$categoria = new Categoria($nome, $descricao);

// Instanciando categoriaDAO
$catdao = new CategoriaDAO();

// Chamando a função de inserir de CategoriaDAO
$catdao->insert($categoria);