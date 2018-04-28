

<div class="show" style="heigth:500px;width:500px;background-color:red;">
    <?php
   require_once 'controllers/sobre_controller.php';
   require_once 'models/sobre_class.php';
     $sobre_controller = new controller_sobre();

              $retornoModel = controller_sobre::Buscar();
              $historia=$retornoModel->historia;
              $missao=$retornoModel->missao;
              $visao=$retornoModel->visao;
              $valores=$retornoModel->valores;

    echo($historia);
    echo($missao);
    echo($visao);
    echo($valores);

?>
        
                    </div>
<div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>

</div>
