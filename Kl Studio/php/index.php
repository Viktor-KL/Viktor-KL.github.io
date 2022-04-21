<?php
$phone = $_POST['phone'];
$name = $_POST['name'];
$message = $_POST['message'];

if (mail("viktorkyrylovych88@gmail.com", "Заявка с сайта", "Name:".$name.". Email: ".$phone.". Message: ".$message ,"From: dmitrijkrasiluk4@gmail.com \r\n")){
 header("Location: https://viktorkyrlovych.site/");
 } else {
 echo "При отправке сообщения возникли ошибки";
 }

?>