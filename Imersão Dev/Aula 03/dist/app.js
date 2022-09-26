var numeroSecreto = parseInt(Math.random() * 11);

tentativas = 2;
texto = tentativas + 1;
function Chutar() {
  var resultadoJS = document.getElementById("resultado").value;

  chuteUser = parseInt(document.getElementById("valor").value);
  console.log(chuteUser);

  if (tentativas >= 1) {
    if (chuteUser != numeroSecreto) {
      if ((chuteUser) => 0 & (chuteUser <= 10)) {
        tentativas--;
        texto--;
        resultadoJS = "Errou,você tem " + texto + " chances";
        resultado.innerHTML = resultadoJS;
      } else {
        tentativas--;
        resultadoJS =
          "O número tem que estar entre 0 e 10. Você tem " +
          tentativas +
          " chances.";
        resultado.innerHTML = resultadoJS;
      }
    } else {
      resultadoJS = "Acertou! Aperte F4 e chute outro número!";
      resultado.innerHTML = resultadoJS;
    }
  } else {
    resultadoJS =
      "Você não conseguiu acertar o número :( .O número era " +
      numeroSecreto +
      ". Aperte f4 para tentar outra vez";
    resultado.innerHTML = resultadoJS;
  }
}
