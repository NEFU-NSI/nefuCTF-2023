<?php
error_reporting(0);
include "flag.php";
highlight_file(__FILE__);
$a=$_GET['a'];
$b=$_POST['b'];
$c=$_COOKIE['c'];

if (isset($a)&&isset($b)&&isset($c)){
    if ($a == "NEFU"){
        echo $flag1;
        if ($b == "CTF"){
            echo $flag2;
            if ($c == "2023"){
                echo $flag3;
            }
            else {
                die("Hacker!");
            }
        }
        else {
            die("Hacker!!");
        }
    } 
    else {
        die("Hacker!");
    }

}