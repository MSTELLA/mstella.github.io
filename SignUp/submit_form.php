<?php
$id=$_REQUEST["id"];
$password=$_REQUEST["password"];
$title=$_REQUEST["title"];
$name=$_REQUEST["name"];
$birthday=$_REQUEST["birthday"];
$address=$_REQUEST["address"];
$postal=$_REQUEST["postal"];
$email=$_REQUEST["email"];
$mobile=$_REQUEST["mobile"];
$membership=$_REQUEST["membership"];

require_once('MYDB.php');
$pdo= db_connect();

try{
    $pdo->beginTransaction();
    $sql="insert into member(id, password, title, name, birthday, address, postal, email, mobile, membership)
          values(?,?,?,?,?,?,?,?,?,?)";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $id,PDO::PARAM_STR);
    $stmh->bindValue(2, $password,PDO::PARAM_STR);
    $stmh->bindValue(3, $title,PDO::PARAM_STR);
    $stmh->bindValue(4, $name,PDO::PARAM_STR);
    $stmh->bindValue(5, $birthday,PDO::PARAM_STR);
    $stmh->bindValue(6, $address,PDO::PARAM_STR);
    $stmh->bindValue(7, $postal,PDO::PARAM_STR);
    $stmh->bindValue(8, $email,PDO::PARAM_STR);
    $stmh->bindValue(9, $mobile,PDO::PARAM_STR);
    $stmh->bindValue(10, $membership,PDO::PARAM_STR);
    
    $stmh->execute();
    $pdo->commit();
    print "You are sucessfully joined Ummm Grocery Store!";
      
 } catch (PDOException $Exception) {
     $pdo->rollBack();
     print "ERROR :" .$Exception->getMessage();

}

