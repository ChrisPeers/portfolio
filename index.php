<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Chris Peers - Portfolio</title>

    <!-- Include the header and side menu with php -->
    <?php include("inc/headerSideMenu.php"); ?>

    <main>
        <!-- Main Hero Image Banner -->
        <div class="hero" id="top"> 
            <h1 id="hero-h1">My Name is Chris Peers</h1>
            <h2 id="hero-h2"></h2>
            <div>
                <a href="#projects">
                    Scroll Down
                    <br>
                    <i class="fas fa-chevron-down"></i>
                </a>
            </div>
        </div>

        <!-- Project Section -->
        <div class="projects" id="projects">
            <a class="cards card-1" href="https://netmatters.christopher-peers.netmatters-scs.co.uk/" target="_blank">
                <img src="images/projectNetmatters.png" alt="Screenshot of Netmatters Home Page">
                <p class="hidden-project-text">For this project I had to recreate the Netmatters home page visually. It was one of the first projects I did and I learnt a lot from it.</p>
                <h2>Recreate Netmatters</h2>
                <p>View Project <i class="fas fa-arrow-right"></i></p>
            </a>
            <a class="cards card-2" href="#">
                <img src="images/placeholder.jpg" alt="Placeholder Image">
                <h2>Project Two</h2>
                <p>View Project <i class="fas fa-arrow-right"></i></p>
            </a>
            <a class="cards card-3" href="#">
                <img src="images/placeholder.jpg" alt="Placeholder Image">
                <h2>Project Three</h2>
                <p>View Project <i class="fas fa-arrow-right"></i></p>
            </a>
            <a class="cards card-4" href="#">
                <img src="images/placeholder.jpg" alt="Placeholder Image">
                <h2>Project Four</h2>
                <p>View Project <i class="fas fa-arrow-right"></i></p>
            </a>
            <a class="cards card-5" href="#">
                <img src="images/placeholder.jpg" alt="Placeholder Image">
                <h2>Project Five</h2>
                <p>View Project <i class="fas fa-arrow-right"></i></p>
            </a>
            <a class="cards card-6" href="#">
                <img src="images/placeholder.jpg" alt="Placeholder Image">
                <h2>Project Six</h2>
                <p>View Project <i class="fas fa-arrow-right"></i></p>
            </a>
        </div>
        <!-- Contact Me Section -->
        <section class="contact-section" id="contact-me">
            <div class="contact-me">
                <h2>Get in Touch</h2>
                <p>If you would like to get in contact with me, please email me at:</p>
                <a href="mailto:chrispeers123@hotmail.com">Chrispeers123@hotmail.com</a>
                <p>Alternatively, you can contact me via the contact form and I will aim to get back to you within two working days.</p>
            </div>
            <!-- Contact Form -->
            <form name ="contactForm" class="contact-form" method="get" action="#contact-me" onsubmit="return validate();">
                <input type="text" class="name" id="name" name="name" placeholder="Name*" required> 
                <input type="text" class="cont-number" id="cont-number" name="cont-number" placeholder="Contact Number" onkeypress="return isNumber(event)">
                <input type="text" class="email" id="email" name="email" placeholder="Email Address*" required>
                <input type="text" class="subject" id="subject" name="subject" placeholder="Subject">
                <textarea class="message" id="message" name="message" placeholder="Message*" cols="50" rows="4" required></textarea> 
                <button type="submit"  value="Submit" class="submit" id="formSubmit">Submit</button>
            </form>
        </section>

        <!-- Include the header and side menu with php -->
        <?php include("inc/footer.php"); ?>
