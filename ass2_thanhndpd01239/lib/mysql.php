<?php
    $currency = '&#8377;'; 
    $servername= "localhost";
    $usename= "root";
    $password = "";
    $db= "assignmentphp";    
    $connect = mysql_connect("localhost", "root", "") or die ("server not found");
    $conn=new mysqli($servername,$usename,$password,$db);
    mysqli_set_charset($conn, 'utf8');
      
    if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
    }    
?>