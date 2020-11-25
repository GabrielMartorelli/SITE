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
	      <input type="number" name="codigo" id="codigo" placeholder="Código do produto" class="box_registra"><br>
	      <input type="text" name="produto" id="produto" placeholder="Nome do produto" class="box_registra"><br>
	      <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade em estoque" class="box_registra"><!--problmas com a senha, procurar depois o pq-->
	      <input type="number" name="preco" id="preco" placeholder="Preço do produto" class="box_registra"><br>
	      <a href="regProdutos.php" id="a-logar">Registar</a>
        <a href="logar.php" id="a-sair">Sair</a>
	      <input type="submit" value="ALTERAR" class="btn-submit-reg"/>
			</div>
    </form>
    <?php
    if (isset($_POST['codigo'])) {//verifica se algum campo não foi preenchido
      //coleta os dados do formulario para serem usados
      $codigo = addslashes($_POST['codigo']);
      $produto = addslashes($_POST['produto']);
      $quantidade = addslashes($_POST['quantidade']);
      $preco = addslashes($_POST['preco']);

      //addslashes é tipo de tratramento de string para deixar o sistema menos vulnerável
			if (!empty($_POST['codigo']) && !empty($_POST['produto']) && !empty($_POST['quantidade']) && !empty($_POST['preco'])) {
	      if ($u->msgErro == "") {//tratamendo de erro de conexão com banco de dados
	        if ($u->altProduto($codigo, $produto, $quantidade, $preco)) {//verifica de o email e senha consta no banco de dados
						?>
	          <lable class="msg-sucesso">Produto alterado com sucesso</label>
						<?php
	        }else {//se não consta o email ou senha no banco de dados é mostrado esse ereo
						?>
	          <label class="msg-erro-reg">Produto não existe</lable>
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
