<?php

$size = 1000;

$array_num = array();
$array_str = array();
$array_ass = array();
for ($i=0; $i < $size; $i++) { 
  $array_num[$i] = rand(-1000, 1000);
  $array_str[$i] = randomStr(rand(1, 15));
  $array_ass += [$i => array('string' => randomStr(rand(1, 15)), 'number' => rand(-1000, 1000))];
}
// print_r($array_num);
// print_r($array_str);
// print_r($array_ass);


//num sort()
$array_num_cp = $array_num;
echo "Sorting numbers: sort()<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
sort($array_num_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_num_cp);

//str sort()
$array_str_cp = $array_str;
echo "Sorting strings: sort()<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
sort($array_str_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_str_cp);

//num usort()
$array_num_cp = $array_num;
echo "Sorting numbers: usort()<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
usort($array_num_cp, 'compare_num');
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_num_cp);

//str usort()
$array_str_cp = $array_str;
echo "Sorting strings: usort()<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
usort($array_str_cp, 'compare_str');
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_str_cp);

//ass orderby str usort()
$array_ass_cp = $array_ass;
echo "Sorting associate by str: usort()<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
usort($array_ass_cp, compare_ass_bystr('string'));
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_ass_cp);

//ass orderby num usort()
$array_ass_cp = $array_ass;
echo "Sorting associate by num: usort()<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
usort($array_ass_cp, compare_ass_bynum('number'));
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_ass_cp);

//num quick sort
$array_num_cp = $array_num;
echo "Sorting numbers: quick sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
qsort($array_num_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r(qsort($array_num_cp));

//str quick sort
$array_str_cp = $array_str;
echo "Sorting strings: quick sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
qsort($array_str_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r(qsort($array_str_cp));

//ass orderby str quick sort
$array_ass_cp = $array_ass;
echo "Sorting associate by str: quick sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
assqsort($array_ass_cp,'string');
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r(assqsort($array_ass_cp,'string'));

//ass orderby num quick sort
$array_ass_cp = $array_ass;
echo "Sorting associate by num: quick sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
assqsortnum($array_ass_cp,'number');
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r(assqsortnum($array_ass_cp,'number'));

//num Shell sort
$array_num_cp = $array_num;
echo "Sorting numbers: Shell sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
ssort($array_num_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_num_cp);

//str Shell sort
$array_str_cp = $array_str;
echo "Sorting strings: Shell sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
ssort($array_str_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_str_cp);

//num Radix sort
$array_num_cp = $array_num;
echo "Sorting numbers: Radix sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
ssort($array_num_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_num_cp);

//str Radix sort
$array_str_cp = $array_str;
echo "Sorting strings: Radix sort<br>";
$start = microtime(true);
$now = DateTime::createFromFormat('U.u', $start);
echo 'Start: '. $now->format("H:i:s.u").'<br>';
ssort($array_str_cp);
echo 'Time: '.round(microtime(true) - $start, 4).' sec.<br><br>';
//print_r($array_str_cp);

//custom sorts for usort()
function compare_ass_bynum($key) {
   return function ($a, $b) use ($key) {
      return compare_num($a[$key], $b[$key]);
   };
}

function compare_ass_bystr($key) {
   return function ($a, $b) use ($key) {
      return compare_str($a[$key], $b[$key]);
   };
}

function compare_num($a, $b) {
  if ($a == $b) {
    return 0;
  }
  return ($a < $b) ? -1 : 1;
}

function compare_str($a, $b) {
  if (strcmp($a, $b) == 0) {
    return 0;
  }
  return (strcmp($a, $b) < 0) ? -1 : 1;
}

//generate random strings
function randomStr($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomStr = '';
    for ($i = 0; $i < $length; $i++) {
        $randomStr .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomStr;
}

//quick sort
function qsort($array)
{
  $length = count($array);
  if($length <= 1){
    return $array;
  }
  else{
    $pivot = $array[0];
    $left = $right = array();
    for($i = 1; $i < count($array); $i++)
    {
      if($array[$i] < $pivot){
        $left[] = $array[$i];
      }
      else{
        $right[] = $array[$i];
      }
    }
    return array_merge(qsort($left), array($pivot), qsort($right));
  }
}

function compare_ass_bystr_qsort($a, $b, $key) {
  return compare_str($a[$key], $b[$key]);
}

function compare_ass_bynum_qsort($a, $b, $key) {
  return compare_num($a[$key], $b[$key]);
}

//quick sort for associate string
function assqsort($array, $key) {
  $length = count($array);
  if($length <= 1){
    return $array;
  }
  else{
    $pivot = $array[0];
    $left = $right = array();
    for($i = 1; $i < count($array); $i++)
    {
      if (compare_ass_bystr_qsort($array[$i],$pivot,$key) < 0) {
        $left[] = $array[$i];
      }
      else{
        $right[] = $array[$i];
      }
    }
    return array_merge(assqsort($left, $key), array($pivot), assqsort($right, $key));
  }
}

//quick sort for associate number
function assqsortnum($array, $key) {
  $length = count($array);
  if($length <= 1){
    return $array;
  }
  else{
    $pivot = $array[0];
    $left = $right = array();
    for($i = 1; $i < count($array); $i++)
    {
      if (compare_ass_bynum_qsort($array[$i],$pivot,$key) < 0) {
        $left[] = $array[$i];
      }
      else{
        $right[] = $array[$i];
      }
    }
    return array_merge(assqsortnum($left, $key), array($pivot), assqsortnum($right, $key));
  }
}

//Shell sort
function ssort(&$a){
  $sort_length = count($a) - 1;
  $step = ceil(($sort_length + 1)/2);
  do{
    $i = ceil($step);
      do{
        $j=$i-$step;
        $c=1;
        do{
          if($a[$j]<=$a[$j+$step]){
            $c=0;
          }
          else{
            $tmp=$a[$j];
            $a[$j]=$a[$j+$step];
            $a[$j+$step]=$tmp;
          }
          $j=$j-1;
        }
        while($j>=0 && ($c==1));
        $i = $i+1;
      }
      while($i<=$sort_length);
      $step = $step / 2;
  }
  while($step > 0);
}

//Radix sort
function RadixSort(&$data) {
  for ($shift = 31; $shift > -1; $shift--)
  {
    $j = 0;
    for ($i = 0; $i < count($data); $i++)
    {
      $move = ($data[$i] << $shift) >= 0;

      if ($shift == 0 ? !$move : $move)
        $data[$i - $j] = $data[$i];
      else
        $temp[$j++] = $data[$i];
    }

    for ($i = 0; $i < $j; $i++)
    {
      $data[(count($data) - $j) + $i] = $temp[$i];
    }
  }
  $temp = null;
}

?>