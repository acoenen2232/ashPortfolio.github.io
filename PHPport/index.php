<!DOCTYPE html>
<html>
<head>
<title>Ashley Kay's Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script src="https://kit.fontawesome.com/53197dce7d.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" 
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
<script src="script.js" ></script>
</head>


<body>
 
        <div class="front" id="home">
            <header>

                <!-- Navbar -->
                
                <div class="top">
                    <div class="bar" id="myNavbar">
                        <a class="bar-item button hover-black hide-medium hide-large right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                          <i class="fa fa-bars"></i>
                        </a>
                        <a href="#home" class="bar-item button">HOME</a>
                        <a href="#about" class="bar-item button hide-small"> ABOUT</a>
                        <a href="#portfolio" class="bar-item button hide-small"> PORTFOLIO</a>
                        <a href="#contact" class="bar-item button hide-small"> CONTACT</a>
                       
                        </a>
                    </div>
                    
                      <!-- Navbar on small screens -->
                      <div id="navDemo" class="bar-block white hide hide-large hide-medium">
                        <a href="#about" class="bar-item button" onclick="toggleFunction()">ABOUT</a>
                        <a href="#portfolio" class="bar-item button" onclick="toggleFunction()">PORTFOLIO</a>
                        <a href="#contact" class="bar-item button" onclick="toggleFunction()">CONTACT</a>
                      
                      </div>
                </div>
            </header>

           
              <h1 class="centerleft ash">Ashley</h1>
              <h1 class="center kay">Kay</h1>
          
                <!--  <h3> <i class="fas fa-laptop-code"></i></h3> -->

        </div>


<div class="page">
    <div class="content">
        <div class="content container padding-64" id="about">
            <h2 class="center"> About Me</h2>
            <h5 class="center"> I design and build experiences that make people's lives <strong>simple</strong>.</h5>
           <div class="grad"> <p> I am a recent graduate from University of Nebraska-Omaha. After graduating in 2020, I grew a love for web development.
             I decided to pursue a career in the field while continuing you teach myself new skills. I’m currently self-employed and am working with a selected
freelance client base. In my free time, I enjoy spending time with my dog, family, and friends. I love working out and going for hikes and walks.  </p>
            </div>
            <div class="row">
                <div class="col m6 center padding-large grad">
                <br>
                    <img src="images/personal/Graduation-pup.jpg" class="round image opacity hover-opacity-off" alt="Photo of Me" width="500" height="333">
                    <p class="name"><b><i class="fa fa-user margin-right"></i>Ashley Kay</b></p>
                  </div>
                
                    <!-- Hide this text on small devices -->
                <div class="col m6 hide-small padding-large welcome">
                    <p>Welcome to my website. I created this website as a way to display my skills and work. I recently finished a site for the Nebraska Vietnam Veterans.
                       </p>
                </div>
            </div>


        </div>
    </div>

    <p class="large center padding-16">My Skills:</p>
      <p class="wide"><i class="fa fa-camera"></i>HTML</p>
      <div class="light-grey">
        <div class="container padding-small dark-grey center" style="width:85%">95%</div>
      </div>
      <p class="wide"><i class="fa fa-laptop"></i>CSS</p>
      <div class="light-grey">
        <div class="container padding-small dark-grey center" style="width:70%">90%</div>
      </div>
      <p class="wide"><i class="fa fa-photo"></i>javascript</p>
      <div class="light-grey">
        <div class="container padding-small dark-grey center" style="width:35%">35%</div>
      </div>
      <p class="wide"><i class="fa fa-photo"></i>PHP</p>
      <div class="light-grey">
        <div class="container padding-small dark-grey center" style="width:30%">30%</div>
      </div>
    </div>



    <div class="bgimg-2 container opacity-min">
      <div class="display-middle">
        <span class="xxlarge text-white wide">PORTFOLIO</span>
      </div>
    </div>
    
    <!-- Container (Portfolio Section) -->
    <div class="content container padding-64" id="portfolio">
      <h3 class="center">MY WORK</h3>
      <p class="center"><em>Here are my creations.<br> </em></p><br>
      <!-- <div class="row Work">
        <div class="col VVA"> -->
            <a href="http://vva279.org/" ><img src="Images/VVA.PNG" class="round work gray hover-gray-off"></a>
            <h2 id="work"><span id="html">HTML </span><span id="css"> CSS </span> <span id="script"> javascript</span></h2>
    </div>

        <!-- Container (Contact Section) -->
        <div class="content container padding-64" id="contact">
            <h3 class="center">Contact Me!</h3>
            <p class="center"><em>I'd love your feedback!</em></p>
          
            <div class="row">
              <div class="col m4 container">
                <img src="images/Omaha.jpg" class="image round hide-small">
              </div>
              <div class="col m8 panel">
                <div class="large margin-bottom">
                  <i class="fa fa-map-marker fa-fw hover-text-black xlarge margin-right"></i> Omaha, NE<br>
                  <!-- <i class="fa fa-phone fa-fw hover-text-black xlarge margin-right"></i> Phone: +00 151515<br> -->
                  <i class="fa fa-envelope fa-fw hover-text-black xlarge margin-right"></i> Email: acoenen2232@gmail.com<br>
                </div>
                <p>Send me a message:</p>
                <form action="note.php"method="POST">
            
                <?php
                  if (isset($_GET['first'])) {
                    $first = $_GET['first'];
                    echo '<input class="border contact" type="text" placeholder="First name" name="first" value="'.$first.'">';
                  }
                  else {
                    echo '<input class="border contact" type="text" placeholder="First name" name="first">';
                  }
                  if (isset($_GET['last'])) {
                    $last = $_GET['last'];
                    echo '<input class=" border contact" type="text" placeholder="Last name" name="last" value="'.$last.'">';
                  }
                  else {
                    echo '<input class=" border contact" type="text" placeholder="Last name" name="last">';
                  }
                  ?>
                    <input class="border contact" type="email" placeholder="Email" name="email">
                
                <?php
                  if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                    echo '<textarea <input class="border message contact"  style="height:400px" type="text" placeholder="Message" name="message" value="'.$message.'"></textarea>';
                  }
                  else {
                    echo '<textarea <input class="border message contact"  type="text" placeholder="Message" name="message"></textarea>';
                  }
                  ?>
                  <button class="contactbutton section" type="submit" name="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                  </button>
         
                </form>

                <?php
                  /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                  if (strpos($fullUrl, "note=empty") == true) {
                    echo "<p class= 'error'>You did not fill in all fields! </p>";
                    exit();
                  }
                  elseif (strpos($fullUrl, "note=char") == true) {
                    echo "<p class= 'error'>You used invalid characters! </p>";
                    exit();
                  }
                  elseif (strpos($fullUrl, "note=email") == true) {
                    echo "<p class= 'error'>You used an invalid e-mail! </p>";
                    exit();
                  }
                  elseif (strpos($fullUrl, "note=success") == true) {
                    echo "<p class= 'success'>Message sent! </p>";
                    exit();
                  }*/
                  if (!isset($_GET['note'])) {
                   exit();
                  }
                  else {
                    $noteCheck = $_GET['note'];

                    if ($noteCheck == "empty") {
                      echo "<p class= 'error'>You did not fill in all fields! </p>";
                      exit();
                    }
                    elseif ($noteCheck == "char") {
                      echo "<p class= 'error'>You used invalid characters! </p>";
                    exit();
                    }
                    elseif ($noteCheck == "email") {
                      echo "<p class= 'error'>You used an invalid e-mail! </p>";
                      exit();
                    }
                    elseif ($noteCheck == "success") {
                      echo "<p class= 'success'>Message sent! </p>";
                      exit();
                    }
                  }
                ?>
              </div>
            </div>
          </div>

</div>
</body>

</html>