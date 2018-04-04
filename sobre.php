<!DOCTYPE html>
<!-- nome do autor:Camils Cruz
		ultima data de edicao:20/03/2018 -->
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Sobre Nózes</title>
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleSobre.css">
    <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
      
      
      <script src="js/jquery7.min.js"></script>

  </head>
  <body>
    <!---A div Principal vai suporta todas as informações que tiver na página -->
    
    <div class="principal">
      <?php
          require_once 'menu.php';
       ?>
        
      <!-- Conteudo historia da empresa -->
      <div class="container_conteudo_hitoria">
        <div style="background-color:rgba(255,255,255,0.3);height:100%;">
          <div id="conteudo_hitoria">
            <!-- titulo historia da empresa -->
          <br>
                <br>
                <br>
          <div id="titulo_historia" style="background-color:bisque;color:black;width:700px;padding-right:25px;border-radius:50px 0px 0px 0px;padding-left:50px;width:650px;  ">
            <h1>Historia da Empresa</h1>
          </div>
            <!-- texto historia da empresa -->
          <div id="texto_historia" style="background-color:bisque;color:black;width:700px;padding-right:25px;margin-bottom:30px;border-radius:0px 0px 50px 50px;">
            <p > 
                  SoftI9 é uma empresa que atua na área da tecnologia, criada em 2016,
                  buscando inovar a cada projeto, tornando-os os únicos no mercado,
                  com a missão de criar softwares inovadores. A ideia,
                  surgiu em uma comunidade de tecnologia onde eram compartilhados códigos e projetos,
                  quando cinco jovens audaciosos e sonhadores,
                  criaram um grupo de desenvolvimento o qual desencadearia na base principal da empresa.
                  A empresa vem ao mercado com a visão de ter um maior
                  reconhecimento e ser referência na área de desenvolvimento de software
                  deixando a marca da inovação em cada projeto com o objetivo de dar
                  praticidade e abrir os olhos de seus usuários a novas possibilidades.
            </p>
        </div>
      </div>
      </div>
    </div>
        <!-- Conteudo visao da empresa -->
        <div class="container_conteudo_visao">
            <div style="background-color:rgba(0,0,0,0.7);">
          <div id="conteudo_visao" >
               <br>
                <br>
                <br>
              <!-- titulo visao da empresa -->
            <div id="titulo_visao">
                 <h1>Visão</h1>
            </div>
              <!-- texto visao da empresa -->
            <div id="texto_visao">
              <p >
                  SoftI9 é uma empresa que atua na área da tecnologia, criada em 2016,
                  buscando inovar a cada projeto, tornando-os os únicos no mercado,
                  com a missão de criar softwares inovadores. A ideia,
                  surgiu em uma comunidade de tecnologia onde eram compartilhados códigos e projetos,
                  quando cinco jovens audaciosos e sonhadores,
                  criaram um grupo de desenvolvimento o qual desencadearia na base principal da empresa.
                  A empresa vem ao mercado com a visão de ter um maior
                  reconhecimento e ser referência na área de desenvolvimento de software
                  deixando a marca da inovação em cada projeto com o objetivo de dar
                  praticidade e abrir os olhos de seus usuários a novas possibilidades.
              </p>
          </div>
        </div>
      </div>
    </div>

          <!-- Conteudo missao da empresa -->
          <div class="container_conteudo_missao">
              <div style="background-color:black;">
            <div id="conteudo_missao">
                <br>
                <br>
                <br>
                <!-- titulo missao da empresa -->
              <div style="background-image: url(imagens/car.jpg);
    background-size: cover;border-radius:50px 0px 0px 0px;height:auto;">
              <div id="titulo_missao" style="background-color:rgba(0,0,0,0.5);padding-right:25px;border-radius:50px 0px 0px 0px;padding-left:50px;width:650px;  ">
                <h1>Missão</h1>
              </div>
                <!-- texto missao da empresa -->
              <div id="texto_missao" style="background-color:rgba(0,0,0,0.5);border-radius:0px 0px 50px 50px;">
                <p>
                    SoftI9 é uma empresa que atua na área da tecnologia, criada em 2016,
                    buscando inovar a cada projeto, tornando-os os únicos no mercado,
                    com a missão de criar softwares inovadores. A ideia,
                    surgiu em uma comunidade de tecnologia onde eram compartilhados códigos e projetos,
                    quando cinco jovens audaciosos e sonhadores,
                    criaram um grupo de desenvolvimento o qual desencadearia na base principal da empresa.
                    A empresa vem ao mercado com a visão de ter um maior
                    reconhecimento e ser referência na área de desenvolvimento de software
                    deixando a marca da inovação em cada projeto com o objetivo de dar
                    praticidade e abrir os olhos de seus usuários a novas possibilidades.
                </p>
                  <br>
                  <br>
                  
            </div>
            </div>      
                
          </div>
        </div>
              
    </div>
            <!-- Conteudo valores da empresa -->
<!--        <span id="Valores"></span>-->
            <div class="container_conteudo_valores" >
              <div  style="background-color:rgba(0,0,0,0.7);">
                <div id="conteudo_valores">
                     <br>
                <br>
                <br>
                  <!-- titulo valores da empresa -->
                <div id="titulo_valores">
                  <h1>Valores</h1>
                </div>
                  <!-- texto valores da empresa -->
                <div id="texto_valores">
                <p>
                      SoftI9 é uma empresa que atua na área da tecnologia, criada em 2016,
                      buscando inovar a cada projeto, tornando-os os únicos no mercado,
                      com a missão de criar softwares inovadores. A ideia,
                      surgiu em uma comunidade de tecnologia onde eram compartilhados códigos e projetos,
                      quando cinco jovens audaciosos e sonhadores,
                      criaram um grupo de desenvolvimento o qual desencadearia na base principal da empresa.
                      A empresa vem ao mercado com a visão de ter um maior
                      reconhecimento e ser referência na área de desenvolvimento de software
                      deixando a marca da inovação em cada projeto com o objetivo de dar
                      praticidade e abrir os olhos de seus usuários a novas possibilidades.
                  </p>
              </div>
        <section id="menusobre">
            <a href="#texto_historia" class="scroll">
                <div class="itemMenusobre" style="border-radius:0px 10px 0px 0px;">Historia da empresa</div></a>
            <a href="#texto_missao" class="scroll"><div class="itemMenusobre">Missão</div></a>
            <a href="#titulo_visao" class="scroll"><div class="itemMenusobre">Visão</div></a>
            <a href="#titulo_valores" class="scroll"><div class="itemMenusobre" style="border-radius:0px 0px 10px 10px;">Valores</div></a>
            
        
        </section>
            </div>
              
          </div>
                
        </div>
          <?php
              require_once 'rodape.php';
           ?>
    </div>
      
      <script src="js/scrollSobre.js" ></script>
  </body>
</html>
