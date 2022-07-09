<?php
$keys = array("R5M8T-?CMHP-P?BWG","BPQNZ-B??BY-AXTZX","M?NYN-?IYYH-ZG?LD","NQBCN-?WY?A-JRQ98");
function run_for($parts_of_key,$partN,$key_parts,$part_coincidences) {
  if ($part_coincidences!=1) {
    str_split($key_parts[$partN]);
  }
  for ($i=0; $i < 10; $i++) {
    $var = str_replace('?',$i,$key_parts[$partN]);
    echo ("<br>".$var);
    array_push($parts_of_key[$partN],$var);
    if ($i==9) {
      for ($j=9; $j > -1; $j--) {
        $var = str_replace('?',$j,$key_parts[$partN]);
        echo ("<br>".$var);
        array_push($parts_of_key[$partN],$var);
      }
    }
  }
}
foreach ($keys as $key) {
  echo "The key in question is: $key<br>";
  $parts_of_key = array(
    array(),
    array(),
    array()
  );
  $key_parts = explode('-', $key);
  $total_coincidences = substr_count($key,'?');
  for ($partN=0; $partN < count($key_parts); $partN++) {
    $part_coincidences = substr_count($key_parts[$partN],'?');
    if ($part_coincidences>1) {
      for ($p=0; $p < $part_coincidences; $p++) {
        run_for($parts_of_key,$partN,$key_parts,$part_coincidences);
      }
    } elseif($part_coincidences==1) {
      run_for($parts_of_key,$partN,$key_parts,$part_coincidences);
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
