<script>



$(document).ready(function() {

    $("#form").submit(function(event){
          //Recupera o id gravado no Form pelo atribute-id
           //alert('teste');

         //alert(modo);
        //anula a ação do submit tradicional "botao" ou F5
         event.preventDefault();
         //alert('teste');

         $.ajax({

            type: "POST",
            url: "../router.php?controller=Prestadoras&modo=novo",
             //url: "../route.php",
            //alert (url);
            data: new FormData($("#form")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success:function(dados){
                 $('.formconteudo').html(dados);
                alert(dados);




            }
        });
    });

});




 </script>






<!--          ?pag=Endereco-->
<form action="" method="POST" enctype="multipart/form-data" id="form"  >

      <!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->
      <div class="container_cad_prestadora">
        <!-- div que suporta imagem e descricao em destaque-->
        <div id="suporte">
            <!-- area da imagem em destaque  -->

            <div class="suporte_conteudo_prestadora">
              <div id="areaImagem">



                  <div class="img_servico">
                      <img src="../imagens/mecanica.jpg" alt="servico" >
                </div>
              </div>
                <div class="img_plus">
                 <input  type="file" style="opacity:0;height:100%;width:100%" name="fle_imagem">
                </div>


              <!-- area de descricao em destaque  -->



        </div>
        <!--suporta imagens e descricoes segundarias/ avaliacao e botao -->

      </div>
          <table class="formulario">
               <tr>
                    <td colspan="2" id="titulo_tabela">Cadastro</td>

              </tr>
              <tr>
                    <td class="coluna1">login</td>
                    <td class="coluna2" ><input name="txtlogin" type="text" placeholder="loggin" required></td>
                </tr>
                <tr>
                    <td class="coluna1">senha</td>
                    <td class="coluna2" ><input name="txtsenha" type="password" placeholder="****" required></td>
                </tr>
                <tr>
                    <td class="coluna1">email</td>
                    <td class="coluna2" ><input name="txtemail" type="email" placeholder="email@shazam.com" required></td>
                </tr>
                <tr>
                    <td class="coluna1">cnpj</td>
                    <td class="coluna2" ><input name="txtcnpj" type="text" placeholder="cnpj" required></td>
                </tr>
                <tr>
                    <td class="coluna1">razao social</td>
                    <td class="coluna2" ><input name="txtrazaosocial" type="text" placeholder="razao social" required></td>
                </tr>
                <tr>
                    <td class="coluna1">nome fantasia</td>
                    <td class="coluna2" ><input name="txtnomefantasia" type="text" placeholder="nome fantasia" required></td>
                </tr>
              <tr>
                    <td class="coluna1">Telefone</td>
                    <td class="coluna2" ><input name="txttelefone" required type="text" placeholder="(11)1234-5644" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')"></td>
              </tr>
              <tr>
                    <td class="coluna1">Desricao</td>
                    <td class="coluna2" ><textarea name="txtdescricao"></textarea></td>
              </tr>
              <tr >

                    <td colspan="2" class="btnprosseguir" ><input type="submit" value="prosseguir"></td>
              </tr>



          </table>

          
    </div>
</form>
