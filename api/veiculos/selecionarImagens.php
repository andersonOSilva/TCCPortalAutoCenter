<?php
  require_once('../../cms/models/bd_class.php');

  $con = new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql = "SELECT * FROM tbl_foto_veiculo";

if (isset($_GET['idVeiculo'])) {
  $sql = "SELECT * FROM tbl_foto_veiculo WHERE idveiculo =".$_GET['idVeiculo'];
}

  $resultado = $pdoCon->query($sql);

  $lstImagens = array();

  while ($imagem = $resultado->fetch(PDO::FETCH_ASSOC)) {
<<<<<<< HEAD
    $lstImagens[] = $imagem;
  }

  echo json_encode($lstImagens);
=======
    $lstimagens[] = $imagem;
  }

  echo json_encode($lstimagens);
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6
?>
