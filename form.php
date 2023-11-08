<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "grantresourceslive@gmail.com"; // Replace with your email address
    $subject = "Grant Application Form Submission";

    // Collect form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $grantamount = $_POST["grantamount"];
    $granttype = $_POST["granttype"];
    $legalstatus = $_POST["certificate and legal status"];
    $missiongoals = $_POST["mission and goals"];
    $programimpact = $_POST["program and impact"];
    $targetaudience = $_POST["target audience"];

    // Build the email message
    $message = "First Name: $firstname\n";
    $message .= "Last Name: $lastname\n";
    $message .= "Email: $email\n";
    $message .= "Mobile Number: $phone\n";
    $message .= "Grant Amount: $grantamount\n";
    $message .= "Grant Type: $granttype\n";
    $message .= "Certification/Legal Status: $legalstatus\n";
    $message .= "Mission and Goals: $missiongoals\n";
    $message .= "Program and Impact: $programimpact\n";
    $message .= "Target Audience: $targetaudience\n";

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your grant application. We will get in touch with you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>