<?php

class token_type
{
    private $dictionaryOfKeywords = array(
        "Type"=>"Class","Infer"=>"Inheritance",'If'=>"Condition","Else"=>"Condition", "Ipok"=>"Integer",
        "Sipok"=>"SInteger","Craf"=>"Character","Sequence"=>"String","Ipokf"=>"Float","Sipokf"=>"SFloat",
        "Valueless"=>"Void","Rational"=>"Boolean","Endthis"=>"Break","However"=>"Loop","When"=>"Loop",
        "Respondwith"=>"Return","Srap"=>"Struct","Scan"=>"Switch","Conditionof"=>"Switch","@"=>"Start Symbol",
        "^"=>"Start Symbol","$"=>"End Symbol","#"=>"End Symbol","+"=>"Arithmetic Operation", "-"=>"Arithmetic Operation",
        "*"=>"Arithmetic Operation","/"=>"Arithmetic Operation", "&&"=>"Logic operators","||"=>"Logic operators",
        "~"=>"Logic operators","=="=>"relational operators","<"=>"relational operators",">"=>"relational operators",
        "!="=>"relational operators", "<="=>"relational operators",">="=>"relational operators","="=>"Assignment operator",
        "->"=>"Access Operator","["=>"Braces","]"=>"Braces", "{"=>"Braces",")"=>"Braces","("=>"Braces","}"=>"Braces",'"'=>"Quotation Mark",
        "'"=>"Quotation Mark","require"=>"Inclusion","***"=>"Comment");


    public function tokenType($token)
    {  $this->dictionaryOfKeywords;
        $key = $token;
        $pattern = "/^[a-zA-Z_]+[a-zA-Z0-9_]*$/";
        $patternDigit = "/^(0|[1-9][0-9]*)$/";
        if (isset($this->dictionaryOfKeywords[$key])) {
            return $this->dictionaryOfKeywords[$key];
        } elseif (preg_match($patternDigit, $key)) {
            return 'Constant';
        } elseif (preg_match($pattern, $key)) {
            return 'Identifier';
        }else{
            return false;
        }
    }


}