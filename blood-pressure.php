<?php
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

function addBloodPressure() {
    $Data = json_decode($_POST['_Data']);
    $Rep_Id = $Data->rep_id;
    $Rep_Date = $Data->rep_date;
    $Rep_Time = $Data->rep_time;
    $P_Id = $Data->p_id;
    $Sys = $Data->sys;
    $Dia = $Data->dia;
    $Pr = $Data->pr;
    $Status = $Data->rep_status;
    $Note = $Data->rep_note; 
    $conn = getDB();
    $sql_query = "INSERT INTO report(rep_id,rep_date,rep_time,p_id,sys,dia,pr,rep_status,rep_note) VALUES ('$Rep_Id','$Rep_Date','$Rep_Time','$P_Id','$Sys','$Dia','$Pr','$Status','$Note')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
   // $rst = $conn->query($sql_query);
    //$Response_Data= $rst->fetchAll(PDO::FETCH_NUM);
     
}

function getAllBloodPressure(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
    $sql_query = "SELECT * from report";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;   
}
function getAllNews(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB(); 
    $sql_query = "SELECT * from news";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}

?>
