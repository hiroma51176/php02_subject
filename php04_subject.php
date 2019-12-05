<?php
// 課題１
function twice($number){
  return $number * 2;
}
echo twice(5);
echo "\n";

// 課題２
function add($a, $b){
  return $a + $b;
}
echo add(2, 4);
echo "\n";

//課題３
function func($arr){
  $total = 1;
  foreach($arr as $a){
    $total *= $a;
  }
  return $total;
}
echo func(array(1, 3, 5, 7, 9));
echo "\n";

//課題４
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array(array(5, 9, 1, 4, 7));
echo "\n";

// 課題５
// strip_tags HTMLやPHPのタグを除去
$text = "<h1>こんにちは！</h1>";
echo strip_tags($text);
echo "\n";

//array_push 配列へ値を追加する
$fruits = array("リンゴ", "ミカン");
array_push($fruits, "メロン", "パイナップル");
var_dump($fruits);
echo "\n";

//array_merge 配列を結合する
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$array3 = array(7, 8, 9);
$array = array_merge($array1, $array2, $array3);
var_dump($array);
echo "\n";

//time 現在のタイムスタンプを取得 
echo time();
echo "\n";

//mktime 指定した時刻のタイムスタンプを取得
echo mktime(0, 0, 0, 12, 5, 2015);
echo "\n";

//date 任意のフォーマットで日付や時刻を表示する
echo date('Y/m/d H:i:s');
?>