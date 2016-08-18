<?php
    $currency = '$'; 
    $servername= "localhost";
    $usename= "root";
    $password = "";
    $db= "assignmentphp";    
    $connect = mysql_connect("localhost", "root", "") or die ("server not found");
    $conn=new mysqli($servername,$usename,$password,$db);
    mysqli_set_charset($conn, 'utf8');
?>