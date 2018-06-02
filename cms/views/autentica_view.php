<!DOCTYPE html>
<!--
Autor:Jhonatha Nunes Silveira.
Data:26/03/2018.
Descrição:Tela de autenticação para o gerenciamento do portal(CMS).
-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Autenticação</title>
    <link rel="stylesheet" href="css/autentica_style.css">
  </head>
  <body>
    <div class="transparencia">
      <div id="principal">
          <header class="cabecalho">
              <div id="logo">
                <img src="../imagens/logos/logo9.png" alt="" class="logo_image">
              </div>
              <div class="nome_logo">
                <h1>Portal Auto Center</h1>
              </div>
          </header>
          <main class="conteudo">
            <form name="frm_login" action="router.php?controller=login" method="post">
              <div class="dados">
                <input class="txt_dados" type="text" placeholder="Digite seu usuario" name="txt_usuario" value="">
                <input class="txt_dados" type="password" placeholder="Digite sua senha"  name="txt_senha" value="">
              </div>
              <input class="btn_entrar" type="submit" name="btn_entrar" value="Entrar">
            </form>
          </main>
      </div>
    </div>
  </body>
</html>
