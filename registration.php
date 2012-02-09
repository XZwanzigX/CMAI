<html>
    <head>
        <title>Chivalric Martial Arts International Symposium : Registration</title>
        <link rel="stylesheet" href="css/structure.css">
        <link rel="stylesheet" href="css/menuStructure.css">
        <link rel="stylesheet" href="css/scheduleStyles.css">
        <link rel="stylesheet" href="css/textStyles.css">
        <link rel="stylesheet" href="css/formStyles.css">
    </head>
    <body>
        <?php include('includes/menu.php');?>
        <div class="registration-text-pane">
            <form name="theForm" method="post" enctype="multipart/form-data" action="includes/registrationProcess.php">
            <p>
                <span class="section-heading">Contact Information</span>
            </p>

            <!-- Name -->
            <p class="entry">
                    <span class="field-label">
                        First Name<span class="red-note">*</span></span>
                    <span class="field">
                        <input type="text" name="first_name" size="50" maxlength="75" value="" />
                    </span>
            </p>

            <p class="entry">
                    <span class="field-label">
                        Last Name<span class="red-note">*</span></span>
                    <span class="field">
                        <input type="text" name="last_name" size="50" maxlength="75" value="" />
                    </span>
            </p>
            <!-- Email -->
            <p class="entry">
                    <span class="field-label">
                        E-mail<span class="red-note">*</span></span>
                    <span class="field">
                        <input type="text" name="email" size="50" maxlength="75" value="" />
                    </span>
            </p>

            <!-- City -->
            <p class="entry">
                <span class="field-label">
                    City<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="city" value="" />
                </span>
            </p>

            <!-- State -->
            <p class="entry">
                <span class="field-label">
                    State<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="state" size="4" maxlength="10" value="" />
                </span>
            </p>

            <!-- Zip Code -->
            <p class="entry">
                <span class="field-label">
                    Zip Code<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="zip" value="" />
                </span>
            </p>

            <!-- Country -->
            <p class="entry">
                <span class="field-label">
                    Country<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="country" value="" />
                </span>
            </p>

            <!-- Address -->
            <p class="entry">
                <span class="field-label">
                    Address<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="address" value="" />
                </span>
            </p>

            <!-- Phone Number -->
            <p class="entry">
                <span class="field-label">
                    Phone Number<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="phone" value="" />
                </span>
            </p>

            <p>
                <span class="section-heading">Questionnaire</span>
            </p>

            <!-- Payment Type -->
            <p class="entry">
                <span class="field-label">
                    Method of Payment<span class="red-note">*</span></span>
                <span class="field">
                    <input type="radio" name="payment" value="check" /> Check
                    <input type="radio" name="payment" value="paypal" CHECKED/> Paypal
                </span>
            </p>

            <!-- Heard About -->
            <p class="entry">
                <span class="field-label">
                    How did you hear about this event?</span>
                <span class="field">
                    <select  name='how_heard'>
                        <option value='' selected >Choose One...</option>
                        <option value='Friend'  >Friend</option>
                        <option value='Link'  >Link</option>
                        <option value='Web'  >Web Search</option>
                        <option value='Flyer'  >Flyer</option>
                        <option value='Event'  >Event</option>
                        <option value='Other'  >Other:</option>
                    </select>
                    <input type="text" name="how_heard_text" size="30" maxlength="50" value="" />
                </span>
            </p>

            <!-- Experience -->
            <p class="entry">
                <span class="field-label">
                    Please rate your martial arts experience <br/> on a scale from 1 to 5: </span>
                <span class="field">
                    &nbsp;&nbsp;No Experience [<b>1</b>]<input type="radio" name="experience" value="1" />
                    <input type="radio" name="experience" value="2" />
                    <input type="radio" name="experience" value="3" />
                    <input type="radio" name="experience" value="4" />
                    <input type="radio" name="experience" value="5" />[<b>5</b>] Experienced Instructor
                </span>
            </p>

            <!-- Club -->
            <p class="entry">
                <span class="field-label">
                    Name your club/school if any </span>
                <span class="field">
                    <input type="text" name="club" size="50" maxlength="75" value="" />
                </span>
            </p>

            <!-- Attended Before  -->
            <p class="entry">
                <span class="field-label">
                    Have you attended WMA / HEMA events <br/> before?</span>
                <span class="field">
                    <input type="radio" name="attended" value="0" /> No
                    <input type="radio" name="attended" value="1" /> Yes.  If so, which ones?

                    <input type="text" name="attended_type" size="30" maxlength="50" value="" />
                </span>
            </p>

            <!-- Reasons -->
            <p class="entry">
                <span class="field-label">
                    What are your primary reasons for <br/> attending this event? </span>
                <span class="field">
                    <input type='checkbox' name='reasons_instructors' value='Instructors'  />Instructors<br/>
                    <input type='checkbox' name='reasons_topics' value='Topic Areas Covered'  />Topic Areas Covered<br/>
                    <input type='checkbox' name='reasons_social' value='Socialization/Camaraderie'  />Socialization/Camaraderie<br/>
                    <input type='checkbox' name='reasons_tournament' value='Tournament/Competition'  />Tournament/Competition<br/>
                    <input type='checkbox' name='reasons_freeplay' value='Possibility for free-play/sparring/fencing'  />Possibility for free-play/sparring/fencing<br/>
                    <input type='checkbox' name='reasons_network' value='Network Opportunities'  />Network Opportunities<br/>
                    <input type='checkbox' name='reasons_location' value='Location'  />Location<br/>
                </span>
            </p>

            <!-- T-shirt -->
            <p class="entry">
                <span class="field-label">
                    What size t-shirt do you wear?</span>
                <span class="field">
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
                </span>
            </p>

            <!-- Medical Insurance -->
            <p class="entry">
                <span class="field-label">
                    Do you have medical insurance?<span class="red-note">*</span></span>
                <span class="field">
                    <input type="radio" name="insurance" value="0" /> No
                    <input type="radio" name="insurance" value="1" /> Yes
                </span>
            </p>

            <!-- Medical Condition -->
            <p class="entry">
                <span class="field-label">
                    Do you have any medical, mental, or <br/> psychological conditions that could <br/> impair or affect your ability to <br/> participate in this event or <br/> effect others you may work with?<span class="red-note">*</span></span>
                <span class="field">
                    <input type="radio" name="condition" value="0" /> No
                    <input type="radio" name="condition" value="1" /> Yes.  If so, please explain:

                    <input type="text" name="condition_type" size="30" maxlength="256" value="" />
                </span>
            </p>

            <!-- Longsword Tournament -->
            <p class="entry">
                <span class="field-label">
                    Do you want to participate in the <br/> longsword tournament?</span>
                <span class="field">
                    <input type="radio" name="longsword" value="0" /> No
                    <input type="radio" name="longsword" value="1" /> Yes
                </span>
            </p>

            <p>
                <span class="section-heading">Please make your class selections below:</span>
            </p>

            <br>
            <table class="schedule-table">
                <tr>
                    <td class="schedule-day" colspan="5">Monday 4/30</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="eq-field">Equestrian</td>
                    <td class="harness-field">Harness Focus Field</td>
                    <td class="foot-field-2">Foot Two</td>
                    <td class="classroom">Classroom</td>
                </tr>
                <tr>
                    <td class="time">9:00a</td>
                    <td colspan="4">Introduction to CMAI Horses, armor, weapons and the rules &mdash;All instructors</td>
                </tr>
                <tr>
                    <td class="time">10:45a<br/><input type="radio" name="m_1045" value="-1" checked="true"/></td>
                    <td><input type="radio" name="m_1045" value="1"/>Jousting 1: The Rider's Seat - Luke Binks</td>
                    <td><input type="radio" name="m_1045" value="20"/>Basic movement focus</td>
                    <td><input type="radio" name="m_1045" value="39"/>Great stick &mdash; Ken Mondeshein</td>
                    <td><input type="radio" name="m_1045" value="58"/>Concepts of Modern Chivalry- Randall Parr</td>
                </tr>
                <tr>
                    <td class="lunch">12:30p</td>
                    <td class="lunch" colspan="4">Lunch</td>
                </tr>
                <tr>
                    <td class="time">1:30p<br/><input type="radio" name="m_1330" value="-1" checked="true"/></td>
                    <td><input type="radio" name="m_1330" value="2"/>Beginner Riding 1 - Tina Walsh</td>
                    <td rowspan="2"><input type="radio" name="m_1330" value="21"/>Body awareness, Sensitivity, Falling in armor, Wrestling</td>
                    <td><input type="radio" name="m_1330" value="40"/>Taking control of the dagger fight- Bob Charrette</td>
                    <td><input type="radio" name="m_1330" value="59"/>An Introduction to the International Jousting League - Fred Piraux</td>
                </tr>
                <tr>
                    <td class="time">3:15p<br/><input type="radio" name="m_1515" value="-1" checked="true"/></td>
                    <td><input type="radio" name="m_1515" value="3"/>Jousting 2: Weapons Handling - Luke Binks</td>
                    <td><input type="radio" name="m_1515" value="41"/>"God, the Art, myself, and my sword": Fiore de Liberi's Unarmoured Combat -- Sean Hayes</td>
                    <td><input type="radio" name="m_1515" value="60"/>A Tour through Il Fior di Battaglia's structure - Bob Charrette</td>
                </tr>
                <tr>
                    <td class="time">5:00p<br/><input type="radio" name="m_1700" value="-1" checked="true"/></td>
                    <td><input type="radio" name="m_1700" value="4"/>Mounted Combat 1: Rolling and Falling from Horseback - Theresa Wendland</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>

            <table class="schedule-table">
                <tr>
                    <td class="schedule-day" colspan="5">Tuesday 5/1</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="eq-field">Equestrian</td>
                    <td class="harness-field">Harness Focus Field</td>
                    <td class="foot-field-2">Foot Two</td>
                    <td class="classroom">Classroom</td>
                </tr>
                <tr>
                    <td class="time">9:00a<br/><input type="radio" name="t_0900" value="-1" checked="true"/></td>
                    <td><input type="radio" name="t_0900" value="5"/>Beginner Riding 2 - Tina Walsh</td>
                    <td><input type="radio" name="t_0900" value="24"/>Beginning Weapons Focus</td>
                    <td><input type="radio" name="t_0900" value="43"/>Selected sword techniques of Gladiatoria  I- Dierk Hagedorn</td>
                    <td><input type="radio" name="t_0900" value="62"/>How to Get Started in Competitive Jousting - Fred Piraux</td>
                </tr>
                <tr>
                    <td class="time">10:45a<br/><input type="radio" name="t_1045" value="-1" checked="true"/></td>
                    <td><input type="radio" name="t_1045" value="6"/> 3: Riding in Armour - Luke Binks</td>
                    <td><input type="radio" name="t_1045" value="25"/>Dagger , Sword, Axe, and Spear</td>
                    <td><input type="radio" name="t_1045" value="44"/>Two-Ubiquitous Throws of Armizare-- Greg Mele</td>
                    <td><input type="radio" name="t_1045" value="63"/>&nbsp;</td>
                </tr>
                <tr>
                    <td class="lunch">12:30p</td>
                    <td class="lunch" colspan="4">Lunch</td>
                </tr>
                <tr>
                    <td class="time">1:30p<br/><input type="radio" name="t_1330" value="-1" checked="true"/></td>
                    <td><input type="radio" name="t_1330" value="7"/>Beginner Riding 3 - Tina Walsh</td>
                    <td rowspan="2"><input type="radio" name="t_1330" value="26"/>Dagger , Sword, Axe, and Spear continued</td>
                    <td><input type="radio" name="t_1330" value="45"/>Fundamentals of the system - footwork, guards, blows and parries. aka "Pollaxe for Dummies" -- Jason Smth</td>
                    <td><input type="radio" name="t_1330" value="64"/>War, Tournament, Knighthood, and Society- Ken Mondeshien</td>
                </tr>
                <tr>
                    <td class="time">3:15p<br/><input type="radio" name="t_1515" value="-1" checked="true"/></td>
                    <td><input type="radio" name="t_1515" value="8"/>Jousting 4: Weapons Handling in Armour - Luke Binks</td>
                    <td><input type="radio" name="t_1515" value="46"/>Selected Mordschlag techniques of Gladiatoria II- Dierk Hagedorn</td>
                    <td><input type="radio" name="t_1515" value="65"/>Building from Interpretation to Curriculum - Sean Hayes</td>
                </tr>
                <tr>
                    <td class="time">5:00p<br/><input type="radio" name="t_1700" value="-1" checked="true"/></td>
                    <td><input type="radio" name="t_1700" value="9"/>Mounted Combat 2: Riding for Combat</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>

            <table class="schedule-table">
                <tr>
                    <td class="schedule-day" colspan="5">Wednesday 5/2</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="eq-field">Equestrian</td>
                    <td class="harness-field">Harness Focus Field</td>
                    <td class="foot-field-2">Foot Two</td>
                    <td class="classroom">Classroom</td>
                </tr>
                <tr>
                    <td class="time">9:00a<br/><input type="radio" name="w_0900" value="-1" checked="true"/></td>
                    <td><input type="radio" name="w_0900" value="10"/>Beginner Riding 4 - Tina Walsh</td>
                    <td><input type="radio" name="w_0900" value="29"/>Coached Combat in Harness</td>
                    <td><input type="radio" name="w_0900" value="48"/>Hooks, disarms and binds: Intricacies of the Knightly swiss army knife -- Jason Smith </td>
                    <td><input type="radio" name="w_0900" value="67"/>List Field Operation - Fred Piraux</td>
                </tr>
                <tr>
                    <td class="time">10:45a<br/><input type="radio" name="w_1045" value="-1" checked="true"/></td>
                    <td><input type="radio" name="w_1045" value="11"/>Jousting 5: The Joust</td>
                    <td><input type="radio" name="w_1045" value="30"/>Coached Combat in Harness</td>
                    <td><input type="radio" name="w_1045" value="49"/>Sword in Armour: Fighting at the Full Sword and the Half Sword-- Sean Hayes</td>
                    <td><input type="radio" name="w_1045" value="68"/>&nbsp;</td>
                </tr>
                <tr>
                    <td class="lunch">12:30p</td>
                    <td class="lunch" colspan="4">Lunch</td>
                </tr>
                <tr>
                    <td class="time">1:30p<br/><input type="radio" name="w_1330" value="-1" checked="true"/></td>
                    <td>Lysts on the Lake Joust Practice 1a</td>
                    <td><input type="radio" name="w_1330" value="31"/>Coached Combat in Harness</td>
                    <td><input type="radio" name="w_1330" value="50"/>Selected dagger techniques of Gladiatoria III - Dierk Hagedorn</td>
                    <td><input type="radio" name="w_1330" value="69"/>Historical European Martial Arts: A Historical Overview-Ken Mondeshien</td>
                </tr>
                <tr>
                    <td class="time">3:15p<br/><input type="radio" name="w_1515" value="-1" checked="true"/></td>
                    <td>Lysts on the Lake Joust Practice 1b</td>
                    <td><input type="radio" name="w_1515" value="32"/>Coached Combat in Harness</td>
                    <td><input type="radio" name="w_1515" value="51"/>The sinister pollaxe: Playing from the left in Le Jeu -- Jason Smith</td>
                    <td><input type="radio" name="w_1515" value="70"/>The Condottiere- Greg Mele</td>
                </tr>
                <tr>
                    <td class="time">5:00p<br/><input type="radio" name="w_1700" value="-1" checked="true"/></td>
                    <td><input type="radio" name="w_1700" value="14"/>Mounted Combat 3: Introduction to Fiore's Sword on Horseback -  Theresa Wendland</td>
                    <td><input type="radio" name="w_1700" value="33"/>&nbsp;</td>
                    <td><input type="radio" name="w_1700" value="52"/>&nbsp;</td>
                    <td><input type="radio" name="w_1700" value="71"/>&nbsp;</td>
                </tr>
            </table>

            <table class="schedule-table">
                <tr>
                    <td class="schedule-day" colspan="5">Thursday 5/3</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="eq-field">Equestrian</td>
                    <td class="harness-field">Harness Focus Field</td>
                    <td class="foot-field-2">Foot Two</td>
                    <td class="classroom">Classroom</td>
                </tr>
                <tr>
                    <td class="time">9:00a<br/><input type="radio" name="th_0900" value="-1" checked="true"/></td>
                    <td>Lysts on the Lake Joust Practice 2a</td>
                    <td rowspan="2"><input type="radio" name="th_0900" value="34"/>Harness repair</td>
                    <td><input type="radio" name="th_0900" value="53"/>Selected sword techniques of Gladiatoria IV - Dierk Hagedorn</td>
                    <td><input type="radio" name="th_0900" value="72"/>&nbsp;</td>
                </tr>
                <tr>
                    <td class="time">10:45a<br/><input type="radio" name="th_1045" value="-1" checked="true"/></td>
                    <td>Lysts on the Lake Joust Practice 2b</td>
                    <td><input type="radio" name="th_1045" value="54"/>Train what you Fight: from Cutting Drill to Solo Form to Partnered Exercise --Greg Mele</td>
                    <td><input type="radio" name="th_1045" value="73"/>The Judicial Duel in Italy - Tom Leoni</td>
                </tr>
                <tr>
                    <td class="lunch">12:30p</td>
                    <td class="lunch" colspan="4">Lunch</td>
                </tr>
                <tr>
                    <td class="time">1:30p<br/><input type="radio" name="th_1330" value="-1" checked="true"/></td>
                    <td rowspan="2"><input type="radio" name="th_1330" value="17"/>Beginner Skill at Arms</td>
                    <td rowspan="2"><input type="radio" name="th_1330" value="36"/>Discussion of Rules for Deed at Arms</td>
                    <td><input type="radio" name="th_1330" value="55"/>&nbsp;</td>
                    <td><input type="radio" name="th_1330" value="74"/>&nbsp;</td>
                </tr>
                <tr>
                    <td class="time">3:15p<br/><input type="radio" name="th_1515" value="-1" checked="true"/></td>
                    <td><input type="radio" name="th_1515" value="56"/>&nbsp;</td>
                    <td><input type="radio" name="th_1515" value="75"/>&nbsp;</td>
                </tr>
                <tr>
                    <td class="time">5:00p<br/><input type="radio" name="th_1700" value="-1" checked="true"/></td>
                    <td><input type="radio" name="th_1700" value="19"/>Tirocinium</td>
                    <td><input type="radio" name="th_1700" value="38"/>&nbsp;</td>
                    <td><input type="radio" name="th_1700" value="57"/>&nbsp;</td>
                    <td><input type="radio" name="th_1700" value="76"/>&nbsp;</td>
                </tr>
            </table>
            <input type="submit" class="button-small" name="register" value="Register" />
        </form>
        </div>

    </body>
</html>