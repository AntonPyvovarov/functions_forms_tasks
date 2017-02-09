<?php
include_once ('9.1.php');

function reverceWord()
{
    $text = implode(" ", $_POST);
    $chars = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);
    krsort($chars);
    foreach ($chars as $key => $value) {
        $chars = $value;
        echo($chars);
    }
    return;
}

// reverceWord();