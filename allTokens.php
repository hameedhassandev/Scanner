<?php
include ("ignoreTokens.php");

class allTokens
{
    private $allTok = array();
    private $token = '';
    private $input = '';
    private $currentState = 0;
    private $nextState = 0;
    private $accepting = null;


    public function tokens($array)
    {
        $transitionT = new transitionDiagram();
        $comm = new ignoreTokens();
        for ($x = 0; $x < count($array); $x++) {
            $this->input = $array[$x];
            $this->nextState = $transitionT->next_transition($this->input, $this->currentState);
            $this->accepting = $transitionT->is_accepting($this->nextState);
//          ignore whitespace
            if ($this->input == ' ') {
                $this->input = '';
            }
            //check if nextState is an accepting state
            if ($this->accepting == true || ($x == count($array) -1 && $array[$x] != ' ')) {
                $this->token = $this->token . $this->input;
                if (!$comm->ignoreComments($this->token)){
                    $arrayFromFile = $comm->getTokensInFile($this->token);
                    if ($arrayFromFile) {
                        $this->allTok = array_merge($arrayFromFile, $this->allTok);

                    }else {

                        array_push($this->allTok, $this->token);
                    }
                }
                $this->currentState = 0;
                $this->token = '';

            } else {
                $this->token = $this->token . $this->input;
                $this->currentState = $this->nextState;
            }
        }
        return $this->allTok;
    }

}