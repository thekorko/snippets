<?php
$keys = array("R5M8T-?CMHP-P?BWG","BPQNZ-B??BY-AXTZX","M?NYN-?IYYH-ZG?LD","NQBCN-?WY?A-JRQ98");

function run_for(&$parts_of_key,$partN,$key_parts,$part_coincidences) {
    $test = str_split($key_parts[$partN]);
    for ($letter=0; $letter < count($test) ; $letter++) {
      if ($test[$letter]!='?') {
        continue;
      }
      for ($i=0; $i < 10; $i++) {
        $temp = $test;
        $temp[$letter] = str_replace('?',$i,$test[$letter]);
        $var = implode($temp);
        echo ("<br>".$var);
        array_push($parts_of_key[$partN],$var);
        for ($j=9; $j > -1; $j--) {
          $temp = $test;
          $temp[$letter] = str_replace('?',$j,$test[$letter]);
          $var = implode($temp);
          echo ("<br>".$var);
          array_push($parts_of_key[$partN],$var);
        }
      }
    }
}
foreach ($keys as $key) {
  echo "<br>The key in question is: $key<br>";
  $parts_of_key = array(
    array(),
    array(),
    array()
  );
  $key_parts = explode('-', $key);
  $total_coincidences = substr_count($key,'?');
  for ($partN=0; $partN < count($key_parts); $partN++) {
    $part_coincidences = substr_count($key_parts[$partN],'?');
    if ($part_coincidences>0) {
      for ($p=0; $p < $part_coincidences; $p++) {
        run_for($parts_of_key,$partN,$key_parts,$part_coincidences);
        $x = 0;
        foreach ($parts_of_key[0] as $key_part) {
          echo "<br>The resulting key is ".$parts_of_key[0][$x].$parts_of_key[1][$x].$parts_of_key[2][$x]."<br>";
          $x++;
        }
      }
    } else {
      if (empty($parts_of_key[$partN])) {
        echo "$key_parts[$partN]";
        array_push($parts_of_key[$partN],$key_parts[$partN]);
      }
      continue;
    }
  }

}
?>
