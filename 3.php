<?php
$myfile = file_get_contents("3/text.txt", "r");
// Output one line until end-of-file
$file = explode(",",$myfile);
$random = rand(0,1);
if( $random == 0){
    echo $file[0];
    echo "<br>";
    echo $file[1];
    echo "<br>";
    echo $file[2];
    echo "<br>";
} else {
    echo $file[4];
    echo "<br>";
    echo $file[5];
    echo "<br>";
    echo $file[6];
    echo "<br>";
}


// fclose($myfile);
?> 
<html>
<body>
<form method="post" action="3a.php">
<input type="text" name="question">
<input type="text" name="answer">
<input type="submit">
</form>
</body>
</html>