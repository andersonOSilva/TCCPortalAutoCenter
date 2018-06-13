<?php
  class controller_filial{
    public function inserir(){
       $filial = new filial_servico();
       echo "string";
      if (isset($_POST['ativo'])){
          $ativo = $_POST['ativo'];
          $idFilial = $_GET['id'];
          $filial->idServico=$ativo;
          $filial->idFilial=$idFilial;
          $filial::servicoFilial($filial);

        //  var_dump($filial);
        }
    }

    public function SelecionarFilialPorID($idFilial){
      $filial= new filial();
      $filial->idFilial=$idFilial;
      return $filial::selecionarFilialPorIdTBL($filial);
    }

    public function SelecionarServicosPorFilial($idFilial){
      $filial= new servico_filial();
      $filial->idFilial=$idFilial;
      return $filial::SelecionarServicosPorFilial($filial);
    }

    public function NovaFilial(){
      $filial = new filial();
      $filial->nome=$_POST['txt_nome'];
      $filial->telefone=$_POST['txt_telefone'];
      $filial::InsertFilial($filial);
    }

    public function ListarFilial(){
      $select_filial = new filial();
      return $select_filial::selectFilial();
    }


    public function BuscarProdutos($idFilial){
      $select_produtos = new CompraProduto();
      $select_produtos->idFilial=$idFilial;
      return $select_produtos::SelecionarProdutos($select_produtos);
    }


    public function BuscarProdutos2($idFilial){
      $select_produtos = new CompraProduto();
      $select_produtos->idFilial=$idFilial;
      return $select_produtos::SelecionarProdutos2($select_produtos);
    }

    public function BuscarProdutosCliente($idFilial){
      $select_produtos = new CompraProduto();
      $select_produtos->idUsuario=$idFilial;
      return $select_produtos::BuscarProdutosCliente($select_produtos);
    }




  }
 ?>
