<?php

include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

function getallLogin(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();
    $sql_query = "SELECT * from log_login";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
}

function getallDoctor(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
    $sql_query = "SELECT * from doctor";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
}

function getallPatient(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
    $sql_query = "SELECT * from patient";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
}

function getallNurse(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
    $sql_query = "SELECT * from nurse";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
}

function getallAdmin(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
    $sql_query = "SELECT * from admin";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data; 
}

function getPatientById(){
    $Data = json_decode($_POST['_Data']);
    $IdPatient = $Data->getid;
    $conn = getDB();    
    $sql_query = "SELECT * from patient where p_id='$IdPatient'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ); 
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;      
}


function updatePatient(){
    $Data = json_decode($_POST['_Data']);
    $IdPatient = $Data->p_id;
    $Address = $Data->p_address;
    $HBD = $Data->p_birthDate;
    $Height = $Data->p_height;
    $Weight = $Data->p_weight;
    $Name = $Data->p_name;
    $Pass = $Data->p_passwd;
    $Sex = $Data->p_sex;
    $Tell = $Data->p_tell;
    $User = $Data->p_user;
    $Article = $Data->p_article;
    $conn = getDB();    
    $sql_query = "UPDATE patient set p_address='$Address',p_birthDate='$HBD',p_height='$Height',p_weight='$Weight',p_name='$Name',p_passwd='$Pass',p_sex='$Sex',p_tell='$Tell',p_user='$User',p_article='$Article' WHERE p_id='$IdPatient'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function deletePatient(){
    $Data = json_decode($_POST['_Data']);
    $IdPatient = $Data->p_id;
    $conn = getDB();
    $sql_query = "DELETE FROM patient where p_id='$IdPatient'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"delete"}';    
}

function deleteNurse(){
    $Data = json_decode($_POST['_Data']);
    $IdNurse = $Data->nurse_id;
    $conn = getDB();
    $sql_query = "DELETE FROM nurse where nurse_id='$IdNurse'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"delete"}';    
}

function deleteDoctor(){
    $Data = json_decode($_POST['_Data']);
    $IdDoctor = $Data->dr_id;
    $conn = getDB();
    $sql_query = "DELETE FROM doctor where dr_id='$IdDoctor'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"delete"}';    
}

function deleteAdmin(){
    $Data = json_decode($_POST['_Data']);
    $IdAdmin = $Data->admin_id;
    $conn = getDB();
    $sql_query = "DELETE FROM admin where admin_id='$IdAdmin'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"delete"}';    
}

function getnurseById(){
    $Data = json_decode($_POST['_Data']);
    $IdNurse = $Data->getid;
    $conn = getDB();    
    $sql_query = "SELECT * from nurse where nurse_id='$IdNurse'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ); 
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;      
}

function getadminById(){
    $Data = json_decode($_POST['_Data']);
    $IdAdmin = $Data->getid;
    $conn = getDB();    
    $sql_query = "SELECT * from admin where admin_id='$IdAdmin'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ); 
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;      
}

function getdoctorById(){
    $Data = json_decode($_POST['_Data']);
    $IdDoctor = $Data->getid;
    $conn = getDB();    
    $sql_query = "SELECT * from doctor where dr_id='$IdDoctor'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ); 
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;      
}

function updateNurse(){
    $Data = json_decode($_POST['_Data']);
    $IdNurse = $Data->nurse_id;
    $Address = $Data->nurse_address;
    $Name = $Data->nurse_name;
    $Pass = $Data->nurse_passwd;
    $Sex = $Data->nurse_sex;
    $Tell = $Data->nurse_tell;
    $User = $Data->nurse_user;
    $Article = $Data->nurse_article;
    $conn = getDB();    
    $sql_query = "UPDATE nurse set nurse_address='$Address',nurse_name='$Name',nurse_passwd='$Pass',nurse_sex='$Sex',nurse_tell='$Tell',nurse_user='$User',nurse_article='$Article' WHERE nurse_id='$IdNurse'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateDoctor(){
    $Data = json_decode($_POST['_Data']);
    $IdDoctor = $Data->dr_id;
    $Address = $Data->dr_address;
    $Name = $Data->dr_name;
    $Pass = $Data->dr_passwd;
    $Sex = $Data->dr_sex;
    $Tell = $Data->dr_tell;
    $User = $Data->dr_user;
    $Article = $Data->dr_article;
    $conn = getDB();    
    $sql_query = "UPDATE doctor set dr_address='$Address',dr_name='$Name',dr_passwd='$Pass',dr_sex='$Sex',dr_tell='$Tell',dr_user='$User',dr_article='$Article' WHERE dr_id='$IdDoctor'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateAdmin(){
    $Data = json_decode($_POST['_Data']);
    $IdAdmin = $Data->admin_id;
    $Address = $Data->admin_address;
    $Name = $Data->admin_name;
    $Pass = $Data->admin_passwd;
    $Sex = $Data->admin_sex;
    $Tell = $Data->admin_tell;
    $User = $Data->admin_user;
    $Article = $Data->admin_article;
    $conn = getDB();    
    $sql_query = "UPDATE admin set admin_address='$Address',admin_name='$Name',admin_passwd='$Pass',admin_sex='$Sex',admin_tell='$Tell',admin_user='$User',admin_article='$Article' WHERE admin_id='$IdAdmin'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function addPatient(){
    $Data = json_decode($_POST['_Data']);
    $IdPatient = $Data->id;
    $Address = $Data->address;
    $HBD = $Data->birthdate;
    $Height = $Data->height;
    $Weight = $Data->weight;
    $Name = $Data->name;
    $Pass = $Data->passwd;
    $Sex = $Data->sex;
    $Tell = $Data->tell;
    $User = $Data->user;
    $Article = $Data->article;
    $conn = getDB();
    $sql_query = "INSERT INTO patient(p_id,p_address,p_birthDate,p_height,p_weight,p_name,p_passwd,p_sex,p_tell,p_user,p_article) VALUES ('$IdPatient','$Address','$HBD','$Height','$Weight','$Name','$Pass','$Sex','$Tell','$User','$Article')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
     
}

function addAdmin(){
    $Data = json_decode($_POST['_Data']);
    $IdAdmin = $Data->id;
    $Address = $Data->address;
    $Name = $Data->name;
    $Pass = $Data->passwd;
    $Sex = $Data->sex;
    $Tell = $Data->tell;
    $User = $Data->user;
    $Article = $Data->article;
    $conn = getDB();
    $sql_query = "INSERT INTO admin(admin_id,admin_address,admin_name,admin_passwd,admin_sex,admin_tell,admin_user,admin_article) VALUES ('$IdAdmin','$Address','$Name','$Pass','$Sex','$Tell','$User','$Article')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
     
}

function addDoctor(){
    $Data = json_decode($_POST['_Data']);
    $IdDoctor = $Data->id;
    $Address = $Data->address;
    $Name = $Data->name;
    $Pass = $Data->passwd;
    $Sex = $Data->sex;
    $Tell = $Data->tell;
    $User = $Data->user;
    $Article = $Data->article;
    $conn = getDB();
    $sql_query = "INSERT INTO doctor(dr_id,dr_address,dr_name,dr_passwd,dr_sex,dr_tell,dr_user,dr_article) VALUES ('$IdDoctor','$Address','$Name','$Pass','$Sex','$Tell','$User','$Article')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    
}

function addNurse(){
    $Data = json_decode($_POST['_Data']);
    $IdNurse = $Data->id;
    $Address = $Data->address;
    $Name = $Data->name;
    $Pass = $Data->passwd;
    $Sex = $Data->sex;
    $Tell = $Data->tell;
    $User = $Data->user;
    $Article = $Data->article;
    $conn = getDB();
    $sql_query = "INSERT INTO nurse(nurse_id,nurse_address,nurse_name,nurse_passwd,nurse_sex,nurse_tell,nurse_user,nurse_article) VALUES ('$IdDoctor','$Address','$Name','$Pass','$Sex','$Tell','$User','$Article')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
 
}

function addNews(){
    $Data = json_decode($_POST['_Data']);
    $Idnews = $Data->news_id;
    $Date = $Data->news_date;
    $Name = $Data->news_name;
    $Detail = $Data->news_detail;
    $conn = getDB();
    $sql_query = "INSERT INTO news(news_id,news_date,news_name,news_detail) VALUES ('$Idnews','$Date','$Name','$Detail')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
 
}

?>