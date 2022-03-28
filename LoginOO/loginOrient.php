<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Acessar Cadastro - Alunos </title>
	<style type="text/css">
		body{
    background-image: url(https:i.imgur.com/K8lDBYU.jpg//);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
      }
      .form{
      font-family: alef;
      color: black;
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
        .card{
      width: 300px;
      height: 300px;
      background-color: #ffffff80;
      padding: 30px;
      border-radius: 4%;
      box-shadow: 3px 3px 1px 0px;

    }
    .container{
      justify-content: center;
      display: flex;
      width: 100%;
      margin-top: 100px;
    }
    h2{
    	font-family: alef;
    	color: white;
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
        hr{
			background-color: white;
		}
	</style>
  
</head>
<body>
	<center><h2> Página de Login - Orientador </h2></center>
   <form action="logarOrient.php" method="post">
   	
   	
   	<div class="form">
   		<div class="container">
   			<div class="card">
   				<div class="label-float">
   	  <p><input type="text" name="usuario">Usuário</p>
   	  <p> <input type="password" name="senha">Senha</p>
   	  	<input type="hidden" name="orientador" value="">
   	  	<br>
   	  	<hr>
   	  	<div class="justify-center">
   	  <p> <button type="submit"> Acessar </button>
   	  	</div>

   	 </div>
   </form>

   </div>
   </div>
</div>

</body>
</html>