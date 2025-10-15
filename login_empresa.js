document.getElementById("empresaForm").addEventListener("submit", function(e) {
    e.preventDefault();
  
    const cnpj = document.getElementById("cnpj").value;
    const senha = document.getElementById("senha").value;

      if(nome && cpf) {
        alert("Login realizado com sucesso!");
      } else {
        alert("Por favor, preencha todos os campos!");
      }
      
  
    alert(`Login realizado com sucesso!\n

    CNPJ: ${cnpj}
    senha: ${senha}`);
  });
  