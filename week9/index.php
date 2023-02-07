<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Personal Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script defer src="javascript.js"></script>
    </head>
    <body>
        <header>
            <img class="logo" src="Jenny.png" alt=""logo>
        <nav>
            <ul class="nav_link">
                <li><a data-link="WelcomeSec" class="scroll_to">Home</a></li>
                <li><a data-link="AboutSec" class="scroll_to">About Me</a></li>
                <li><a data-link="ContactSec" class="scroll_to">Contact Me</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Idk</button></a>
        </header>
    
    
<!--Welcome-->
    <section class="WelcomeSection" id="WelcomeSec">
        <p class="Welcome">WELCOME</p>
    </section>

<!--About Me-->
    <section class="AboutSection" id="AboutSec">
        <div class = "title">
            <h1> About Me </h1>
        </div>
        
        <div class = "AboutMeSection">
            <div><img src= "MyImage.jpg_large"></div>
            <div>
                <h1>Hi my Name is John Rey M. Nazareno!</h1>
                <br>
                
                <p>Some people call me "Jenny" or "jr". I am currently 19 years old and is studying at Asia Pacific College. I am a second year student under the course of BS Information Technology with specialization in mobile and internet techonology   </p>
            </div>
        </div>
    </section>




<!--Contact Me-->
    <section class="ContactSection" id="ContactSec">
        <div class = "ContactMeTitle">
            <h1> Contact Me </h1>
        </div>

        <div class="ContactMe">

            <!--Desctription-->

            <div class="ContactMeDescription">
                <h2>Contact Me</h2>
            </div>

            <!--Details-->

            <div class="ContactMeDetails">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" name="name" class="input-field" placeholder="Enter Your Name" required>
                    <input type="text" name="email" class="input-field" placeholder="Enter Email Address" required>
                    <input type="text" name="subject" class="input-field" placeholder="Enter Subject">
                    <textarea type="text" name="message" class="input-field textarea-field" placeholder="Enter Your Message" required></textarea>
                    <button type="submit" name="submit" class="btn" value="submit">Send</button>
                </form>

                <?php include 'form.php'; ?>
            </div>
        </div>
    </section>



<!--JavaScript-->
<section class="JavaScript">

</section>

    </body>
</html>