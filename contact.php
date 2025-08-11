<?php

/*
if(isset($POST['submit'])) {

$e_to = 'artcase1212@gmail.com';
$email_sub = 'New Message!';

$ffname = $_POST['fname'];
$llname = $_POST['llname'];
$rreason = $_POST['rreason'];
$eemail = $_POST['eemail'];

$my_email = 'Artkase.netlify.app';

$email_body = "User first name: $ffname.\n".
                "User last name: $llname.\n".
                "User Reason: $rreason.\n".
                "User email: $eemail.\n";


$headers = "From: $my_email \r\n";

$headers .= "Reply-To: $email \r\n";

mail($e_to,$email_recieved,$email_body,$headers);

header("Location: contact.html");
?>
}*/

<?php 

if(isset($_POST['submit']))
 {
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $purpose = $_POST['purpose'];
     $email = $_POST['email'];

    $mailTo = "artcase1212@gmail.com"
    $headers = "From: ".$email;
    $txt = "You have recieved an e-mail from ".$fname.$lname.".\n\n".$purpose;

    mail($mailTo, $purpose, $txt, $headers);
    header("Location: contact.php?mailsend");
 }

}