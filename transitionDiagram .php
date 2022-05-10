<?php

class transitionDiagram
{
    private $transition_table =array(
    'ws' => array(0,null,null,3,null,21,null,null,null,null,21,null,null,null,21,23,23,21,21,21,21,null,null,null),
    'l' =>  array(18,null,null,3,null,null,null,null,null,null,null,null,null,null,null,null,null,18,18,18,18,null,null,null),
    '_' =>  array(18,null,null,3,null,null,null,null,null,null,null,null,null,null,null,null,null,18,18,18,18,null,null,null),
    'd' =>  array(17,null,null,3,null,null,null,null,null,null,null,null,null,null,null,null,null,17,20,20,20,null,null,null),
    '+' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '-' =>  array(12,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '*' =>  array(1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '/' =>  array(7,null,null,null,null,6,8,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '&' =>  array(15,null,null,null,null,null,null,null,null,null,null,null,null,null,null,7,null,null,null,null,null,null,null,null),
    '~' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '=' =>  array(14,null,null,null,null,7,null,null,null,null,7,7,null,null,7,null,null,null,null,null,null,null,null,null),
    '!' =>  array(11,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '<' =>  array(5,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '>' =>  array(10,null,null,null,null,null,null,null,9,null,null,null,13,null,null,null,null,null,null,null,null,null,null,null),
    '|' =>  array(16,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,7,null,null,null,null,null,null,null),
    '@' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '$' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '^' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '#' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '"' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    "'" =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '[' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    ']' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '{' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '}' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    '(' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    ')' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    'ld'=>  array(0,null,null,4,null,null,null,null,null,null,null,null,null,null,null,null,null,4,4,null,null,null,null,null),
    'oth'=> array(null,22,23,3,null,22,6,null,6,null,22,null,22,null,22,23,23,22,22,22,22,null,null,null),
    'err'=> array(23,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
    'acc'=> array(false,false,false,false,true,false,false,true,false,true,false,false,false,true,false,false,false,false,false,false,false,true,true,true),
    );


    private function lexemeValidation($lexeme){
        $input = $lexeme;
        if (is_numeric($input)){
            $input = 'd';//digit
        }elseif (ctype_alpha($input)){
            $input = 'l';//letter
        }elseif ($input == ' '){
            $input = 'ws';//white space
        }elseif (strpos($lexeme, "\n") !== FALSE || $lexeme == ';'){
            $input = 'ld';//line delimiter
        }
        return $input;
    }

    public function next_transition($input,$currentState){
       $input = $this->lexemeValidation($input);
       $valid = array_key_exists($input, $this->transition_table);
       if ($valid) {
           $nextState = $this->transition_table[$input][$currentState];
           if ($nextState != null) {
               $accepting = $this->transition_table['acc'][$nextState];
               $currentState = $nextState;
               return [$currentState, $accepting,$flag =0];
           }else{
               $input = 'oth';
               $nextState = $this->transition_table[$input][$currentState];
               if ($nextState != null){
                   $accepting = $this->transition_table['acc'][$nextState];
                   //if option is = 1 i need to make pointer point on the previous lexeme
                   return [$currentState, $accepting,$flag =1];
               }
               $accepting = $this->transition_table['acc'][$currentState];
               return [$currentState, $accepting,$flag =0];
           }
       }else{
           $input = 'err';
           $currentState = 0;
           $nextState = $this->transition_table[$input][$currentState];
           $accepting = $this->transition_table['acc'][$nextState];
           return [$currentState,$accepting,$flag =0];
       }


    }

}