<?php
include_once('index.php');
function showText(){
    $theme=$_POST ['theme'];
    $theme=strip_tags($theme, '<b>');
    $theme=explode(" ", $theme);

    $badWords=['козел','блін','піпєц'];
    foreach ($badWords as $key=>$value){
        foreach ($theme as $key1=>$item){
            if($value!==$item) {
                $str= $item;
                continue;
            }else{
                $str= "Не нормативна лексика";

            }
        }
    }
    return $str;
}
