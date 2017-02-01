<?php
include ('2.html');
$text=$_POST;
$text='My name Anton I am a student of php academy'; //anton student academy
//var_dump($text);
function topThreeWords($text)
{
     $arr=explode(" ", $text);
      foreach ($arr as $key=>$value)   {
        $arr []= strlen($value);
      }
      print_r($arr);
}
print_r( topThreeWords($text));