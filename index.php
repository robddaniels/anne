<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="" />
		<meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Anne Jackley</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/popup.css" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
	</head>
	<body>
        <div id="main">
            <div id="content-wrapper">    
                <header>
                    <div id="navbar">
                        <div class="logo">
                            <img src="images/dots.png" alt="" />
                            <h1>
                                Anne Jackley
                                <span>Digital product strategy, development, management</span>
                            </h1>
                        </div>
                        <nav>
                            <span class="nav-desktop">
                                <!--<a id="" href="#">Contact</a>-->
                                <a id="contact" class="popup-with-form" href="#contact-form" onclick="hideThankyouMessage();">
                                    <img src="images/icon_contact.png" alt="Contact" title="Contact" />
                                </a>
                                <a id="linked-in" href="https://www.linkedin.com/in/ajackley/">
                                    <img src="images/linkedin.png" alt="LinkedIn" title="LinkedIn" />
                                </a>
                            </span>
                        </nav>
                    </div>
                </header>
                <div id="content">
                    <h2>Engagement at the Intersection of Data & Design.</h2>
                    <h4>Hi, I’m Anne Jackley. I’m an experienced product leader who helps organizations optimize their digital presence.</h4>
                    <h4>I’m a creative thought partner with hands-on technical expertise and a strong leadership practice. I bring:</h4>
                    <ul>
                        <li>Proven ability to establish digital strategies and execute transformation projects</li>
                        <li>Expertise in
                            <ul>
                                <li>Project & program management</li>
                                <li>Global team management</li>
                                <li>Digital development</li>
                                <li>Website strategy</li>
                                <li>Localization and personalization</li>
                                <li>AI strategy</li>
                            </ul>
                        </li>
                        <li>Commitment to collaboration with diverse input and strong mandates</li>
                        <li>Grounding in operational excellence and customer-centric solutions</li>
                    </ul>
                    <h4>Sample engagements include:</h4>
                    <ul>
                        <li>Optimizing UX journeys</li>
                        <li>Optimizing landing pages for engagement and conversion</li>
                        <li>Persona-focused content audits</li>
                        <li>Data-focused workflow audits</li>
                        <li>Optimising workflows across teams</li>
                        <li>Managing website redesigns and CMS updates</li>
                        <li>Creating strategies for supplementing human work with AI systems</li>
                        <li>Creating an actionable portfolio from your strategic plan</li>
                    </ul>
                    <h4>View my <a href="https://www.linkedin.com/in/ajackley/">Linkedin</a> profile to learn more and <a class="popup-with-form" href="#contact-form" onclick="hideThankyouMessage();">contact</a> me for consultation.</h4>
                </div>
            </div> 
            <footer>
                <p>© <span id="date">2025</span> All Rights Reserved</p>
            </footer>
        </div>
        <form name="contact-form" id="contact-form" class="white-popup-block" method="post" action="">
            <div id="contact-form-container">
                <fieldset id="contact-form-fieldset">
                    <h2>Let’s work together</h2>
                    <span>
                        <input id="name" name="name" type="text" placeholder="Name" required="">
                    </span>
                    <span>
                        <input id="email" name="email" type="email" placeholder="Email" required="">
                    </span>
                    <span>
                        <input id="subject" name="subject" type="text" placeholder="Subject" required="">
                    </span>
                    <span>
                        <textarea id="message" name="message" placeholder="Message"></textarea>
                    </span>
                    <div class="h-captcha" data-sitekey="e4724cb8-1d30-4b94-9f22-117a493e6fce" data-size=""></div>
                    <button type="submit" name="contact-submit" id="contact-submit" class="contact-form-submit" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="wpforms-submit">Submit</button>
                    <!--<button type="submit" id="contact-submit" class="h-captcha contact-form-submit" data-sitekey="e4724cb8-1d30-4b94-9f22-117a493e6fce" data-callback="onSubmit" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="wpforms-submit">Submit</button>-->
                </fieldset>
                <div id="thank-you-message-container">
                    <h3 class="thank-you-message">Thank You</h3>
	    		    <h4 class="thank-you-message">Your message has been sent.</h4>
                </div>
            </div>
        </form>
        <script>
		    var d = new Date();
		    document.getElementById("date").innerHTML = d.getFullYear();
            function showThankyouMessage() {
				'use strict';
                $('#contact-form-fieldset').hide();
                $('#thank-you-message-container').show();
				setTimeout(function(){
  					$('.mfp-bg,.mfp-wrap').fadeOut();
				}, 6000);
			}
            
            function hideThankyouMessage() {
				'use strict';
                //console.log('remove thank you');
                if ($('#thank-you-message-container').css('display') == 'block') {
                    //console.log('thank you visible');
				    $('#thank-you-message-container').hide();
                    $('#contact-form-fieldset').show();
                }
                if ($('.mfp-bg') && $('.mfp-wrap').length) {
                    //console.log('thank you visible');
				    $('.mfp-bg,.mfp-wrap').fadeIn();
                }
                else {
                    //console.log('thank you hidden');
                }
			}
            $(document).ready(function() {
                $('.popup-with-form').magnificPopup({
                    type: 'inline',
                    preloader: false,
                    focus: '#name',

                    // When elemened is focused, some mobile browsers in some cases zoom in
                    // It looks not nice, so we disable it:
                    callbacks: {
                        beforeOpen: function() {
                            if($(window).width() < 700) {
                                this.st.focus = false;
                            } else {
                                this.st.focus = '#name';
                            }
                        }
                    }
                });
                function onSubmit(token) {
                    console.log('submit');
                    document.getElementById('contact-form').submit();
                }
                $('#contact-form').validate({
				  rules: {
					name: {
                        required: true
                    },
                    email: {
						required: true,
						email: true
					},
                    subject: {
                        required: true
                    },
                    message: {
                        required: true
                    }
				  },
                  submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {
                            $("#contact-form")[0].reset();
                            showThankyouMessage();
                        }            
                    });
                  }
				});
            });
	    </script>
        <?php
            if(isset($_POST['email'])) {
                $email = $_REQUEST['email'] ;
                $name = $_REQUEST['name'] ;
                $subject = $_REQUEST['subject'] ;
                $message = $_REQUEST['message'] ;
                $toEmail = "ajackley+contact@gmail.com" ;
                $body  =  "Name: $name \r\nEmail: $email \r\nMessage: $message \r\n";
                $headers .= "From: contact@annejackley.com" . "\n";
                $headers .= "Reply-To: contact@annejackley.com" . "\n"; 
                $headers .= 'MIME-Version: 1.0' . "\n";
                $headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";
                $returnpath = 'contact@annejackley.com';
                // send
                if(!empty($email))
                {
                    mail($toEmail, $subject, $body, $headers, $returnpath);
                }
            }
		
            $data = array(
                'secret' => "ES_af6a87ce1d184ba98cfcb9619fdcc955",
                'response' => $_POST['h-captcha-response']
            );
            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);
            // var_dump($response);
            $responseData = json_decode($response);
            if($responseData->success) {
                // your success code goes here
            } 
            else {
            // return error to user; they did not pass
            }
        ?>
    </body>
</html>
