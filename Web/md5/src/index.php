<?php
error_reporting(0);
include "flag.php";
highlight_file(__FILE__);
$a=$_GET['a'];
$b=$_GET['b'];
if ($a!==$b && md5($a)==md5($b)){
    echo $flag;
}