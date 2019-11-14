<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'connect.php';

$_POST['Function_Name']();

function checkloginadmin(){
    $Data = json_decode($_POST['_Data']);
    $user = $Data->admin_user;
    $pwd = $Data->admin_passwd;
    $conn = getDB();
    $sql_query = "SELECT * from admin where admin_user='$user' and admin_passwd='$pwd'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}

function checklogindoctor(){
    $Data = json_decode($_POST['_Data']);
    $user = $Data->dr_user;
    $pwd = $Data->dr_passwd;
    $conn = getDB();
    $sql_query = "SELECT * from doctor where dr_user='$user' and dr_passwd='$pwd'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}

function checkloginnurse(){
    $Data = json_decode($_POST['_Data']);
    $user = $Data->nurse_user;
    $pwd = $Data->nurse_passwd;
    $conn = getDB();
    $sql_query = "SELECT * from nurse where nurse_user='$user' and nurse_passwd='$pwd'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}

function checkloginpatient(){
    $Data = json_decode($_POST['_Data']);
    $user = $Data->p_user;
    $pwd = $Data->p_passwd;
    $conn = getDB();
    $sql_query = "SELECT * from patient where p_user='$user' and p_passwd='$pwd'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}
?>