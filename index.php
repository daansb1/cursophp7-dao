<?php

  require_once("config.php");

  //Carrega um usuário.
  //$root = new Usuario();
  //$root->loadbyId(1);
  //echo $root;

  //Carrega uma lista de usuários
  //$lista = Usuario::getList();
  //echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("da");
//echo json_encode($search);

//carrega usuário usando login e a senha 
$usuario =  new Usuario();
$usuario->login ("root", "!@#%");

echo $usuario;

?>