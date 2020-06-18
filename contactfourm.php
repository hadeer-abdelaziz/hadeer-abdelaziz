<?php

if (isset($_post['submit'])) {
    
    $name =$_post['name'];
    $subject =$_post['subject'];
    $mailFrom =$_post['email'];
    $message =$_post['message'];
    
    $mailTo = "hamadapop222222@gmail.com";
    $header = "From: ".$mailFrom;
    $txt = "You havr received an e-mail from".$name."./n/n".$message;
    
    
    mail($mailTo, $subject, $txt, $header);
    header("Location: 06-contact.html?mailsend")
    

    
}