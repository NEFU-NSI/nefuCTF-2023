<?php
error_reporting(0);
include "flag.php";
highlight_file(__FILE__);
$yds = "dog";
$is = "cat";
$handsome = 'yds';
foreach($_POST as $x => $y){ 
     $$x = $y; 
}
foreach($_GET as $x => $y){  
    $$x = $$y;
}
foreach($_GET as $x => $y){
     if($_GET['flag'] === $x && $x !== 'flag'){ 
        exit($handsome);
     }
}  
if(!isset($_GET['flag']) && !isset($_POST['flag'])){  
     exit($yds);
}
if($_POST['flag'] === 'flag'  || $_GET['flag'] === 'flag'){ 
     exit($is);
}
die("no_flag");
