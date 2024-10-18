<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <div id="home" class="hero-section" style="background-image: url('{{ asset('images/bg.jpg') }}');">
        <div class="overlay"></div>
        <h1>Welcome to my WebDev Portfolio</h1>
        <p>By Andreev Albert D. Ataiza</p>
        <button onclick="document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' });">View Portfolio</button>
    </div>

    <div id="about" class="about-section">
    <h2 class="about-title">About Me</h2>
    <div class="about-content">
    <div class="about-image">
    <img src="{{ asset('images/dreev.jpg') }}" alt="Your Picture">
</div>
        <div class="about-details">
            <p class="about-description">Hello! I'm Andreev Albert D. Ataiza, a junior web developer dedicated to creating dynamic and user-friendly websites.</p>
            <h3>Education</h3>
            <ul>
                <li>Saint Agnes Academy Elementary Department (2010-2016)</li>
                <li>Saint Agnes Academy JHS Department (2016-2020)</li>
                <li>Saint Agnes Academy SHS Department - STEM (2020-2022)</li>
                <li>Bicol University College of Science - Bachelor of Information Technology (2022- Present)</li>
            </ul>
            <h3>Skills</h3>
            <div class="about-skills">
               <ul>
                <li>HTML/CSS</li>
                <li>JavaScript</li>
                <li>PHP/Laravel</li>
                <li>MySQL</li>
                </ul>
            </div>

            <h3>Hobbies</h3>
            <ul>
                <li>Coding and Web Development</li>
                <li>Music Production</li>
                <li>Photography</li>
                <li>Traveling and exploring new cultures</li>
            </ul>
            

            <h3>Contact</h3>
            <p>If you'd like to connect or collaborate, feel free to reach out!</p>
            <br><br><p>E-Mail: aada2022-5733-94833@bicol-u.edu.ph</p>
             <p>Phone Number: (+63) 9452985741</p>
        </div>
    </div>
</div>

<div id="portfolio" class="portfolio-section">
    <h2>My Portfolio</h2>
    <div class="portfolio-items">
        <div class="portfolio-item">
            <img src="{{ asset('images/karera.png') }}" alt="Project 1 Image" class="portfolio-image">
            <h3>Setup Laboratory #1</h3>
            <p>Individual Website Laboratory, passed on August 26, 2024, 3:20 AMy</p>
            <a href="https://github.com/55dreev/laravel_webdev" target="_blank" class="github-link">View on GitHub</a>
        </div>
        <div class="portfolio-item">
            <img src="{{ asset('images/project2.jpg') }}" alt="Project 2 Image" class="portfolio-image">
            <h3>Project 2</h3>
            <p>Description of Project 2.</p>
            <a href="https://github.com/username/project2" target="_blank" class="github-link">View on GitHub</a>
        </div>
        <div class="portfolio-item">
            <img src="{{ asset('images/project3.jpg') }}" alt="Project 3 Image" class="portfolio-image">
            <h3>Project 3</h3>
            <p>Description of Project 3.</p>
            <a href="https://github.com/username/project3" target="_blank" class="github-link">View on GitHub</a>
        </div>
        <div class="portfolio-item">
            <img src="{{ asset('images/project3.jpg') }}" alt="Project 3 Image" class="portfolio-image">
            <h3>Middleware Laboratory #4</h3>
            <p>Middleware Laboratory, passed on October 6, 2024, 2:13 PM</p>
            <a href="https://github.com/55dreev/laravel_webdev_middleware" target="_blank" class="github-link">View on GitHub</a>
        </div>
    </div>
</div>

    <div id="contact" class="section">
        <h2>Contact Me</h2>
        <p>E-Mail: aada2022-5733-94833@bicol-u.edu.ph</p>
        <p>Phone Number: (+63) 9452985741</p>
    </div>
</body>
</html>
