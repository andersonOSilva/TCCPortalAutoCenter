<?php
/*
Autor:Jhonatha Nunes Silveira
Data:27/03/2018
Descri��o:Classe de Funcionario
*/
class controllerFuncionario{

  //Função para fazer o login do usuario
  Function Login(){
    $funcionario = new Funcionario;
    //Seta o usuario e senha
    $funcionario->usuario = $_POST["txt_usuario"];
    $funcionario->senha = $_POST["txt_senha"];
    //Chama a função de Login
    $funcionario::Login($funcionario);
  }
}
 ?>
