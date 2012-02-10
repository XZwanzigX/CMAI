<?php
include('../../db/dbConnection.php');
function processParameters() {
    $monday2BlockClass = 21;
    $tuesday2BlockClass = 26;
    $thursdayAm2BlockClass = 34;
    $thursdayDeed = 36;
    $thursdayBeginnerSAA = 17;

    $_POST['m_0900'] = -1;


    if ($_POST['m_1330'] == $monday2BlockClass) { $_POST['m_1515'] = $monday2BlockClass; }

    if ($_POST['t_1330'] == $tuesday2BlockClass) { $_POST['t_1515'] = $tuesday2BlockClass; }

    if ($_POST['th_0900'] == $thursdayAm2BlockClass) { $_POST['th_1045'] = $thursdayAm2BlockClass; }

    if ($_POST['th_1330'] == $thursdayDeed) { $_POST['th_1515'] = $thursdayDeed; }

    if ($_POST['th_1330'] == $thursdayBeginnerSAA) { $_POST['th_1515'] = $thursdayBeginnerSAA; }
}

function processReasonsForAttending() {
    $reasonList = "$_POST[reasons_instructors] , $_POST[reasons_topics] , $_POST[reasons_social], $_POST[reasons_tournament], $_POST[reasons_freeplay], $_POST[reasons_network], $_POST[reasons_location]";
    $_POST['reasons_for_attending']  = str_replace(", ,", ",", $reasonList);
}

function insert_registration() {
    $result = false;
    $mysqli = localConnection();
    $parameterTypes = 'ssssssssssssisisssiissiiiiiiiiiiiiiiiiiiii';
    $insert = 'insert into cmai_registrant (first_name, last_name, email, city, state, postal_code, country, address, phone_number, payment_method,
                                        how_heard, how_heard_text, experience, club_or_school, attended_other_wmas,other_wmas_attended,
                                        reasons_for_attending, tshirt_size, medical_insurance, limiting_conditions, limiting_conditions_explanation,
                                        participate_longsword_tournament,
                                        monday_0900, monday_1045, monday_1330, monday_1515, monday_1700,
                                        tuesday_0900, tuesday_1045, tuesday_1330, tuesday_1515, tuesday_1700,
                                        wednesday_0900, wednesday_1045, wednesday_1330, wednesday_1515, wednesday_1700,
                                        thursday_0900, thursday_1045, thursday_1330, thursday_1515, thursday_1700)
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?)';

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
                          $_POST['m_0900'],
                          $_POST['m_1045'], $_POST['m_1330'], $_POST['m_1515'], $_POST['m_1700'], $_POST['t_0900'], $_POST['t_1045'], $_POST['t_1330'],
                          $_POST['t_1515'], $_POST['t_1700'], $_POST['w_0900'], $_POST['w_1045'], $_POST['w_1330'], $_POST['w_1515'],
                          $_POST['w_1700'], $_POST['th_0900'], $_POST['th_1045'], $_POST['th_1330'], $_POST['th_1515'], $_POST['th_1700']) or die('Bind params failed.');
        $result = $stmt->execute();
        if (!$result) { mail('webmaster@aplaisance.com', 'DB problem', "Insert to DB failed. <p> Post data: $_POST" . mysql_error()); }
        $stmt->close();
        $mysqli->close();

    }
    return $result;
}

function displayFormMessage($message) {
    session_start();
    $_SESSION['formResponse'] = $message;
    header('Location: ../formSubmission.php');
    exit();
}

function getClassInformation($br)
{
    $conn = localConnection();

    $sql = 'select classname(monday_0900), classname(monday_1045), classname(monday_1330), classname(monday_1515), classname(monday_1700),
                   classname(tuesday_0900), classname(tuesday_1045), classname(tuesday_1330), classname(tuesday_1515), classname(tuesday_1700),
                   classname(wednesday_0900), classname(wednesday_1045), classname(wednesday_1330), classname(wednesday_1515), classname(wednesday_1700),
                   classname(thursday_0900), classname(thursday_1045), classname(thursday_1330), classname(thursday_1515), classname(thursday_1700) from cmai_registrant where email=?';

    if(!$stmt = $conn->prepare($sql)) {'failed to prep statement';}
    $stmt->bind_param('s', $_POST['email']);
    if (!$stmt->execute()) { echo $stmt->error;}
    $stmt->bind_result($m0900, $m1045, $m1330, $m1515, $m1700, $t0900, $t1045, $t1330, $t1515, $t1700, $w0900, $w1045, $w1330, $w1515, $w1700, $th0900, $th1045, $th1330, $th1515, $th1700);
    $stmt->fetch();

    $message = "Monday:$br 9:00a: $m0900 $br 10:45a: $m1045 $br 1:30p: $m1330 $br 3:15p: $m1515 $br 5:00p: $m1700 $br $br
                Tuesday: $br 9:00a: $t0900 $br 10:45a: $t1045 $br 1:30p: $t1330 $br 3:15p: $t1515 $br 5:00p: $t1700 $br $br
                Wednesday: $br 9:00a: $w0900 $br 10:45a: $w1045 $br 1:30p: $w1330 $br 3:15p: $w1515 $br 5:00p: $w1700 $br $br
                Thursday: $br 9:00a: $th0900 $br 10:45a: $th1045 $br 1:30p: $th1330 $br 3:15p: $th1515 $br 5:00p: $th1700 $br $br";
    $stmt->close();
    $conn->close();
    return $message;
}

function getRegistrantInfo($br) {
    $attendedPrevious = $_POST['attended'] == 1 ? 'Yes' : 'No';
    $medicalInsurance = $_POST['insurance'] == 1 ? 'Yes' : 'No';
    $limitingConditions = $_POST['condition'] == 1 ? 'Yes' : 'No';
    $longswordTourney = $_POST['longsword'] == 1 ? 'Yes' : 'No';

    return "Name: {$_POST['first_name']} {$_POST['last_name']}$br
            Email:{$_POST['email']}$br
            City: {$_POST['city']}$br
            State {$_POST['state']}$br
            Postal Code: {$_POST['zip']}$br
            Country: {$_POST['country']}$br
            Address: {$_POST['address']}$br
            Phone: {$_POST['phone']}$br
            Payment: {$_POST['payment']}$br
            How did you hear about us: {$_POST['how_heard']} {$_POST['how_heard_text']}$br
            Experience level: {$_POST['experience']} $br
            Club: {$_POST['club']}$br
            Attended previous WMAs?: {$attendedPrevious} {$_POST['attended_type']}$br
            Reasons for attending: {$_POST['reasons_for_attending']}$br
            T-Shirt size: {$_POST['tshirt']}$br
            Has medical insurance: {$medicalInsurance}$br
            Limiting conditions: {$limitingConditions} {$_POST['condition_type']}$br
            Participate in Longsword tourney: {$longswordTourney}$br$br";
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
    $responseMessage = 'Thank you for applying for the Chivalric Martial Arts International Symposium!  Your application information is listed below.  If any of this is incorrect, please contact the <a href="mailto:webmaster@aplaisance.com" class="textLink">webmaster</a>.<br><br>'
                       . constructRegistrationEmail('<br>');

    emailRegistrationData();
    displayFormMessage($responseMessage);
} else {
    displayFormMessage("Sorry, we are temporarily unable to process your application.  The webmaster has been notified of the error and will contact you shortly.");
}

?>