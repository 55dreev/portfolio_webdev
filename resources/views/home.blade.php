@extends('layouts.app')

@section('content')
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
                <li>Automotives</li>
                <li>Sports</li>
                <li>Gaming</li>
            </ul>

            <h3>Contact</h3>
            <p>If you'd like to connect or collaborate, feel free to reach out!</p>
            <br><br>
            <p>E-Mail: <a href="mailto:aada2022-5733-94833@bicol-u.edu.ph">aada2022-5733-94833@bicol-u.edu.ph</a></p>
            <p>Phone Number: (+63) 9452985741</p>
        </div>
    </div>
</div>

<div id="portfolio" class="portfolio-section">
    <h2>My Portfolio</h2>
    <div class="portfolio-items">
        <div class="portfolio-item">
            <img src="{{ asset('images/karera.png') }}" alt="Setup Laboratory #1" class="portfolio-image">
            <h3><a href="{{ route('lab1') }}">Setup Laboratory #1</a></h3>
        </div>
        <div class="portfolio-item">
            <img src="{{ asset('images/lab2template.png') }}" alt="Routes Laboratory 2" class="portfolio-image">
            <h3><a href="{{ route('lab2') }}">Routes Laboratory 2</a></h3>
        </div>
        <div class="portfolio-item">
            <img src="{{ asset('images/layoutimplementation.png') }}" alt="Layout Laboratory 3" class="portfolio-image">
            <h3><a href="{{ route('lab3') }}">Layout Laboratory 3</a></h3>
        </div>
        <div class="portfolio-item">
            <img src="{{ asset('images/sampleoutput3.png') }}" alt="Middleware Laboratory #4" class="portfolio-image">
            <h3><a href="{{ route('lab4') }}">Middleware Laboratory #4</a></h3>
        </div>
    </div>
    <div class="view-github">
        <a href="https://github.com/Jethro0329/Group2/tree/main" class="github-link">View GitHub Project</a>
    </div>
</div>


<div id="contact" class="contact-section">
    <h2>Contact Me</h2>
    <p>E-Mail: <a href="mailto:aada2022-5733-94833@bicol-u.edu.ph">aada2022-5733-94833@bicol-u.edu.ph</a></p>
    <p>Phone Number: (+63) 9452985741</p>
    <div class="view-github-profile">
        <a href="https://github.com/55dreev" class="github-profile-link">View GitHub Profile</a>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const scrollTo = urlParams.get('scroll');

        if (scrollTo) {
            const element = document.getElementById(scrollTo);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
</script>
@endsection
