<?php

function cutString($line, $length, $appends): string
{
    $strLength = mb_strlen ($line);
    if ($strLength > $length) {
        $newStr = mb_substr ($line, 0, $length) . $appends;
    } else {
        $newStr = $line;
    }
    return $newStr;
}

