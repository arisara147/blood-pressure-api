<?php
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

function addAppoit(){
    $Data = json_decode($_POST['_Data']);
    $App_Id = $Data->app_id;
    $App_Date = $Data->app_date;
    $App_Time = $Data->app_time;
    $P_Id = $Data->p_id; 
    $Dr_Id = $Data->dr_id;
    $App_Describtion = $Data->app_describtion;
    $conn = getDB();
    $sql_query = "INSERT INTO appoint(app_id,app_date,app_time,p_id,dr_id,app_describtion) VALUES ('$App_Id','$App_Date','$App_Time','$P_Id','$Dr_Id','$App_Describtion')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    //$rst = $conn->query($sql_query);
   // $Response_Data= $rst->fetchAll(PDO::FETCH_NUM);
   
}

//function getAppointById(){
   // $Data = json_decode($_POST['_Data']);
   // $IdApp = $Data->app_id;
    //$conn = getDB();
   // $sql_query = "SELECT * from appoint where app_id='$IdApp'";
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$conn->query($sql_query);
    //$rst = $conn->query($sql_query);
    //$Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
    //$Response_Data = json_encode($Response_Data);
    //echo $Response_Data;
//}

?>