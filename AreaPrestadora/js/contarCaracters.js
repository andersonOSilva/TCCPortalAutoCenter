function caracteres() {
  var max = new Number();
  max = 184;
  var atual = document.getElementById('perg').value.length;
  var valor = new Number();
  valor = max - atual;

  if (valor > 0) {

      if (valor == 1) {valor=0;}

      document.getElementById('restante').innerHTML=valor;
      document.getElementById('btnEnviarPerguntar').disabled="";
  }else{
      document.getElementById('btnEnviarPerguntar').disabled="disabled";
  }


}
