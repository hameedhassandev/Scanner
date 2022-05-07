<form action="" method="post">
    <label>Scanner </label><br>
    <textarea cols="35" rows="12" name="scan" id="para1">
</textarea><br>
    <input type="submit" name="button" value="Submit"/></form>

<?php
include("token_type.php");

if (isset($_POST['scan'])){
    $scanner= $_POST['scan'];
}


echo "<h3>text in compiler: </h3>" . $scanner;

echo '<hr> ';
echo '<h3>lexemes: </h3>';
$arr = str_split($scanner);
$cot = count($arr);
print_r($arr);
echo "<hr>";

$transitionTable =array(
'ws' => array(0,null,null,3,null,21,null,null,null,null,21,null,null,null,21,null,null,21,21,21,21,null,null),
'l' =>  array(18,null,null,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,18,18,18,null,null),
'_' =>  array(18,null,null,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,18,18,18,null,null),
'd' =>  array(17,null,null,3,null,null,null,null,null,null,null,null,null,null,null,null,null,17,20,20,20,null,null),
'+' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'-' =>  array(12,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'*' =>  array(1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'/' =>  array(7,null,null,null,null,6,8,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'&' =>  array(15,null,null,null,null,null,null,null,null,null,null,null,null,null,null,7,null,null,null,null,null,null,null),
'~' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'=' =>  array(14,null,null,null,null,7,null,null,null,null,7,7,null,null,7,null,null,null,null,null,null,null,null),
'!' =>  array(11,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'<' =>  array(5,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'>' =>  array(10,null,null,null,null,null,null,null,9,null,null,null,13,null,null,null,null,null,null,null,null,null,null),
'|' =>  array(16,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,7,null,null,null,null,null,null),
'@' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'$' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'^' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'#' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'"' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
"'" =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'[' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
']' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'{' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'}' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'(' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
')' =>  array(7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null),
'ld'=>  array(4,null,null,4,null,null,null,null,null,null,null,null,null,null,null,null,null,4,4,null,null,null,null),
'oth'=> array(null,22,null,3,null,22,6,null,null,null,22,null,22,null,22,null,null,22,22,22,22,null,null),
'acc'=> array(false,false,false,false,true,false,false,true,false,true,false,false,false,true,false,false,false,false,false,false,false,true,true),

);

function lexemeValidation($lexeme,$flag = true){

    $input = $lexeme;
  if (is_numeric($input)){
        $input = 'd';//digit
    }elseif (ctype_alpha($input)){
        $input = 'l';//letter
    }elseif ($input == ' '){
        $input = 'ws';//white space
    }elseif (strpos($lexeme, "\n") !== FALSE || $lexeme == ';'){
        $input = 'ld';//line $lexeme
    }

    return $input;
}


function tokens($arrayOfLexemes,$tTable,$flag = true)
{
    $tokenObj = new token_type();
    $lineCounter = 0;
    $errCounter = 0;
    $allTokens = array();
    $token = "";
    $lexeme = '';
    $getLexeme = '';
    $flag1 = false;
    $tempLexeme = '';
    $currentState = 0;
    for ($i = 0; $i < count($arrayOfLexemes); $i++) {

        $lexeme = $arrayOfLexemes[$i];
        $getLexeme = lexemeValidation($arrayOfLexemes[$i], $flag);
        $input = $getLexeme;
        //get accepting array
        $keys = array_keys($tTable);
        $lastKey = $keys[count($keys) - 1];
        $operatorList = ['+','-','*','/','&','~','=','!','<','>','|','@','$','#','"' , "'" , '[',']','{','}'];
        $specialOperator = ['<','>','=','-','*'];
        if ($lexeme == ';' || strpos($lexeme, "\n")) {
            $lexeme = '';
//            $lineCounter++;

        }

        if (lexemeValidation($arrayOfLexemes[$i]) == 'd' && ($i + 1 < count($arrayOfLexemes)) && in_array($arrayOfLexemes[$i + 1],$operatorList ) ){

            $token = $token . $lexeme;
            $type = $tokenObj->tokenType($token);
            if ($type == false){
                $type = 'error token';

            }
            array_push($allTokens, $token);
            echo 'line number# ' . $lineCounter . ' token: ' . $token . ' token type: '. $type.'<hr>';
            $currentState = 0;
            $token = "";

        }elseif (lexemeValidation($arrayOfLexemes[$i]) == 'l' && ($i + 1 < count($arrayOfLexemes)) && in_array($arrayOfLexemes[$i + 1],$operatorList )){
            $token = $token . $lexeme;
            $type = $tokenObj->tokenType($token);
            if ($type == false){
                $type = 'error token';

            }
            array_push($allTokens, $token);
            echo 'line number# ' . $lineCounter . ' token: ' . $token . ' token type: '. $type.'<hr>';

            $currentState = 0;
            $token = "";
        }elseif (in_array($arrayOfLexemes[$i],$specialOperator ) && ($i + 1 < count($arrayOfLexemes)) && (lexemeValidation($arrayOfLexemes[$i + 1])== 'l' || lexemeValidation($arrayOfLexemes[$i + 1])=='d')){
            $token = $token . $lexeme;
            $type = $tokenObj->tokenType($token);
            if ($type == false){
                $type = 'error token';
                $errCounter++;
            }

            array_push($allTokens, $token);
            echo 'line number# ' . $lineCounter . ' token: ' . $token . ' token type: '. $type.'<hr>';
            $currentState = 0;
            $token = "";
        }
        //
        elseif ($i == count($arrayOfLexemes)-1 ){
            $token = $token . $lexeme;

            $type = $tokenObj->tokenType($token);
            if ($type == false){
                $type = 'error token';
                $errCounter++;
            }

            array_push($allTokens, $token);
            echo 'line number# ' . $lineCounter . ' token: ' . $token . ' token type: '. $type.'<hr>';
            $currentState = 0;
            $token = "";

        }
        //
        else {

            $nextState = $tTable[$input][$currentState];

            if ($nextState != null) {
                $currentState = $nextState;

                if ($tTable[$lastKey][$currentState] == true) {

                    $token = $token . $lexeme;
                    $type = $tokenObj->tokenType($token);
                    if ($type == false){
                        $type = 'error token';
                        $errCounter++;
                    }

                    array_push($allTokens, $token);
                    echo 'line number# ' . $lineCounter . ' token: ' . $token . ' token type: '. $type.'<hr>';
                    $currentState = 0;
                    $token = "";

                }//end if
                else {
                    $token = $token . $lexeme;

                }
            } else {
            //error token
            $token = $token . $lexeme;
            if ($token == '**'){
                array_push($allTokens, $token);
                echo 'line number# ' . $lineCounter . ' token: ' . $token . ' token type: '. $type.'<hr>';
                $token = '';
                $currentState =0;
            }
                $type = $tokenObj->tokenType($token);
                if ($type == false){
                    $type = 'error token';

                }
            array_push($allTokens, $token);
                echo 'line number# ' . $lineCounter . ' token: ' . $token . ' token type: '. $type.'<hr>';

//            echo 'line number# '. $lineCounter .' token: ' . $token . '<hr>';
            $currentState = 0;
            $token = "";
            }

        }

    }

    echo 'no. of error : ' . $errCounter . '<hr>';
    return $allTokens;
}




echo "<h3>tokens: </h3>";
$tokenList = tokens($arr,$transitionTable);
for($v = 0 ; $v < count($tokenList) ; $v++){
    echo 'token '. $v ." => " . $tokenList[$v];
    echo '<br>';
}
echo '<hr>';

