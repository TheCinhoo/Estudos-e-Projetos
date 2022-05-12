<?php
  header("Content-type: text/html; charset=utf-8");

  $n = [1,2,3,4];
  var_dump($n);

  for ($i=0; $i < cont($n) ; $i++) {
    echo ( $n[$i]. "<br />" );
  }