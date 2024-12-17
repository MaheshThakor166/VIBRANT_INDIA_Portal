<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
</head>
<body>
    <x-header />

    <section class="blog-inner-section section-margin">
        <div class="container">
            <h2 class="title">{{ $blog->heading }}</h2> <!-- Display dynamic heading -->
            <h4 class="sub-content">
                {{ $blog->detail_subcontent }} <!-- Display dynamic subcontent -->
            </h4>

            <div class="img-container">
               <div class="thumbnail_container">
                <div class="thumbnail">
                @if($blog->image_url) <!-- Check if image exists -->
                    <img src="{{ asset('storage/' . $blog->image_url) }}" alt="{{ $blog->heading }}" style="width: 100%; height: auto;"> 
                @else
                    <span>No Image</span>
                @endif
            </div>
        </div>
            </div>

            <p class="text-content">
                {{ $blog->textcontent1 }} <!-- Display dynamic textcontent -->
            </p>

            @if($blog->subtitle2 && $blog->textcontent2)
                <div class="additional-content">
                    <h4>{{ $blog->subtitle2 }}</h4>
                    <p>{{ $blog->textcontent2 }}</p>
                </div>
            @endif
        </div>
    </section>

    <x-footer />
</body>
</html>
