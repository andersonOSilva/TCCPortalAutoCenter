<?php

  class controllerNivel{

    // adicionar novo nivel
    public function NovoPalavrao(){
      $descricao = new Nivel();
      $descricao->descricao=$_POST['txt_nivel'];
      $descricao::InsertNivel($descricao);
    }
    // listar niveis
    public function ListarNivel(){
      $select_nivel = new Nivel();
      return $select_nivel::selectNivel();
    }
    // buscar nivel por id
    public function BuscarNivelId($idNivelAcesso){
        require_once("../models/Nivel_class.php");
        $descricao=null;
        $idNivelAcesso = $idNivelAcesso;
        $descricao = new Nivel();
        $descricao->idNivelAcesso=$idNivelAcesso;
        return $descricao::selectNivelPorId($descricao);
    }
    // excluir nivel
    public function ExcluirNivel(){
      require_once("../models/Nivel_class.php");
      $idNivelAcesso=$_GET['id'];
      $descricao->$idNivelAcesso=$idNivelAcesso;
      $descricao::Delete($descricao);
    }
    // editar nivel
    public function EditarNivel(){
      require_once("../models/Nivel_class.php");
      $idNivelAcesso=$_GET['id'];
      $descricao = new Nivel();
      $descricao->$descricao=$_POST['txt_nivel'];
      $descricao->idNivelAcesso=$idNivelAcesso;
      $descricao::Editar($descricao);
    }
  }


 ?>
