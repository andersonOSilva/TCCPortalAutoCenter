<header class="cabecalho_forum">
     <div class="descricao_cabecalho_forum">
       <?php
       require_once("cms/controllers/forum_controller.php");
       require_once("cms/models/cabecalhoForum_class.php");
       $controller_forum= new controllerForum();
       $List_returnForum=$controller_forum::selectCabecalhoAtivado();

       $cont=0;
       if (isset($List_returnForum)) {


        ?>
         <div class="titulo_forum">
           <h1><span style="color:#eca023;"><?php echo $List_returnForum->titulo1 ?></span><?php echo $List_returnForum->titulo2 ?></h1>
         </div>

         <div class="regras_forum">
             <p><?php echo $List_returnForum->descricao ?></p>
         </div>

       <?php } ?>
     </div>
</header>
