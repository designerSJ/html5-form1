<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $dropdown = $_POST['dropdown'];
    $formcontent = "From: $name\n Type: $dropdown\n Message: \n$message\n";
    $recipient = "admin@mythgyaan.com";
    $subject = "Mythgyaan $dropdown";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!!");
    echo <<< END
    <h1 style="font-family:Arial,sans-serif; text-align:center; margin-top: 30px;">Thank You! Your message has been successfully sent!</h1>
    END;
    echo <<< END
    <p style="font-family:Arial,sans-serif; text-align:center; margin-top: 15px;">You will be redirected in 3 sec...<p>
    END;
    echo <<< END
    <img src="img/thumbsup.png" alt="success" style="height:100px;width:100px; display:block; margin:0 auto;">
    END;
    header('Refresh:3; URL:https://designersj.github.io/html5-form1');
?>