<?php 
    $connect = mysql_connect("localhost", "root", "") or die ("server  not found");
    mysql_select_db("assignmentphp", $connect) or die ("database not found!");
    mysql_query("SET NAMES 'utf8'");
?>        