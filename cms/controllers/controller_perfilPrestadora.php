<?php
class controllerPerfilPrestadora{


      public function Buscar($idPrestadora){
          //echo('buscar diz - amigo estotu aqui');
      require_once('cms/viewModel/view_prestadoraPerfil.php');

      $Prestadora = new perfilPrestadora();
      //Carrefa o id do registro na classe contatos
      $Prestadora->idPrestadora = $idPrestadora;

      $Prestadora = $Prestadora::SelectByID($idPrestadora);

    //  require_once('perfilPrestadora.php');
          return $Prestadora;
    }




}

?>
