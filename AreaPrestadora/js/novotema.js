
$('#novoTema').attr('required','true');

function optionCheck(){
    var option = document.getElementById("temas").value;
    //alert(option);
    if(option == "outro"){
      $('#novoTema').show();
      $('#novoTema').attr('required','true');
    }else{
      $('#novoTema').hide();
      $('#novoTema').removeAttr('required');
    }

}
