
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="keywords" content="Elvir,elvir,kabashi,elvirkabashi,ElvirKabashi">
    <meta name="author" content="Elvir Kabashi">
    <meta name="description" content="Portfolio">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    
    
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <title>Elvir Kabashi</title>
</head>
<body>


    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <!--pjesa par-->
    <nav class="navbar">
       <div class="max-width">
           <a href="index.php"><div class="logo"><img src="./assets/img/logo.png" class="logo"></div></a>
           <ul class="menu" id="menu">
               <li><a href="#home" class="menu-btn">Home</a></li>
               <li><a href="#about" class="menu-btn">About</a></li>
               <li><a href="#services" class="menu-btn">Services</a></li>
               <li><a href="#skills" class="menu-btn">Skills</a></li>
               <li><a href="#contact" class="menu-btn">Contact</a></li>                  
           </ul>
           <div class="menu-btn">
               <i class="fas fa-bars"></i>
           </div>
       </div>
    </nav>

 
 <script>
    $(document).ready(function(){
        $(window).scroll(function(){
            if(this.scrollY > 20){
                $('.navbar').addClass('sticky')
            }
            else{
                $('.navbar').removeClass('sticky')
            }
            if(this.scrollY > 500){
                $('.scroll-up-btn').addClass('show') 
            }
            else{
                $('.scroll-up-btn').removeClass('show')
            }
        })



        $('.scroll-up-btn').click(function(){
            $('html').animate({scrollTop: 0});
        })

        //text animation
        var typed = new Typed(".typing",{
            strings: ["Web Developer", "Desinger", "Photo/Video Editor"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true
        })
        
        var typed = new Typed(".typing-2",{
            strings: ["Web Developer", "Desinger", "Photo/Video Editor"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true
        })

        //responzive button
        $('.menu-btn').click(function(){
            $('.navbar .menu').toggleClass('active');
            $('.menu-btn i').toggleClass('active');
        })
    })



 </script>


<section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text1">Hello,My name is</div>
            <div class="text2">Elvir Kabashi</div>
            <div class="text3">And I'm a <span class="typing"></span></div> 
            <a href="http://elvirsocial.eu5.org/">Hire me</a>          
        </div>
    </div>
</section>


<!--about me-->

<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About me</h2>
         <div class="about-content">
            <div class="column left">
                 <img src="./assets/img/about.jpg" alt="">
                </div>
                   <div class="column right">
                <div class="text">I'm Elvir Kabashi and I'm a <br><span class="typing-2"></span></div><p>Hello, my name is Elvir Kabashi and I am <span id="mosha"></span> years old. I was born on 21.03.2003 in Prizren and I live in Korisha. I finished primary school in my hometown and high school at Mehmet Akif College, now I am studying at the University of Business and Technology (UBT) for Computer Science and Engineering, namely Software Systems Engineering in Prishtina, knowledge of my skills I received in the course of programming at the Digital School in Prizren, after that I had the idea to continue in this direction.</p>
                <a href="https://drive.google.com/file/d/1lCTMXIGLvcR177Jcsvv39QM3YV9ow9gM/view?usp=sharing">Download CV</a>            </div>
         </div>
    </div>
</section>

<!--Services-->
<section class="services" id="services">
    <div class="max-width">
        <h2 class="title">My services</h2>
         <div class="serv-content">
           <div class="card">
               <div class="box">
                   <i class="fas fa-code"></i>
                   <div class="text">Web Developer</div>
                   <p>About this I provide the view of a website,with the knowledge I have in</p>
                    <div>
                        <img src="./assets/img/phplogo.png" alt="" width="25" height="20">
                        <img src="./assets/img/html.png" alt="" width="25" height="25">
                        <img src="./assets/img/react.png" alt="" width="25" height="25">
                        <img src="./assets/img/java.png" alt="" width="25" height="25">
                        <img src="./assets/img/laravel.png" alt="" width="28" height="25">
                        <img src="./assets/img/spring.png" alt="" width="25" height="20">
                        <img src="./assets/img/bootstrap.png" alt="" width="60" height="25">
                        <img src="./assets/img/sass.png" alt="" width="30" height="25">
                        <img src="./assets/img/python.png" alt="" width="25" height="25">
                        <img src="./assets/img/djago.png" alt="" width="60" height="25">
                        <img src="./assets/img/css.png" alt="" width="25" height="25">
                        <img src="./assets/img/js.png" alt="" width="25" height="25">
                        <img src="./assets/img/mysql.png" alt="" width="40" height="25">
                    </div>
               </div>
           </div>

           <div class="card">
            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <div class="text">Web Desinger</div>
                <p>About this I provide Website Design, with the knowledge I have in Figma and Adobe Photoshop</p>
            </div>
           </div>

           <div class="card">
            <div class="box">
                <i class="fas fa-edit"></i>
                <div class="text">Photo/Video Editor</div>
                <p>About this I provide video and photo editing, with the knowledge I have in Adobe Premiere and Adobe Photoshop</p>
            </div>
        </div>
       
         </div>
    </div>
</section>

<!--My Skills-->

<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">My skills</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">My creative skills & experiences</div>
                <p>For the Web Developer platform I got the knowledge in the course where I was about a year and a half, but I learned editing videos and photos with toturial on youtube trying and realizing what I wanted, and these are my skills.</p>
                <a href="#">Read more</a>
            </div>
            <dic class="column right">
                <div class="bars">
                    <div class="info">
                    <span>
                        <div id=""><img src="./assets/img/html.png" width="20" height="20" alt="Html" class="icon1"><p class="icon1">Html</p> &</div> 
                        <div id="d1v"><img src="./assets/img/css.png" width="20" height="20" alt="CSS" class="icon1"><p class="icon1">CSS</p> &</div>
                        <div id="d2v"><img src="./assets/img/js.png" width="19" height="20" alt="JavaScript" class="icon1"><p class="icon1">Javascript</p></div>
                    </span>
                        <span>75%</span>
                    </div>
                    <div class="line html"></div>
                </div>

                <div class="bars">
                    <div class="info">
                    <span><div id="div1"><img src="./assets/img/phplogo.png" width="25" height="17" alt="PHP" class="icon1"><p>PHP</p> &</div> 
                        <div id="div2"><img src="./assets/img/java.png" width="23" height="20" alt="Java" class="icon1"><img src="spring.png" width="25" height="17" alt="SpringBoot" class="icon2"><p class="icon1">Java</p> &</div>
                        <div id="div3"><img src="./assets/img/python.png" width="23" height="20" alt="Python" class="icon1"><p>Python</p></div>
                    </span>
                        <span>40%</span>
                    </div>
                    <div class="line css"></div>
                </div>

                <div class="bars">
                    <div class="info">
                        <span>
                            <div id=""><img src="./assets/img/mysql.png" width="50" height="20" alt="PHP" class="icon1"> &</div> 
                            <div id=""><img src="./assets/img/mssql.png" width="65" height="20" alt="Java" class="icon1"> </div>
                        </span>
                        <span>80%</span>
                    </div>
                    <div class="line js"></div>
                </div>

                <div class="bars">
                    <div class="info">
                    <span>
                        <div id=""><img src="./assets/img/photoshop.png" width="20" height="20" alt="PHP" class="icon1">Photoshop &</div> 
                        <div id=""><img src="./assets/img/premiere.png" width="20" height="20" alt="Java" class="icon1">Premiere Pro </div>
                    </span>
                        <span>75%</span>
                    </div>
                    <div class="line pro"></div>
                </div>

            </dic>
        </div>
    </div>
</section>

<!--Contact-->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
                <p>If you want help or a project about these skills, or want to know more about me you can contact me on social media or fill in the spaces below and I will answer you very soon. Thank you for visiting me!</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Elvir Kabashi</div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Prizren, Kosovo</div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">kabashielvir1@gmail.com</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="column right desktop">
                <div class="text">Message me</div>
                <form  method="POST" action="send-email.php">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Subject" name="subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" name="send">Send message</button>
                    </div>
                </form>
            </div>

            <div class="column right mobile">
                <div class="text">Message me</div>
                <form  method="POST" action="send-email.php">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="field email">
                            <input type="text" placeholder="Subject" name="subject" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" name="send">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

 <script src="sc.js"></script>
</body>
</html>