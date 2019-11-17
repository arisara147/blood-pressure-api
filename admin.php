<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'connect.php';

$_POST['Function_Name']();

function addAdmin(){
    $Data = json_decode($_POST['_Data']);
    $adminid = $Data->admin_id;
    $adminarticle = $Data->admin_article;
    $adminname = $Data->admin_name;
    $adminsex = $Data->admin_sex; 
    $adminuser = $Data->admin_user;
    $adminpasswd = $Data->admin_passwd;
    $admintell = $Data->admin_tell;
    $adminaddress = $Data->admin_address; 
    $conn = getDB();
    $sql_query = "INSERT INTO admin(admin_id,admin_article,admin_name,admin_sex,admin_user,admin_passwd,admin_tell,admin_address) 
    VALUES ('$adminid','$adminarticle','$adminname','$adminsex','$adminuser','$adminpasswd','$admintell','$adminaddress')";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
}



?>