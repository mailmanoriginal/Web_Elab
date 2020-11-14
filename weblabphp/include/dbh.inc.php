<?php

$severName = "weblabphp.cvi3aj31gxm7.us-east-1.rds.amazonaws.com";    //$severName = "localhost"; 
$dBUserName = "eelab";                                                //$dBUserName = "root"; 
$dBPassword = "beatsme85";                                            //$dBPassword = "";  
$dBName = "web";                                                      //$dBName = "web_database";


$conn = mysqli_connect($severName, $dBUserName, $dBPassword, $dBName);

if(!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}