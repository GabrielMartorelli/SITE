<?php
  Class Usuario{

    private $pdo;//declara a variável $pdo para ser usada apenas aqui
    public $msgErro = "";//declara a variável publica para ser usado em todo lugar e para a variável estar sempre vazia

    public function conectar($nome, $host, $usuario, $senha){//função para se conectar com o banco de dados
      global $pdo;//motra para o programa que essa $pdo é a mesma que a primeria $pdo usada

      try {
        $pdo = new PDO("mysql:dbname=".$nome.";host=". $host, $usuario, $senha);

      } catch (PDOException $e) {
        $msgErro = $e->getMessage();//coloca o erro dentro da variável $msgErro
      }
      //try catch usado para tratrar erro nesse caso um erro de conexão do banco de dados
    }

    public function cadastrar($nome, $senha, $email, $endereco, $telefone, $cidade){//função para cadastrar usuários no banco de dados
      global $pdo;//motra para o programa que essa $pdo é a mesma que a primeria $pdo usada

      $sql = $pdo->prepare("SELECT id FROM login WHERE email = :e");//seleciona o id na tabela cadastro onde o email é igual o do formulario de cadastro
      $sql->bindValue(":e", $email);//declara a variável email como sendo :e
      $sql->execute();

      if ($sql->rowCount() > 0) {//verifica se já existe um email igual no banco de dados
        return false;
      }else {//se não insere as informações vindas do formulario de cadastro
        $sql = $pdo->prepare("INSERT INTO login (Nome, Senha, Email, Endereço, Telefone, Cidade) VALUES (:n, :s, :e, :f, :t, :c)");//insere as informações do formulario de cadastro
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":s", md5($senha));
        $sql->bindValue(":e", $email);
        $sql->bindValue(":f", $endereco);
        $sql->bindValue(":t", $telefone);
        $sql->bindValue(":c", $cidade);
        $sql->execute();
        return true;
      }
    }

    public function logar($email, $senha){//função para logar o usuário que estiver no banco de dados
      global $pdo;//motra para o programa que essa $pdo é a mesma que a primeria $pdo usada

      $sql = "SELECT * FROM login WHERE Email = :e AND Senha = :s";//seleciona tudo da tabela cadastro onde a senha e o email são iguai o do formulario de login
      $sql = $pdo->prepare($sql);
      $sql->bindValue(":e", $email);
      $sql->bindValue(":s", md5($senha));//md5() tipo de criptografia de senha
      $sql->execute();

      if ($sql->rowCount() > 0) {//verifica se os dados colocado estão no banco de dados
        $dado = $sql->fetch();//as informações vindadas do banco de dados é colocado em um array e guardado na variável $dado
        session_start();
        $_SESSION['email'] = $dado['email'];
        $_SESSION['id'] = $dado['id'];
        return true;//se todadas as informações estiverem corretas é retonado true
      }else {
        return false;//se não é retornado false
      }
    }

    public function info($email, $nome, $telefone, $endereco, $cidade){
      global $pdo;

      $sql = "SELECT * FROM login WHERE Email = :m";//seleciona tudo da tabela cadastro onde o email são iguai o do formulario de login
      $sql = $pdo->prepare($sql);
      $sql->bindValue(":m", $email);
      $sql->execute();

      if ($sql->rowCount()>0) {
        $sql = $pdo->prepare("UPDATE login SET Nome = :n, Telefone = :t, Endereço = :e, Cidade = :c WHERE Email = :m");
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":t", $telefone);
        $sql->bindValue(":e", $endereco);
        $sql->bindValue(":c", $cidade);
        $sql->bindValue(":m", $email);
        $sql->execute();
        return true;
      }else {
        return false;
      }
    }

    public function cartao($dono, $nCartao, $cvv, $vencimento, $email){
      global $pdo;

      $sql = "SELECT * FROM login WHERE Email = :m";//seleciona tudo da tabela cadastro onde o email são iguai o do formulario de login
      $sql = $pdo->prepare($sql);
      $sql->bindValue(":m", $email);
      $sql->execute();

      if ($sql->rowCount()>0) {
        $sql = $pdo->prepare("UPDATE login SET DonoCartão = :d, nCartão = :n, CVV = :c, Vencimento = :v WHERE Email = :m");
        $sql->bindValue(":d", $dono);
        $sql->bindValue(":n", $nCartao);
        $sql->bindValue(":c", $cvv);
        $sql->bindValue(":v", $vencimento);
        $sql->bindValue(":m", $email);
        $sql->execute();
        return true;
      }else {
        return false;
      }
    }

    public function regProduto($codigo, $produto, $quantidade, $preco){
      global $pdo;//motra para o programa que essa $pdo é a mesma que a primeria $pdo usada

      $sql = $pdo->prepare("SELECT id FROM produtos WHERE codigo = :c");//seleciona o id na tabela cadastro onde o email é igual o do formulario de cadastro
      $sql->bindValue(":c", $codigo);//declara a variável email como sendo :e
      $sql->execute();

      if ($sql->rowCount() > 0) {//verifica se já existe um email igual no banco de dados
        return false;
      }else {//se não insere as informações vindas do formulario de cadastro
        $sql = $pdo->prepare("INSERT INTO produtos (codigo, produto, quantidade, preço) VALUES (:c, :p, :q, :r)");//insere as informações do formulario de cadastro
        $sql->bindValue(":c", $codigo);
        $sql->bindValue(":p", $produto);
        $sql->bindValue(":q", $quantidade);
        $sql->bindValue(":r", $preco);
        $sql->execute();
        return true;
      }
    }

    public function altProduto($codigo, $produto, $quantidade, $preco){
      global $pdo;

      $sql = "SELECT * FROM produtos WHERE codigo = :c";//seleciona tudo da tabela cadastro onde o email são iguai o do formulario de login
      $sql = $pdo->prepare($sql);
      $sql->bindValue(":c", $codigo);
      $sql->execute();

      if ($sql->rowCount()>0) {
        $sql = $pdo->prepare("UPDATE produtos SET produto = :p, quantidade = :q, preço = :r WHERE codigo = :c");
        $sql->bindValue(":p", $produto);
        $sql->bindValue(":q", $quantidade);
        $sql->bindValue(":r", $preco);
        $sql->bindValue(":c", $codigo);
        $sql->execute();
        return true;
      }else {
        return false;
      }
    }
  }
?>
