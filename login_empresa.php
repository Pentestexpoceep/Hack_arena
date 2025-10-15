<?php
include("conexao.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização básica dos dados recebidos
    $cnpj = $conn->real_escape_string($_POST['cnpj']);
    $senha = $conn->real_escape_string($_POST['Senha']);


    $sql = "INSERT INTO login_usuarios (cod_escola, Senha)
            VALUES ('$cnpj', '$senha')";


if ($conn->query($sql) === TRUE) {
  $mensagem = 'alert-success';  // Ou ecoe diretamente aqui
  echo '<div class="alert alert-success" role="alert">Login realizado com sucesso! <a href="cadastro_clg.php">Cadastrar outra?</a></div>';
} else {
  $mensagem = 'alert-danger';
  echo '<div class="alert alert-danger" role="alert">Erro ao logar: ' . $conn->error . '</div>';
}
}


$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Empresas</title>
  <link rel="stylesheet" href="login_empresa.css">
</head>

<body>
  <div class="container">
    <h1><span>LOGIN</span></h1>
    <form id="empresaForm" method="post" action="login_empresas.php">
      <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ" required>
      <input type="password" id="senha" name="senha" placeholder="SENHA" required>

      <button type="submit">Entrar</button>

      <nav class="textinho">Não possui sua empresa cadastrada?</nav>
      <button type="button" class="btn-cadastro"> <a class="cadastro-btn" href="http://localhost/hack_arena/cadastro_empresa.php">Cadastrar</a> </button>

    </form>
    <a href="index.html" class="voltar"><button type="button" class="btn-voltar" >Volte ao tela inicial</button></a>
  </div>
  <script src="login_empresa.js"></script>
</body>

</html>