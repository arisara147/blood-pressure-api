<?php
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

// function addDoctor(){
//     $Data = json_decode($_POST['_Data']);
//     $drid = $Data->dr_id;
//     $drarticle = $Data->dr_article;
//     $drname = $Data->dr_name;
//     $drsex = $Data->dr_sex; 
//     $druser = $Data->dr_user;
//     $drpasswd = $Data->dr_passwd;
//     $drtell = $Data->dr_tell;
//     $draddress = $Data->dr_address; 
//     $conn = getDB();
//     $sql_query = "INSERT INTO doctor(dr_id,dr_article,dr_name,dr_sex,dr_user,dr_passwd,dr_tell,dr_address) 
//     VALUES ('$drid','$drarticle','$drname','$drsex','$druser','$drpasswd','$drtell','$draddress')";

//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $conn->query($sql_query);
// }

// function getProfileAll(){
//     $Data = json_decode($_POST['_Data']);
//     $conn = getDB();
//     $sql_query = "SELECT * from amuser";
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $conn->query($sql_query);
//     $rst = $conn->query($sql_query);
//     $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);
//     $Response_Data = json_encode($Response_Data);
//     echo $Response_Data;
// }

function getProfileDoctorById(){
    $Data = json_decode($_POST['_Data']);
    $drid = $Data->dr_id;
    $conn = getDB();
    $sql_query = "SELECT * from doctor where dr_id='$drid'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);

    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}

function getProfileAdminById(){
    $Data = json_decode($_POST['_Data']);
    $adminid = $Data->admin_id;
    $conn = getDB();
    $sql_query = "SELECT * from admin where admin_id='$adminid'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);

    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}

function getProfilePatientById(){
    $Data = json_decode($_POST['_Data']);
    $pid = $Data->p_id;
    $conn = getDB();
    $sql_query = "SELECT * from patient where p_id='$pid'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);

    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}

function getProfileNurseById(){
    $Data = json_decode($_POST['_Data']);
    $nurseid = $Data->nurse_id;
    $conn = getDB();
    $sql_query = "SELECT * from nurse where nurse_id='$nurseid'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);

    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;
}



// function deleteProfile(){
//     $Data = json_decode($_POST['_Data']);
//     $Iduser = $Data->users_id;
//     $conn = getDB();
//     $sql_query = "DELETE from amuser where users_id='$Iduser'";
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $conn->query($sql_query);
//     echo '{"Finish":"delete"}';     
// }

function updateProfileAdmin(){
    $Data = json_decode($_POST['_Data']);
    $Iduser = $Data->users_id;
    $Nameuser = $Data->user_name;
    $Uusername = $Data->u_username;
    $Upassword = $Data->u_password;
    $Teluser = $Data->user_tel;
    $Leveluser = $Data->user_level;
    $Addressuser = $Data->user_address;

    $conn = getDB();   
    $sql_query = "UPDATE amuser set 
    user_name='$Nameuser',u_username='$Uusername',u_password='$Upassword',
    user_tel='$Teluser',user_level='$Leveluser',user_address='$Addressuser' 
    WHERE users_id='$Iduser'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateProfileDoctor(){
    $Data = json_decode($_POST['_Data']);
    $Iduser = $Data->users_id;
    $Nameuser = $Data->user_name;
    $Uusername = $Data->u_username;
    $Upassword = $Data->u_password;
    $Teluser = $Data->user_tel;
    $Leveluser = $Data->user_level;
    $Addressuser = $Data->user_address;

    $conn = getDB();   
    $sql_query = "UPDATE amuser set 
    user_name='$Nameuser',u_username='$Uusername',u_password='$Upassword',
    user_tel='$Teluser',user_level='$Leveluser',user_address='$Addressuser' 
    WHERE users_id='$Iduser'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateProfileNurse(){
    $Data = json_decode($_POST['_Data']);
    $Iduser = $Data->users_id;
    $Nameuser = $Data->user_name;
    $Uusername = $Data->u_username;
    $Upassword = $Data->u_password;
    $Teluser = $Data->user_tel;
    $Leveluser = $Data->user_level;
    $Addressuser = $Data->user_address;

    $conn = getDB();   
    $sql_query = "UPDATE amuser set 
    user_name='$Nameuser',u_username='$Uusername',u_password='$Upassword',
    user_tel='$Teluser',user_level='$Leveluser',user_address='$Addressuser' 
    WHERE users_id='$Iduser'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateProfilePatient(){
    $Data = json_decode($_POST['_Data']);
    $Iduser = $Data->users_id;
    $Nameuser = $Data->user_name;
    $Uusername = $Data->u_username;
    $Upassword = $Data->u_password;
    $Teluser = $Data->user_tel;
    $Leveluser = $Data->user_level;
    $Addressuser = $Data->user_address;

    $conn = getDB();   
    $sql_query = "UPDATE amuser set 
    user_name='$Nameuser',u_username='$Uusername',u_password='$Upassword',
    user_tel='$Teluser',user_level='$Leveluser',user_address='$Addressuser' 
    WHERE users_id='$Iduser'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}


?>