<?php 
//課題１
$a = 3;
$b = 7;
echo $a + $b;

//課題２
$array_month = ["１月", "２月", "３月", "４月", "５月", "６月", "７月", "８月", "９月", "１０月", "１１月", "１２月"];
echo $array_month[7];

//課題３
$hello = "Hello";
$name = "松崎";
$World = "'s World!";
echo $hello . "," . $name . $World;

//課題４
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

//課題５
$calendar_2018 = [
  "January" => "１月",
  "February" => "２月",
  "March" => "３月",
  "April" => "４月",
  "May" => "５月",
  "June" => "６月",
  "July" => "７月",
  "August" => "８月",
  "September" => "９月",
  "October" => "１０月",
  "November" => "１１月",
  "December" => "１２月",
  ];
// １２月を表示する
echo $calendar_2018["December"];
?>