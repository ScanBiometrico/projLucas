<?php
include_once("classes/Sessao.php");

$orientador = $_POST['usuario'];
$password = $_POST['senha'];
$controle = $_POST['orientador'];

$obj = new Sessao;

$dados = $obj->readOrient(); //paga valores da tabela

foreach ($dados as $usuario => $valores) {
    if(password_verify($orientador,$valores->usuario) && password_verify($password,$valores->senha)){
        Sessao::autorizado($controle); // usa o método estático para escrever menos linha de código
        break;
    }else{
        echo "Usuário ou senha inválidas"; // se a autenticação falhar, não achar usuários e senhas 
    }   
}
