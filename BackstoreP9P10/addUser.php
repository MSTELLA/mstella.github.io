<?php
if ( isset( $_GET['submit'] ) ) { 
    $firstname = $_GET['fName']; 
    $lastname = $_GET['lName'];     
    $email = $_GET['email'];   
    $phonenumber = $_GET['phoneNum'];     
    $birthday = $_GET['bDay'];
    $cardnumber = $_GET['card'];

    $file = 'users.xml';

    $users = simplexml_load_file($file);
    $user = $users->addChild('user');
  
    $user->addChild('firstName', $firstname);
    $user->addChild('lastName', $lastname);
    $user->addChild('Email', $email);
    $user->addChild('phoneNumber', $phonenumber);
    $user->addChild('birthday', $birthday);
    $user->addChild('cardNumber', $cardnumber);
  

    $users->asXML($file);
}
?>
