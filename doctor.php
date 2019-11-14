<?php
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$_POST['Function_Name']();

function addBook(){
    $Data = json_decode($_POST['_Data']);
    $IdBook = $Data->idBook;
    $NameBook = $Data->nameBook;
    $TypeBook = $Data->typeBook;
    $PriceBook = $Data->priceBook; 
    $conn = getDB();
    $sql_query = "INSERT INTO book(id_book,namebook,typebook,pricebook) VALUES ('$IdBook','$NameBook','$TypeBook','$PriceBook')";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    
     
}

function getBookAll(){
    $Data = json_decode($_POST['_Data']);
    $conn = getDB();    
    $sql_query = "SELECT * from book";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ);      
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;         
    
}

function getBookById(){
    $Data = json_decode($_POST['_Data']);
    $IdBook = $Data->idBook;
    $conn = getDB();    
    $sql_query = "SELECT * from book where id_book='$IdBook'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    $rst = $conn->query($sql_query);
    $Response_Data = $rst->fetchAll(PDO::FETCH_OBJ); 
    $Response_Data = json_encode($Response_Data);
    echo $Response_Data;      
}

function updateBook(){
    $Data = json_decode($_POST['_Data']);
    $IdBook = $Data->id_book;
    $NameBook = $Data->namebook;
    $TypeBook = $Data->typebook;
    $PriceBook = $Data->pricebook;
    $conn = getDB();    
    $sql_query = "UPDATE book set namebook='$NameBook',typebook='$TypeBook',pricebook='$PriceBook' WHERE id_book='$IdBook'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"update"}';
}

function deleteBook(){
    $Data = json_decode($_POST['_Data']);
    $IdBook = $Data->idBook;
    $conn = getDB();
    $sql_query = "DELETE FROM book WHERE id_book='$IdBook'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query($sql_query);
    echo '{"Finish":"delete"}';    
}

?>