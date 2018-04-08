
// funcao que verifica se o que ta digitado e numero
function verificarNumero(e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
}

// verificando se o que ta no campo cpf e numero
$(document).ready(function() {
  $("#cpf").keypress(verificarNumero);
});

// Formatacao do campo cpf
function FormataCpf(evt) {
  vr = (navigator.appName == 'Netscape') ?evt.target.value:evt.srcElement.value;
        if(vr.length == 3)vr = vr+".";
        if(vr.length == 7)vr = vr+".";
        if(vr.length == 11)vr = vr+"-";
  return vr;
}
