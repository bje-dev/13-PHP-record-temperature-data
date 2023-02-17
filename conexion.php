<?php

$db = "mysql:host=localhost;dbname=railtemp";
$user = "user";
$passwd = "password";

try
{
    $dbcon= new PDO($db,$user,$passwd);
}

catch(PDOException $e)
{
    print "Error:".$e->getMessage()."<br/>";
    die();
}