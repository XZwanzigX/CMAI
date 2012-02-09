<html>

    <head>
        <title>Chivalric Martial Arts International : Registration</title>

        <link rel="stylesheet" type="text/css" href="css/structure.css"/>
        <link rel="stylesheet" type="text/css" href="css/menuStructure.css"/>
        <link rel="stylesheet" type="text/css" href="css/textStyles.css">
    </head>

    <body class="other-page-body">
        <?php include('includes/menu.php');?>
        <div class="registration-text-pane">
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
            <img src="img/structure/aPlaisance.png">
        </div>
    </body>
</html>