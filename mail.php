<!DOCTYPE HTML>
<html>
<body>
<! install LAMP or else php will not be detected inside html!>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


if ($_POST['submit']))
{
    $phpname=$POST['fullname'];
    $phpemail=$POST['email'];
    $phpsubject=$POST['subject'];
    $phpmessage=$POST['message'];

    $mailto="rumman.ulfath@gmail.com"
    $headers= "From : ".$phpemail;
    $text="Hello there,You have received a email from".$phpname."\n\n".$phpmessage;

    mail($mailto,$phpsubject,$text,$headers);
    header("Location:index.html?mailsend");
}

echo $phpname;

}
 ?>

</body>
</html>
