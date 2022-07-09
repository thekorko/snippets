<?php
$keys = array("R5M8T-?CMHP-P?BWG","BPQNZ-B??BY-AXTZX","M?NYN-?IYYH-ZG?LD","NQBCN-?WY?A-JRQ98");

foreach ($keys as $key) {
  echo "The key in question is: $key<br>";
  $parts_a = array();
  $parts_b = array();
  $parts_c = array();
  $key_parts = explode('-', $key);
  $total_coincidences = substr_count($key,'?');
  for ($partN=0; $i < $key_parts $; $partN++) {
    $part_coincidences = substr_count($part[$partN],'?');
    if ($part_coincidences>0) {
      for ($p=0; $p < $part_coincidences; $p++) {
        for ($i=0; $i < 10; $i++) {
          for ($j=9; $j > -1; $j--) {
            echo (str_replace('?'));
          }
        }
      }
    } else {
      continue;
    }
  }

  echo "<br>";
  $result_key = implode('-', $result_key_parts);
  echo "$result_key";
}
?>
