<?php

class token_type
{
    protected $dictionaryOfKeywords = array(
        "type"=>"Class","infer"=>"Inheritance",'if'=>"Condition","else"=>"Condition", "ipok"=>"Integer",
        "sipok"=>"SInteger","craf"=>"Character","sequence"=>"String","ipokf"=>"Float","sipokf"=>"SFloat",
        "valueless"=>"Void","rational"=>"Boolean","endthis"=>"Break","however"=>"Loop","when"=>"Loop",
        "respondwith"=>"Return","srap"=>"Struct","scan"=>"Switch","conditionof"=>"Switch","@"=>"Stat Symbol",
        "^"=>"Stat Symbol","$"=>"End Symbol","#"=>"End Symbol","+"=>"Arithmetic Operation", "-"=>"Arithmetic Operation",
        "*"=>"Arithmetic Operation","/"=>"Arithmetic Operation", "&&"=>"Logic operators","||"=>"Logic operators",
        "~"=>"Logic operators","=="=>"relational operators","<"=>"relational operators",">"=>"relational operators",
        "!="=>"relational operators", "<="=>"relational operators",">="=>"relational operators","="=>"Assignment operator",
        "->"=>"Access Operator","["=>"Braces","]"=>"Braces", "{"=>"Braces",")"=>"Braces","("=>"Braces","}"=>"Braces",'"'=>"Quotation Mark",
        "'"=>"Quotation Mark","Require"=>"Inclusion","***"=>"comment",
        "/>"=>"comment",";"=>"semicolon",);
    public function tokenType($token)
    {  $this->dictionaryOfKeywords;
        $key = $token;
        $pattern = "/^[a-zA-Z_]+[a-zA-Z0-9_]*$/";
        $convKey = strtolower($key);
        if (isset($this->dictionaryOfKeywords[$convKey])) {
            return $this->dictionaryOfKeywords[$convKey];
        } elseif (is_numeric($convKey)) {

            return 'Constant';
        } elseif (preg_match($pattern, $convKey)) {
            return 'Identifier';
        } else {
            return false;
        }
    }


}