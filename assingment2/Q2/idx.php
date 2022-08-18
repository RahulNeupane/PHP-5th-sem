<?php
$name = $_GET['Name'];
$attendance = $_GET['Attendance'];
$hygiene = $_GET['Hygiene'];
$rating = $_GET['Rating'];

evaluate($name,$attendance,$hygiene,$rating);

function evaluate($name,$attendance,$hygiene,$rating){
    if ($attendance < 80 && $hygiene < 50) {
        echo "$name, You are fired from Rojan Kirana Pasal";
    } else if ($hygiene < 50 && $rating < 2) {
        echo "$name, You are fired from Rojan Kirana Pasal";
    } else {
        echo "Not fired for now";
    }
}
?>