<?php
/*
Autor: Luana Fernandes
Descrição: tela de cadastro do forum localizado na home
Data:09/05/2018
*/
class controllerForumHome
{
  public function Novo(){

    require_once 'modulo.php';

    $forumHome = new ForumHome();
    $forumHome->descricao=$_POST['txtdescricao'];

    // iniciado variaveis
    $diretorio_completo=Null;
    $MovUpload=false;
    $imagem_file=Null;

    // Pegando a Foto

    if (!empty($_FILES['flImagenForumHome']['name'])) {

       $imagem_file = true;
       $diretorio_completo=salvarFoto($_FILES['flImagenForumHome'],'imagenForum');

       if ($diretorio_completo == "Erro") {
           echo "<script>
               alert('arquivo nao movido');
               window.history.go(-1);
               </script>";
             $MovUpload=false;
       }else {
         $MovUpload=true;
       }
     }else {
       $imagem_file = false;
     }

     $forumHome ->foto =$diretorio_completo;
     //var_dump($diretorio_completo) ;
    // var_dump($carbook);
     $forumHome::Insert($forumHome);
  }


  public function Listar(){
    $forumHome = new ForumHome();
    return $forumHome::Select();
  }

  public function Buscar(){

    $forumHome = new ForumHome();

    return $forumHome = $forumHome::SelectById($forumHome);

  }

  public function Ativar(){
    $ativar = new ForumHome();
    $ativar->idForum=$_GET['id'];
    $ativar::Ativo($ativar);
  }

  public function Desativar(){
    $desativar = new ForumHome();
    $desativar->idForum=$_GET['id'];
    $desativar::Desativo();
  }

}


 ?>
