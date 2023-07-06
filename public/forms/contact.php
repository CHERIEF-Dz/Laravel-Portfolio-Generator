<?php

    $to = "cheriefabdelkader@gmail.com";
    $message = $_POST['message'];
    $from= "From ".$_POST['email'];
    $subject= $_POST['subject'];
    
    if( mail($to, $subject, $message, $from) ) {
        echo "OK";
    }
?>
