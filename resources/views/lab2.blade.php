@extends('layouts.app')

@section('content')
<div class="lab-content">
    <div class="content-wrapper">
        <h1>Laboratory #2: Routes</h1>
        <p class="lab-description">This second laboratory focuses on the routes. Where we must return the view of each page, also using route parameters as usernames which can also be accessed as a guest</p>
        <p class="lab-description">This is also a group project that consists of Me, Jethro Acuña, and Laiza Barias. Here we learned how to work together and solve the different problems we encountered in the parameters</p>
        <div class="slideshow-container">
            <div class="slide fade">
                <img src="{{ asset('images/lab2template.png') }}" alt="Slide 1">
                <div class="caption">Slide 1: The template of what we are starting with</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/lab2routes.png') }}" alt="Slide 2">
                <div class="caption">Slide 2: Setting up usernames as URL Parameters</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/lab2output.png') }}" alt="Slide 3">
                <div class="caption">Slide 3: Final output</div>
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
