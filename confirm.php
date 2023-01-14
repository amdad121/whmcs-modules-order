<?php

$name = $email = $bkash = $trxid = $module = $comment = '';

if (!$_POST['trxid']) {
    header('Location: /');
}

if (isset($_POST['name'])) {
    $name = validation($_POST['name']);
}
if (isset($_POST['email'])) {
    $email = validation($_POST['email']);
}
if (isset($_POST['bkash'])) {
    $bkash = validation($_POST['bkash']);
}
if (isset($_POST['trxid'])) {
    $trxid = validation($_POST['trxid']);
}
if (isset($_POST['module'])) {
    $module = validation($_POST['module']);
}
if (isset($_POST['comment'])) {
    $comment = validation($_POST['comment']);
}

function validation($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$subject = $module . ' Confirm';
$content = "From: $name \n Email: $email \n Module: $module \n Bkash: $bkash \n TrxID: $trxid \n Message: $comment";
$recipient = 'rjamdad@gmail.com';
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die('Error!');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whmcs Modules :: EkotaHost</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="alert alert-warning" role="alert">
            <strong>Success!</strong> Thanks for buying whmcs module. now Please contact 01534-612121 this number & we will send module via email.
        </div>
    </div>
</body>
</html>