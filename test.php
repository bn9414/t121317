<html>
<head>
<title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
<h2>Aliens Abducted Me - Report an Abduction</h2>
<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$cc='bhuvanesh@tenfinish.com';
$email = $_POST['email'];
    $to = 'bhuvaneshnick@gmail.com';
     $subject = 'testing mamea';
      
     $msg="my name is". $name."\n"."My phone number is:".$phone."\n"."my email id is:".$email."\n";
    mail($to, $subject, $msg, 'From:' . $email."\r\nCc:" . $cc);
echo 'Thanks for submitting the form.<br />';
echo '<b>You were abducted</b> ' . $name;
echo 'Your email address is ' . $email;
echo 'Your email address is ' . $phone;
?>
</body>
</html>