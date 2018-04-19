<?php

class controller_sobre{
//    echo('controller sobre diz - amigo estou aqui');
    
    public function inserir(){
        
        $sobre = new sobre();
        
        $sobre->historia=$_POST['historia'];
        $sobre->missao=$_POST['missao'];
        $sobre->visao=$_POST['visao'];
        $sobre->valores=$_POST['valores'];
        $sobre->slogan=$_POST['slogan'];
        
        $sobre::Insert($sobre);
        
    }
    public function Listar(){
        $Sobre = new sobre();
        $Sobre::Select($Sobre);
        
        
    }
    public function Buscar(){
        $Sobre = new sobre();
        
        $Sobre->idSobre=$idsobre;
        
        
        $Sobre::Select($Sobre);
        
        
    }
    
    
    public function BuscarAtivo(){
//        echo('buscarAtivo diz - amigo estou aqui');        
        $Sobre = new sobre();

        return  $Sobre::SelectAtivo();
        
        
        
        
        
        
    }
  public function Editar(){ 
      
      $sobre = new sobre();
        
        $sobre->historia=$_POST['historia'];
        $sobre->missao=$_POST['missao'];
        $sobre->visao=$_POST['visao'];
        $sobre->valores=$_POST['valores'];
        $sobre->slogan=$_POST['slogan'];
        
        $sobre::Update($sobre);
      
      
      
  }
    public function Excluir(){
      $sobre = new sobre();
      //Carrefa o id do registro na classe contatos
      $sobre->idSobre=$_GET['id'];
      //Chama o metodo de excluir na model
      $sobre::Delete($sobre);
    }


}



?>