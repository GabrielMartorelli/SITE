<?php
	require_once 'Conexao.php';//"linka" com o BdProcessos para usar suas funções
	$u = new Usuario;//coloca a classe Usuário dentro variavel $u
	$u->conectar("bdsite", "localhost", "root", "");//conecta com o banco de dados
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<link rel="stylesheet" href="css/estilo.css"/>
    <title>Regitrar cliente</title>
  </head>
  <body>
    <form method="post">
			<div class="container registra">
	      <input type="text" name="nome" id="nome" placeholder="Nome" class="box_registra"><br>
	      <input type="email" name="email" id="email" placeholder="Email" class="box_registra"><br>
	      <input type="password" name="senha" id="box-senha" placeholder="Senha" class="box_registra"><!--problmas com a senha, procurar depois o pq-->
	      <input type="password" name="senha" id="box-conf-senha" placeholder="Confirmar Senha" class="box_registra"><br>
	      <a href="logar.php" id="a-logar">Logar</a>
	      <input type="submit" value="ACESSAR" class="btn-submit-reg"/>
			</div>
    </form>
    <?php
    if (isset($_POST['email'])) {//verifica se algum campo não foi preenchido
      //coleta os dados do formulario para serem usados
      $email = addslashes($_POST['nome']);
      $senha = addslashes($_POST['senha']);
      $nome = addslashes($_POST['email']);
			$endereco = addslashes("eeee");
			$telefone = addslashes("1111");
			$cidade = addslashes("cccc");
      //addslashes é tipo de tratramento de string para deixar o sistema menos vulnerável
			if (!empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome'])) {
	      if ($u->msgErro == "") {//tratamendo de erro de conexão com banco de dados
	        if ($u->cadastrar($email, $senha,$nome, $endereco, $telefone, $cidade)) {//verifica de o email e senha consta no banco de dados
						?>
	          <lable class="msg-sucesso">cadastro feito com sucesso</label>
						<?php
	        }else {//se não consta o email ou senha no banco de dados é mostrado esse ereo
						?>
	          <label class="msg-erro-reg">Email já existe</lable>
						<?php
	        }
	      }else {//se tiver algum erro na conexão com o banco de dados o erro é mostrado aqui
	        echo "Erro: ".$u->msgErro;
	      }
	    }else {//se algum cmpo não for preenchido é mostrado esse echo
				?>
	        <label class="msg-erro-reg">Preecha os campos!!</lable>
				<?php
	    	}
		}
    ?>
  </body>
</html>
