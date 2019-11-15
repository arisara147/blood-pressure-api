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

// getbyid

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

// getbyid


// update

function updateProfileAdmin(){
    $Data = json_decode($_POST['_Data']);
    $adminid = $Data->admin_id;
    $adminarticle = $Data->admin_article;
    $adminname = $Data->admin_name;
    $adminsex = $Data->admin_sex;
    $adminuser = $Data->admin_user;
    $adminpasswd = $Data->admin_passwd;
    $admintell = $Data->admin_tell;
    $adminaddress = $Data->admin_address;

    $conn = getDB();   
    $sql_query = "UPDATE amuser set 
    admin_article='$adminarticle',admin_name='$adminname',admin_sex='$adminsex',
    admin_user='$adminuser',admin_passwd='$adminpasswd',admin_tell='$admintell',
    admin_address='$adminaddress' 
    WHERE admin_id='$adminid'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateProfileNurse(){
    $Data = json_decode($_POST['_Data']);
    $nurseid  = $Data->nurse_id;
    $nursearticle = $Data->nurse_article;
    $nursename = $Data->nurse_name;
    $nursesex = $Data->nurse_sex;
    $nurseuser = $Data->nurse_user;
    $nursepasswd = $Data->nurse_passwd;
    $nursetell = $Data->nurse_tell;
    $nurseaddress = $Data->nurse_address;

    $conn = getDB();   
    $sql_query = "UPDATE nurse set 
    nurse_article='$nursearticle',nurse_name='$nursename',
    nurse_sex='$nursesex',nurse_user='$nurseuser',nurse_passwd='$nursepasswd'
    ,nurse_tell='$nursetell',nurse_address='$nurseaddress' 
    WHERE nurse_id='$nurseid'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateProfileDoctor(){
    $Data = json_decode($_POST['_Data']);
    $drid = $Data->dr_id;
    $drarticle = $Data->dr_article;
    $drname = $Data->dr_name;
    $drsex = $Data->dr_sex;
    $druser = $Data->dr_user;
    $drpasswd = $Data->dr_passwd;
    $drtell = $Data->dr_tell;
    $draddress = $Data->dr_address;

    $conn = getDB();   
    $sql_query = "UPDATE doctor set 
    dr_article='$drarticle',dr_name='$drname',dr_sex='$drsex',
    dr_user='$druser',dr_passwd='$drpasswd',dr_tell='$drtell',dr_address='$draddress' 
    WHERE dr_id='$drid'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function updateProfilePatient(){
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
    $sql_query = "UPDATE patient set 
    p_article='$particle',p_name='$pname',p_user='$puser',
    p_passwd='$ppasswd',p_birthDate='$pbirthDate',p_sex='$psex',
    p_weight='$pweight',p_height='$pheight',p_tell='$ptell',
    p_address='$paddress' 
    WHERE p_id='$pid'";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

// update

//delete

// function deleteProfile(){
//     $Data = json_decode($_POST['_Data']);
//     $Iduser = $Data->users_id;
//     $conn = getDB();
//     $sql_query = "DELETE from amuser where users_id='$Iduser'";
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $conn->query($sql_query);
//     echo '{"Finish":"delete"}';     
// }

//delete

?>