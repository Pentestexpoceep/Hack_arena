<?php
include("conexao.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização básica dos dados recebidos
    $nomeEscola = $conn->real_escape_string($_POST['nomeEscola']);
    $senha = $conn->real_escape_string($_POST['Senha']);
    $cod_escola = $conn->real_escape_string($_POST['Cod_escola']);
    $ensino_ofe = $conn->real_escape_string($_POST['Ensino_ofe']);
    $telefone = intval($_POST['Telefone']);
    $cidade = $conn->real_escape_string($_POST['Cidade']);
    $estado = $conn->real_escape_string($_POST['Estado']);
    $rua = $conn->real_escape_string($_POST['Rua']);
    $numero = intval($_POST['Numero']);

    $sql = "INSERT INTO escola (nomeEscola, Senha, Cod_escola, Ensino_ofe, Telefone, Cidade, Estado, Rua, Numero)
            VALUES ('$nomeEscola', '$senha', '$cod_escola', '$ensino_ofe', $telefone, '$cidade', '$estado', '$rua', $numero)";

     if ($conn->query($sql) === TRUE) {
           $mensagem = 'alert-success';  // Ou ecoe diretamente aqui
           echo '<div class="alert alert-success" role="alert">Escola cadastrada com sucesso! <a href="cadastro_clg.php">Cadastrar outra?</a></div>';
       } else {
           $mensagem = 'alert-danger';
           echo '<div class="alert alert-danger" role="alert">Erro ao cadastrar: ' . $conn->error . '</div>';
       }
   }


$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Escola</title>
  <link rel="stylesheet" href="cadastro_clg.css">
</head>
<body>
  <div class="container">
  <h2>CADASTRAR</h2>
  <form id="escolaForm" action="cadastro_clg.php" method="post">
    <input type="text" id="nomeEscola" name="nomeEscola" placeholder="Nome Completo" required>
    <input type="text" id="Senha" name="Senha" placeholder="Senha" required>
    <input type="text" id="Cod_escola" name="Cod_escola" placeholder="Código do Censo Escolar" required>
    <input type="text" id="Ensino_ofe" name="Ensino_ofe" placeholder="Ensino Oferecido" required>
    <input type="tel" id="Telefone" name="Telefone" placeholder="Telefone" required>

    <div class="row">
      <input type="text" id="Cidade" name="Cidade" placeholder="Cidade" required>
      <select id="Estado" name="Estado" required>
        <option value="">Estado</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
      </select>
    </div>

    <input type="text" id="Rua" name="Rua" placeholder="Rua" required>
    <input type="text" id="Numero" name="Numero" placeholder="Número" required>
  
    <button type="submit">CADASTRAR</button>
  </form>
    <button type="button" class="btn-voltar"><a href="login_clg.php" class="voltar">Volte ao login</a></button>
  </div>
</body>
</html>
