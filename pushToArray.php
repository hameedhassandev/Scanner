<?php

class pushToArray
{

   public function pushCharsToArray($string)
    {
        $lexemeArr = array();

        $pattR = "/\r/";
        $pattN = "/\n/";
        for ($i = 0; $i < strlen($string); $i++) {
            if (preg_match($pattR, $string[$i])) {
                array_push($lexemeArr, ' ');
            } elseif (preg_match($pattN, $string[$i])) {
                array_push($lexemeArr, '\n');
            } else {
                array_push($lexemeArr, $string[$i]);
            }
        }
        return $lexemeArr;
    }
}