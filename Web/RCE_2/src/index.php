<?php
error_reporting(0);
highlight_file(__FILE__);
$code = $_POST['code'];
if(preg_match("/system|shell_exec|flag|cat|exec| /i",$code)){
    die("Hacker!");
}
else {
    eval($code);
}

?>