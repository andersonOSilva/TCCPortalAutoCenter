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
<form action="?endereco" method="post" enctype="multipart/form-data" >
    <table class="formulario">
                   <tr>
                        <td colspan="2" id="titulo_tabela">Cadastro</td>

                  </tr>  
                  <tr>
                        <td class="coluna1">login</td>
                        <td class="coluna2" name="txtlogin"><input type="text" placeholder="loggin"></td>
                    </tr>
                    <tr>
                        <td class="coluna1">senha</td>
                        <td class="coluna2" name="txtsenha"><input type="text" placeholder="****"></td>
                    </tr>
                    <tr>
                        <td class="coluna1">email</td>
                        <td class="coluna2" name="txtemail"><input type="text" placeholder="email@shazam.com"></td>
                    </tr>
                    <tr>
                        <td class="coluna1">cnpj</td>
                        <td class="coluna2" name="txtcnpj"><input type="text" placeholder="cnpj"></td>
                    </tr>
                    <tr>
                        <td class="coluna1">razao social</td>
                        <td class="coluna2" name="txtrazaosocial"><input type="text" placeholder="razao social"></td>
                    </tr>
                    <tr>
                        <td class="coluna1">nome fantasia</td>
                        <td class="coluna2" name="txtnomefantasia"><input type="text" placeholder="nome fantasia"></td>
                    </tr>
                  <tr>
                        <td class="coluna1">Telefone</td>
                        <td class="coluna2" name="txttelefone"><input type="text" placeholder="(11)1234-5644"></td>
                  </tr>
                  <tr >

                        <td colspan="2  " class="btnprosseguir" ><input type="submit" value="prosseguir"></td>
                  </tr> 



    </table>
</form>