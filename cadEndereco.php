<script>
     $("#form").submit(function(event){
          //Recupera o id gravado no Form pelo atribute-id
          var id = $(this).data("id");
          var modo = "";
          if(id == '0')
              modo='novo';
          else
              modo='editar';

        //anula a ação do submit tradicional "botao" ou F5
         event.preventDefault();

         $.ajax({
            type: "POST",
            url: "router.php?controller=prestadora&modo="+modo+"&id="+id,
            //alert (url);
            data: new FormData($("#form")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success: function(dados){
                 $('formulario1').html(dados);
                 //alert(dados);

            }
        });

     });
 </script>
<form action="" method="post" enctype="multipart/form-data" >
    <table class="formulario" >
                    <tr>
                        <tr>
                        <td colspan="2" class="titulo_tabela">Endereço</td>

                  </tr>
                  <tr>
                        <td class="coluna1">cep</td>
                        <td class="coluna2" name="txtcep"><input type="text" placeholder="quitanda do ze"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">Rua</td>
                        <td class="coluna2" name="txtrua"><input type="text" placeholder="Rua"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">numero</td>
                        <td class="coluna2" name="txtnumero"><input type="text" placeholder="nº"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">bairo</td>
                        <td class="coluna2" name="txtbairro"><input type="text" placeholder="bairro" name="txt"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">Ponto de referencia</td>
                        <td class="coluna2" name="txtpontodereferencia"><input type="text" placeholder="quitanda do ze"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">Cidade</td>
                        <td class="coluna2" name="txtcidade"><input type="text" placeholder="cidade"></td>
                  </tr>

                  <tr >

                        <td colspan="2  " class="btnprosseguir" ><input type="submit" value="prosseguir"></td>
                  </tr>    
    </table>
</form>