<html>

    <head>
        <title>Chivalric Martial Arts International : Registration</title>

        <link rel="stylesheet" type="text/css" href="css/structure.css"/>
        <link rel="stylesheet" type="text/css" href="css/menuStructure.css"/>
        <link rel="stylesheet" type="text/css" href="css/textStyles.css">
    </head>

    <body class="other-page-body">
        <?php include('includes/menu.php');?>
        <div class="registration-error-text-pane">
            <p>
            <?php
                ini_set('display_errors', 'Off');
                error_reporting(0);
                session_start();
                foreach($_SESSION as $key => $value) {
                    echo $value;
                }
                session_destroy();
            ?>
            </p>
            <div class="aPlaisance-logo-form-error">
                <a href="http://www.aplaisance.com" onmouseover="document.aPlaisance.src='img/structure/aPlaisanceGlow.png';" onmouseout="document.aPlaisance.src='img/structure/aPlaisance.png'"><img src="img/structure/aPlaisance.png" name="aPlaisance" border="0"></a>
            </div>
        </div>
    </body>
</html>