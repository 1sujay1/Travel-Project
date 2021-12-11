<?php
 
if($_POST) {
    $name = "";
    $emailid = "";
    $phone = "";
    $Tour_Packages = "";
    $checkin_date = "";
     $checkout_date ="";
    $Persons = "";
     
    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['emailid'])) {
        $emailid = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['emailid']);
        $emailid = filter_var($emailid, FILTER_VALIDATE_EMAIL);
         
    }
     
    if(isset($_POST['phone'])) {
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    }
     

 
    if(isset($_POST['Tour_Packages'])) {
        $Tour_Packages = filter_var($_POST['Tour_Packages'], FILTER_SANITIZE_NUMBER_INT);
    }
 
    if(isset($_POST['checkin'])) {
        $checkin_date = filter_var($_POST['checkin'], FILTER_SANITIZE_NUMBER_INT);
    }
    
    if(isset($_POST['checkout'])) {
        $checkout_date = filter_var($_POST['checkout'], FILTER_SANITIZE_NUMBER_INT);
    }

     
    if(isset($_POST['Persons'])) {
        $Persons = htmlspecialchars($_POST['Persons']);
    }

 
    $recipient = "bambinoholidays@gmail.com";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $emailid . "\r\n";
 
    $email_content = "<html><body>";
    $email_content .= "<table style='font-family: Arial;'><tbody><tr><td style='background: #eee; padding: 10px;'>Name</td><td style='background: #fda; padding: 10px;'>$name</td></tr>";
    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Email</td><td style='background: #fda; padding: 10px;'>$emailid</td></tr>";
    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Phone Number</td><td style='background: #fda; padding: 10px;'>$phone</td></tr>";
     $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Tour Packages</td><td style='background: #fda; padding: 10px;'>$Tour_Packages</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Start Date</td><td style='background: #fda; padding: 10px;'>$checkin_date</td></tr>";
    
    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>End Date</td><td style='background: #fda; padding: 10px;'>$checkout_date</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Number Of Persons</td><td style='background: #fda; padding: 10px;'>$Persons</td></tr></tbody></table>";
    
    $email_content .= '</body></html>';
 
    // echo $email_content;
     
    if(mail($recipient, "Booking Confirmation", $email_content, $headers)) {
        echo '<p>Thank you for booking a Bambino Holidays with us. We hope you have a pleasant stay.</p>';
    } else {
        echo '<p>We are sorry but the booking confirmation email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>