<?php
// 課題１
$name = "松崎";
if($name == "松崎"){
  echo "私はあなたの名前です";
}else{
  echo "あなたの名前ではありません";
}

//課題２
$total = 0;
for($i = 0; $i <= 10000; $i++){
  $total += $i;
}
echo "\n";
echo $total;

// 課題３
$fruits = ["リンゴ", "ミカン", "ナシ", "メロン", "バナナ"];
foreach($fruits as $fruit){
  echo "\n";
  echo $fruit;
  
}

//課題４
$start = 1;
$end = 100;
for($i= $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo "\n";
    echo $i;
  }
}
?>