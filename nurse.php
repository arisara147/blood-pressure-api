<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'connect.php';

$_POST['Function_Name']();

function addNurse(){
    $Data = json_decode($_POST['_Data']);
    $nurseid = $Data->nurse_id;
    $nursearticle = $Data->nurse_article;
    $nursename = $Data->nurse_name;
    $nursesex = $Data->nurse_sex; 
    $nurseuser = $Data->nurse_user;
    $nursepasswd = $Data->nurse_passwd;
    $nursetell = $Data->nurse_tell;
    $nurseaddress = $Data->nurse_address; 
    $conn = getDB();
    $sql_query = "INSERT INTO nurse(nurse_id,nurse_article,nurse_name,nurse_sex,nurse_user,nurse_passwd,nurse_tell,nurse_address) 
    VALUES ('$nurseid','$nursearticle','$nursename','$nursesex','$nurseuser','$nursepasswd','$nursetell','$nurseaddress')";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
}

?>