<?php
include('1.html');
implode(",", $_POST);
$a = $_POST['a'];
$b = $_POST['b'];
//$a="Синтаксически значение немного значение";
//$b="Синтаксически значение ";
function getCommonWords($a, $b)
{
    $arr1 = explode(" ", $a);
    $arr2 = explode(" ", $b);
    foreach ($arr1 as $value) {
        foreach ($arr2 as $value2) {
            if ($value === $value2) {
                $array[] = $value;
                $array=array_unique($array); //not to repeat
                $result=implode(" ",$array); //converse array to string
            }
        }
    }
    return $result;
}

var_dump( getCommonWords($a, $b));
