<?php include 'templates/htmlTop.php';?>
<!-- include if specific styles are needed (aka remove both comment lines)-->
<link rel="stylesheet" href="styles/index.css">
<?php include 'templates/header.php';?>
<!-- html body code -edit body below -->
<div class="banner">
    <picture>
        <source srcset="images/computer-man-crop.jpg" media="(max-width: 400px)">  
            <img srcset="images/computer-man-sml.jpg 375w, 
                         images/computer-man-med.jpg 768w, 
                         images/computer-man-lrg.jpg 1200w"
            src="computer-man-lrg.jpg"
            alt="program thingy">
    </picture>

    <p class="imageText">COMP 1950</p>
</div>
<h1>Welcome to COMP 1950!</h1>
<p>In Comp 1950, you will learn more advanced css and html that will help you to more
   easily build a website from scratch! Because this is the advanced course, it is
   reccomended (and required) to take the previous course COMP 1850 before you can
   enter. Otherwise, upon completion of this course, you'll be able to build grand
   sites like the one you see here, for example, that people can view on not only
   their computers and laptops, but also their tablets and smart phones!
</p>
<p>Try resizing the window or view the site on different devices to see how the text,
   lists, and even navigation bar respond. Using fun, new entities like SASS and Git,
   along with a few but very important features within HTML, CSS, and JavaScript, any
   site you build can become as fluid and clean as any of these pages!
</p>
<h2>Use the navigation above to find out more information on the course itself.</h2>

<!-- html body code -edit body above -->
<?php include 'templates/footer.php';?>
<!-- js code -->
<?php include 'templates/htmlBottom.php';?>