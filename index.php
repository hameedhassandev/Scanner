<?php
include("token_type.php");
include("transitionDiagram .php");
include ("allTokens.php");
include ("printingScanner.php");
include ("pushToArray.php");
//"D:\\texting.txt";
// "C:\\xampp\\htdocs\\compiler\\lol.txt";
$st = '';

?>

<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        h1 {
            color:Green;
        }
        div.scroll {
            margin:4px,4px;
            padding:4px;
            background-color:#dad0d0;
            width: 100%;
            height: 280px;
            overflow-x: hidden;
            overflow-y: auto;
            /*text-align:justify;*/
        }
    </style>
</head>
<body>
<p id="output"></p
<div class="container">
<center>

    <form action="" method="post">

    <textarea cols="100" rows="10" name="scan" id="myInputFieldID" placeholder="Enter your code ..."></textarea>
        <br>
    <input type="submit" name="button" id="submitID" class="btn btn-success" value="Scan Editor"/>
    <a href="index.php" class="btn btn-info">Clean Scanner and Parser</a>

    </form>
    <br>
<!---->
    <input type="file" class="btn btn-dark" id="upload" accept=".txt">

    <input type="submit" name="button2" class="btn btn-danger" id="scanFile" value="Scan File" />

</center>
<div>
    <hr>
<div class="row">
<div class="col-6">
    <div class="scroll">
        <h4 style="text-align: center">Scanner output</h4>
        <hr>
        <?php
        $pushArr = new pushToArray();
        if (isset($_POST['scan'])){
            $scanner= $_POST['scan'];
            $te = $scanner;
            $myArr = $pushArr->pushCharsToArray($te);
            $print = new printingScanner();
            $print->printTokens($myArr);
        }

        ?>

    </div>
</div>

<div class="col-6">
    <div class="scroll"  >
        <h4 style="text-align: center">Parser output</h4>
        <hr>
        <?php

        ?>

    </div>
</div>
</div>

</body>
<script !src="">
    document.getElementById('submitID').disabled = true; //Disable at first

    document.getElementById('myInputFieldID').addEventListener('keyup', e => {
        //Check for the input's value
        if (e.target.value == "") {
            document.getElementById('submitID').disabled = true;
        }
        else {
            document.getElementById('submitID').disabled = false;
        }
    });


    console.log('test')

    let upload = document.getElementById('upload');

    let output = document.getElementById('output');

    upload.addEventListener('change',()=>{
        let fr = new FileReader();
        fr.readAsText(upload.files[0]);
        fr.onload = function(){
          // var c =   output.innerHTML = fr.result;
          <?php

           $st = 'output.innerHTML = fr.result;';
            echo $st;

            ?>
        };
    });


</script>

</html>




