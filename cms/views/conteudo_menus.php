<form action="" method="post" id="formBody">
  <div class="principal">
      <div class="pricipalfilha">
<!--  <div style="heigth:300px;width:300px;">-->
      <div class="cad_titulo">
    Titulo Menu
        <input type="text" class="input" name="txt_titulo" value="">
  
      </div>
  </div>
<!--  <div style="heigth:300px;width:500px;">-->
      <div class="pricipalfilha">
      <div class="cad_link"> Link
    
          <input type="text" name="txt_link" maxlength="40" rows="8" cols="80" value="" class="input">
  
      </div>
  </div>
      <div class="pricipalfilha">
      <div class="cad_descricao">
      
          <textarea name="txt_descricao" id="DescricaoCarbook" maxlength="100"
          rows="8" cols="70" placeholder="Descricao do Carbook" value="" required class="input"></textarea>
  
      </div>
      </div>      

  

  <div class="pricipalfilha">
      <div class="buttom_enviar">
    
          <input id="btnEnviar" type="submit" class="input" name="btnEnviar" value="Salvar" onclick="CadastroeEdicao('#formBody','menus','novo','.listar_cadastros','.cadastros_menus','views/listarMenus.php','views/conteudo_menus.php','0');">
  
      </div>
 </div>
  </div>  

</form>
