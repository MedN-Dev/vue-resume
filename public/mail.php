<?php
   if(isset($_SERVER["HTTP_ORIGIN"]))
   {
      header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
   }
   else
   {
      header("Access-Control-Allow-Origin: *");
   }

   header("Access-Control-Allow-Credentials: true");
   header("Access-Control-Max-Age: 600");    
   if($_SERVER["REQUEST_METHOD"] == "OPTIONS")
   {
      if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_METHOD"]))
          header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT"); 

      if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"]))
          header("Access-Control-Allow-Headers: 
         {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

      exit(0);
    }

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
 }

$name = "Undefined name";
$from = $_POST['email'];
$message = $_POST['message'];

$message_content = "<h1>Name: $name</h1>";
$message_content .= "<p>From: $from</p>";
$message_content .= "<p>Message: $message</p>";

$to_email = 'mednabouli@mail.com';
$subject = 'Mail subject my site';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: Request site <noreply@aymenmrad.com>';

mail($to_email, $subject, $message, implode("\r\n", $headers));

?>