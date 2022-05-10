<?php


class allTokens
{
    private $linAndToken = array();
    private $allTok = array();
    private $token = '';
    private $lexeme ='';
    private $stat = 0;
    private $linCounter = 1;

    function tokens($array){
        $c = new transitionDiagram();
        $spacChars = [' ', ';' , '\n'];
        for ($x = 0 ; $x < count($array) ; $x++){
            $result = $c->next_transition($array[$x],$this->stat);
            $this->lexeme = $array[$x];
            if ($this->lexeme == ';' || $this->lexeme == '\n'){
                $this->lexeme = '';
                $this->linCounter ++;}
            if ($this->lexeme == ' '){
                $this->lexeme = '';
            }
            if($x == count($array) -1 && !in_array($array[$x],$spacChars)){
                $this->token  = $this->token .$this->lexeme;
                array_push($this->linAndToken,$this->token,$this->linCounter);
                array_push($this->allTok,$this->linAndToken);
            }
            if ($result[1] == true){
                $this->stat = 0;
                if ($result[2] == 1){
                    $x = $x - 1;
                    $this->lexeme = '';}
                $this->token = $this->token . $this->lexeme;
                array_push($this->linAndToken,$this->token,$this->linCounter);
                array_push($this->allTok,$this->linAndToken);
                $this->token = '';
                $this->linAndToken = array();
            }else{
                $this->token = $this->token .$this->lexeme;
                $this->stat = $result[0];}
        }
        return $this->allTok;
    }
}