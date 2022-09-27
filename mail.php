<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];


$EmailTo = "assumpcao@gmail.com";
$Title = "Nova mensagem recebida";

// prepare email body text
$Fields .= "Nome: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields.= "phone: ";
$Fields .= $phone;
$Fields .= "\n";

$Fields .= "Mensagem: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

