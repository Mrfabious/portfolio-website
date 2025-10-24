<?php
$name = $_POST['name'];
$email = $_POST['eamil'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:" .$name."<".$email.">\r\n";

$recipient = "eliteloaded6@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="portfolio.css">
</head>
<body>
    <div class="container phpcont">
        <h1>Thank you for <br> contacting me. i will <br> get back to you as <br> soon as possible</h1>
        <p class="back">
            Go back to the <a href="portfolio.html" class="lik">homepage</a>
        </p>
    </div>
</body>
</html>


'



?>