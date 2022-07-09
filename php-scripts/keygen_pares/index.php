<?php
$keys = array("R5M8T-?CMHP-P?BWG","BPQNZ-B??BY-AXTZX","M?NYN-?IYYH-ZG?LD","NQBCN-?WY?A-JRQ98");
foreach ($keys as $key) {
  $filter_a = array();
  $filter_b = array();
  for ($i=0; $i < 10; $i++) {
    for ($j=9; $j > -1; $j--) {
      $i_j = "(".$i.",".$j.")";
      $j_i = "(".$j.",".$i.")";
      if (!in_array($i_j,$filter_a) && !in_array($j_i,$filter_a)) {
        array_push($filter_a,$i_j);
        //echo ($i_j);
      }
      if (!in_array($j_i,$filter_b) && !in_array($i_j,$filter_a)) {
        array_push($filter_b,$j_i);
        //echo ($j_i);
      }

    }
    echo "<br>";
  }
}
?>
