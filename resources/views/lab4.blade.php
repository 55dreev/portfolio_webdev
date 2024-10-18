@extends('layouts.app')

@section('content')
<div class="lab-content">
    <div class="content-wrapper">
        <h1>Laboratory 4: Middleware</h1>
        <p class="lab-description">This is the fourth laboratory. We must implement middlewares in this laboratory, one wherein it should check if the age is over 18 to access the page, and older than 21 to become a fully verified member</p>
        <p class="lab-description">Here we made CheckAge and LoqRequests middleware, wherein the LogRequests store the logs in a logs.txt file in the storage folder</p>
        
        <div class="slideshow-container">
            <div class="slide fade">
                <img src="{{ asset('images/lab4direc.png') }}" alt="Slide 1">
                <div class="caption">Slide 1: Making the Components folder directory</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/checkage.png') }}" alt="Slide 2">
                <div class="caption">Slide 2: Inside the CheckAge middleware</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/logrequests.png') }}" alt="Slide 3">
                <div class="caption">Slide 3: Inside the LogRequests middleware</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/sampleoutput1.png') }}" alt="Slide 4">
                <div class="caption">Slide 4: Sample output 1</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/sampleoutput2.png') }}" alt="Slide 4">
                <div class="caption">Slide 5: Sample output 2</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/sampleoutput3.png') }}" alt="Slide 4">
                <div class="caption">Slide 6: Sample output 3</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/samplelogs.png') }}" alt="Slide 5">
                <div class="caption">Slide 7: Logging requests to a file</div>
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
