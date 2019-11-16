<?php
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

function addAppoit(){
    $Data = json_decode($_POST['_Data']);
    $AppId = $Data->app_id;
    $AppDate = $Data->app_date;
    $AppTime = $Data->app_time;
    $PId = $Data->p_id; 
    $DrId = $Data->dr_id;
    $PName = $Data->p_name; 
    $DrName = $Data->dr_name;
    $AppDetail = $Data->app_detail;
    $conn = getDB();
    $sql_query = "INSERT INTO appoints(app_id,app_date,app_time,p_id,p_name,dr_id,dr_name,app_detail) VALUES ('$AppId','$AppDate','$AppTime','$PId','$PName','$DrId','$DrName','$AppDetail')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    //$rst = $conn->query($sql_query);
   // $Response_Data= $rst->fetchAll(PDO::FETCH_NUM);
   
}

function getAppointPatientById(){
    $Data = json_decode($_POST['_Data']);
    $Pid = $Data->getid;
    $conn = getDB();    
    $sql_query = "SELECT * from appoints where p_id='$Pid'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ); 
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;      
}

//function getAppointByPid(){
   // $Data = json_decode($_POST['_Data']);
   // $Pid = $Data->p_id;
    //$conn = getDB();
   // $sql_query = "SELECT * from appoints where app_id='$IdApp'";
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$conn->query($sql_query);
    //$rst = $conn->query($sql_query);
    //$Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
    //$Response_Data = json_encode($Response_Data);
    //echo $Response_Data;
//}

?>