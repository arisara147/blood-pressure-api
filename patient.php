<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'connect.php';

$_POST['Function_Name']();

function addPatient(){
    $Data = json_decode($_POST['_Data']);
    $pid = $Data->p_id;
    $particle = $Data->p_article;
    $pname = $Data->p_name;
    $puser = $Data->p_user; 
    $ppasswd = $Data->p_passwd;
    $pbirthDate = $Data->p_birthDate;
    $psex = $Data->p_sex;
    $pweight = $Data->p_weight; 
    $pheight = $Data->p_height;
    $ptell = $Data->p_tell;
    $paddress = $Data->p_address; 
    $conn = getDB();
    $sql_query = "INSERT INTO patient(p_id,p_article,p_name,p_user,p_passwd,p_birthDate,p_sex,p_weight,p_height,p_tell,p_address) 
    VALUES ('$pid','$particle','$pname','$puser','$ppasswd','$pbirthDate','$psex','$pweight','$pheight','$ptell','$paddress')";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
}

<<<<<<< HEAD
function getPateintAll(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();
=======
function getallPatient(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
>>>>>>> 795c61a605aa0006843185dcdf174c13432a6c9a
    $sql_query = "SELECT * from patient";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
<<<<<<< HEAD
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
=======
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
>>>>>>> 795c61a605aa0006843185dcdf174c13432a6c9a
}

?>