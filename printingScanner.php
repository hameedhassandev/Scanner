<?php

class printingScanner
{

    public function printTokens($array){
        $errCounter = 0;
        $lineNo = 1;
        $allToken = new allTokens();
        $tokenType = new token_type();
        $token = $allToken->tokens($array);

        for($v = 0 ; $v < count($token) ; $v++){

            if ($token[$v] == ';' || $token[$v] == '\n'){
                $lineNo ++;
                $token[$v] = '';
            }else{
                $strToken = $token[$v];
                $type = $tokenType->tokenType($strToken);
                if ($type != false){
                    echo '<h5 style="color: black">Line : '. $lineNo.' Token Text :  <span style="color: red">'. $strToken .'</span> &nbsp;Token Type : <span style="color: red">' . $type.'</span></h5>' ;
                }else{
                    echo '<h5 style="color: red">Line : ' . $lineNo . '  Error in Token Text: ' .$strToken.'</h5>';
                    $errCounter ++;
                }

            }}
        echo '<h5><span style="color: red">Total NO of errors: </span>'. $errCounter.'</h5>';
        echo '<hr>';
    }


}

