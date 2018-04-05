<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Serviços</title>
      <link rel="stylesheet" type="text/css" href="css/styleHome.css">
      <link rel="stylesheet" type="text/css" href="css/styleCadPrestadora.css">
      <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
  </head>
  <body>
    <div class="principal">

      <?php
          require_once 'menu.php';
       ?>
<!--<script>
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
            url: "router.php?controller=planos&modo="+modo+"&id="+id,
            //alert (url);
            data: new FormData($("#form")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success: function(dados){
                 $('.modal').html(dados);
                 //alert(dados);

            }
        });

     });
 </script>-->
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

      <!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->
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
              
            </form>    
                
            </table>  
<!--        

    
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
-->
      <?php   require_once 'rodape.php'; ?>
  </div>
