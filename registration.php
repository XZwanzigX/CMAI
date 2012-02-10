<html>
    <head>
        <title>Chivalric Martial Arts International Symposium : Registration</title>
        <link rel="stylesheet" href="css/structure.css">
        <link rel="stylesheet" href="css/menuStructure.css">
        <link rel="stylesheet" href="css/scheduleStyles.css">
        <link rel="stylesheet" href="css/textStyles.css">
        <link rel="stylesheet" href="css/formStyles.css">

        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#theForm").validate();
            });
        </script>
    </head>
    <body>
        <?php include('includes/menu.php');?>
        <div class="registration-text-pane">
            <form id="theForm" method="post" enctype="multipart/form-data" action="includes/registrationProcess.php">
            <p>
                <span class="section-heading">Contact Information</span>
            </p>

            <!-- Name -->
            <p class="entry">
                    <span class="field-label">
                        First Name<span class="red-note">*</span></span>
                    <span class="field">
                        <input type="text" name="first_name" size="50" maxlength="75" class="required"/>
                    </span>
            </p>

            <p class="entry">
                    <span class="field-label">
                        Last Name<span class="red-note">*</span></span>
                    <span class="field">
                        <input type="text" name="last_name" size="50" maxlength="75"  class="required"/>
                    </span>
            </p>
            <!-- Email -->
            <p class="entry">
                    <span class="field-label">
                        E-mail<span class="red-note">*</span></span>
                    <span class="field">
                        <input type="text" name="email" size="50" maxlength="75"  class="required email"/>
                    </span>
            </p>

            <!-- City -->
            <p class="entry">
                <span class="field-label">
                    City<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="city"  class="required"/>
                </span>
            </p>

            <!-- State -->
            <p class="entry">
                <span class="field-label">
                    State<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="state" size="4" maxlength="10"  class="required"/>
                </span>
            </p>

            <!-- Zip Code -->
            <p class="entry">
                <span class="field-label">
                    Zip Code<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="zip" class="required"/>
                </span>
            </p>

            <!-- Country -->
            <p class="entry">
                <span class="field-label">
                    Country<span class="red-note">*</span></span>
                <span class="field">
                    <select size="1" id="Country" name="country" class="required">
                        <option value="">Select One</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="">----------</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaidjan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia-Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TP">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="CS">Former Czechoslovakia</option>
                        <option value="SU">Former USSR</option>
                        <option value="FR">France</option>
                        <option value="FX">France (European Territory)</option>
                        <option value="GF">French Guyana</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GB">Great Britain</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe (French)</option>
                        <option value="GU">Guam (USA)</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and McDonald Islands</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="INT">International</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="CI">Ivory Coast (Cote D&#39;Ivoire)</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique (French)</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldavia</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NT">Neutral Zone</option>
                        <option value="NC">New Caledonia (French)</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="KP">North Korea</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn Island</option>
                        <option value="PL">Poland</option>
                        <option value="PF">Polynesia (French)</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion (French)</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="GS">S. Georgia & S. Sandwich Isls.</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts & Nevis Anguilla</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="ST">Saint Tome (Sao Tome) and Principe</option>
                        <option value="VC">Saint Vincent & Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovak Republic</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="KR">South Korea</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TJ">Tadjikistan</option>
                        <option value="TW">Taiwan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="UY">Uruguay</option>
                        <option value="MIL">USA Military</option>
                        <option value="UM">USA Minor Outlying Islands</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (USA)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="YU">Yugoslavia</option>
                        <option value="ZR">Zaire</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </span>
            </p>

            <!-- Address -->
            <p class="entry">
                <span class="field-label">
                    Address<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="address" class="required"/>
                </span>
            </p>

            <!-- Phone Number -->
            <p class="entry">
                <span class="field-label">
                    Phone Number<span class="red-note">*</span></span>
                <span class="field">
                    <input type="text" name="phone" class="required"/>
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
                    <input type="text" name="how_heard_text" size="30" maxlength="50" />
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
                    <input type="text" name="club" size="50" maxlength="75" />
                </span>
            </p>

            <!-- Attended Before  -->
            <p class="entry">
                <span class="field-label">
                    Have you attended WMA / HEMA events <br/> before?</span>
                <span class="field">
                    <input type="radio" name="attended" value="0" /> No
                    <input type="radio" name="attended" value="1" /> Yes.  If so, which ones?

                    <input type="text" name="attended_type" size="30" maxlength="50" />
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
                    <input type="radio" name="insurance" value="0" class="required"/> No
                    <input type="radio" name="insurance" value="1" class="required"/> Yes
                </span>
            </p>

            <!-- Medical Condition -->
            <p class="entry">
                <span class="field-label">
                    Do you have any medical, mental, or <br/> psychological conditions that could <br/> impair or affect your ability to <br/> participate in this event or <br/> effect others you may work with?<span class="red-note">*</span></span>
                <span class="field">
                    <input type="radio" name="condition" value="0"  class="required"/> No
                    <input type="radio" name="condition" value="1"  class="required"/> Yes.  If so, please explain:

                    <input type="text" name="condition_type" size="30" maxlength="256" />
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