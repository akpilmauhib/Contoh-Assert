<?php
function firstLetter($string)
{
    assert(strlen($string) > 0);

    return substr($string, 0, 1);
}
echo firstLetter("Hello!");
echo firstLetter("");
    