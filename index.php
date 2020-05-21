<?php 
$msg = '';
if (isset($_POST['myName'])) {
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mail.christophermason.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "_mainaccount@christophermason.webhostingforstudents.com";
    $mail->Password = "Luka#2384";

    $mail->setFrom('christ26@christophermason.webhostingforstudents.com', 'Chris Mason');
    $mail->addAddress('christ26@christophermason.webhostingforstudents.com', 'Chris Mason');

        $mail->addReplyTo($myEmail, $myName);
        $mail->Subject = 'Ace in the Hole Contact Form';
        $mail->isHTML(true);
        $mail->Body = <<<EOT
Email: $myEmail <br>
Name: $myName <br>
Message: $myQuestion
EOT;

        if (!$mail->send()) {
            echo "Mailer error" . $mail->ErrorInfo;
        } else {
            include 'success.html.php';
        }
    } else {
        include 'about.html.php';
    }
?>