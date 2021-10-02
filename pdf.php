<?php
    include 'connect.php';
    
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
	
	
    $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
	


    
	$pagina = 
		"<html>
			<body>
				<h1>Usuários cadastrados</h1>
				Id: 3<br>
				Nome: Alciomar Hollanda<br>
				E-mail: alciomar@gmail.com<br>
				Senha: 123<br>
				Genero: Masculino<br><br>

                Id: 4<br>
				Nome: Letícia Risso<br>
				E-mail: leticia@icloud.com<br>
				Senha: 12012004<br>
				Genero: Feminino<br><br>

                Id: 5<br>
				Nome: Mateus Risso<br>
				E-mail: mrisso@hotmail.com<br>
				Senha: 11111<br>
				Genero: Masculino<br><br>

                Id: 6<br>
				Nome: Brenno Benuto<br>
				E-mail: brennobbc@gmail.com<br>
				Senha: 12345<br>
				Genero: Masculino<br><br>
			</body>
		</html>
		";

$arquivo = "Cadastro01.pdf";



?>