<?php
include("conexao.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização básica dos dados recebidos
    $nomeEmpresa = $conn->real_escape_string($_POST['nomeEmpresa']);
    $senha = $conn->real_escape_string($_POST['Senha']);
    $cnpj = $conn->real_escape_string($_POST['CNPJ']);
    $situacao_cadastral = $conn->real_escape_string($_POST['Situacao_cadastral']);
    $telefone = $conn->real_escape_string($_POST['Telefone']);
    $data_abertura = $conn->real_escape_string($_POST['Data_abertura']);
    $estado = $conn->real_escape_string($_POST['Estado']);
    $cidade = $conn->real_escape_string($_POST['Cidade']);
    $rua = $conn->real_escape_string($_POST['Rua']);
    $numero = intval($_POST['Numero']);

    $sql = "INSERT INTO Empresa (nomeEmpresa, Senha, CNPJ, Situacao_cadastral, Data_abertura, Estado, Cidade, Rua, Numero)
            VALUES ('$nomeEmpresa', '$senha', '$cnpj', '$situacao_cadastral', '$data_abertura', '$estado', '$cidade', '$rua', $numero)";

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
  <title>Cadastro de Empresa</title>
  <link rel="stylesheet" href="cadastro_empresa.css">
</head>
<body>
  <div class="container">
    <h1>CADASTRAR</h1>
    <form id="empresaForm" action="cadastro_empresaa.php" method="post">
      <input type="text" id="nomeEmpresa" name="nomeEmpresa" placeholder="NOME DA EMPRESA" required>
      <input type="text" id="Senha" name="Senha" placeholder="SENHA" required>
      <input type="text" id="CNPJ" name="CNPJ" placeholder="CNPJ" required>
      <input type="text" id="Situacao_cadastral" name="Situacao_cadastral" placeholder=" SITUAÇÃO CADASTRAL" required>
      <input type="tel" id="Telefone" name="Telefone" placeholder="TELEFONE" required>
      <input type="date" id="Data_abertura" name="Data_abertura" placeholder="DATA DE ABERTURA" required>

      <div class="linha">
        <input type="text" id="Cidade" name="Cidade" placeholder="CIDADE" required>
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
      <input type="int" id="Numero" name="Numero" placeholder="Número" required>
      
      <button type="submit">CADASTRAR</button>
    </form>
    <button type="button" class="btn-voltar"><a href="login_empresa.php" class="voltar">Volte ao login</a></button>
  </div>
</body>
</html>
