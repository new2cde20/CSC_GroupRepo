<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '') {
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            if ($_POST['human'] == '4') {
            // submit the form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
            $antiSpam = $_POST['human'];
        
            $to =""; // Your email goes here
            $body = '';
        
            $body .="From: ".$userName. "\r\n";
            $body .="Email: ".$userEmail. "\r\n";
            $body .="Message: ".$message. "\r\n";
        
            mail($to, $messageSubject, $body);

            $message_sent = true;
            }
        }
    }

?>

<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript, PHP">
		<meta name = "description" content = "Contact Us Form on Newsletters Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel= "stylesheet" href= "css\bourbon\restyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <link rel="stylesheet" href="css\w3.css">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body>
    <?php
    if($message_sent):
    ?>

        <h3>Thanks, we'll be in touch</h3>

    <?php
    else:
    ?> 
    <main-header></main-header>
    <div class = "center-text">
        <p>If you have a program question, please email <a href="mailto:csc@cancersupportcenter.org">csc@cancersupportcenter.org</a> or use the form below.</p>
    </div>      

    <div class = "body-info">
    <div class="container">
    <p style= "color:#FF0000;">Fields with a * are required to be filled out</p>
            <form action="newsletters.php" method="POST" class="form">
                <div class="form-group">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" 
                    name="name" placeholder="Your Name*" tabindex="1" required>
                    
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" 
                    name="email" placeholder="Your Email*" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" 
                    name="subject" placeholder="Subject*" tabindex="3" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" rows="5" cols="50" id="message" 
                    name="message" placeholder="Enter Message...*" tabindex="4" required></textarea>
                </div>
                <div class="form-group">
                <label for="human" class="form-label">Enter the answer</label>
                <input type="text" class="form-control" id="human" 
                name="human" placeholder="What is 2+2?*" tabindex="5" required>
            </div>
                <div>
                    <button type="submit" class="btn">Send Message!</button>
                </div>
            </form>
        </div>
    </div>
    <main-footer></main-footer>
    <?php
    endif;
    ?>        
    </body>
</html>