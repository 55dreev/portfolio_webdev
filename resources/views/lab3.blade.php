@extends('layouts.app')

@section('content')
<div class="lab-content">
    <div class="content-wrapper">
        <h1>Laboratory 3: Layout</h1>
        <p class="lab-description">This is the third laboratory, here we must make a layout file where we will define the basic HTML structure in a seperate file called Layout.blade.php</p>
        <p class="lab-description">This is the second laboratory we made as a group.</p>
        <div class="slideshow-container">
            <div class="slide fade">
                <img src="{{ asset('images/layoutdirectory.png') }}" alt="Slide 1">
                <div class="caption">Slide 1: Making the Components folder directory</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/layoutimage.png') }}" alt="Slide 2">
                <div class="caption">Slide 2: Setting up the layout file</div>
            </div>
            <div class="slide fade">
                <img src="{{ asset('images/layoutimplementation.png') }}" alt="Slide 3">
                <div class="caption">Slide 3: Final output and implementation of the layout file</div>
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
