<?php
/*$id=$_REQUEST["id"];
$title=$_REQUEST["title"]; */
$firstname=$_REQUEST["fName"];
$lastname=$_REQUEST["lName"];
$email=$_REQUEST["email"];
$mobile=$_REQUEST["phoneNum"];
$birthday=$_REQUEST["bDay"];
$address=$_REQUEST["address"];
/*$postal=$_REQUEST["postal"];*/
$membership=$_REQUEST["card"];
$password=$_REQUEST["password"];

require_once('MYDB.php');
$pdo= db_connect();

try{
    $pdo->beginTransaction();
    $sql="insert into member(firstnamee, lastname, email, mobile, birthday, address, membership, password)
          values(?,?,?,?,?,?,?,?,?,?)";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $firstname,PDO::PARAM_STR);
    $stmh->bindValue(2, $lastname,PDO::PARAM_STR);
    $stmh->bindValue(3, $email,PDO::PARAM_STR);
    $stmh->bindValue(4, $mobile,PDO::PARAM_STR);
    $stmh->bindValue(5, $birthday,PDO::PARAM_STR);
    $stmh->bindValue(6, $address,PDO::PARAM_STR);
    $stmh->bindValue(7, $membership,PDO::PARAM_STR);
    $stmh->bindValue(8, $password,PDO::PARAM_STR);
    /*
    $stmh->bindValue(9, $mobile,PDO::PARAM_STR);
    $stmh->bindValue(10, $membership,PDO::PARAM_STR);*/
    
    $stmh->execute();
    $pdo->commit();
    print "You are sucessfully joined Ummm Grocery Store!";
      
 } catch (PDOException $Exception) {
     $pdo->rollBack();
     print "ERROR :" .$Exception->getMessage();

}
