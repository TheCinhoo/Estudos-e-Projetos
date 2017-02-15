<?php
  $inicio = $_POST['inicio'];
  $fim    = $_POST['fim'];


  function contador($inicio, $fim){
      if ($inicio < $fim) {
      echo "CONTANDO DE $inicio ATE $fim";
      for ($i = $inicio; $i <= $fim ; $i++) {
        $var .= "<BR>" .$i.  "...";
      }
    } else {
      echo "CONTANDO DE $inicio ATE $fim";
      for ($i = $inicio; $i >= $fim ; $i--) {
        $var .= "<BR>" .$i.  "...";
      }
    }
    return $var;
  }

  $cont = contador($inicio, $fim);
  echo $cont;
?>
