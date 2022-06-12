<?php
    $servername='localhost';
    $username='daniilvodenejevi';
    $password='hr#unXQ)zP0E';
    $dbname = "daniilvodenejevi_vote";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
       die('Could not Connect My Sql:' .mysql_error());
    }
?>