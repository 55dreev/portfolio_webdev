@extends('layouts.app')

@section('content')
<div class="lab-content">
    <div class="content-wrapper">
        <h1>Laboratory #1: Setup and website making</h1>
        <p class="lab-description">This Individual Laboratory focused on setting up the Laravel web application framework</p>
        <p class="lab-description">Here I made simple website that consists of 3 views (Homepage, about, content) and also this is the laboratory where I prepared the env files and routes</p>
        <div class="slideshow-container">
            <div class="slide fade">
                <img src="{{ asset('images/lab1web.png') }}" alt="Slide 1">
                <div class="caption">Slide 1: Initial setup and coding of website</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/lab1route.png') }}" alt="Slide 2">
                <div class="caption">Slide 2: Routes Configuration process</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/karera.png') }}" alt="Slide 3">
                <div class="caption">Slide 3: Final overview</div>
            </div>
        </div>

        <a class="back-link" href="{{ route('home') }}">Back to Home</a>
    </div>
</div>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex - 1].style.display = "block";  
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
</script>
@endsection
