<?php
$name=$_Post['fullname'];
$phone=$_Post['phone'];
$a=$_Post['emailaddress'];
$text=$_Post['textarea'];
$email_from='abcdef@gmail.com';
$email_subject="abcde";
$email_body="efghijklmnop";
$to="$a";
$headers="From: $email_from \r\n";
$headers.="Reply_To: $a \r\n";
mail($to, $email_subject, $email_body,$headers);
header("location:contact.html");
?>