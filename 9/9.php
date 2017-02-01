<?php
include('9.html');

$text = implode(" ", $_POST);
/**
 * @param $text
 */
function reverceWord($text)
{
    $chars = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);
    krsort($chars);
    foreach ($chars as $key => $value) {
        $chars = $value;
        echo($chars);
    }
    return;
}

echo reverceWord($text);