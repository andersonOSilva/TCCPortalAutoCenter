// function salvar

function CadastroeEdicao(idform,controller,modo,divDados,divForm,linkDados,linkForm,idDado) {
  $(idform).submit(function(event){
      event.preventDefault();

        $.ajax({
           type: "POST",
           url: "router.php?controller="+controller+"&modo="+modo+"&id="+idDado,
           //alert (url);
           data: new FormData($(idform)[0]),
           cache:false,
           contentType:false,
           processData:false,
           async:true,
           success: function(dados){

             $( divDados ).load( linkDados );
             $( divForm ).load( linkForm );

                //$('.mostrar_dados').html(dados);
                //alert(dados);

           }
       });


  });
}


// function excluir

function Excluir(idIten,controller,modalDados,link){
  var resposta;
  resposta = confirm('Deseja excluir?');
  if (resposta==true){
  //alert(idIten);
    $.ajax({
        type: "GET",
        url: "router.php?controller="+controller+"&modo=excluir&id="+idIten,
        // data: {modo:'excluir',id:idIten},
        success: function(dados){
          // aqui ele recarrega a div com o arquivo
          $( modalDados ).load(link);
        }
    });
  }
}

// funcao de editar

function Editar(idItem,link,div){

  $.ajax({
    type: "GET",
    url: link,
    data: {modo:'buscarid',id:idItem},
    success: function(dados){
      $(div).html(dados);
      //alert(div);
      //$( "#conteudo_geral" ).load("views/formCabecalho.php" );

    }

  });
}


// ativar coisas

function AtivarEdesativar(idIten,controller,modo,divdados,link,respostaPesonalizada){
    var resposta;
    resposta = confirm(respostaPesonalizada);
    if (resposta==true)
    {
    //alert(idIten);
      $.ajax({
          type: "GET",
          url: "router.php?controller="+controller+"&modo="+modo+"&id="+idIten,
          success: function(dados){
              //$('.conteudo_prestadora').html(dados);
            // alert (dados);

            $( divdados ).load(link);
          }
      });
    }
  }
