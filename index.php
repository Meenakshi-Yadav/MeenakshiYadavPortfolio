<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MeenakshiYadav Portfolio Website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        
        <!-- Update these with your own fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto+Slab:400,700&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <header>
            <div class="logo">
                <img src="img/devjane.png" alt="">
            </div>
            <button class="nav-toggle" aria-label="toggle navigation">
                <span class="hamburger"></span>
            </button>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Academics</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About me</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- Introduction -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Hi, I am <strong>Meenakshi Yadav</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">SOC Analyst</p>
            <img src="img/dev-jane-01.png" alt="a picture of Meenakshi smiling" class="intro__img">
        </section>
        
        
        <!-- My services -->
        <section class="my-services" id="services">
            <h2 class="section__title section__title--services">Academics</h2>
            <div class="services">
                <div class="service">
                    <h3>Secondary School Certificate</h3>
                    <p>Scored 10 CGPA from Lions Public School located in Gurugram, Haryana in the year 2015-2016.</p>
                </div> <!-- / service -->
                
                <div class="service">
                    <h3>Higher Secondary Certificate</h3>
                    <p>Scored 76% in science stream from Lions Public School located in GUrugram, Haryana in the year 2017-2018</p>
                </div> <!-- / service -->
                
                <div class="service">
                    <h3>Graduation</h3>
                    <p>Scored 9.03 CGPA currently persuing B.Tech in computer science engineering from VIT Bhopal University</p>
                </div> <!-- / service -->
            </div> <!-- / services -->
            
            <a href="#work" class="btn">My Work</a>
        </section>
        
        
        <!-- About me -->
        <section class="about-me" id="about">
           <h2 class="section__title section__title--about">Who I am</h2>
           <p class="section__subtitle section__subtitle--about">Software Engineer based out of Gurugram</p>
           
           <div class="about-me__body">
               <p>I am currently a final year student at Vellore Institute of Technology persuing bachelor in technology(B.Tech.) in computer science engineering. I am a nasscom certified bronze level SOC analyst. 
               Placed in Bank of America.</div>
           
           <img src="img/dev-jane-02.jpeg" alt="Meenakshi leaning against a wall" class="about-me__img">
        </section>
        
        <!-- My Work -->
        <section class="my-work" id="work">
            <h2 class="section__title section__title--work">My work</h2>
            <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>
            
            <div class="portfolio">
                <!-- Portfolio item 01 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="img/portfolio-01.png" alt="" class="portfolio__img">
                </a>
                
                <!-- Portfolio item 02 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="img/portfolio-02.png" alt="" class="portfolio__img">
                </a>
                
                <!-- Portfolio item 03 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="img/portfolio-03.jpg" alt="" class="portfolio__img">
                </a>
                
                <!-- Portfolio item 04 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="img/portfolio-04.png" alt="" class="portfolio__img">
                </a>
                
                <!-- Portfolio item 05 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="img/portfolio-05.jpeg" alt="" class="portfolio__img">
                </a>
                
                <!-- Portfolio item 06 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="img/portfolio-06.jpeg" alt="" class="portfolio__img">
                </a>
                
                <!-- Portfolio item 07 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="img/portfolio-07.jpeg" alt="" class="portfolio__img">
                </a>
                
                <!-- Portfolio item 08 -->
                <a href="#" class="portfolio__item">
                    <img src="img/portfolio-08.jpeg" alt="" class="portfolio__img">
                </a>
             
            </div>
        </section>
        
        
        <!-- Footer -->
        <footer class="footer">
            <!-- replace with your own email address -->
            <a href="mailto:imeenakshiyadav@gmail.com" class="footer__link">imeenakshiyadav@gmail.com</a>
            <ul class="social-list">
                <li class="social-list__item">
                    <a class="social-list__link" href="https://codepen.io">
                        <i class="fab fa-codepen"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="http://dribbble.com">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://github.com">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
            </ul>
        </footer>
        
        
        <script src="js/index.js"></script>
        
    </body>
</html>
