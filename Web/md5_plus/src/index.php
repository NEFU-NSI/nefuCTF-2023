<?php
error_reporting(0);
include "flag.php";
highlight_file(__FILE__);
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];

if ($a!==$b && md5($a)===md5($b)){
    if($c==md5($c)){
        echo $flag;
    }
}