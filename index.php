<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TERA BRAND</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="assets/stylesheet/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <?php 
        require_once "bat/phpmailer/PHPMailerAutoload.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST["email"];
            // ALRIGHT
            $mail = new PHPMailer;
             // from email addreess and name
             $mail->From = "$email";
             $mail->FromName = "$fn";
             // to adress and name
             $mail->addAddress("contactus@thisistera.com", "CLIENT");
             // reply address
             //Address to which recipient will reply
             // progressive html images
             $mail->addReplyTo("contactus@thisistera.com", "Reply");
$mail->isHTML(true);
$mail->Subject = "PLAN ORDER";
$mail->Body = "A Client Contacted <br/>
<p>Email: $email</p>
<p>A client submitted mail!</p>
";
$mail->AltBody = "This is the plain text version of the email content";
// mail system
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} else
{
    // echo "Message has been sent successfully";
}

        }
        ?>
        <!--[if IE]>
            <style type="text/css">
                div.subscribe, div.timeblock {
                    background:transparent;
                    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#5081cece,endColorstr=#5081cece); 
                    zoom: 1;
                }

                h1.logo {
                    background:transparent;
                    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#50FFFFFF,endColorstr=#50FFFFFF); 
                    zoom: 1;
                }        

                div.social a {
                    background:transparent;
                    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#50e67a79,endColorstr=#50e67a79); 
                    zoom: 1;
                }        
            </style>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <div class="container header">
                <div class="logo">
                    <img src="assets/images/brand.png" height="20%" width="20%" alt="">
                    <!-- <a href="#" title="PROCount"><strong>TERA</strong>BYTE</a> -->
                </div>
                <h3>NEW SITE IN PROGRESS, COOKING SOMETHING WITH PINZA STUDIO.</h3>
                <p><strong>Kindly</strong> Wait for the Stunning Future</p>
            </div>
            <div class="timeblock clearfix">
                <div class="container">
                    <div class="timer clearfix">
                        <ul id="countdown">
                            <li>
                                <span class="days">00</span>
                               <p class="timeRefDays">days</p>
                            </li>
                            <li class="seperator">.</li>
                            <li>
                                <span class="hours">00</span>
                                <p class="timeRefHours">hours</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                                <span class="minutes">00</span>
                                <p class="timeRefMinutes">minutes</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                                <span class="seconds">00</span>
                                <p class="timeRefSeconds">seconds</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="subscribe nine columns">
                    <form id="subscribe" method="POST" class="clearfix">
                        <div class="input six alpha columns"><input type="text" name="email" placeholder="Enter your email" /></div>
                        <button type="submit" class="three btn omega alpha columns">Subscribe</button>
                        <div class="error_alert">Oops! There was a error!</div>
                    </form>
                </div>
                <div class="social clearfix">
                    <div class="one-third column">
                        <a href="#" class="twitter">Twitter</a>

                        <span>Follow Us</span>
                    </div>
                    <div class="one-third column">
                        <a href="#" class="facebook">Facebook</a>

                        <span>Like Us</span>
                    </div>
                    <div class="one-third column">
                        <a href="https://www.theterabrand@gmail.com" class="mail">Email</a>

                        <span>Contact Us</span>
                    </div>
                </div>
                <p class="copyright">Copyright © 2020 TERA BYTE.</p>
            </div>
        </div>
        <script type="text/javascript" src="assets/javascript/lib/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="assets/javascript/lib/jquery.downCount.js"></script>
        <script type="text/javascript" src="assets/javascript/main.js"></script>
    </body>
</html>
