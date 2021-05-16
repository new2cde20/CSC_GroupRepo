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
		<meta name = "description" content = "Contact Us Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel="stylesheet" href="css\w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body>
    <?php
    if($message_sent):
    ?>
    
    <h3>Thanks, we'll be in touch. <a href ="index.html" style = "color: #1e5477; text-decoration:none;">Click here to go back to the main webpage.</a></h3>

    <?php
    else:
    ?> 
    <main-header></main-header>
        <div class="center-text">
        <h1>Contact Form</h1>
        <p>Have any questions or comments you'd like to send us? Feel free to contact us through the contact form below.<br><br>
            Fields with a * are required to be filled out<br>
            <!-- <p>Also feel free to email <a href=""></a> Partner's email goes here-->
                with any program questions you have may.<br></p>
        </div>        

    <div class = "body-info">
    <div class="container">
            <form action="contact.php" method="POST" class="form">
            <p style= "color:#FF0000;">Fields with a * are required</p>
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