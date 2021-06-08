<?php
	require_once 'classes/usuarios.php';
	$u = new Usuario;
?>	
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
	<link rel="stylesheet" href="estilo3.css">
	<link rel="shortcut icon" href="logo.ico" />
</head>
<body background="fundo1.jpg">
<div id="corpo-form">
	<h1>Entrar</h1>
	<form method="POST">
		<input type="text" placeholder="Usuário" name="email">
		<input type="password" placeholder="Senha" name="senha">
		<input type="submit" value="ENTRAR">
		<a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</a>
	</form>
</div>
<?php
if(isset($_POST['email']))
	{			//addslashes impede qualquer comando malicioso
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);
		//verificar se esta preenchido
		if(!empty($email) && !empty($senha))
		{
			$u->conectar("expotec","localhost","root","");
			if($u->msgERRO == "")
			{
				if($u->logar($email,$senha))
				{
					header("location: index2.html");
				}
				else
				{		
					?>
					<div class="msg-erro">
					Email e/ou senha estão incorretos!						
					</div>
					<?php
				}
			}
			else
				{			
					?>
					<div class="msg-erro">
					<?php echo"Erro: ".$u->msgERRO; ?>				
					</div>
					<?php
				
				}
			}
			else
		{
					?>
					<div class="msg-erro">
					Preencha todos os campos!
					</div>
					<?php
			
			}

	}

?>
</body>
<html>