<?php
$reciverEmail = ''; // My email was here

if (!empty($_POST))
{
    $error = '';
    if (empty($_POST['name']))
    {
        $error = 'Name field is required!.';
    }
    if (empty($_POST['email']))
    {
        $error = 'Email field is required!.';
    }
    if (empty($_POST['phone']))
    {
        $error = 'Phone field is required!.';
    }
    if (empty($_POST['program']))
    {
        $error = 'Program field is required!.';
    }

    //checkboxes
    if (empty($_POST['Services']))
    {
        $error = 'Services field is required!.';
    }
    if (empty($_POST['Classes']))
    {
        $error = 'Classes field is required!.';
    }
    if (empty($_POST['Advice']))
    {
        $error = 'Advice field is required!.';
    }
    if (empty($_POST['Nutrition']))
    {
        $error = 'Nutrition field is required!.';
    }

    if (empty($error))
    {
        extract($_POST);
        $to = $reciverEmail;
        $subject = "Participant Registration";

        $message = "";
        $message .= "<h1>Participant Registration Data</h1>";
        $message .= "<label>Name:</label> $name<br/>";
        $message .= "<label>Email:</label> $email<br/>";        
        $message .= "<label>Phone:</label> $phone<br/>";
        $message .= "<label>Program:</label> $program<br/>";

        //address
        if (!empty($address))
        {
            $message .= "<label>Address:</label> $address<br/>";
        }
        //participant
        if (!empty($participant))
        {
            $message .= "<label>Participant:</label> $participant<br/>";
        }
        //cancertype
        if (!empty($cancertype))
        {
            $message .= "<label>Cancer Type:</label> $cancertype<br/>";
        }
        //hospital
        if (!empty($hospital))
        {
            $message .= "<label>Hospital:</label> $hospital<br/>";
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
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Participant Forms Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Participant Forms</title>
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
        <h1>Participant Forms</h1>
        <form action="" method="post" id="participant-form">
            <div class = "participant-form-section-1">
                
                <p>Fields with a * are required</p>
                <fieldset>
                    <legend>Personal Information</legend>
                    <div class="Row">
                        <div class="input-group">
                            <input type="text" name="name" class="" placeholder="Name*" required />
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" class="" placeholder="Email*" required />
                        </div>
                    </div>
                    
                    <div class="Row">
                        <div class="input-group">
                            <input type="text" name="phone" class="" placeholder="Phone*" required />
                        </div>
                        <div class="input-group">
                            <input type="text" name="program" class="" placeholder="Program Attending*" required />
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class = "participant-form-section-1">
                <b>If you are new to The Cancer Support Center please fill out the questions below (existing participants can skip to the next section)</b><br/><br/>
                <fieldset>
                    <legend>Personal Information</legend>
                    <ul>
                        <li>
                            <input type="text" name="address" class="field-style field-split align-left" placeholder="Address"/>
                            <input type="text" name="participant" class="field-style field-split align-right" 
                            placeholder="Participant Type (Survivor, Caregiver, Bereaved)"/>
                        
                        </li>
                        <li>
                            <input type="text" name="cancertype" class="field-style field-split align-left" placeholder="Cancer Type" />
                            <input type="text" name="hospital" class="field-style field-split align-right" placeholder="Hospital for Treatment"/>
                        </li>
                    </ul>
                </fieldset>
            </div>

            <h4>
                Please check each box below to acknowledge your consent for each of the following:<br/>(By submitting your registration you agree to The Cancer Support Center's Use of Service Agreement for any programs offered on-site or online)</h4>
            <div class = "participant-form-section-1">
                <fieldset>
                    <legend>Use of Services Agreement</legend>
                    <ul class = "participant-checkboxes">
                        <li>
                            <input type="checkbox" id="checkbox1" name="Services" value="Use of Services" required />
                            <label for="checkbox1">Use of Services* – Cancer Support Center programs are offered at no charge to any participant.<br/>
                                Our intent is to provide a safe environment and programming that is beneficial to those involved. We expect
                                participants to discuss concerns with appropriate staff and to hold all associated with the Center
                                harmless in their work to provide programming along professional and ethical guidelines. The Cancer Support Center
                                reserves the right to refuse or to discontinue the privileges of these services to any person.
                            </label>
                            <br/><br/>

                            <input type="checkbox" id="checkbox2" name="Classes" value="Wellness Classes" required />
                            <label for="checkbox2">Wellness Classes* – I understand that wellness classes by The Cancer Support Center (including yoga,
                                fitness and massage) include physical movements and that the risk of injury, even serious or disabling, is 
                                always present and cannot be entirely eliminated. If I experience any pain or discomfort, I will listen to my 
                                body and ask for support from the staff.
                            </label>
                            <br/><br/>

                            <input type="checkbox" id="checkbox3" name="Advice" value="Medical Assistance/Advice" required />
                            <label for="checkbox3">Medical Assistance/Advice* – The Cancer Support Center and its staff members do not provide medical
                                advice or assistance. None of our programs are a substitute for medical attention, examination, diagnosis,
                                or treatment. They may not be recommended and safe under certain medical conditions. I affirm that I
                                alone am responsible to decide whether to practice wellness classes and will discuss my choices with my
                                physician if I am unsure about my safety. I hereby agree to irrevocably release and waive any claims that I
                                have now or hereafter may have against The Cancer Support Center and staff. 
                            </label>
                            <br/><br/>

                            <input type="checkbox" id="checkbox4" name="Nutrition" value="Nutrition Pop-Up Station" required />
                            <label for="checkbox4">Nutrition Pop-Up Station* – I understand that I alone am responsible for my participation in any Nutrition
                                Pop-Up Station at The Cancer Support Center. I hereby release The Cancer Support Center and Center for
                                Food Equity in Medicine from any liability should I become ill as a result of my participation in this program.
                            </label>           
                        </li>
                        <li>
                            <br/>
                            <input type="submit" value="Send Registration"/>   
                        </li>
                    </ul>
                </fieldset>
            </div>
        </form>

        <main-footer></main-footer>

        <script>
            $("#participant-form").validate();
        </Script>
    </body>
</html>