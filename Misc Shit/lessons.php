<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lessons | Breeze Technical Services</title>
	<meta name="author" content="Chase, McCarty, Bradley, Poulette">
	<meta name="description" content="More information about Lessons.">
	<meta name="keywords" content="edmonton, computer, help, setup, consulting, new, technology">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	  
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

	  
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout_lessons.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> </script>
	<!--script src="javascript/jqueryFunctions_setup.js"></script-->
	<link rel="icon" type="image/png" href="images/favicon.png">

</head>

<body>
	<div class = "band landing">
		<div class = "nav_strip">
			<div class = "container">
				<picture>
					<a href="/">
					<img src="images/breeze_logo_low_res_100v3.png" alt = "Breeze Technical Services" id="breezeLogo"></a>
				</picture>

				<div class = "list nav">
					<ul>
						<li><a href="/setup.php">Setup</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="/repair.php">Repairs</a></li>
					</ul>
				</div>

				<h5 id="phoneNumber">(587) 782 4441</h5> 

			</div>
		</div>

		<div class = "container">
			<h2>Lessons</h2>
		</div>

		<div class = "text container">
			<h1>Get Comfortable With Technology</h1>
			<h2>One on One with our Patient Instructors</h2>
		</div>

	</div>

	<div class = "band about">
		<div class = "container">
			<div class = "row" style = "margin-top: 10em">
				<h3>What's Involved?</h3>
			</div>
			<div class = "row">
				<h4>
					Our seasoned Instructors tailor your lessons<br>
					to what YOU want to learn. Work at your own 
					pace, <br>
					hands on, in the comfort of your own home.<br>
				 </h4>
			</div>
			<div class = "row" style = "margin-top: 10em">
				<h3>What Kind of Stuff?</h3>
			</div>
			<div class = "row" style = "margin-bottom: 5em">
					
					<h4>Some of our most common lessons include:</h4>
					<h5>
					Phone Tablet and Computer Funamentals<br>
					Moving Pictures To/From devices<br>
					Photoshop<br>
					Internet Services (ebay/kijiji/banking/etc)<br>
					Internet Privacy and Security<br>
					Cord Cutting. How to Watch Online<br>
					and so much more. <br>
				 </h5>
			</div>
		</div>
	</div>

	<div class = "band contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h5>Contact Us</h5>
          </div>
        </div>

        <div class = "row">
          <div class="twelve columns" style = "margin-bottom: 10%;">
            <div id="contact-form">

            <?php
            //init variables
            $cf = array();  //contact form
            $sr = false;    //server response

            if(isset($_SESSION['cf_returndata'])){
              $cf = $_SESSION['cf_returndata'];
              $sr = true;
            }
            ?>

            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
              <li id="info">There were some problems with your form submission:</li>
              <?php 
              if(isset($cf['errors']) && count($cf['errors']) > 0) :
                  foreach($cf['errors'] as $error) :
              ?>
              <li><?php echo $error ?></li>
              <?php
                  endforeach;
              endif;
              ?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
        
            <form method="post" action="PHP/process.php">
                      <label for="name">Name: <span class="required">*</span></label>
                      <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required="required" <?php echo($sr && !$cr['form_ok'] ? 'autofocus="autofocus"' : '')?> />
                       
                      <label for="email">Email Address: <span class="required">*</span></label>
                      <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required="required" />
                       
                      <label for="telephone">Telephone: </label>
                      <input type="tel" id="telephone" name="telephone" placeholder="(780) 444 4444" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                       
                      <label for="contactType">Preferred Mode of Contact: </label>
                      <select id="contactType" name="contactType" >
                          <option value="email" <?php echo($sr && !$cr['form_ok'] && $cf['posted_form_data']['contactType'] == 'email') ? "selected='selected'" : '' ?>>Email</option>
                          <option value="phone" <?php echo($sr && !$cr['form_ok'] && $cf['posted_form_data']['contactType'] == 'phone') ? "selected='selected'" : '' ?>>Phone</option>
                          <option value="pigeon" <?php echo($sr && !$cr['form_ok'] && $cf['posted_form_data']['contactType'] == 'pigeon') ? "selected='selected'" : '' ?>>Carrier Pigeon</option>
                          <option value="telegram" <?php echo($sr && !$cr['form_ok'] && $cf['posted_form_data']['contactType'] == 'telegram') ? "selected='selected'" : '' ?>>Telegram</option>
                      </select>
                       
                      <label for="message">Message: <span class="required">*</span></label>
                      <textarea id="message" name="message" placeholder="Enter your message here." required= data-minlength="4"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                       
                      <input type="submit" value="Submit" id="submit-button" />
                      <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
            </div>
          </div>
          </div>
          </div>
        </div> <!-- End Row -->
      </div> <!-- End Container -->
  </div> <!-- End Band -->

</body>
</html>