<?php
$productName=$_REQUEST["productName"];
$brand=$_REQUEST["brand"];
$price=$_REQUEST["price"];
$priceQuantity=$_REQUEST["priceQuantity"];
$description=$_REQUEST["description"];
/*$address=$_REQUEST["address"];
$postal=$_REQUEST["postal"];
$email=$_REQUEST["email"];
$mobile=$_REQUEST["mobile"];
$membership=$_REQUEST["membership"];
*/
require_once('MYDB.php');
$pdo= db_connect();

try{
    $pdo->beginTransaction();
    $sql="insert into product(productName, brand, price, priceQuantity, description)
          values(?,?,?,?,?)";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $productName,PDO::PARAM_STR);
    $stmh->bindValue(2, $brand,PDO::PARAM_STR);
    $stmh->bindValue(3, $price,PDO::PARAM_STR);
    $stmh->bindValue(4, $priceQuantity,PDO::PARAM_STR);
    $stmh->bindValue(5, $description,PDO::PARAM_STR);
    /*$stmh->bindValue(6, $address,PDO::PARAM_STR);
    $stmh->bindValue(7, $postal,PDO::PARAM_STR);
    $stmh->bindValue(8, $email,PDO::PARAM_STR);
    $stmh->bindValue(9, $mobile,PDO::PARAM_STR);
    $stmh->bindValue(10, $membership,PDO::PARAM_STR);
    */
    $stmh->execute();
    $pdo->commit();
    print "You have successfully Edited/Added a product!";
      
 } catch (PDOException $Exception) {
     $pdo->rollBack();
     print "ERROR :" .$Exception->getMessage();

}