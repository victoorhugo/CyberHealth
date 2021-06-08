<?php
	require_once 'classes/usuarios.php';
	$u = new Usuario;
?>	
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
	<link rel="stylesheet" href="estilo3.css">
</head>
<body>
<div id="corpo-form-cadastrar">
	<h1>Cadastrar</h1>
	<form method="POST">
	    <input type="text" name="nome" placeholder="Nome" maxlength="30">
		<input type="email" name="email" placeholder="Email"maxlength="30">
		<input type="password" name="senha" placeholder="Senha"maxlength="15">
		<input type="password" name="confsenha" placeholder="Confirmar Senha">
		<input type="submit" value="Cadastrar">
	</form>
</div>
<?php
	//verificar se clicou no botao
	if(isset($_POST['nome']))
	{			//addslashes impede qualquer comando malicioso
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);
		$confirmarsenha = addslashes($_POST['confsenha']);
		//verificar se esta preenchido
		if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
		{
			$u->conectar("expotec","localhost","root","");
			if($u->msgERRO == "") //se esta tudo ok
			{
				if($senha == $confirmarsenha)
				{
					if($u->cadastrar($nome,$email,$senha))
					{
						?>
						<div id="msg-sucesso">
							Cadastrado com sucesso! Acesse para entrar!
						</div>
						<?php
					}
					else
				{
						?>
						<div class="msg-erro">
							Email já cadastrado!
						</div>
						<?php
					}
				}
				else
				{
					    ?>
						<div class="msg-erro">
							Senha e confirmar senha não correspondem!
				   		</div>
						<?php
				}
		   }
				else
				{ 
						?>
						<div class="msg-erro">
							<?php echo "Erro:".$u->msgERRO; ?>				
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