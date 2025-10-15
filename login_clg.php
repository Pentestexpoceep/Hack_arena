<?php
include("conexao.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização básica dos dados recebidos
    $cod_escola = $conn->real_escape_string($_POST['cod_escola']);
    $senha = $conn->real_escape_string($_POST['senha']);


    $sql = "INSERT INTO login_usuarios (cod_escola, senha)
            VALUES ('$cod_escola', '$senha')";


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
  <title>LOGIN</title>
  <link rel="stylesheet" href="login_clg.css">
</head>

<body>
  <div class="container">
    <h1>LOGIN</h1>
    <form id="escolaForm" action="login_escolaa.php" method="POST">
  
      <input type="text" name="cod_escola" placeholder="Código do Censo Escolar" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Entrar</button>
   </form>
    <nav class="textinho">Não possui sua escola cadastrada?</nav>
    <button type="button" class="btn-cadastro"><a class="cadastro-btn" href="http://localhost/hack_arena/cadastro_clg.php">Cadastrar</a></button>
    <a href="index.html" class="voltar"><button type="button" class="btn-voltar" >Volte ao tela inicial</button></a>
  </div>
 <script src="login_clg.js"></script>
</body>

</html>