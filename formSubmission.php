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

                $button = '';
                foreach($_SESSION as $key => $value) {
                    if ($key == 'formResponse') {
                        echo $value;
                    } else if ($key == 'classButton') {
                        $button = $value;
                    } else if($key == 'mealPlanDesired') {
                        $button = $button . $value;
                    }
                }

                if ($button != '') {
                    echo 'In order to complete your registration, you must click the "Buy now" button below, and pay with your Paypal account, or a major credit card.<br/>';
                    include($button . '.htm');
                }
                session_destroy();
            ?>
            </p>
            <img src="img/structure/aPlaisance.png">
        </div>
    </body>
</html>