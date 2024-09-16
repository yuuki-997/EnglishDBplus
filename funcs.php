<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function db_conn(){
    try{
        $db_name = "";
        $db_id ="";
        $db_pw ="";
        $db_host="";
        return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
    }
}

function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

function redirect($filename){
    header("Location:".$filename);
    exit();
}