<?php require("./mailing/mailfunction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare email body
    $body = "<ul>
                <li>Name: ".$name."</li>
                <li>Phone: ".$phone."</li>
                <li>Email: ".$email."</li>
                <li>Message: ".$message."</li>
            </ul>";

    // Replace with the appropriate recipient email address
    $recipient = "binarybuds5@gmail.com"; // Replace with your recipient's email address

    // Send email using your custom function
    $status = mailfunction($recipient, "New Contact Form Submission", $body, false);

    if ($status) {
        echo '<center><h1>Thanks! We will contact you soon.</h1></center>';
    } else {
        echo '<center><h1>Error sending message! Please try again.</h1></center>';
    }
} else {
    echo '<center><h1>Error: Form submission method not allowed.</h1></center>';
}
?>
