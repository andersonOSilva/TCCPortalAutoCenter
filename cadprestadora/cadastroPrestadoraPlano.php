
    <style>
        .seguraPlanos{
            height: 200px;
            width: 100%;
            background-color: aqua;
            display: flex;
            flex-wrap: wrap;
        }
        .plano{
            background-color: brown;
            margin-top: auto;
            
            
        }
        .plano:nth-child(1){
            background-color: aliceblue;
        }
/*
        .seguraPlanos:nth-child(1) .plano{
            background-color: black;
            
            
        }
*/
        
    </style>



    <div class="principal">

      <?php
          require_once 'menu.php';
       ?>

      <!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->
      <div class="container_cad_prestadora">
        <!-- div que suporta imagem e descricao em destaque-->
          
        <div id="planos" >
<!--            <div style="background-color:darkred;height:25%;"></div>-->
            <div class="seguraPlanos" >
                 <div class="plano" style="background-image: url(../imagens/6.jpg);" >
                     <div class="descPlano">
                     hrhrhh
                     </div>
                
            
                 </div>
                <div class="plano" >
                
            rthrth
                 </div>
                <div class="plano" >
                
            hrthtrh
                 </div>
                <div class="plano" >
                
            hrhrhh
                 </div>
                <div class="plano" >
                
            rthrth
                 </div>
                <div class="plano" >
                
            hrthtrh
                 </div>
            </div>
        </div>
          
<!--
          <table class="formulario" >
                <tr>
                    <td  colspan="2" id="titulo_tabela" align="center">
                        Fale Conosco
                    </td>
                </tr>
                <tr>
                    
                    <td class="coluna1">
                       Nome:
                    </td>
                    <td class="coluna2">
                        <input placeholder="Digite seu nome..." type="text" name="txtNome" value="" size="30px" required pattern="[a-z A-Z ã Ã õ Õ é É ê Ê ô Ô ç Ç]*" title="Permitido apenas Letras" onkeypress="return validar(event,'number')" >

                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Telefone:
                    </td>
                    <td class="coluna2">
                        <input placeholder=" DDD XXXX-XXXX" type="text" name="txtTelefone" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Celular:
                    </td>
                    <td class="coluna2">
                        <input placeholder=" DDD XXXXX-XXXX" type="text" name="txtCelular" value="" size="30px" pattern="[0-9]{3} [0-9]{5}-[0-9]{4}">
                    </td>
                </tr>
                <tr >
                    <td class="coluna1">
                        Email:
                    </td>
                    <td class="coluna2">
                        <input placeholder="cadrasto@contatos.com" type="email" name="txtEmail" value="" size="30px" required>
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Home Page:
                    </td>
                    <td class="coluna2">
                        <input type="date" name="txtDtNasc" value="" size="30px">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Sexo:
                    </td>
                    <td class="coluna2">
                        <input type="radio" name="rdoSexo" value="F"  checked>Feminino
                        <input type="radio" name="rdoSexo" value="M" >Masculino
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Sugestões/Criticas:
                    </td>
                    <td class="coluna2">
                        <textarea placeholder="Deixe aqui sua observação..." name="txtobs" cols="32" rows="5" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Informações de Produtos:
                    </td>
                    <td class="coluna2">
                        <input placeholder="" type="text" name="txtProdutos" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Profissão:
                    </td>
                    <td class="coluna2">
                        <input placeholder="" type="text" name="txtProf" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Link/Facebook:
                    </td>
                    <td class="coluna2">
                        <input placeholder="" type="text" name="txtLink" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" class="coluna1" id="btns">
                        <input type="submit" name="btnSalvar" value="salvar">
                        <input type="reset" name="btnLimpar" value="Limpar">
                    </td>
                </tr>
            </table>

-->       <footer>
            <?php   require_once 'rodape.php'; ?>
          
          </footer>
      
  </div>
