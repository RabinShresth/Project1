<?php
include("data_class.php");
$login_username = $_GET['Username'];
$login_password = $_GET['Password'];

if ($login_username != null && $login_password != null) {

    $obj = new data();
    $obj->setconnection();
    $obj->admin_login($login_username, $login_password);
}
