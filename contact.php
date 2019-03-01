<?php
$a=$_Post['email-id'];
$email_from='abcdef@gmail.com';
$email_subject="abcde";
$email_body="efghijklmnop";
$to="$a";
$headers="From: $email_from \r\n";
$headers.="Reply_To: $a \r\n";
mail($to, $email_subject, $email_body,$headers);
header("location:index.html");
?>