<?php
	require_once 'Conexao.php';//"linka" com o Conexao para usar suas funções
	$u = new Usuario;//coloca a classe Usuário dentro variavel $u
	$u->conectar("bdsite", "localhost", "root", "");//conecta com o banco de dados
?>
<html>
  <head>
		<link rel="stylesheet" href="css/estilo.css"/>
    <title> Login de usuário </title>
  </head>
  <body>
    <form method="post">
			<div class="container logar">
				<img src="images/notebook.jpg" id="img_logar"/>
				<div class="form_logar">
			    <input type="email" name="email" id="email" placeholder="Email" class="box_logar"><br>
			    <input type="password" name="senha" id="senha" placeholder="Senha" class="box_logar"><br><!--problmas com a senha, procurar depois o pq-->
					<a href="registra.php" id="a-registra"> cadastro </a><br>
					<input type="submit" value="ACESSAR" class="btn_submit"/>
				</div>
			</div>
    </form>
    <?php
			if (isset($_POST['email'])) {//verifica se algum campo não foi preenchido
				//coleta os dados do formulario para serem usados
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);
				//addslashes é tipo de tratramento de string para deixar o sistema menos vulnerável
				if (!empty($_POST['email']) && !empty($_POST['senha'])) {
					if ($u->msgErro == "") {//tratamendo de erro de conexão com banco de dados
						if ($email == "privado@email.com" && $senha == "1234") {
							header("location: regProdutos.php");
						}else {
							if ($u->logar($email, $senha)) {//verifica de o email e senha consta no banco de dados
								header("location: pgInicial.php");//se o email e senha estiverem no banco de dados, o programa direciona para a página do site
							}else {//se não consta o email ou senha no banco de dados é mostrado esse ereo
								?>
									<label class="msg-erro">Email e/ou senha incorretos<label>
								<?php
							}
						}
					}else {//se tiver algum erro na conexão com o banco de dados o erro é mostrado aqui
						echo "Erro: ".$u->msgErro;
					}
				}else {//se algum cmpo não for preenchido é mostrado esse echo
					?>
						<label class="msg-erro">Preencha todos os campos!!</label>
					<?php
				}
		}
    ?>
  </body>
</html>
