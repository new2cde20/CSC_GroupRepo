<?php
$reciverEmail = ''; // My email was here

if (!empty($_POST))
{
    $error = '';
    extract($_POST);
    $to = $reciverEmail;
    $subject = "Volunteer Opportunities";

    $message = "";
    $message .= "<h1>Volunteer Registration Data</h1>";
    if (!empty($Interests))
    {
        $Interests = implode(',', $Interests);
        $message .= "<label>Areas of Interest:</label> $Interests<br/>";
    }

    //Availability
    if (!empty($Availability))
    {
        $Availability = implode(',', $Availability);
        $message .= "<label>Availability:</label> $Availability<br/>";
    }
    
    //name
    if (!empty($name))
    {
        $message .= "<label>Name:</label> $name<br/>";
    }
    //address
    if (!empty($address))
    {
        $message .= "<label>Address:</label> $address<br/>";
    }
    //city
    if (!empty($city))
    {
        $message .= "<label>City:</label> $city<br/>";
    }
    //state
    if (!empty($state))
    {
        $message .= "<label>State:</label> $state<br/>";
    }

    //zip
    if (!empty($zip))
    {
        $message .= "<label>Zip:</label> $zip<br/>";
    }

    //email
    if (!empty($email))
    {
        $message .= "<label>Email:</label> $email<br/>";
    }

    //phone
    if (!empty($phone))
    {
        $message .= "<label>Phone:</label> $phone<br/>";
    }

    //contactYou
    if (!empty($contactYou))
    {
        $message .= "<label>How would you prefer for us to contact you?:</label> $contactYou<br/>";
    }

    //volunteerLoc
    if (!empty($volunteerLoc))
    {
        $message .= "<label>Which location would you prefer to volunteer?:</label> $volunteerLoc<br/>";
    }

    //felony
    if (!empty($felony))
    {
        $message .= "<label>Have you ever been convicted of a felony?:</label> $felony<br/>";
    }

    //emp_jobtitle
    if (!empty($emp_jobtitle))
    {
        $message .= "<label>JobTitle:</label> $emp_jobtitle<br/>";
    }

    //emp_employer
    if (!empty($emp_employer))
    {
        $message .= "<label>Employer:</label> $emp_employer<br/>";
    }

    //emp_address
    if (!empty($emp_address))
    {
        $message .= "<label>Address:</label> $emp_address<br/>";
    }

    //emp_city
    if (!empty($emp_city))
    {
        $message .= "<label>City:</label> $emp_city<br/>";
    }

    //emp_state
    if (!empty($emp_state))
    {
        $message .= "<label>State:</label> $emp_state<br/>";
    }

    //emp_zip
    if (!empty($emp_zip))
    {
        $message .= "<label>Zip:</label> $emp_zip<br/>";
    }

    //emp_caregiver
    if (!empty($emp_caregiver))
    {
        $message .= "<label>Are you retired or a full-time caregiver?:</label> $emp_caregiver<br/>";
    }

    //edu_level
    if (!empty($edu_level))
    {
        $message .= "<label>Please indicate your highest level of education:</label> $edu_level<br/>";
    }

    //edu_school_name
    if (!empty($edu_school_name))
    {
        $message .= "<label>Name of School:</label> $edu_school_name<br/>";
    }

    //edu_certifications
    if (!empty($edu_certifications))
    {
        $message .= "<label>Please list any certifications or licenses you possess:</label> $edu_certifications<br/>";
    }

    //app_how_hear
    if (!empty($app_how_hear))
    {
        $message .= "<label>How did you hear of the Cancer Support Center?:</label> $app_how_hear<br/>";
    }

    //[app_participation] => kljlk
    if (!empty($app_participation))
    {
        $message .= "<label>Have you participated in The Center’s programs? If yes, please describe:</label> $app_participation<br/>";
    }
    //[app_why_volunteer] => j
    if (!empty($app_why_volunteer))
    {
        $message .= "<label>Why do you want to volunteer at the Cancer Support Center?:</label> $app_why_volunteer<br/>";
    }
    //[app_volunteer_exp] => jlk
    if (!empty($app_volunteer_exp))
    {
        $message .= "<label>Do you have previous volunteer experience? If yes, please describe:</label> $app_volunteer_exp<br/>";
    }
    //[app_sign] => kkkk
    if (!empty($app_sign))
    {
        $message .= "<label>Volunteer Applicant Signature:</label> $app_sign<br/>";
    }
    //[app_sign_parent] => kkkk*/
    if (!empty($app_sign_parent))
    {
        $message .= "<label>Parent/Guardian's Signature if under 18 years old:</label> $app_sign_parent<br/>";
    }

    $header = "From:$email \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail ($to,$subject,$message,$header);

    if( $retval == true ) {
        $success = "Message sent successfully...";
    }else {
        $error = "Message could not be sent..., Try again.";
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Volunteer Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Volunteer Opportunities</title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
    </head>
    <body>

        <main-header></main-header>
        <div class = "center-text">
        <?php
            if (!empty($error))
            {
                echo '<label class="error message">'.$error.'</label>';
            } 
            if (!empty($success))
            {
                echo '<label class="success message">'.$success.'</label>';
            }
        ?>
            <h1 style= "color:#008998;">Volunteer Opportunities</h1>
            <h2 style= "color:#008998;">Volunteer at the Center</h2>
            <p>The Center relies on the skills and talents of our volunteers in order to maintain
                our quality programs and services. We welcome volunteers to assist with a wide
                range of activities. The following volunteer opportunities include:
        </div>
        <br/>
        <ul>
            <li>Front desk greeter</li>
            <li>Outreach Ambassador</li>
            <li>Teen Ambassador (requires parent consent)</li>
            <li>Massage/Reiki therapist</li>
            <li>Yoga instructor</li>
            <li>Zumba or Fitness instructor</li>
            <li>Program/Education presenter</li>
            <li>Mailing helper</li>
            <li>Painter/Carpenter</li>
        </ul>
        <div class = "volunteer-images">
            <img src="css/table_volunteers.jpeg" alt="volunteers at table">
            <img src="css/phone_greeter.jpeg" alt="receptionist on phone">
        </div>
        <br/>
        <div class = "center-text">
        <p>To learn more about volunteer opportunities, contact
            <a href="mailto:cturnquest@cancersupportcenter.org">Cynthia Turnquest</a>,
            Director of Outreach & Strategic Partners.</p>
        </div>
        <br/>
        <div class = "center-text">
            <h2 style= "color:#008998;">Volunteer at Special Events</h2>
            <p>The Center has four signature special events - the Gala, the Golf Outing, and two
                Walks of Hope. If you are looking for a meaningful way to support The Center,
                please consider these volunteer opportunities:</p>
        </div>
        <br/>
        <ul>
            <li>Event committee member</li>
            <li>Marketing/Promotions assistant</li>
            <li>Graphic designer</li>
            <li>Event day volunteer</li>
        </ul>
        <div class = "volunteer-images">
            <img src="css/kids_and_elder.jpeg" alt="elders and children">
            <img src="css/two_lady_volunteers.jpeg" alt="two lady volunteers">
        </div>
        <div class = "center-text">
            <p>To learn more about special events volunteer opportunities, contact
                <a href="mailto:anellett@cancersupportcenter.org">Amanda Nellett</a>,
                Special Events Coordinator.
            </p>
        </div>
        <br/>
        <div class = "center-text">
            <h2 style= "color:#008998;">Join Our Ancillary Boards</h2>
            <p>The Center benefits from the efforts of numerous ancillary boards. These board
                members act as ambassadors for The Center as well as organize various fundraising
                events throughout the year.
            </p>
        </div>
        <br/>
        <ul>
            <li>Women's Board</li>
            <li>Homewood Community Board</li>
            <li>Mokena Community Board</li>
            <li>Junior Board</li>
        </ul>
        <div class = "volunteer-images">
            <img src="css/halloween_volunteers.jpeg" alt="halloween volunteers">
            <img src="css/springwalk_volunteers.jpeg" alt="Spring walk volunteers">
        </div>
        <br/>
        <div class = "center-text">
            <p>To learn more about volunteer opportunities, contact
                <a href="mailto:cturnquest@cancersupportcenter.org">Cynthia Turnquest</a>,
                Director of Outreach & Strategic Partners.</p>
        </div>
        <br/>        
        <div class = "center-text">
            <h2 style= "color:#008998;">Volunteer at the Village Door Consignment Shop</h2>
            <p>The Village Door provides a unique shopping experience for those in search
                of fine furniture, antiques, collectibles, and much more. All proceeds from
                the purchases at The Village Door benefit The Center. New volunteers are welcome
                and no sales experience is necessary.
            </p>
        </div>
        <div class = "volunteer-images">
            <img src="css/consignment_shop.jpeg" alt="Village Door Consignment Shop">
            <img src="css/volunteer_appreciation_group.jpeg" alt="Volunteers at appreciation event">
        </div>
        <br/>
        <div class = "center-text">
            <p>To learn more about volunteer opportunities, contact
                <a href="mailto:cturnquest@cancersupportcenter.org">Cynthia Turnquest</a>,
                Director of Outreach & Strategic Partners.<br/><br/>
                If you are interested in volunteering at The Village Door consignment shop, please call
                <a href="tel:+1-708-798-8665">+1 (708) 798-8665</a> for additional information. 
                All proceeds benefit the free programs provided by The Cancer Support Center.
            </p>
        </div>

        <form action="" id="volunteer-reg" class="register" method="post">
            <div class = "volunteer-form-section-1">
                <h1 style="color:#1e5477;">Volunteer Registration</h1>
                <fieldset>
                    <legend>Areas of Interest</legend>
                    <ul class = "interest-checkboxes">
                        <li>
                            <input type="checkbox" id="field1" name="Interests[]" value="Greeter/Phone" />
                            <label for="field1">Greeter/Phone</label><br/>
                            <input type="checkbox" id="field2" name="Interests[]" value="Mailings" />
                            <label for="field2">Mailings</label><br/>
                            <input type="checkbox" id="field3" name="Interests[]" value="Data Entry" />
                            <label for="field3">Data Entry</label><br/>
                            <input type="checkbox" id="field4" name="Interests[]" value="Gardening" />
                            <label for="field4">Gardening</label><br/>
                            <input type="checkbox" id="field5" name="Interests[]" value="Light Maintenance" />
                            <label for="field5">Light Maintenance</label><br/>

                            <input type="checkbox" id="field6" name="Interests[]" value="Massage Therapist" />
                            <label for="field6">Massage Therapist</label><br/>
                            <input type="checkbox" id="field7" name="Interests[]" value="Reiki Facilitator" />
                            <label for="field7">Reiki Facilitator</label><br/>
                            <input type="checkbox" id="field8" name="Interests[]" value="Golf Outing" />
                            <label for="field8">Golf Outing</label><br/>
                            <input type="checkbox" id="field9" name="Interests[]" value="Walk-of-Hope" />
                            <label for="field9">Walk-of-Hope</label><br/>
                            <input type="checkbox" id="field10" name="Interests[]" value="Community Outreach" />
                            <label for="field10">Community Outreach</label><br/>

                            <input type="checkbox" id="field11" name="Interests[]" value="Program Assistant" />
                            <label for="field11">Program Assistant</label><br/>
                            <input type="checkbox" id="field12" name="Interests[]" value="Homewood Community Board" />
                            <label for="field12">Homewood Community Board</label><br/>
                            <input type="checkbox" id="field13" name="Interests[]" value="Mokena Community Board" />
                            <label for="field13">Mokena Community Board</label><br/>
                            <input type="checkbox" id="field14" name="Interests[]" value="Women's Board" />
                            <label for="field14">Women's Board</label><br/>
                            <input type="checkbox" id="field15" name="Interests[]" value="Junior Board" />
                            <label for="field15">Junior Board</label><br/>                   
                        </li>
                    </ul>
                </fieldset>
            </div>

            <div class = "volunteer-form-section-1">
                <fieldset>
                    <legend>Availability</legend>
                    <ul class = "availability-checkboxes">
                        <li>
                        <input type="checkbox" id="field1" name="Availability[]" value="Sunday Morning" />
                        <label for="field1">Sunday AM</label><br/>
                        <input type="checkbox" id="field2" name="Availability[]" value="Monday Morning" />
                        <label for="field2">Monday AM</label><br/>
                        <input type="checkbox" id="field3" name="Availability[]" value="Tuesday Morning" />
                        <label for="field3">Tuesday AM</label><br/>
                        <input type="checkbox" id="field4" name="Availability[]" value="Wednesday Morning"/>
                        <label for="field4">Wednesday AM</label><br/>
                        <input type="checkbox" id="field5" name="Availability[]" value="Thursday Morning" />
                        <label for="field5">Thursday AM</label><br/>
                        <input type="checkbox" id="field6" name="Availability[]" value="Friday Morning" />
                        <label for="field6">Friday AM</label><br/>
                        <input type="checkbox" id="field7" name="Availability[]" value="Saturday Morning" />
                        <label for="field7">Saturday AM</label><br/>

                        <input type="checkbox" id="field8" name="Availability[]" value="Sunday Afternoon" />
                        <label for="field8">Sunday Afternoon</label><br/>
                        <input type="checkbox" id="field9" name="Availability[]" value="Monday Afternoon" />
                        <label for="field9">Monday Afternoon</label><br/>
                        <input type="checkbox" id="field10" name="Availability[]" value="Tuesday Afternoon" />
                        <label for="field10">Tuesday Afternoon</label><br/>
                        <input type="checkbox" id="field11" name="Availability[]" value="Wednesday Afternoon"/>
                        <label for="field11">Wednesday Afternoon</label><br/>
                        <input type="checkbox" id="field12" name="Availability[]" value="Thursday Afternoon" />
                        <label for="field12">Thursday Afternoon</label><br/>
                        <input type="checkbox" id="field13" name="Availability[]" value="Friday Afternoon" />
                        <label for="field13">Friday Afternoon</label><br/>
                        <input type="checkbox" id="field14" name="Availability[]" value="Saturday Afternoon" />
                        <label for="field14">Saturday Afternoon</label><br/>
                        
                        <input type="checkbox" id="field15" name="Availability[]" value="Sunday Evening" />
                        <label for="field15">Sunday PM</label><br/>
                        <input type="checkbox" id="field16" name="Availability[]" value="Monday Evening" />
                        <label for="field16">Monday PM</label><br/>
                        <input type="checkbox" id="field17" name="Availability[]" value="Tuesday Evening" />
                        <label for="field17">Tuesday PM</label><br/>
                        <input type="checkbox" id="field18" name="Availability[]" value="Wednesday Evening"/>
                        <label for="field18">Wednesday PM</label><br/>
                        <input type="checkbox" id="field19" name="Availability[]" value="Thursday Evening" />
                        <label for="field19">Thursday PM</label><br/>
                        <input type="checkbox" id="field20" name="Availability[]" value="Friday Evening" />
                        <label for="field20">Friday PM</label><br/>
                        <input type="checkbox" id="field21" name="Availability[]" value="Saturday Evening" />
                        <label for="field21">Saturday PM</label><br/>             
                        </li>
                    </ul>
                </fieldset>
            </div>

            <div class = "center-text">
                <div class = "volunteer-form-section-2">
                    <p style= "color:#FF0000;">Fields with a * are required</p>
                    <fieldset>
                        <legend>Personal Information</legend>
                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="name" class="" placeholder="Name*" required />
                            </div>
                            <div class="input-group">
                                <input type="text" name="address" class="" placeholder="Address*" required />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="city" class="" placeholder="City*" required />
                            </div>
                            <div class="input-group">
                                <input type="text" name="state" class="" placeholder="State*" required />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="zip" class="" placeholder="Zip*" required />
                            </div>
                            <div class="input-group">
                                <input type="text" name="email" class="" placeholder="Email*" required />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="phone" class="" placeholder="Phone"/>
                            </div>
                            <div title="Tell us Phone or Email">
                            <div class="input-group">
                                <input type="text" name="contactYou" class="" placeholder="How would you prefer for us to contact you?" />
                            </div>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                            <div title="Answer Homewood or Mokena">
                                <input type="text" name="volunteerLoc" class="" placeholder="Which location would you prefer to volunteer?*" required/>
                            </div>
                            </div>
                            <div title="Answer Yes or No">
                            <div class="input-group">
                                <input type="text" name="felony" class="" placeholder="Have you ever been convicted of a felony?*" required />
                            </div>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class = "volunteer-form-section-2">
                    <p style= "color:#FF0000;">Fields with a * are required</p>
                    <fieldset>
                        <legend>Employment</legend>
                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="emp_jobtitle" class="" placeholder="Job Title*" required />
                            </div>
                            <div class="input-group">
                                <input type="text" name="emp_employer" class="" placeholder="Employer*" required />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="emp_address" class="" placeholder="Address*" required />
                            </div>
                            <div class="input-group">
                                <input type="text" name="emp_city" class="" placeholder="City*" required />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="emp_state" class="" placeholder="State*" required />
                            </div>
                            <div class="input-group">
                                <input type="text" name="emp_zip" class="" placeholder="Zip*" required />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                            <div title="Answer Retired, Full-time caregiver, or No">
                                <input type="text" name="emp_caregiver" class="" placeholder="Are you retired or a full-time caregiver?*" required />
                            </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            
                <div class = "volunteer-form-section-2">
                    <p style= "color:#FF0000;">Fields with a * are required</p>
                    <fieldset>
                        <legend>Education</legend>
                        <div class="input-row">
                            <div class="input-group">
                            <div title="High School Diploma, Associate's Degree, Bachelor's Degree, Master's Degree, or Doctoral Degree">
                            <input type="text" name="field1" class="field-style field-split align-left" 
                            placeholder="Please indicate your highest level of education*" required />
                            </div>
                            </div>
                            <div class="input-group">
                                <input type="text" name="edu_school_name" class="" placeholder="Name of School" />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <textarea rows="5" name="edu_certifications" class="" placeholder="Please list any certifications or licenses you possess:"></textarea>
                            </div>
                        </div>
                    </fieldset>
                </div>


                <div class = "volunteer-form-section-2">
                    <p style= "color:#FF0000;">Fields with a * are required</p>
                    <fieldset>
                        <legend>Application Questions</legend>
                        <div class="input-row">
                            <div class="input-group">
                                <textarea rows="5" name="app_how_hear" class="" placeholder="How did you hear of the Cancer Support Center?*" required></textarea>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <textarea rows="5" name="app_participation" class="" placeholder="Have you participated in The Center’s programs? If yes, please describe."></textarea>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <textarea rows="5" name="app_why_volunteer" class="" placeholder="Why do you want to volunteer at the Cancer Support Center?*" required></textarea>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <textarea rows="5" name="app_volunteer_exp" class="" placeholder="Do you have previous volunteer experience? If yes, please describe."></textarea>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class = "volunteer-form-section-2">
                    <p style= "color:#FF0000;">Fields with a * are required</p>
                    <div class = "volunteer-text">
                        <h1>Adult Volunteer Applicant Statement</h1>
                        <p>I am interested in serving as a Cancer Support Center Volunteer. I am prepared to receive the required training and devote 
                            the agreed upon time to The Center. I hereby waive all claims against The Cancer Support Center, sponsors and any personnel 
                            for any injury I might suffer while volunteering for The Cancer Support Center.
                            My photo, image, likeness, name, etc. may be used in The Cancer Support Center’s promotional materials.
                        </p>
                    </div>
                    <fieldset>
                        <div class="input-row">
                            <div class="input-group">
                                <input type="text" name="app_sign" class="" placeholder="Volunteer Applicant Signature*"  required/>
                            </div>
                            <div class="input-group">
                                <input type="text" name="app_sign_parent" class="" placeholder="Parent/Guardian's Signature if under 18 years old" />
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <input type="submit" class="submit" value="Send Message" />
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form> 
        <main-footer></main-footer>

        <script>
            $("#volunteer-reg").validate();
        </Script>
    </body>    
</html>