<?php
$name = $_GET['Name'];
$attendance = $_GET['Attendance'];
$hygeine = $_GET['Hygeine'];
$rating = $_GET['Rating'];

evaluate($name,$attendance,$hygeine,$rating);

function evaluate($name,$attendance,$hygeine,$rating){
    if($attendance<80 || $hygeine < 50 || $rating <2){
        echo "$name , You are fired from Rojan Kirana Pasal";
    }
    
    else{
        echo "Not fired for now";
    }
}
?>