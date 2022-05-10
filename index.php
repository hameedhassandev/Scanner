<?php
include("token_type.php");
include("transitionDiagram .php");
include ("allTokens.php");
include ("printingScanner.php");
//$te = "*** comment compiler;_2$^||& _6g@type+;43_xxs2e->',(infer<=3;x!=246 30_j {G[]})c_s2 2+ x; c;";
$te = "@***comment in compiler;</ll ;so/> type infer(x==4;c_78<=221){G[]},;";

echo $te;
$lexemeArr = array();
for ($i = 0 ; $i < strlen($te) ; $i++){
    array_push($lexemeArr,$te[$i]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {
            color:Green;
        }
        div.scroll {
            margin:4px,4px;
            padding:4px;
            background-color:#dad0d0;
            width: 100%;
            height: 170px;
            overflow-x: hidden;
            overflow-y: auto;
            /*text-align:justify;*/
        }
    </style>
</head>
<body>


<h3 style="text-align: center">Scanner output</h3>

<div class="scroll">
    <?php
    $print = new printingScanner();
    $print->printTokens($lexemeArr);
    ?>
</div>

</body>
</html>




