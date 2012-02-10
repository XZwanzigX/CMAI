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
    $_POST['reasons_for_attending']  = "$_POST[reasons_instructors] , $_POST[reasons_topics] , $_POST[reasons_social], $_POST[reasons_tournament], $_POST[reasons_freeplay], $_POST[reasons_network], $_POST[reasons_location]";
}

function insert_registration() {
    $result = false;
    $mysqli = getConnection();
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

function getConnection()
{
    $mysqli = new mysqli('localhost', 'lysts', 'lysts', 'lysts_dev');
    return $mysqli;
}

function displayFormMessage($message) {
    session_start();
    $_SESSION['formResponse'] = $message;
    header('Location: ../formSubmission.php');
    exit();
}

function getClassInformation()
{
    $conn = getConnection();

    $sql = 'select classname(monday_0900), classname(monday_1045), classname(monday_1330), classname(monday_1515), classname(monday_1700),
                   classname(tuesday_0900), classname(tuesday_1045), classname(tuesday_1330), classname(tuesday_1515), classname(tuesday_1700),
                   classname(wednesday_0900), classname(wednesday_1045), classname(wednesday_1330), classname(wednesday_1515), classname(wednesday_1700),
                   classname(thursday_0900), classname(thursday_1045), classname(thursday_1330), classname(thursday_1515), classname(thursday_1700) from cmai_classes where email=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->bind_result($m0900, $m1045, $m1330, $m1515, $m1700, $t0900, $t1045, $t1330, $t1515, $t1700, $w0900, $w1045, $w1330, $w1515, $w1700, $th0900, $th1045, $th1330, $th1515, $th1700);
    $stmt->fetch();

    $message = "Monday:\n 9:00a: $m0900\n10:45a: $m1045\n 1:30p: $m1330\n3:15p: $m1515\n5:00p: $m1700\n\n
                Tuesday:\n9:00a: $t0900\n10:45a: $t1045\n 1:30p: $t1330\n3:15p: $t1515\n5:00p: $t1700\n\n
                Wednesday:\n9:00a: $w0900\n10:45a: $w1045\n 1:30p: $w1330\n3:15p: $w1515\n5:00p: $w1700\n\n
                Thursday: \n9:00a: $th0900\n10:45a: $th1045\n 1:30p: $th1330\n3:15p: $th1515\n5:00p: $th1700\n\n";
    $stmt->close();
    $conn->close();
    return $message;
}

function getRegistrantInfo() {
    return "Name: {$_POST['first_name']} {$_POST['last_name']}\n
            Email:{$_POST['email']}\n
            City: {$_POST['city']}\n
            State {$_POST['state']}\n
            Postal Code: {$_POST['zip']}\n
            Country: {$_POST['country']}\n
            Address: {$_POST['address']}\n
            Phone: {$_POST['phone']}\n
            Payment: {$_POST['payment']}\n
            How did you hear about us: {$_POST['how_heard']} {$_POST['how_heard_text']}\n
            Experience level: {$_POST['experience']}\n
            Club: {$_POST['club']}\n
            Attended previous WMAs?: {$_POST['attended']} {$_POST['attended_type']}\n
            Reasons for attending: {$_POST['reasons_for_attending']}\n
            T-Shirt size: {$_POST['tshirt']}\n
            Has medical insurance: {$_POST['insurance']}\n
            Limiting conditions: {$_POST['condition']} {$_POST['condition_type']}\n
            Participate in Longsword tourney: {$_POST['longsword']}\n\n";
}

function constructRegistrationEmail() {
    $classes = getClassInformation();
    $registrantInfo = getRegistrantInfo();

    return $registrantInfo . $classes;
}
function emailRegistrationData() {
    $message = constructRegistrationEmail();
    $subject = "CMAI Registration for {$_POST['first_name']} {$_POST['last_name']}";
    mail('steve@aplaisance.com', $subject, $message);
    mail('webmaster@aplaisance.com', $subject, $message);
}

if (insert_registration()) {
    emailRegistrationData();
    displayFormMessage('Thank you for submitting your application for Chivalric Martial Arts International Symposium!');
} else {
    displayFormMessage("Sorry, we are temporarily unable to process your application.  The webmaster has been notified of the error and will contact you shortly.");
}

?>