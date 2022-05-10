<?php

class printingScanner
{
public function printTokens($array){
    $errCounter = 0;
    $allToken = new allTokens();
    $tokenType = new token_type();
    $token = $allToken->tokens($array);
    for($v = 0 ; $v < count($token) ; $v++){
        $strToken = $token[$v][0];
        $type = $tokenType->tokenType($token[$v][0]);
        if ($type != false){
            echo '<h3 style="color: black">Line : '. $token[$v][1].' Token Text :  <span style="color: red">'. $token[$v][0] .'</span> &nbsp;Token Type : <span style="color: red">' . $type.'</span></h3>' ;
        }else{
            echo '<h3 style="color: red">Line : ' . $token[$v][1] . '  Error in Token Text: ' . $token[$v][0].'</h3>';
            $errCounter ++;
        }

    }
    echo '<h3><span style="color: red">Total NO of errors: </span>'. $errCounter.'</h3>';
}

}