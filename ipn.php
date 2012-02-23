<?php
include('../db/dbConnection.php');
//include('../../../db/dbConnection.php');

function dbCOnn() {
    return localConnection();
//    return evilCupcakes();
}

function mailInfoToWebmaster($email, $subject, $req) {
    $text = '';
    foreach ($_POST as $key => $value) {
        $text .= $key . " = " . $value . "\n\n";
    }
    mail($email, $subject, $text . "\n\n" . $req);
}

function transactionAlreadyProcessed($id) {
    return checkIfRecordExists('paypal_txn', 's', $id);
}

function processPayment() {
    $emailExists = checkIfRecordExists('email', 's', $_POST['payer_email']);
    $nameExists = checkIfRecordExists("concatenate(first_name, ' ', last_name)", 's', $_POST['first_name'] . ' ' . $_POST['last_name']);

    if (!$emailExists && !$nameExists) {
        mailInfoToWebmaster('webmaster@aplaisance.com', 'email mismatch', 'E-Mail and name supplied for payment did not match email or name in database.');
        mailToCustomer($_POST['payer_email'], 'Thank you for your payment for CMAI', 'stuff', 'webmaster@aplaisance.com');
    } else {
        updateRegistrantWithPayment($emailExists);
        mailInfoToWebmaster('webmaster@aplaisance.com', 'Payment received for: ' . $_POST['first_name'] . $_POST['last_name'], 'Winning!');
    }
}

function updateRegistrantWithPayment($emailExists) {
    $sql = "update cmai_registrant set paid=?, paypal_txn=? where ";

    if ($emailExists ) {
         $where = 'email=?';
        $param = $_POST['payer_email'];
    } else {
        $where = "concatenate(first_name, ' ', last_name)=?";
        $param = $_POST['first_name'] . ' ' . $_POST['last_name'];
    }

    $conn = dbCOnn();

    if ($stmt = $conn->prepare($sql . $where)) {
        $stmt->bind_param('s', $param);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}
function checkIfRecordExists($record, $paramType, $param)
{
    $conn = dbCOnn();
    $sql = "select {$record} from cmai_registrant where {$record}=?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param($paramType, $param);
        $stmt->execute();
        $stmt->bind_result($recordPresent);
        $stmt->fetch();
        $stmt->close();
        $conn->close();

        return ($recordPresent != null) && $recordPresent;
    }
    return true;
}

$header = "";
// Read the post from PayPal and add 'cmd'
$req = 'cmd=_notify-validate';
if(function_exists('get_magic_quotes_gpc'))
{
    $get_magic_quotes_exists = true;
}
foreach ($_POST as $key => $value)
    // Handle escape characters, which depends on setting of magic quotes
{
    if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1){
        $value = urlencode(stripslashes($value));
    } else {
        $value = urlencode($value);
    }
    $req .= "&$key=$value";
}
// Post back to PayPal to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);



if (!$fp) { // HTTP ERROR
} else {
    // NO HTTP ERROR
    fputs ($fp, $header . $req);
    while (!feof($fp)) {
        $res = fgets ($fp, 1024);
        if (strcmp ($res, "VERIFIED") == 0) {
            // TODO:
            // Check the payment_status is Completed
            // Check that txn_id has not been previously processed
            // Check that receiver_email is your Primary PayPal email
            // Process payment
            if (!transactionAlreadyProcessed($_POST['txn_id'])) {
                processPayment();
            }

            mailInfoToWebmaster($email, "VERIFIED IPN", $req);
        } else if (strcmp ($res, "INVALID") == 0) {
            // If 'INVALID', send an email. TODO: Log for manual investigation.
            foreach ($_POST as $key => $value){
                $emailtext .= $key . " = " .$value ."\n\n";
            }
            mail($email, "Live-INVALID IPN", $emailtext . "\n\n" . $req);
        }
    }
}
fclose ($fp);
?>
 
