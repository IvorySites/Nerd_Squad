<?php
if($_POST["message"]) {
    mail("nerdsquad@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
