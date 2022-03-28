<?php
include_once("classes/Sessao.php");
if (isset($_GET['logoff'])){
  Sessao::logoff(); 
}
   session_start();
   if(isset($_SESSION['login'])) {
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cadastrar Alunos</title>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<style type="text/css">

		body{
		background-image: url(https:i.imgur.com/K8lDBYU.jpg//);
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;

		}

		.container{
		display: flex;
		justify-content: center;
		width: 100%;
		margin-top: 100px;

		}

		.card{
			background-color: #ffffff80;
			padding: 30px;
			border-radius: 4%;
			box-shadow: 3px 3px 1px 0px;
			position: relative;
		}

		h1{
			text-align: center;
			font-family: alef;
			color: #272262;
		}


		.label-float input{
			width: 50%;
			padding: 5px 5px;
			display: inline-block;
			border: 0;
			border-bottom: 2px solid white;
			background-color: transparent;
			outline: 180px;
			font-size: 16px;
			transition: all .3s ease-out;
			border-radius: 0;
			font-family: alef;

        }

        .label-float{
        	position: relative;
        	padding-top: 13px;
        	margin-top: 5%;
        	margin-bottom: 5% ;
        }

        .label-float input:focus{
        	border-bottom: 2px solid #4038a0;

        }

        .label-float label{
        	color: #272262;
        	pointer-event: none;
        	position: absolute;
        	top: 0;
        	left: 0;
        	margin-top: 13px;
        	transition: all .3s ease-out;
        }

        .label-float input:focus + label{
        	font-size: 13px;
        	margin-top: 0;
        	color: #4038a0;
        }

        hr{
        	display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }

		button{
			background-color: transparent;
			border-color: #272262;
			color: #272262;
			padding: 7px;
			font-weight: bold;
			font-size: 12pt;
			border-radius: 4px;
			cursor: pointer;
			outline: none;

		}

		button:hover {
        background: #272262;
        color: #fff;
        }

        .justify-center{
        	display: flex;
        	justify-content: center;
        }


		p{
		color: #272262;
		font-family:Alef;

		}

		hr{
			background-color: white;
		}
		.boton{
			text-decoration: none;
			color: white;
			font-size: 20px;
		}
		.select{
			height: 30px;
			border-radius: 5px;
			font-family: alef;
			background: transparent;
			border: 1px white solid;
		}
		.insta{
			color: white;
			font-size: 20px;
			position: absolute;
			right: 30px;
		}
		.face{
			color: white;
			font-size: 20px;
			position: absolute;
			right: 60px;
		}
		.what{
			color: white;
			font-size: 20px;
			position: absolute;
			right: 90px;
		}
	
	</style>

</head>
<body>
	<div class="container">
		<div class="card">
			<h1>Cadastrar Alunos</h1>


			<hr>

		
		<div class="label-float">

		<p> <input type="text" name="nome"> Nome</p>
		<p><input type="text" name="endereco"> Endereço</p>
		<p><input type="number" name="contato"> Contato</p>
		<p><input type="number" name="termino"> Ano de Término</p>
		<p><input type="text" name="instituto"> Instituição</p>
		<p><input type="text" name="curso"> Curso</p>
		<p><input type="text" name="estagio"> Área de Estágio</p>



		<div class="justify-center">
		<button type="submit">Cadastrar</button>
		</div>

		</div>
		<a class="boton" href="?logoff"> <i class="fa fa-sign-out" aria-hidden="true"></i> </a>

		<div class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></div>
		<div class="face"><i class="fa fa-facebook-square" aria-hidden="true"></i></div>
		<div class="what"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
</div>
</div>

</body>
</html>

<?php 
  } // fecha o bloco do if 
  else{
    echo "Você não tem acesso autorizado! <br>";
    echo "<a href='index.php'> Voltar à página de login </a>";
  }
?>