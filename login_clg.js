document.getElementById("empresaForm").addEventListener("submit", function(e) {
    e.preventDefault();
  
      let cod_escola = document.getElementById("cod_escola").value;
      let senha = document.getElementById("senha").value;

      if(cod_escola && senha) {
        alert("Login realizado com sucesso!");
      } else {
        alert("Por favor, preencha todos os campos!");
      }

    alert(`Login realizado com sucesso!\n

    cod_escola: ${cod_escola}
    senha: ${senha}`);
   });