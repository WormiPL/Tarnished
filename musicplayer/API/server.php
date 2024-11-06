<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');


    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    if($login == "admin" && $password == "admin"){
        $res = array('result'=>"success");
        echo json_encode($res);
    }else{
        $res = array('result'=>"failed");
        echo json_encode($res);
    }

}
?>