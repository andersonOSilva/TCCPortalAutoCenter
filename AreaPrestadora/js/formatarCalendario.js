// funcao que verifica se o que ta digitado e numero
function verificarNumero(e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
}

$(document).ready(function() {
  $("#data").keypress(verificarNumero);
});

// Formatacao do campo data
function FormataData(evt) {
  vr = (navigator.appName == 'Netscape') ?evt.target.value:evt.srcElement.value;
        if(vr.length == 2)vr = vr+"/";
        if(vr.length == 5)vr = vr+"/";
  return vr;
}
