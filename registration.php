<html>
    <head>
        <title>Chivalric Martial Arts International Symposium : Registration</title>
        <link rel="stylesheet" href="css/structure.css">
        <link rel="stylesheet" href="css/menuStructure.css">
        <link rel="stylesheet" href="css/scheduleStyles.css">
        <link rel="stylesheet" href="css/textStyles.css">
    </head>
    <body class="other-page-body">
        <?php include('includes/menu.php');?>
        <div class="registration-text-pane">
        <form name="" method="post" enctype="multipart/form-data" action="">

        <table class="entry" cellspacing="1">
            <tr>
                <td class="row-title">Contact Information</td>
            </tr>

            <!-- Name -->
            <tr class="entry">
                <td class="col_left">
                    Full Name<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="name" size="50" maxlength="75" value="" />
                </td>
            </tr>

            <!-- Email -->
            <tr class="entry">
                <td class="col_left">
                    E-mail<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="email" size="50" maxlength="75" value="" />
                </td>
            </tr>

            <!-- City -->
            <tr class="entry">
                <td class="col_left">
                    City<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="city" value="" />
                </td>
            </tr>

            <!-- State -->
            <tr class="entry">
                <td class="col_left">
                    State<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="state" size="4" maxlength="10" value="" />
                </td>
            </tr>

            <!-- Zip Code -->
            <tr class="entry">
                <td class="col_left">
                    Zip Code<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="zip" value="" />
                </td>
            </tr>

            <!-- Country -->
            <tr class="entry">
                <td class="col_left">
                    Country<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="country" value="" />
                </td>
            </tr>

            <!-- Address -->
            <tr class="entry">
                <td class="col_left">
                    Address<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="address" value="" />
                </td>
            </tr>

            <!-- Phone Number -->
            <tr class="entry">
                <td class="col_left">
                    Phone Number<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="text" name="phone" value="" />
                </td>
            </tr>

        </table>
        <br/>
        <table class="entry" cellspacing="1">
            <tr>
                <td class="row-title">Questionnaire</td>
            </tr>

            <!-- Payment Type -->
            <tr class="entry">
                <td class="col_left">
                    Method of Payment<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="radio" name="payment" value="check" /> Check
                    <input type="radio" name="payment" value="paypal" CHECKED/> Paypal
                </td>
            </tr>

            <!-- Heard About -->
            <tr class="entry">
                <td class="col_left">
                    How did you hear about this event?</td>
                <td class="col_right">
                    <select  name='heard_from'>
                        <option value='' selected >Choose One...</option>
                        <option value='Friend'  >Friend</option>
                        <option value='Link'  >Link</option>
                        <option value='Web'  >Web Search</option>
                        <option value='Flyer'  >Flyer</option>
                        <option value='Event'  >Event</option>
                        <option value='Other'  >Other:</option>
                    </select>
                    <input type="text" name="heard_from_other" size="30" maxlength="50" value="" />
                </td>
            </tr>

            <!-- Experience -->
            <tr class="entry">
                <td class="col_left">
                    Please rate your martial arts experience <br/> on a scale from 1 to 5: </td>
                <td class="col_right">
                    &nbsp;&nbsp;No Experience [<b>1</b>]<input type="radio" name="experience" value="1" />
                    <input type="radio" name="experience" value="2" />
                    <input type="radio" name="experience" value="3" />
                    <input type="radio" name="experience" value="4" />
                    <input type="radio" name="experience" value="5" />[<b>5</b>] Experienced Instructor
                </td>
            </tr>

            <!-- Club -->
            <tr class="entry">
                <td class="col_left">
                    Name your club/school if any </td>
                <td class="col_right">
                    <input type="text" name="club" size="50" maxlength="75" value="" />
                </td>
            </tr>

            <!-- Attended Before  -->
            <tr class="entry">
                <td class="col_left">
                    Have you attended WMA / HEMA events <br/> before?</td>
                <td class="col_right">
                    <input type="radio" name="attended" value="no" /> No
                    <input type="radio" name="attended" value="yes" /> Yes.  If so, which ones?

                    <input type="text" name="attended_type" size="30" maxlength="50" value="" />
                </td>
            </tr>

            <!-- Reasons -->
            <tr class="entry">
                <td class="col_left">
                    What are your primary reasons for <br/> attending this event? </td>
                <td class="col_right">
                    <input type='checkbox' name='reasons[instructors]' value='Instructors'  />Instructors<br/>
                    <input type='checkbox' name='reasons[topics]' value='Topic Areas Covered'  />Topic Areas Covered<br/>
                    <input type='checkbox' name='reasons[social]' value='Socialization/Camaraderie'  />Socialization/Camaraderie<br/>
                    <input type='checkbox' name='reasons[tournament]' value='Tournament/Competition'  />Tournament/Competition<br/>
                    <input type='checkbox' name='reasons[freeplay]' value='Possibility for free-play/sparring/fencing'  />Possibility for free-play/sparring/fencing<br/>
                    <input type='checkbox' name='reasons[network]' value='Network Opportunities'  />Network Opportunities<br/>
                    <input type='checkbox' name='reasons[location]' value='Location'  />Location<br/>
                </td>
            </tr>

            <!-- T-shirt -->
            <tr class="entry">
                <td class="col_left">
                    What size t-shirt do you wear?</td>
                <td class="col_right">
                    <select  name='tshirt'>
                        <option value='None' selected >Choose One...</option>
                        <option value='XXS'  >XXS</option>
                        <option value='XS'  >XS</option>
                        <option value='S'  >S</option>
                        <option value='M'  >M</option>
                        <option value='L'  >L</option>
                        <option value='XL'  >XL</option>
                        <option value='2XL'  >2XL</option>
                        <option value='3XL'  >3XL</option>
                    </select>
                </td>
            </tr>

            <!-- Medical Insurance -->
            <tr class="entry">
                <td class="col_left">
                    Do you have medical insurance?<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="radio" name="insurance" value="no" /> No
                    <input type="radio" name="insurance" value="yes" /> Yes
                </td>
            </tr>

            <!-- Medical Condition -->
            <tr class="entry">
                <td class="col_left">
                    Do you have any medical, mental, or <br/> psychological conditions that could <br/> impair or affect your ability to <br/> participate in this event or <br/> effect others you may work with?<font class='red_note'>*</font></td>
                <td class="col_right">
                    <input type="radio" name="condition" value="no" /> No
                    <input type="radio" name="condition" value="yes" /> Yes.  If so, please explain:

                    <input type="text" name="condition_type" size="30" maxlength="256" value="" />
                </td>
            </tr>

            <!-- Longsword Tournament -->
            <tr class="entry">
                <td class="col_left">
                    Do you want to participate in the <br/> longsword tournament?</td>
                <td class="col_right">
                    <input type="radio" name="longsword" value="no" /> No
                    <input type="radio" name="longsword" value="yes" /> Yes
                </td>
            </tr>
        </table>
        <br/>
        <table class="entry" cellspacing="1">
            <tr>
                <td class="row-title">Please make your class selections below:</td>
            </tr>
        </table>
        <br/>
        <table class='page_row'>
            <tr><td class='row-title' colspan=3>Friday March 16th</tr>
            <tr class='cat'>
                <td>
                    <b><font class='col1'> Time</font></b></td>
                <td>
                    Floor One</td>
                <td>
                    Floor Two</td>
                <td>
                    Floor Three</td>
                <td>
                    Floor Four</td>
                <td>
                    None</td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 9:00am - 10:45am</font></b></td>
                <td>
                    <b>Entering and Binding</b><br><br>Jake Norwood<br><input type='radio' name='schedule[9:00am - 10:45am : Friday March 16th]' value='&lt;b&gt;Entering and Binding&lt;/b&gt;Jake Norwood' />
                </td>
                <td>
                    <b>Dussack</b><br><br>Keith Myers<br><input type='radio' name='schedule[9:00am - 10:45am : Friday March 16th]' value='&lt;b&gt;Dussack&lt;/b&gt;Keith Myers' />
                </td>
                <td>
                    <b>Fiore's Eight Cuts</b><br><br>Brian Stokes<br><input type='radio' name='schedule[9:00am - 10:45am : Friday March 16th]' value='&lt;b&gt;Fiore&#039;s Eight Cuts&lt;/b&gt;Brian Stokes' />
                </td>
                <td>
                    <b>Intro to Bolognese Sword and Buckler</b><br><br>Steve Reich<br><input type='radio' name='schedule[9:00am - 10:45am : Friday March 16th]' value='&lt;b&gt;Intro to Bolognese Sword and Buckler&lt;/b&gt;Steve Reich' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[9:00am - 10:45am : Friday March 16th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 11:00am - 12:45pm</font></b></td>
                <td>
                    <b>Meyer's Rappier</b><br><br>Lee Smith<br><input type='radio' name='schedule[11:00am - 12:45pm : Friday March 16th]' value='&lt;b&gt;Meyer&#039;s Rappier&lt;/b&gt;Lee Smith' />
                </td>
                <td>
                    <b>Fiore's Functional Guards</b><br><br>Bob Charron<br><input type='radio' name='schedule[11:00am - 12:45pm : Friday March 16th]' value='&lt;b&gt;Fiore&#039;s Functional Guards&lt;/b&gt;Bob Charron' />
                </td>
                <td>
                    <b>Decision Making Skill Drills</b><br><br>Scott Brown<br><input type='radio' name='schedule[11:00am - 12:45pm : Friday March 16th]' value='&lt;b&gt;Decision Making Skill Drills&lt;/b&gt;Scott Brown' />
                </td>
                <td>
                    <b>Fighting from Longpoint</b><br><br>Michael Edelson<br><input type='radio' name='schedule[11:00am - 12:45pm : Friday March 16th]' value='&lt;b&gt;Fighting from Longpoint&lt;/b&gt;Michael Edelson' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[11:00am - 12:45pm : Friday March 16th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 12:45pm - 2:00pm</font></b></td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    None<br><input type='radio' name='schedule[12:45pm - 2:00pm : Friday March 16th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 2:00pm - 3:45pm</font></b></td>
                <td>
                    <b>Gedecktes Heibfechten</b><br><br>Christoph Amberger<br><input type='radio' name='schedule[2:00pm - 3:45pm : Friday March 16th]' value='&lt;b&gt;Gedecktes Heibfechten&lt;/b&gt;Christoph Amberger' />
                </td>
                <td>
                    <b>Sparring as a Training Tool</b><br><br>Axel Pettersson<br><input type='radio' name='schedule[2:00pm - 3:45pm : Friday March 16th]' value='&lt;b&gt;Sparring as a Training Tool&lt;/b&gt;Axel Pettersson' />
                </td>
                <td>
                    <b>Fiore's Advantage</b><br>(Dagger vs. Longsword)<br>Charles Deily<br><input type='radio' name='schedule[2:00pm - 3:45pm : Friday March 16th]' value='&lt;b&gt;Fiore&#039;s Advantage&lt;/b&gt;(Dagger vs. Longsword)Charles Deily' />
                </td>
                <td>
                    <b>Judging Workshop</b><br><br>Matt Galas & Scott Brown<br><input type='radio' name='schedule[2:00pm - 3:45pm : Friday March 16th]' value='&lt;b&gt;Judging Workshop&lt;/b&gt;Matt Galas &amp; Scott Brown' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[2:00pm - 3:45pm : Friday March 16th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 4:00pm - 5:45pm</font></b></td>
                <td>
                    <b>Franco-Belgian <br>Longsword Tournament</b><br>Invitation Only<br><input type='radio' name='schedule[4:00pm - 5:45pm : Friday March 16th]' value='&lt;b&gt;Franco-Belgian Longsword Tournament&lt;/b&gt;Invitation Only' />
                </td>
                <td>
                    <b>Franco-Belgian<br> Longsword Tournament</b><br>Invitation Only<br><input type='radio' name='schedule[4:00pm - 5:45pm : Friday March 16th]' value='&lt;b&gt;Franco-Belgian Longsword Tournament&lt;/b&gt;Invitation Only' />
                </td>
                <td>
                    <b>Franco-Belgian<br> Longsword Tournament</b><br>Invitation Only<br><input type='radio' name='schedule[4:00pm - 5:45pm : Friday March 16th]' value='&lt;b&gt;Franco-Belgian Longsword Tournament&lt;/b&gt;Invitation Only' />
                </td>
                <td>
                    <b>19th Century Grappling</b><br><br>Chris Amendola<br><input type='radio' name='schedule[4:00pm - 5:45pm : Friday March 16th]' value='&lt;b&gt;19th Century Grappling&lt;/b&gt;Chris Amendola' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[4:00pm - 5:45pm : Friday March 16th]' value='None' CHECKED/>
                </td>
            </tr>
        </table>
        <br>
        <table class='page_row'>
            <tr><td class='row-title' colspan=3>Saturday March 17th</tr>
            <tr class='cat'>
                <td>
                    <b><font class='col1'> Time</font></b></td>
                <td>
                    Floor One</td>
                <td>
                    Floor Two</td>
                <td>
                    Floor Three</td>
                <td>
                    Floor Four</td>
                <td>
                    None</td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 9:00am - 10:45am</font></b></td>
                <td>
                    <b>Krumphau</b><br><br>Jeff Tsay<br><input type='radio' name='schedule[9:00am - 10:45am : Saturday March 17th]' value='&lt;b&gt;Krumphau&lt;/b&gt;Jeff Tsay' />
                </td>
                <td>
                    <b>Empty Hand<br> Striking for HEMA</b><br>Jason Taylor<br><input type='radio' name='schedule[9:00am - 10:45am : Saturday March 17th]' value='&lt;b&gt;Empty Hand Striking for HEMA&lt;/b&gt;Jason Taylor' />
                </td>
                <td>
                    <b>Antrim Irish<br>Stick Fighting</b><br>Maxime Chouinard<br><input type='radio' name='schedule[9:00am - 10:45am : Saturday March 17th]' value='&lt;b&gt;Antrim IrishStick Fighting&lt;/b&gt;Maxime Chouinard' />
                </td>
                <td>
                    <b>Attacking in Bolognese Sword and Buckler</b><br><br>Steve Reich<br><input type='radio' name='schedule[9:00am - 10:45am : Saturday March 17th]' value='&lt;b&gt;Attacking in Bolognese Sword and Buckler&lt;/b&gt;Steve Reich' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[9:00am - 10:45am : Saturday March 17th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 11:00am - 12:45pm</font></b></td>
                <td>
                    <b>Thrusting Skills<br>From Longpoint</b><br>Matt Galas<br><input type='radio' name='schedule[11:00am - 12:45pm : Saturday March 17th]' value='&lt;b&gt;Thrusting SkillsFrom Longpoint&lt;/b&gt;Matt Galas' />
                </td>
                <td>
                    <b>Unarmed Vs. Dagger<br></b><br>Jay Vail<br><input type='radio' name='schedule[11:00am - 12:45pm : Saturday March 17th]' value='&lt;b&gt;Unarmed Vs. Dagger&lt;/b&gt;Jay Vail' />
                </td>
                <td>
                    <b>German Sickle<br></b><br>Jason Taylor<br><input type='radio' name='schedule[11:00am - 12:45pm : Saturday March 17th]' value='&lt;b&gt;German Sickle&lt;/b&gt;Jason Taylor' />
                </td>
                <td>
                    <b>Quarterstaff</b><br><br>Roberto Martinez-Loyo<br><input type='radio' name='schedule[11:00am - 12:45pm : Saturday March 17th]' value='&lt;b&gt;Quarterstaff&lt;/b&gt;Roberto Martinez-Loyo' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[11:00am - 12:45pm : Saturday March 17th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 12:45pm - 2:00pm</font></b></td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    None<br><input type='radio' name='schedule[12:45pm - 2:00pm : Saturday March 17th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 2:00pm - 3:45pm</font></b></td>
                <td>
                    <b>Hammertertz Forum<br>Longsword Tournament</b><br><br><input type='radio' name='schedule[2:00pm - 3:45pm : Saturday March 17th]' value='&lt;b&gt;Hammertertz ForumLongsword Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Hammertertz Forum<br> Longsword Tournament</b><br><br><input type='radio' name='schedule[2:00pm - 3:45pm : Saturday March 17th]' value='&lt;b&gt;Hammertertz Forum Longsword Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Hammertertz Forum<br>Longsword Tournament</b><br><br><input type='radio' name='schedule[2:00pm - 3:45pm : Saturday March 17th]' value='&lt;b&gt;Hammertertz ForumLongsword Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Tempo and Measure<br>For Longsword</b><br>Bob Charron<br><input type='radio' name='schedule[2:00pm - 3:45pm : Saturday March 17th]' value='&lt;b&gt;Tempo and MeasureFor Longsword&lt;/b&gt;Bob Charron' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[2:00pm - 3:45pm : Saturday March 17th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 4:00pm - 5:45pm</font></b></td>
                <td>
                    <b>Hammertertz Forum<br> Longsword Tournament</b><br><br><input type='radio' name='schedule[4:00pm - 5:45pm : Saturday March 17th]' value='&lt;b&gt;Hammertertz Forum Longsword Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Hammertertz Forum<br>Longsword Tournament</b><br><br><input type='radio' name='schedule[4:00pm - 5:45pm : Saturday March 17th]' value='&lt;b&gt;gt;Hammertertz ForumLongsword Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Hammertertz Forum<br>Longsword Tournament</b><br><br><input type='radio' name='schedule[4:00pm - 5:45pm : Saturday March 17th]' value='&lt;b&gt;Hammertertz ForumLongsword Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Dueling Smallsword</b><br><br>Bob McPherson<br><input type='radio' name='schedule[4:00pm - 5:45pm : Saturday March 17th]' value='&lt;b&gt;Dueling Smallsword&lt;/b&gt;Bob McPherson' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[4:00pm - 5:45pm : Saturday March 17th]' value='None' CHECKED/>
                </td>
            </tr>
        </table>
        <br>
        <table class='page_row'>
            <tr><td class='row-title' colspan=3>Sunday March 18th</tr>
            <tr class='cat'>
                <td>
                    <b><font class='col1'> Time</font></b></td>
                <td>
                    Floor One</td>
                <td>
                    Floor Two</td>
                <td>
                    Floor Three</td>
                <td>
                    Floor Four</td>
                <td>
                    None</td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 9:00am - 10:00am</font></b><br><input type='radio' name='schedule[9:00am - 10:00am : Sunday March 18th]' value='9:00am - 10:00am' />
                </td>
                <td>
                    <b>Guild Life:<br>A Lecture</b><br>Matt Galas<br><input type='radio' name='schedule[9:00am - 10:00am : Sunday March 18th]' value='&lt;b&gt;Guild Life:A Lecture&lt;/b&gt;Matt Galas' />
                </td>
                <td>
                    <b>Guild Life:<br>A Lecture</b><br>Matt Galas<br><input type='radio' name='schedule[9:00am - 10:00am : Sunday March 18th]' value='&lt;b&gtgt;Guild Life:A Lecture&lt;/b&gt;Matt Galas' />
                </td>
                <td>
                    <b>Guild Life:<br>A Lecture<br></b>Matt Galas<br><input type='radio' name='schedule[9:00am - 10:00am : Sunday March 18th]' value='&lt;b&gt;Guild Life:A Lecture&lt;/b&gt;Matt Galas' />
                </td>
                <td>
                    <b>Guild Life:<br>A Lecture</b><br>Matt Galas<br><input type='radio' name='schedule[9:00am - 10:00am : Sunday March 18th]' value='&lt;b&gt;Guild Life:A Lecture&lt;/b&gt;Matt Galas' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[9:00am - 10:00am : Sunday March 18th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 10:00am - 11:45pm</font></b><br><input type='radio' name='schedule[10:00am - 11:45pm : Sunday March 18th]' value='10:00am - 11:45pm' />
                </td>
                <td>
                    <b>Entering and Controlling<br>The Krieg</b><br>Jean Chandler/Christian Trosclair<br><input type='radio' name='schedule[10:00am - 11:45pm : Sunday March 18th]' value='&lt;b&gt;Entering and ControllingThe Krieg&lt;/b&gt;Jean Chandler/Christian Trosclair' />
                </td>
                <td>
                    <b>Italian Sabre<br></b>Bob McPherson<br><br><input type='radio' name='schedule[10:00am - 11:45pm : Sunday March 18th]' value='&lt;b&gt;Italian Sabre&lt;/b&gt;Bob McPherson' />
                </td>
                <td>
                    <b>Fiore's Nine<br>Blocks</b><br>Brian Stokes<br><br><input type='radio' name='schedule[10:00am - 11:45pm : Sunday March 18th]' value='&lt;b&gt;Fiore&#039;s NineBlocks&lt;/b&gt;Brian Stokes' />
                </td>
                <td>
                    <b>Wrestling From<br>Wallertstein</b><br>Jay Vail<br><input type='radio' name='schedule[10:00am - 11:45pm : Sunday March 18th]' value='&lt;b&gt;Wrestling FromWallertstein&lt;/b&gt;Jay Vail' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[10:00am - 11:45pm : Sunday March 18th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 11:45pm - 1:00pm</font></b><br><input type='radio' name='schedule[11:45pm - 1:00pm : Sunday March 18th]' value='11:45pm - 1:00pm' />
                </td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    Lunch</td>
                <td>
                    None<br><input type='radio' name='schedule[11:45pm - 1:00pm : Sunday March 18th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 1:00pm - 2:45pm</font></b><br><input type='radio' name='schedule[1:00pm - 2:45pm : Sunday March 18th]' value='1:00pm - 2:45pm' />
                </td>
                <td>
                    <b>Hammertertz Forum<br>Dussack Tournament</b><br><br><input type='radio' name='schedule[1:00pm - 2:45pm : Sunday March 18th]' value='&lt;b&gt;Hammertertz ForumDussack Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Hammertertz Forum<br>Dussack Tournament</b><br><br><input type='radio' name='schedule[1:00pm - 2:45pm : Sunday March 18th]' value='&lt;b&gt;Hammertertz ForumDussack Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>Hammertertz Forum<br>Dussack Tournament</b><br><br><input type='radio' name='schedule[1:00pm - 2:45pm : Sunday March 18th]' value='&lt;b&gt;Hammertertz ForumDussack Tournament&lt;/b&gt;' />
                </td>
                <td>
                    <b>TBD</b><br>TBD<br><input type='radio' name='schedule[1:00pm - 2:45pm : Sunday March 18th]' value='&lt;b&gt;TBD&lt;/b&gt;TBD' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[1:00pm - 2:45pm : Sunday March 18th]' value='None' CHECKED/>
                </td>
            </tr>
            <tr class='list'>
                <td>
                    <b><font class='col1'> 3:00pm - 4:45pm</font></b><br><input type='radio' name='schedule[3:00pm - 4:45pm : Sunday March 18th]' value='3:00pm - 4:45pm' />
                </td>
                <td>
                    <b>Secret Classes</b><br>?<br><input type='radio' name='schedule[3:00pm - 4:45pm : Sunday March 18th]' value='&lt;b&gt;Secret Classes&lt;/b&gt;?' />
                </td>
                <td>
                    <b>Secret Classes</b><br>?<br><input type='radio' name='schedule[3:00pm - 4:45pm : Sunday March 18th]' value='&lt;b&gt;Secret Classes&lt;/b&gt;?' />
                </td>
                <td>
                    <b>Secret Classes</b><br>?<br><input type='radio' name='schedule[3:00pm - 4:45pm : Sunday March 18th]' value='&lt;b&gt;Secret Classes&lt;/b&gt;?' />
                </td>
                <td>
                    <b>Secret Classes</b><br>?<br><input type='radio' name='schedule[3:00pm - 4:45pm : Sunday March 18th]' value='&lt;b&gt;Secret Classes&lt;/b&gt;?' />
                </td>
                <td>
                    None<br><input type='radio' name='schedule[3:00pm - 4:45pm : Sunday March 18th]' value='None' CHECKED/>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" class="button-small" name="next" value="Next" />
        <input type="submit" class="button-small" name="cancel" value="Cancel" />

        </form>
        </div>

    </body>
</html>