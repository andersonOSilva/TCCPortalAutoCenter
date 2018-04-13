<script>
    
    
$(document).ready(function() {
     $("#form").submit(function(event){
          //Recupera o id gravado no Form pelo atribute-id
        alert("ae powha");
         
        //anula a ação do submit tradicional "botao" ou F5
         event.preventDefault();
         
         
         //alert('teste');

         $.ajax({

            type: "POST",
            url: "../router.php?controller=Endereco&modo=novo",
             //url: "../route.php",
            //alert (url);
            data: new FormData($("#form")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success:function(dados){
                 $('.formconteudo').html(dados);
//                alert(dados);
             
            }
                
         
        });

     });
});
    
    
</script>
<!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->
      <form action="" method="POST" enctype="multipart/form-data" id="form"  >
          <div class="container_cad_prestadora">
            <!-- div que suporta imagem e descricao em destaque-->

              <div id="suporte">
                <!-- area da imagem em destaque  -->

                <div class="suporte_conteudo_prestadora">
                  <div id="areaImagem">



                      <div class="img_servico">
                          <img src="imagens/mecanica.jpg" alt="servico" >
                    </div>
                  </div>
                     <div class="img_plus">
                        <input  type="file" style="opacity:0;height:100%;width:100%" name="flefoto">
                    </div>

                  <!-- area de descricao em destaque  -->



            </div>
            <!--suporta imagens e descricoes segundarias/ avaliacao e botao -->

          </div>
    <!--
              <table class="formulario">
                   <tr>
                        <td colspan="2" class="titulo_tabela">Cadastro</td>

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



                </table>  
    -->


              <table class="formulario" >
                    <tr>
                        <tr>
                        <td colspan="2" id="titulo_tabela">Endereço</td>

                  </tr>
                  <tr>
                        <td class="coluna1">cep</td>
                        <td class="coluna2" ><input name="txtcep" type="text" placeholder="quitanda do ze"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">Rua</td>
                        <td class="coluna2"><input name="txtrua" type="text" placeholder="Rua"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">numero</td>
                        <td class="coluna2" ><input name="txtnumero" type="text" placeholder="nº"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">complemento</td>
                        <td class="coluna2" ><input name="txtcomplemento" type="text" placeholder="A casa1 c/1"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">bairo</td>
                        <td class="coluna2" ><input name="txtbairro" type="text" placeholder="bairro" name="txtbairro"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">Ponto de referencia</td>
                        <td class="coluna2"><input name="txtpontodereferencia" type="text" placeholder="quitanda do ze"></td>
                  </tr>
                  <tr>
                        <td class="coluna1">Cidade</td>
                      <td class="coluna2" > <select name="txtcidade"> <option>
                          <?php   ?>
                          </option></select></td>
                  </tr>
<!--
                  <tr>
                        <td class="coluna1">Cidade</td>
                      <td class="coluna2" name="txtcidade"> <select name="txtcidade"> <option>Selecione uma cidade:</option></select></td>
                  </tr>
-->

                  <tr >

                        <td colspan="2  " class="btnprosseguir" ><input type="submit" value="Prosseguir"></td>
                  </tr>    
              </table>
          </div>
</form>
          
