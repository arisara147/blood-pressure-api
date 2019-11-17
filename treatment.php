<?php 
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

function addTreatment(){
    $Data = json_decode($_POST['_Data']);
    $tid = $Data->t_id;
    $tdate = $Data->t_date;
    $tdescrip = $Data->t_descrip; 
    $drid = $Data->dr_id;
    $drname = $Data->dr_name;
    $pid = $Data->p_id;
    $pname = $Data->p_name;
    $conn = getDB();
    $sql_query = "INSERT INTO treatment(t_id,t_date,t_descrip,dr_id,dr_name,p_id,p_name) VALUES ('$tid','$tdate','$tdescrip','$drid','$drname','$pid','$pname')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
        
}
function getAllTreatment(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
    $sql_query = "SELECT * from treatment";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
     $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
}

function getTreatmentPatientById(){
    $Data = json_decode($_POST['_Data']);
    $Pid = $Data->p_id;
    $conn = getDB();
    $sql_query = "SELECT * from treatment where p_id='$Pid'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ); 
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
}
?>
