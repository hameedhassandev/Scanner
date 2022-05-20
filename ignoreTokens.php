<?php

class ignoreTokens
{
    public function ignoreComments($token){
        if (strpos($token,'***')!== false || strpos($token,'/>')!== false) {
            return true;
        }
    }

    public function validPath($filePath){
        $patternFilePath = "/^.*\.+[a-zA-Z0]*$/";
        $fileName = $filePath;
        if (preg_match($patternFilePath, $fileName)){
            if (file_exists($fileName)){
                return file_get_contents($fileName);

            }
        }
       else{
            return false;
        }
    }

    public function getTokensInFile($filePath){

        $ob = new ignoreTokens();
        $content = $ob->validPath($filePath);
        if ($content != false){
            $pushAr = new pushToArray();
            $arrLexeme = $pushAr->pushCharsToArray($content);
            $tokens = new allTokens();
            return $tokens->tokens($arrLexeme);
        }else{
            return false;
        }

    }
}