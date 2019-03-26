<?php 

require_once("config.php");


// Carrega um usuário.
/*
$root = new Usuario();

$root->loadById(3);

echo $root;*/

//Carrega uma lista de usuários.
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

// Carrega uma lista de usuários buscando pelo login.
/*$search = Usuario::search("Fe");

echo json_encode($search);*/

// Carrega um usuário usando o login e a senha.
/*
$usuario = new Usuario();
$usuario->login("Felipe", "124567890");

echo $usuario;
*/

// Cria um novo usuário.
/*
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

// Altera um usuário.
/*
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("Professor", "Pr0f3ss0r");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();
echo $usuario;

 ?>