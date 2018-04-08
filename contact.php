<?php include 'templates/htmlTop.php';?>
<!-- include if specific styles are needed (aka remove both comment lines)-->
<!-- <link rel="stylesheet" href="styles/generalStyle.css"> -->
<link rel="stylesheet" href="styles/feedback.css">
<?php include 'templates/header.php';?>
<!-- html body code -edit body below -->

<h1>Contact</h1>

<p>You can use a D2L system to get in contact with the course instructor. If have any general questions about this course, its schedule and requirements, please use the form below.</p>


 <h2>Please fill out the form and will get back to you within 48 hours.</h2>
        <form method="post">
            <input type="hidden" name="recipient" id="recipient" value="andrei">
    <input type="hidden" name="subject" id="subject" value="Message from site">
    <input type="hidden" name="redirect" id="redirect" value="thanks.php">
              <div class="form_settings">
            <p><span>First name</span><input class="contact" type="text" name="from_name" value="" required="required" /></p>
            <p><span>Last name</span><input class="contact" type="text" name="from_name" value="" required="required" /></p>
            <p><span>BCIT student number</span><input class="contact" type="text" name="from_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="email" name="email_from" value="" required="required" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="message_text" required="required"></textarea></p>
            <p><input class="submit" type="submit" name="contact_submitted" value="submit"> <input class="submit" type="reset" value="reset"></p>
          </div>
        </form>


<!-- html body code -edit body above -->
<?php include 'templates/footer.php';?>
<!-- js code --> <script src="./scripts/bigtextbox.js"></script>
<?php include 'templates/htmlBottom.php';?>