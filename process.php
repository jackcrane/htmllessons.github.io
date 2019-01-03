<?php
$handle = fopen("data.txt", "a");
Fwrite($handle, $_POST["firstname"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["lastname"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["email"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["age"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["objective"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["scale"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["exp"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["photo approval"]);
Fwrite($handle, " : ");
Fwrite($handle, $_POST["uid"]);
Fwrite($handle, "\n");
// email
$msg = "Thank you for your input on htmllessons.github.io!\n\nHere is the information that you provided us.\n\nIf anything in this email is not correct, please email me back at 3jbc22@gmail.com as soon as you possibly can with your User ID (UID) and what is wrong and we will do what we can to get it resolved in a timely manner \n"
// here is where the input data should go
?>
<html>
    <script>
        alert("thanks, now redirecting you to google. Have a nice day!")
        document.location.href="https://www.google.com"</script>
</html>