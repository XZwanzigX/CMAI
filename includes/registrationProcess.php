<?php
include('../../db/dbConnection.php');
function processParameters() {
    $tuesday2BlockClass = 20;
    $wednesday2BlockClass = 25;

    // No class time slots
    $_POST['t_0900'] = -1;
    $_POST['w_2000'] = -1;
    $_POST['th_2000'] = -1;
    $_POST['th_1700'] = -1;
    $_POST['payment'] = 'PAYPAL';

    if ($_POST['t_1330'] == $tuesday2BlockClass) { $_POST['m_1515'] = $tuesday2BlockClass; }

    if ($_POST['w_1330'] == $wednesday2BlockClass) { $_POST['t_1515'] = $wednesday2BlockClass; }
}

function processReasonsForAttending() {
    $reasonList = "$_POST[reasons_instructors] , $_POST[reasons_topics] , $_POST[reasons_social], $_POST[reasons_tournament], $_POST[reasons_freeplay], $_POST[reasons_network], $_POST[reasons_location]";
    $_POST['reasons_for_attending']  = str_replace(", ,", ",", $reasonList);
}

function insert_registration() {
    $result = false;
    $mysqli = localConnection();
    $parameterTypes = 'ssssssssssssisisssiisiiiiiiiiiiiiiiiiiiiiis';
    $insert = 'insert into cmai_registrant (first_name, last_name, email, city, state, postal_code, country, address, phone_number, payment_method,
                                        how_heard, how_heard_text, experience, club_or_school, attended_other_wmas,other_wmas_attended,
                                        reasons_for_attending, tshirt_size, medical_insurance, limiting_conditions, limiting_conditions_explanation,
                                        participate_longsword_tournament,
                                        tuesday_0900, tuesday_1045, tuesday_1330, tuesday_1515, tuesday_1700,
                                        wednesday_0900, wednesday_1045, wednesday_1330, wednesday_1515, wednesday_1700, wednesday_2000,
                                        thursday_0900, thursday_1045, thursday_1330, thursday_1515, thursday_1700, thursday_2000,
                                        friday_0900, friday_1030, need_horse, promo_code)
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

    if (mysqli_connect_errno()) {
        echo "Connection Failed: " . mysqli_connect_errno();
        exit();
    }

    if ($stmt = $mysqli->prepare($insert)) {
        processParameters();
        processReasonsForAttending();
        $stmt->bind_param($parameterTypes, $_POST['first_name'],
                          $_POST['last_name'],
                          $_POST['email'],
                          $_POST['city'],
                          $_POST['state'],
                          $_POST['zip'],
                          $_POST['country'],
                          $_POST['address'],
                          $_POST['phone'],
                          $_POST['payment'],
                          $_POST['how_heard'],
                          $_POST['how_heard_text'],
                          $_POST['experience'],
                          $_POST['club'],
                          $_POST['attended'],
                          $_POST['attended_type'],
                          $_POST['reasons_for_attending'],
                          $_POST['tshirt'],
                          $_POST['insurance'],
                          $_POST['condition'],
                          $_POST['condition_type'],
                          $_POST['longsword'],
                          $_POST['t_0900'], $_POST['t_1045'], $_POST['t_1330'], $_POST['t_1515'], $_POST['t_1700'],
                          $_POST['w_0900'], $_POST['w_1045'], $_POST['w_1330'], $_POST['w_1515'], $_POST['w_1700'], $_POST['w_2000'],
                          $_POST['th_0900'], $_POST['th_1045'], $_POST['th_1330'], $_POST['th_1515'], $_POST['th_1700'], $_POST['th_2000'],
                          $_POST['f_0900'], $_POST['f_1030'], $_POST['need_horse'], $_POST['promo_code']) or die('Bind params failed.');
        $result = $stmt->execute();
        if (!$result) { mail('webmaster@aplaisance.com', 'DB problem', "Insert to DB failed. <p> Post data: $_POST" . mysql_error()); }
        $stmt->close();
        $mysqli->close();

    }
    return $result;
}

function equestrianClassSelected() {
    return (1 == $_POST['t_1045']) ||
           (2 == $_POST['t_1330']) ||
            (3 == $_POST['t_1515']) ||
            (4 == $_POST['t_5:00']) ||
            (5 == $_POST['w_0900']) ||
            (6 == $_POST['w_1045']) ||
            (7 == $_POST['w_1330']) ||
            (8 == $_POST['w_1515']) ||
            (9 == $_POST['w_1700']) ||
            (11 == $_POST['th_0900']) ||
            (12 == $_POST['th_1045']) ||
            (15 == $_POST['th_1700']);

}

function determineButtonType() {
    $eq = equestrianClassSelected();
    $promo = $_POST['promo_code'] == 'lucky';

    if ($eq && $promo) {
        return 'includes/paypal/eqForTeachers.htm';
    } else if ($eq && !$promo) {
        return 'includes/paypal/footAndEq.htm';
    } else if (!$eq && !$promo) {
        return 'includes/paypal/foot.htm';
    } else {
        return '';
    }
}

function displayFormMessage($message) {
    session_start();
    $_SESSION['formResponse'] = $message;
    $_SESSION['buttonType'] = determineButtonType();
    $_SESSION['id'] = obtainRegistrantId();

    header('Location: ../formSubmission.php');
    exit();
}

function displayErrorPage($message) {
    session_start();
    $_SESSION['formResponse'] = $message;

    header('Location: ../formError.php');
    exit();
}

function obtainRegistrantId() {
    $conn = localConnection();
    $sql = 'select id from cmai_registrant where email=?';

    if (!$stmt = $conn->prepare($sql)) {'Statement prep failed.';}
    $stmt->bind_param('s', $_POST['email']);
    if (!$stmt->execute()) { echo $stmt->error;}

    $stmt->bind_result($id);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    return $id;
}

function getClassInformation($br) {
    $conn = localConnection();

    $sql = 'select classname(tuesday_0900), classname(tuesday_1045), classname(tuesday_1330), classname(tuesday_1515), classname(tuesday_1700),
                   classname(wednesday_0900), classname(wednesday_1045), classname(wednesday_1330), classname(wednesday_1515), classname(wednesday_1700), classname(wednesday_2000),
                   classname(thursday_0900), classname(thursday_1045), classname(thursday_1330), classname(thursday_1515), classname(thursday_1700),  classname(wednesday_2000),
                   classname(friday_0900), classname(friday_1030) from cmai_registrant where email=?';

    if(!$stmt = $conn->prepare($sql)) {'failed to prep statement';}
    $stmt->bind_param('s', $_POST['email']);
    if (!$stmt->execute()) { echo $stmt->error;}
    $stmt->bind_result($t0900, $t1045, $t1330, $t1515, $t1700, $w0900, $w1045, $w1330, $w1515, $w1700, $w2000, $th0900, $th1045, $th1330, $th1515, $th1700, $th2000, $f0900, $f1030);
    $stmt->fetch();

    $message = "Tuesday:$br 9:00a: $t0900 $br 10:45a: $t1045 $br 1:30p: $t1330 $br 3:15p: $t1515 $br 5:00p: $t1700 $br $br
                Wednesday: $br 9:00a: $w0900 $br 10:45a: $w1045 $br 1:30p: $w1330 $br 3:15p: $w1515 $br 5:00p: $w1700 $br 8:00p: $w2000 $br $br
                Thursday: $br 9:00a: $th0900 $br 10:45a: $th1045 $br 1:30p: $th1330 $br 3:15p: $th1515 $br 5:00p: $th1700 $br 8:00p: $th2000 $br $br
                Friday: $br 9:00a: $f0900 $br 10:30a: $f1030 $br $br";
    $stmt->close();
    $conn->close();
    return $message;
}

function getRegistrantInfo($br) {
    $attendedPrevious = $_POST['attended'] == 1 ? 'Yes' : 'No';
    $medicalInsurance = $_POST['insurance'] == 1 ? 'Yes' : 'No';
    $limitingConditions = $_POST['condition'] == 1 ? 'Yes' : 'No';
    $longswordTourney = $_POST['longsword'] == 1 ? 'Yes' : 'No';
    $needHorse = $_POST['need_horse'] == 1 ? 'Yes' : 'No';

    return "Name: {$_POST['first_name']} {$_POST['last_name']}$br
            Email:{$_POST['email']}$br
            City: {$_POST['city']}$br
            State {$_POST['state']}$br
            Postal Code: {$_POST['zip']}$br
            Country: {$_POST['country']}$br
            Address: {$_POST['address']}$br
            Phone: {$_POST['phone']}$br
            Promo Code: {$_POST['promo_code']}$br
            How did you hear about us: {$_POST['how_heard']} {$_POST['how_heard_text']}$br
            Experience level: {$_POST['experience']} $br
            Club: {$_POST['club']}$br
            Attended previous WMAs?: {$attendedPrevious} {$_POST['attended_type']}$br
            Reasons for attending: {$_POST['reasons_for_attending']}$br
            T-Shirt size: {$_POST['tshirt']}$br
            Has medical insurance: {$medicalInsurance}$br
            Limiting conditions: {$limitingConditions} {$_POST['condition_type']}$br
            Participate in Longsword tourney: {$longswordTourney}$br
            Horse Needed?: {$needHorse}$br$br";
}

function constructRegistrationEmail($br) {
    $classes = getClassInformation($br);
    $registrantInfo = getRegistrantInfo($br);

    return $registrantInfo . $classes;
}

function emailRegistrationData() {
    $message = constructRegistrationEmail('\n');
    $subject = "CMAI Registration for {$_POST['first_name']} {$_POST['last_name']}";
    mail('steve@aplaisance.com', $subject, $message);
    mail('webmaster@aplaisance.com', $subject, $message);
}

if (insert_registration()) {
    $responseMessage = 'Thank you for applying for the Chivalric Martial Arts International Symposium!  In order to confirm your Your application information is listed below.  If any of this is incorrect, please contact the <a href="mailto:webmaster@aplaisance.com" class="textLink">webmaster</a>.<br><br>'
                       . constructRegistrationEmail('<br>');

    emailRegistrationData();
    displayFormMessage($responseMessage);
} else {
    displayFormMessage("Sorry, we are temporarily unable to process your application.  The webmaster has been notified of the error and will contact you shortly.");
}

?>