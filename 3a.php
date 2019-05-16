<?php
$question = $_POST["question"];
$answer = $_POST["answer"];
$arr = explode(" ",$answer);
$myfile = file_get_contents("3/text.txt", "r");
$file = explode(",",$myfile);

if( $question=="1" && $answer==$file[3]){
    echo "Correct";
} else if( $question=="2" && $answer==$file[7]){
    echo "Correct";
} else {
    // echo $file[7];
    echo "Incorrect";
}


?>