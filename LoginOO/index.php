<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> Acessar sistema </title>
	<style type="text/css">
		body{
	    background-image: url(https:i.imgur.com/K8lDBYU.jpg//);
       background-repeat: no-repeat;
       background-size: cover;
       background-attachment: fixed;
		}

		.container{
		 justify-content: center;
       display: flex;
       width: 100%;
       margin-top: 100px;
		}

		.card{
       width: 300px;
       height: 300px;
       background-color: #ffffff80;
       padding: 30px;
       border-radius: 4%;
       box-shadow: 3px 3px 1px 0px;
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

		  button{
			border-radius: 5px;
			font-family: alef;
			color: #EBAB49;
			background-color: black;
         left: 50px;
		   }
		  input{
			border-radius: 5px;
			height: 18px;
		}
		h2{
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
		p{
			font-family: alef;
		}


		
	</style>
</head>
<body>

   <form action="valida.php" method="post">
   	
   	<div class="container">
   		<div class="card">
   			<div class="label-float">

   				 <h2> Página de Login - Direção </h2>

   				 <hr>
   	
   	  <p> Usuário:	<input type="text" name="usuario"> 
   	  <p> Senha:  <input type="password" name="senha">

   	 </div>
<br>
   	  <center><p> <button type="submit"> Acessar </button></center>

   </form>
   </center>
   </div>
   </div>

</body>
</html>

