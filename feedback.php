<?php include 'templates/htmlTop.php';?>
<!-- include if specific styles are needed (aka remove both comment lines)-->
<!-- <link rel="stylesheet" href="styles/generalStyle.css"> -->
<link rel="stylesheet" href="styles/feedback.css">
<?php include 'templates/header.php';?>
<!-- html body code -edit body below -->

<h1>Feedback and Reviews from Students</h1>

<p>Read into what other students are saying about their experience with the COMP1950 course. If you are a current or former student of this course, you are welcome to leave your comment or feedback using the form below. Your review will be published subject to moderation by our staff.</p>

<strong>John W.</strong>

<p>This course was great it met my expectations of creating a nice well coded website at an introductory level. I can't think of anything I disliked or that I'd change about the course.</p>

<strong>Alexandre K.</strong>

<p>Perfect course, very good to start your career with Web Design world. I would say that this course offers terrific tips, and everything well presented. I would recommend it for sure!</p>

<strong>Arleigh J.</strong>

<p>This is the perfect course to test out web design. They give you a taste of HTML, CSS and responsive design. Two thumbs up!</p>

<strong>Giuseppe M.</strong>

<p>Great course, perfect to start your journey in Web Design. Fantastic lessons and tips, everything well presented. Totally recommended, even if you already have some experience in HTML.</p>

<strong>Neil A.</strong>

<p>I had some knowledge of HTML and CSS before I started the course but this course helped me understand how it fits together and realize I have a lot more to learn. I really liked the instructor's friendly teaching style.</p>

<strong>Andrew O.</strong>

<p>Everything I learned I expected to learn. I do wish it was a bit more advanced but there's other courses for that. If there's one thing I could improve, it would be to just change the website we are shown to make, to a different more modern look one.</p>


<strong>Anna K.</strong>

<p>Taking the course was so much fun! I really enjoyed the code challenges and home assignments as they helped me to retain what I learned throughout the course. Content-wise, the course was exactly what I was looking for as I've never had prior experience in writing HTML code. Look forward to attending more courses at BCIT.</p>


<h2>Please fill out the form below and let us know what you think of this course.</h2>

<form method="post">
  <input type="hidden" name="recipient" id="recipient" value="andrei">
  <input type="hidden" name="subject" id="subject" value="Message from site">
  <input type="hidden" name="redirect" id="redirect" value="thanks.php">
  <div class="form_settings">
      <div class='group'>
        <p><span>Name</span><input id="smltext" class="contact" type="text" name="from_name" value="" required="required" /></p>
        <p><span>Email Address</span><input class="contact" type="email" name="email_from" value="" required="required" /></p>
      </div>

      <div class = "radiobox">
        <input type="radio" checked="checked" name="radio">
        <input type="radio" name="radio">
      </div>

      <div class="bigtext"><span>Feedback</span><textarea id="bigtext" class="contact textarea" rows="8" cols="50" name="message_text" required="required"></textarea></div>
      <p><input class="submit" type="submit" name="contact_submitted" value="submit"> <input class="submit" type="reset" value="reset"></p>
  </div>
</form>

<!-- html body code -edit body above -->
<?php include 'templates/footer.php';?>
<!-- js code --> <script src="./scripts/bigtextbox.js"></script>
<?php include 'templates/htmlBottom.php';?>