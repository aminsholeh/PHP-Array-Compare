<?php
  $sayur = array("bayam", "kangkung", "tomat", "labu");
  $buah = array("tomat", "apel", "anggur", "labu", "jeruk");
   
  // Compare values
  $cmp = array_intersect($sayur, $buah);
  print_r($cmp);
?>