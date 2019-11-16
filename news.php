<?php 
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

//function getAllNews(){
   // $Data = json_decode($_POST['_Data']);
    //$conn = getDB(); 
    //$sql_query = "SELECT * from news";
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$conn->query($sql_query);
    //$rst = $conn->query($sql_query);
    //$Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    //$Response_Data = json_encode($Response_Data);
   // echo $Response_Data;
//}
?>
