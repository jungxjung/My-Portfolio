<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="author" content="Chih-Jung Chen, cc7916@rit.edu"> 
    <meta name="keywords" content="Chih-Jung, Chih-Jung Chen, Web-developer, teacher, RIT">
    <meta name = "description" content = "Chih-Jung Chen, an experienced language teacher and a web developer, welcomes challenges with open arms and relentlessly strives for a better self." />
    <meta property="og:image" content="https://people.rit.edu/~cc7916/646/Mystuff/porto/img/IMG_0677.JPG" />
    <meta property="og:image:alt" content="Chih-Jung looks at an art piece">
    <meta property="og:title" content="Chih-Jung Chen" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://people.rit.edu/~cc7916/646/Mystuff/porto/index.php" />
    <meta property="og:description" content="Chih-Jung Chen, an experienced language teacher and a web developer, welcomes challenges with open arms and relentlessly strives for a better self." />
    <title>Chih-Jung Chen</title>
    <!-- fav icon -->
    <link rel="icon" href="img/fav.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts 'Forum' 'Archivo Narrow' 'Archivo' 'Limelight' 'Shippori Mincho B1' 'Noto Sans TC'-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Archivo:wght@200&family=Forum&family=Limelight&family=Noto+Sans+TC:wght@100&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="css/animation-aos.css">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body data-mdb-spy="scroll" data-mdb-target="#navbarNav" data-mdb-offset="250">
    <nav id="mainnav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
              <!-- Nav logo -->
        <a class="navbar-brand me-2" href="#landing">
          <img
            id="jung"
            src="img/logo.svg"
            height="70"
            alt="logo"
            style="margin-top: -1px;"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#landing">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#edu">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#exp">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>

          <div class="nav-item d-flex align-items-center ms-auto">
            <button onclick="changeL()" id="btnL" type="button" class="btn btn-primary me-2">
            中文
            </button>
          </div>
        </div>


      </div>
    </nav>
    
    <!-- Start your project here-->
        <div class="landing" id="landing">
          <div id="particles-js"></div>
          <div data-aos="fade-left" class="p-3" id="landing-msg">
            <p class="h3" id="landingP">
            CHIH-JUNG CHEN,<br>an experienced <b>language teacher</b> and a <b>web developer</b>, welcomes challenges 
            with open arms and relentlessly strives for a better self.
            </p>
          </div>
        </div>


        <!-- Education -->
        <div class="edu container mt-5" id="edu">
          <h1 class="display-4" id="edu-heading">Education</h1>

          <!-- NCCU -->
          <div class="flex-edu shadow-4-strong mt-5" data-aos="fade-right">
            <div class="flex-item-left p-3 ">
              <img src="img/logo_en.png" alt="National ChengChi University Logo">
            </div>
            <div class="flex-item-right p-3">
              <div>
                <p class="school">
                  2016 <br>
                  <b>Bachelor of Arts in Economics</b><br>
                  National Chengchi University, Taipei, Taiwan
                </p>
              </div>
            </div>
          </div>

          <!-- RU -->
          <div class="flex-edu shadow-4-strong mt-5" data-aos="fade-right">
            <div class="flex-item-left p-3 ">
              <img src="img/HR_logo_midjad_transparent.png" alt="Reykjavik University Logo">
            </div>
            <div class="flex-item-right p-3">
              <div>
                <p class="school">
                  2015 Exchange Student<br>
                  <b>Business Adminitration</b> <br>
                  Reykjavík University, Reykjavík, Iceland
                </p>
              </div>
            </div>
          </div>

          <!-- WashU -->
          <div class="flex-edu shadow-4-strong mt-5" data-aos="fade-right">
            <div class="flex-item-left p-3 ">
              <img src="img/washu.png" alt="Washington University Logo">
            </div>
            <div class="flex-item-right p-3">
              <div>
                <p class="school">
                  2017 <br>
                  <b>WUSTL-ALLEX Chinese Teacher Training Institute</b> <br>
                  Washington University in St. Louis,  Missouri, US
                </p>
              </div>
            </div>
          </div>

          <!-- RIT -->
          <div class="flex-edu shadow-4-strong mt-5" data-aos="fade-right">
            <div class="flex-item-left p-3 ">
              <img src="img/RIT_rgb_hor_k1.png" alt="Rochester Institute of Technology Logo">
            </div>
            <div class="flex-item-right p-3">
              <div>
                <p class="school">
                  2021 <br>
                  <b>Master of Science in Human-Computer Interaction</b> <br>
                  <b>Web Development Advanced Certificate</b> <br>              
                  Rochester Institute of Technology, New York, US
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Experience -->
        <div class="exp container mt-5" id="exp" data-aos="zoom-in">
          <h1 class="display-4" id="exp-heading">Experience</h1>

          <div class="flex-exp mt-3">
            <div class="flex-exp-left">
              <section>
                <h2 id="exp-work">Work</h2>
                
                <h5 class="work-title">Global Student Coordinator</h5>
                <span class="work-place">
                  RIT, New York, US | Oct 2019 - Present
                </span>            
                <ul class="work-duty">
                  <li>Organizing application paperwork and manage communication with participating students</li>
                  <li>Coordinating program events such as airport arrivals/departures, speaker events, and field trip activities</li>
                  <li>Evaluating and tracking data associated with the programs</li>
                  <li>Planning and hosting virtual events for online programs</li>
                </ul>
                

                <h5 class="work-title">Instructer - Mandarin Chinese</h5>
                <span class="work-place">
                  Allegheny College, Pennsylvania | Aug 2018 - May 2019
                </span>
                <ul class="work-duty">
                  <li>Taught 1 Advanced Chinese Class and 1 Beginning Chinese in Fall, 2018</li>
                  <li>Designed and conducted 1 Chinese Language and Culture Class in Spring, 2019</li>
                  <li>Designed slides, supporting materials, and incorporated educational technology in class activities for Beginning Chinese Class</li>
                </ul>


                <h5 class="work-title">Teaching Assistant - Mandarin Chinese</h5>
                <span class="work-place">
                  Allegheny College, Pennsylvania | Aug 2017 - Aug 2018
                </span>
                <ul class="work-duty">
                  <li>Hosted weekly Chinese practice sessions for beginning, intermediate, and advanced class students</li>
                  <li>Organized Chinese cultural events such as 2018 Spring Festival</li>
                  <li>Managed and maintained a Chinese learning environment in Chinese Language House</li>
                </ul>


                <h5 class="work-title">Intern, Ericsson Taiwan</h5>
                <span class="work-place">Dec 2016 - Jun 2017</span>
                <ul class="work-duty">
                  <li>Kept track of project spending, processed invoices, made sure the price amount on the invoices matched the number on our purchase order</li>
                  <li>Documented project process on implementing 4000 cell towers</li>
                  <li>Assisted in making presentation materials, e.g., handouts, slides</li>
                </ul>
              </section>

            </div>
            <div class="flex-exp-right">
              <section>
                <h2 id="exp-awards">Awards and Fundings</h2>
                <ul id="awards-list">
                  <li>
                    Edward David, Class of 1961, Faculty Support Fund - 2019
                  </li>
                  <li>
                    Demmler Awards for Teaching Innovation - 2018
                  </li>
                  <li>
                    Winner of 2017 ALLEX Scholarship (Alliance for Language Learning and Educational Exchange) - 2017
                  </li>
                </ul>
              </section>

              <br>

              <section>
                <h2 id="exp-presentation">Public Presentations</h2>
                <p class="ms-4 presentation">
                  <b>2019 CLTA Annual Conference</b> <br>
                  Xiaoling, S., Kaidi, C., Chih-Jung, C. Meeting the Challenges: Cultural
                  Infusion, Digital/Social Media Engagement, And Communal Learning in
                  Chinese Language/Culture Program
                </p>

                <p class="ms-4 presentation">
                  <b>2019 ASIANetwork 27th Annual Conference</b> <br> 
                  Chih-Jung, C Designing Video Game in the Chinese Classroom
                </p>
              </section>

              <br>

              <section>
                <h2 id="exp-certification">Certifications and Qualifications</h2>
                <ul id="certificate">
                  <li>Certificate of Teachers of Chinese to Speakers of Other Languages (TCSOL) (2016)</li>
                  <li>Passed the Professional and Technical Examinations for Tour Guides in Taiwan (2013)</li>
                </ul>
              </section>

              <br>

            </div>
          </div>

          <div class="exp-gradient">
            EXPERIENCE
          </div>

        </div>

        <!-- Projects -->
        <div class="projects container mt-5" id="projects">
          <h1 class="display-4" id="project-heading">Projects</h1>

          <!-- Upstat -->
          <div class="projects-flex container upstat" data-aos="flip-down">
            <div class="projects-flex-left">
              <img src="img/Screenshot 2021-05-24 010126.png" alt="">
            </div>
            <div class="projects-flex-right container">
              <section>
                <h2 class="mt-3 project-title">UPSTAT - Web Design</h2>
                <p class="project-description">
                  Our team, SpideRIT, designed and built a website for American Statistical 
                  Association, upstate New York region chapter’s annual conference, UPSTAT 
                  (Upstate New York Statistics Conference)
                  <br>
                  I was responsible of designing and setting up the database
                </p>           
              </section>
              <span>2021</span>

            </div>
          </div>

          <!-- My Medical Journal -->
          <div class="projects-flex container mmj" data-aos="flip-down">
            <div class="projects-flex-left">
              <video muted autoplay loop>
                <source src="img/Media1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="projects-flex-right container">
              <section>
                <h2 class="project-title">My Medical Journal - Phone App Design</h2>
                <p class="project-description">
                  My Medical Journal is an app that helps users keep track of their doctor 
                  appointments, prescriptions, and health history.  
                  We designed this app by analyzing data from interviews, generating user 
                  personas, and making prototypes. Our procedures can be seen on this website.<br>
                  🔗<a href="https://ap3673.wixsite.com/mymedicaljournal">My Medical Journal</a>
                </p>
              </section>
              <span>2020</span>
            </div>
          </div>

          <div class="projects-flex container wegmans" data-aos="flip-down">
            <div class="projects-flex-left">
              <video muted autoplay loop>
                <source src="img/wegmans.mp4" type="video/mp4">
              </video>
            </div>
            <div class="projects-flex-right container">
              <section>
                <h2 class="project-title">Wegmans - Usability Testing</h2>
                <p class="project-description">
                  Wegmans, a grocery chain store in the US, launched a new version 
                  of their shopping application in late 2019. We worked with Wegmans’s 
                  customer service manager to collect user experiences on the new app 
                  through usability testing and user interviews. We provided a full 
                  evaluation report and presentation to Wegmans, in which we pointed 
                  out pain points that users might have while using the app and design advice.
                </p>
              </section>
              <span>2020</span>
            </div>
          </div>
        </div>

        <!-- About -->
        <div class="about container mt-5" id="about">
          <h1 class="display-4" id="about-heading">About</h1>
          <div class="row">
            <div class="col" data-aos="flip-left" data-aos-duration="3000" data-aos-delay="100">
              <img src="img/about1.JPG" alt="Chih-Jung's picture">
              <img src="img/about2.jpg" alt="sourdough bread">
              <img src="img/about3.JPG" alt="self-portrait drawing">
            </div>
            <div class="col" data-aos="flip-left" data-aos-duration="2000" data-aos-delay="300">
              <img src="img/about4.JPG" alt="pineapple pastries">
              <img src="img/about5.JPG" alt="square cookies">
              <img src="img/about6.JPG" alt="Chih-Jung's picture">
            </div>
            <div class="col" data-aos="flip-left" data-aos-duration="2300" data-aos-delay="300">
              <img src="img/about7.JPG" alt="a butter cookie">
              <img src="img/about8.jpg" alt="Chih-Jung's picture">
              <img src="img/about9.jpg" alt="chocolate braided bread">
            </div>
            <div class="col-p container">
              <p id="about-description">
                I am a professionally trained 👩‍🏫<b>language teacher</b> and a 💻<b>web developer</b> with a million hobbies across diverse fields. <br> <br>

                ✈️<b>Traveler</b>: I backpack-traveled from Iceland to Italy. It was tough traveling alone with a massive backpack on you 
                without reliable wifi, but it sure was fun, and I got tons of great memories to tell my grandchildren. <br> <br>

                👩🏼‍🍳<b>Baker</b>: Baking is my hobby and part of my life. I don't buy bread from grocery stores anymore. I make my 
                own bread, especially sourdough bread. I also bake cookies, cakes, and pineapple pastries (fenglisu)! <br> <br>

                ✏️<b>Drawer</b>: I draw with pencils, simply black and white. Pencils are affordable, erasable with excellent 
                mobility, perfect for a traveler like me. I once sold a self-portrait for 200 USD, which could possibly 
                be the peak of my artist life.
              </p>
            </div>
          </div>
        </div>

        <!-- Contact -->
        <div class="contact container mt-5" id="contact">
          <h1 class="display-4" id="contact-heading">Contact</h1>
          <p class="ms-4" id="contact-msg">Let's get in touch!😁 <br>Connect with me on social media or leave me a message, and I will get back to you ASAP.</p>
          <div class="contact-flex container">
            <div class="contact-flex-left container">
              <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="vName" name="vName" class="form-control" />
                  <label class="form-label contact-label" for="vName">Name</label>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="vEmail" name="vEmail" class="form-control" />
                  <label class="form-label contact-label" for="vEmail">Email address</label>
                </div>
              
                <!-- Message input -->
                <div class="form-outline mb-4">
                  <textarea class="form-control" id="vMsg" name="vMsg" rows="4"></textarea>
                  <label class="form-label contact-label" for="vMsg">Message</label>
                </div>
              
                <!-- Checkbox -->
                <div class="form-check d-flex mb-4">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value="yes"
                    id="vCheck"
                    name="vCheck"
                    checked
                  />
                  <label class="form-check-label contact-label" for="vCheck">
                    Send me a copy of this message
                  </label>
                </div>
              
                <!-- Submit button -->
                <input type="submit" value="sent" name="vSubmit" class="btn btn-primary btn-block mb-4" id="sendBtn">
              </form>
            </div>

            <div class="contact-flex-right container">
              <ul>
                <li><i class="fas fa-envelope-square"></i><a href="mailto:cc7916@rit.edu"> Email: cc7916@rit.edu</a></li>
                <li><i class="fab fa-linkedin"></i><a href="https://www.linkedin.com/in/chih-jung-chen/"> LinkedIn: @chih-jung-chen</a></li>
                <li><i class="fab fa-instagram"></i><a href="https://www.instagram.com/chihjung.c/"> Instagram: @chihjung.c</a></li>
              </ul>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93091.5849210144!2d-77.68643855097207!3d43.186160138432285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6b3059614b353%3A0x5a001ffc4125e61e!2sRochester%2C%20NY!5e0!3m2!1sen!2sus!4v1622733695397!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          

          <?php 
            if (isset($_POST['vSubmit']) && isset($_POST['vName']) && isset($_POST['vEmail']) && isset($_POST['vMsg'])) { 
              $toV = $_POST['vEmail'];
              $toM = "jungxjung@gmail.com";
              $subjectM = "Mail from my portfolio:".$_POST['vName'];
              $subjectV = "👋Hi! ".$_POST['vName'];
              $msgM = $_POST['vName']."\r\n".$_POST['vEmail']."\r\n".$_POST['vMsg'];
              $msgV = $_POST['vMsg']."\r\n\r\nThank you, ".$_POST['vName'].", for you message. I will get back to you ASAP!😀 \r\n\r\nChih-Jung Chen";
              $header = date("M,d,Y h:i:s A");
              $emailM = mail($toM,$subjectM,$msgM,$header);

              if(isset($_POST['vCheck']) && $_POST['vCheck'] == "yes"){
                $emailV = mail($toV,$subjectV,$msgV,$header);
              }
          } else if(isset($_POST['vSubmit'])){
            echo '<script type="text/javascript">
                    window.alert("Make sure you give me your name and email before you submit.")
                  </script>';
          } 
          ?>
        </div>


    
    <!-- <script>
      //Make sure refresh won't resent the form
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
    </script> -->


    <footer class="mt-5">
      <!-- Copyright -->
       <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Chih-Jung Chen 陳芝蓉
        <img src="img/fav.png" height="40" alt="my logo" class="float-end">
      </div>
      <!-- Copyright -->
    </footer>
    

    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
    <script type="text/javascript"></script>
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>AOS.init(
        {
            easing: 'ease-out-back',
            duration: 1000
        }
      );</script>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/jscript.js"></script>
    
    
    
    <!-- End your project here-->
  </body>

</html>
