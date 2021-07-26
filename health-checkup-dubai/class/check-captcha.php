<?php
session_start();
$flag = false;
if ($_SESSION['captcha'] == md5($_REQUEST['captcha'])) {
    $flag = true;
}
echo json_encode($flag);
//echo $_REQUEST['captcha'];
?>