bfunction enviarSMS() {
    // Obter o número de telefone do usuário
    var telefone = document.getElementById("telefone").value;
  
    // Gerar código de verificação
    var codigo = Math.floor(100000 + Math.random() * 900000);
  
    // Enviar SMS com o código de verificação
    // ...
  
    // Armazenar o código de verificação em uma variável de sessão
    sessionStorage.setItem("codigo", codigo);
  
    // Exibir o campo para inserir o código de verificação
    document.getElementById("codigo-verificacao").style.display = "block";
  
  
  function verificarCodigo() 
    // Obter o código digitado pelo usuário
    var codigoDigitado = document.getElementById("codigo-digitado").value;
  
    // Obter o código de verificação armazenado na variável de sessão
    var codigoArmazenado = sessionStorage.getItem("codigo");
  
    if (codigoDigitado === codigoArmazenado) {
      // Código válido
      // Redirecionar para a página inicial
      window.location.href = "https://www.exemplo.com/index.html";
    } else {
      // Código inválido
      // Exibir mensagem de erro
      echo"Código de verificação inválido.";
    }

    function lembrarSenha() {
        // Obter o nome de usuário do usuário
        var username = document.getElementById("username").value;
      
        // Enviar requisição para o servidor para recuperar a senha
        // ...
      
        // Exibir a senha recuperada para o usuário
        // ...
      }


  }