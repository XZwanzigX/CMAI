<html>
    <head>
        <title>Chivalric Martial Arts International Symposium : Contact Us</title>
        <link rel="stylesheet" href="css/structure.css">
        <link rel="stylesheet" href="css/menuStructure.css">
        <link rel="stylesheet" href="css/textStyles.css">
        <script src="js/contactForm.js"></script>
    </head>

    <body class="other-page-body">
        <?php include('includes/menu.php');?>
        <div class="contact-text-pane">
            <?php
            if(!array_key_exists("hidContact",$_POST)) {?>
                <form method="POST" name="contactForm" class="contact-form" action="contact.php">
                    <input type="hidden" name="hidContact" value="1">
                    <table border="0" class="contact-form">
                        <tr>
                            <td align="right" class="boldText">Name</td>
                            <td><input type="text" name="txtName"></td>
                        </tr>
                        <tr>
                            <td align="right" class="boldText">Phone</td>
                            <td><input type="text" name="txtPhone"></td>
                        </tr>
                        <tr>
                            <td align="right" class="boldText">E-Mail</td>
                            <td><input type="text" name="txtEmail"></td>
                        </tr>
                        <tr>
                            <td align="right" class="boldText">Message</td>
                            <td><textarea name="txtMsg" style="width:260px;height:120px;"></textarea></td>
                        </tr>
                    </table>
                    <input type="button" value="Submit" onclick="validateAndSubmit();">
                    <input type="button" value="clear" onClick="clearForm();">
                </form>
                <?php }
            else {
                $to = "steve@aplaisance.com";
                //	  $to = "foxfire@evilcupcakes.net";
                $subject = $_POST["txtName"] . " has sent you a message via ChivalricMartialArtsInternational.com!";
                $message = "Phone number: " . $_POST["txtPhone"] . "\n" . stripslashes($_POST["txtMsg"]);
                $from = "From: " . $_POST["txtEmail"] . "\r\n";

                mail($to, $subject, $message, $from);
                mail('webmaster@aplaisance.com', $subject, $message, $from);
                echo("<p class=\"homePageText\">Thank you for your inquiry!<br>  We'll get back to you via phone or email as soon as possible!<br><br>Steve Hemphill<br>Executive Producer Lysts on the Lake/Chivalric Martial Arts International Symposium</p></p>");
            }?>

            <div class="aPlaisance-logo-contact">
                <a href="http://www.aplaisance.com" onmouseover="document.aPlaisance.src='img/structure/aPlaisanceGlow.png';" onmouseout="document.aPlaisance.src='img/structure/aPlaisance.png'"><img src="img/structure/aPlaisance.png" name="aPlaisance" border="0"></a>
            </div>
        </div>

        <img src="img/structure/blank.png" class="blank-schedule"/>
    </body>
</html>