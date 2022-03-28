<?php
include_once("classes/Crud.php");
extract($_POST);

/*echo $usuario."<br>";
echo $senha."<br>";
echo $email."<br>";*/

$usuario = password_hash("$usuario", PASSWORD_DEFAULT);
$senha = password_hash("$senha", PASSWORD_DEFAULT);

$obj = new Crud();

$res = $obj->Create($usuario, $senha, $email);
if ($res) {
	echo "Dados cadastrados com Sucesso!";

}


/*echo $usuario."<br>";
echo $senha."<br>";*/
