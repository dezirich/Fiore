<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fiore | Contact Us</title>
        <meta charset="utf-8">
        <meta name="description" content="The number one way to keep track of plants,
        plant care, and stay up to date on the latest plant trends">
        <link rel="shortcut icon" href="images/fiore-favicon.ico">
        <link rel="stylesheet" href="Fiore-Contact-Style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700&family=Vidaloka&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--navigation menu start-->
        <header>
        <h1 class="logo">fiore</h1>
            <input type="checkbox" id="hamburger-input" class="burger-shower" />
                <label id="hamburger-menu" for="hamburger-input">
                <nav id="sidebar-menu">
                    <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="learn.html">learn</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="FAQ.html">FAQ</a></li>
                    <li>
                        <a href="login.html">
                            <img src="images/Account.png" alt="My Account">
                        </a>
                    </li>
                </ul>
                </nav>
                </label>
            
            <div class="overlay"></div>
            <label id="main-menu">
                <nav>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="learn.html">learn</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="FAQ.html">FAQ</a></li>
                    <li>
                        <a href="login.html">
                            <img class="account" src="images/Account.png" alt="My Account">
                        </a>
                    </li>
                </ul>
        </nav>
            </label>
        </header>
        <!--nav menu end-->
        <main>
            <article class="contact">
               <h1>Email Confirmation</h1>
		<fieldset>
        	<legend>Contact Information</legend>
    		<label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
        	<label for="email">Email Address:</label>
        	<input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
        	<label for="verify">Verify Email:</label>
        	<input type="email" name="verify" id="verify" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
			<label for="phone">Phone Number:</label>
			<input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
		</fieldset>
		<fieldset>
    		<legend>Message Information</legend>
			<label for="reservation_date">Today's  Date:</label>
			<input type="date" name="reservation_date" id="reservation_date" value="<?php echo $_REQUEST['reservation_date'] ?>" disabled><br>
			<label for="subject">Subject:</label>
			<input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
			<label for="Message">Message:</label>
			<textarea id="message" name="message" rows="4" disabled><?php echo $_REQUEST['message'] ?></textarea>
		</fieldset>
<!-- This entire script, including the opening and closing ?php tags, can be nested inside of any other tag, such as div or p, to control positioning and formatting of confirmation message spit out by the email script -->
<h2>
<?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "richad50@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    $reservation_date = $_REQUEST['reservation_date']; //Request subject that user typed on HTML form
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
  //Combine first name and last name, adding a space in between
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Message: " . $message; //Continue the email body
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
    $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us!"; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
        }
?>

</h2>
            </article>
            <!--img class="contact-image" src="images/Contact-Image.jpg">-->
        </main>
    <footer>
        <p>This website is a work in progress. Keep checking back for future updates! Made by Dez Richardson</p>
        </footer>
    </body>
</html>
