<?php 
include_once("classes/Sessao.php"); // para ter acesso ao método estático logoff()
if (isset($_GET['logoff'])){
  Sessao::logoff(); 
  // para criar menos arquivos, chamo o método estático que quebra a sesão
}
   session_start();
   if(isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
	<title> Acesso restrito </title>
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
    button{
      border-radius: 5px;
      font-family: alef;
      color: #EBAB49;
      background-color: black;


    }

    .link{
      font-family: alef;
      color: #EBAB49;
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
      width: 400px;
      height: 400px;
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
    h1{
      text-align: center;
      font-family: alef;
      color: black;
    }
    hr{
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
    }
  </style>
</head>
<body>
      <form action="addUser.php" method="post">

        <div class="container">
        <div class="card">
          <div class="form">
            <div class="label-float">

              <h1>Cadastrar</h1>

           <hr>
           <br>

        <p><input type="text" name="usuario">Digite o nome do Usuário: </p>
        <p><input type="password" name="senha">Crie uma Senha: </p>
        <p><input type="text" name="email">Email: </p>
        <p> <button type="submit"> Cadastrar </button> </p>
             </div>

        </div>
        </div>
        </div>

      </form>

    <div class="link">
    <a href="?logoff"> Sair </a> <!-- aqui no href estou passando um valor via get para a prória página -->
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