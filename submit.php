<?php

// if the url field is empty, but the message field isn't
if(isset($_POST['url']) && $_POST['url'] == '' && $_POST['message'] != ''){

	// put your email address here
	$youremail = 'jeffbredenkamp@gmail.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
	Name:  $_POST[name]
	E-Mail: $_POST[email]
	Message: $_POST[message]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Contact Form', $body, $headers );

}

// uncomment these lines to redirect instead of displaying HTML
//header('Location: http://www.mysite.com/thankyou.html');
//exit('Redirecting you to http://www.mysite.com/thankyou.html');

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Thanks for your message!</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">

</head>
<body>

<section id="thanks">
    <div class="container">
        <div class="row">
            <div class="column">
<h1>Thanks</h1>
<p>I'll get back to you as soon as possible.</p>
            
                <p><a href="index.html">Return to main page</a></p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
