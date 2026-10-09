<?php
include "../config.php";

if (isset($_POST)) {
    $to = $adminEmails;
    $from = $_POST['email'];

    $subject = "Subscribtion Mail";

    $message = 
                "<table border='1'>
                    <tr>
                        <th colspan='2'><h4>Subscription message from 'Pinaki Pharma Advisory'</h4></th>
                    </tr>
                    <tr>
                        <td>Subcribion Mail</td>
                        <td>$from</td>
                    </tr>
                </table>";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$from>" . "\r\n"; 
    $headers .= "Reply-To: $headerMail" . "\r\n"; 

    if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        if (mail($to, $subject, $message, $headers)) {
            echo 'subscription successful !';
        } else {
            echo 'subscription fail, please try again';
        }
    }
}
