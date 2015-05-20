<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Breeze Technical Services</title>
  <meta name="description" content="">
  <meta name="author" content="">

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/layout.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> </script>
  <script src="jqueryFunctions.js"></script>




  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
    
  <div class = "band landing">
      <div class = "nav_stripe">
          <div class="container" style="margin-bottom:0;">
              <div class="row">
                <div class="four columns">
                    <picture>
                       <!--<source media="(min-width: 64em)" src="./images/high-res_logo.png">
                       <source media="(min-width: 37.5em)" src="./images/med-res_logo.png">
                       <source src="./images/low-res_logo.png">-->
                       <img src="./images/low-res_logo.png" alt="Breeze Technical Services" id="breezeLogo">
                    </picture>
                </div>
                <div class = "five columns">
                    <div class = "list nav">
                        <ul>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class = "three columns">
                    <h5>(780) 700 1070</h5>            
                </div>
              </div>
          </div> <!-- End Container -->
      </div>
    <div class="twelve columns">
        <div class = "text container">
            <h3>Get Comfortable</h3>
            <h4>This is going to be a breeze.</h4>
        </div>
    </div>
      <!-- </div> <! End Container -->
  </div> <!-- End Band -->
    
  <div class = "band services" id="services">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h5>Let's Get Started.</h5>
          </div>
        </div>
        <div class = "row">
            <div class = "twelve columns">
                <h3>With our simple pricing, it's easy to get what you need.</h3>
            </div>
        </div>
        <div class = "row">
            <div class = "twelve columns">
                <h3>Choose any of these options for only $60:</h3>
            </div>
        </div>
        <div class = "row">
          <div class = "four columns" >
              <h5>Setup</h6>
          </div>
          <div class = "four columns">
            <h5>Lessons</h6>
          </div>
          <div class = "four columns">
               <h5>Repairs and Tune-Ups</h6>
          </div>
        <div class = "row">
          <div class = "four columns" >
            <div id = "setupLess">
              <p>Let us set up your new technology for you. You tell us what you want it to do, and we make it work. Sit back, relax, and watch the magic happen.</p>
            </div>
            <div id = "setupMore" style="display:none;text-align:justify;">
                <p><br>Our gurus set-up:
<br><br>-	Printers
<br>-	Mobile devices (iPads, iPhones, and other tablets and smartphones)
<br>-	Home automation systems
<br>-	New computers
<br>-	Data transfers from your old devices to your new ones

<br><br>Don’t see what you want on the list? Request a free consultation using the contact form below, and one of our gurus will be more than happy to help.
</p> 
            </div>
          </div>
          <div class = "four columns">
            <div id = "lessonLess">
              <p>From basic computer skills, to software like Photoshop and more, our patient and skilled gurus will teach you what you want to know. In a casual, one-on-one atmosphere, you set the pace. No more frustrating classes!</p>
            </div>
            <div id = "lessonMore" style="display:none;text-align:justify;">
            <p><br>Our gurus can teach you how to:
<br><br>-	Transfer data from cameras, phones, and tablets, to your computer
<br>-	Synchronize your files across your devices (iCloud, Google Drive, Microsoft OneDrive, Dropbox, etc.)
<br>-	Edit your photos and videos using software like Adobe Photoshop, Adobe Premier, iPhoto, and iMovie
<br>-	Navigate your computer’s basic functionalities with ease</span>
<br>-   Use tools like email and web browsing
                
<br><br>Don’t see what you want on the list? Request a free consultation using the contact form below, and one of our gurus will be more than happy to help.</p>
            </div>
          </div>
          <div class = "four columns">
              <div id = "repairLess">
               <p>Have a trusted piece of technology that just isn’t working the way it used to? Let us know what the problem is, and we’ll take care of the rest.</p>
              </div>
              <div id = "repairMore" style="display:none;text-align:justify;">
                <p><br>Our gurus will take care of:
<br><br>-	Speeding up slow computers
<br>-	Recovering/replacing broken or damaged hard-drives
<br>-	Virus removal (and anti-virus installation)
                
<br><br>Don’t see what you want on the list? Request a free consultation using the contact form below, and one of our gurus will be more than happy to help.</p>
              </div>
          </div>
          </div>
        <div class = "row" style = "margin-bottom: 15%;">
          <div class = "four columns" >
            <button  id="setupBtn">Show More</button>
          </div>

          <div class = "four columns">
            <button  id="lessonBtn">Show More</button>
          </div>
          <div class = "four columns">
            <button  id="repairBtn">Show More</button>
          </div>
        </div> <!-- End Row -->
      </div> <!-- End Container -->
  </div> <!-- End Band -->

  <div class = "band testimonies" id = "testimonies">
    <div class = "container">
      <div class = "row">
        <div class = "twelve columns">
          <h5>Testimonies</h5>    
        </div> <!-- End Columns -->
      </div> <!-- End Row -->
      <div class = "row">
        <div class = "slideshow container">
          <div> 
            <h5 style="display:inline;">Text 1</h5>
          </div>
          <div> 
            <h5 style="display:none;">Text 2</h5>
          </div>
          <div> 
            <h5 style="display:none;">Text 3</h5>
          </div>
          <div> 
            <h5 style="display:none;">Text 4</h5>
          </div>

        </div> <!-- End Slideshow container -->
      </div> <!-- End Row -->

      <button id="slideshowNext">Next</button>

    </div> <!-- End Container -->
  </div> <!-- End Band -->

  <div class = "band about" id="about">
      <div class="container">
        <div class="row">
          <div class= "twelve columns">
            <h5>Who We Are</h5>
          </div>
        </div>
        <div class="row" style = "margin-right:auto; margin-left:auto;">
          <div class = "six columns" style = "text-align:center;">
              <div class = "bio picture" style = "padding-left:10px; padding-right:10px;">
                <picture>
                    <img src="./images/chase_breeze_bio.png" alt="Breeze Technical Services" >
                </picture>
                <h3>Chase</h3>
                <p>Bio:</p>
                <p>- Sofware Engineer</p>
                <p>- Ex Apple Genius</p>
                <p>- Sofware Engineer</p>
                <p>- Patient</p>
                <p class = "last">- Snowboard instructor</p>  

              </div> 
            </div>
            <div class="six columns" style = "text-aligh:center;">
              <div class = "bio picture" style = "padding-left:10px; padding-right:10px;">
                <picture>
                    <img src="./images/bradley_breeze_bio.png" alt="Breeze Technical Services" >
                </picture>
                <h3>Bradley</h3>
                <p class = "last">Bradley's Short Bio</p>
              </div>
          </div>
        </div> <!-- End Row -->
      </div> <!-- End Container -->
  </div> <!-- End Band -->
    
    
  <div class = "band contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h5>Contact Us</h5>
          </div>
        </div>

        <div class = "row">
          <div class="twelve columns">
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
        
            <form method="post" action="process.php">
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

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
