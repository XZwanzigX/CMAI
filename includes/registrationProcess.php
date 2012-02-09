<?php

$mysqli = new mysqli('localhost','lysts','lysts','lysts_dev');
$parameterTypes = 'ssssssssssssisisssiisiiiiiiiiiiiiiiiiiiiii';
$insert = 'insert into cmai_registrant (first_name, last_name, email, city, state, postal_code, country, address,
                        phone_number, payment_method, how_heard, how_heard_text, experience, club_or_school,
                        attended_other_wmas, other_wmas_attended, reasons_for_attending, tshirt_size, medical_insurance,
                        limiting_conditions, limiting_conditions_explanation, participate_longsword_tournament, monday_0900,
                        monday_1045, monday_1330, monday_1515, monday_1700, tuesday_0900, tuesday_1045, tuesday_1330,
                        tuesday_1515, tuesday_1700, wednesday_0900, wednesday_1045, wednesday_1330, wednesday_1515,
                        wednesday_1700, thursday_0900, thursday_1045, thursday_1330, thursday_1515, thursday_1700)
            values (?, ?, ?, ?, ?, ?, ?,
                        ?, ?, ?, ?, ?, ?,
                        ?, ?, ?, ?, ?,
                        ?, ?, ?, ?,
                        ?, ?, ?, ?, ?, ?, ?,
                        ?, ?, ?, ?, ?, ?,
                        ?, ?, ?, ?, ?, ?)';

if(mysqli_connect_errno()) {
      echo "Connection Failed: " . mysqli_connect_errno();
      exit();
}
echo 'praper statment';
if($stmt = $mysqli -> prepare($insert)) {
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
    $stmt->execute() or die($stmt->error);
    $stmt->close();
    $mysqli->close();

    echo'Winnar!';
}

function processParameters()
{
    $monday2BlockClass = 21;
    $tuesday2BlockClass = 26;
    $thursdayAm2BlockClass = 34;
    $thursdayTiro = 19;
    $thursdayBeginnerSAA = 17;

    $_POST['m_0900'] = -1;


    if ($_POST['m_1330'] == $monday2BlockClass) { $_POST['m_1515'] = $monday2BlockClass; }

    if ($_POST['t_1330'] == $tuesday2BlockClass) { $_POST['t_1515'] = $tuesday2BlockClass; }

    if ($_POST['th_0900'] == $thursdayAm2BlockClass) { $_POST['th_1045'] = $thursdayAm2BlockClass; }

    if ($_POST['th_1330'] == $thursdayTiro) { $_POST['th_1515'] = $thursdayTiro; }

    if ($_POST['th_1330'] == $thursdayBeginnerSAA) { $_POST['th_1515'] = $thursdayBeginnerSAA; }
}

function processReasonsForAttending()
{
    return "$_POST[reasons_instructors] , $_POST[reasons_topics] , $_POST[reasons_social], $_POST[reasons_tournament], $_POST[reasons_freeplay], $_POST[reasons_network], $_POST[reasons_location]";
}
?>