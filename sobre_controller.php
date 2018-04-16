<?php

class controller_sobre{
    
    public function inserir{
        
        $sobre = new Sobre();
        
        $sobre->historia=$_POST['historia'];
        $sobre->missao=$_POST['missao'];
        $sobre->visao=$_POST['visao'];
        $sobre->valores=$_POST['valores'];
        $sobre->slogan=$_POST['slogan'];
        
        $sobre::Insert($sobre);
        
    }
    public function Listar(){
        $Sobre = new Sobre();
        
        $Sobre->idSobre=$idsobre;
        
        
        $Sobre::Select($Sobre);
        
        
    }
  public function Editar(){ 
      
      $sobre = new Sobre();
        
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