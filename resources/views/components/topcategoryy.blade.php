<style>
    .text-wrapper {
        font-family: Arial, sans-serif;
        font-size: 14px;
        line-height: 1.6;
        color: #333;
    }

    .card-description {
        margin-bottom: 8px;
    }

    .visible-text {
        display: inline;
    }

    .more-text {
        display: none;
    }

    .read-more {
        color: #007bff;
        text-decoration: none;
        cursor: pointer;
        font-weight: bold;
        margin-left: 5px;
    }

    .read-more:hover {
        text-decoration: underline;
    }
</style>

<section class="top-category section-margin" id="TopCategory">
    <div class="container">
        <div class="heading-section">
            <div class="main-heading">Top Categories</div>
            <a href="{{ route('innertopcategory') }}"  class="btn-view primary-btn">View More</a>
        </div>
        <div class="swiper mySwiper mx-lg-2 mx-md-2 mx-sm-0">
            <div class="swiper-wrapper">
                @if($topCategoryProducts && $topCategoryProducts->isNotEmpty())
                    @foreach($topCategoryProducts as $product)
                        <div class="swiper-slide">
                            <div class="card-view">
                                <a href="{{ route('product.show', $product->id) }}" class="card-link"></a>
                                <div class="image-container">
                                    <div class="thumbnail_container">
                                        <div class="thumbnail">
                                            <img src="{{ asset($product->image_url) }}" class="product-image swiper-img" alt="{{ $product->name }}" onclick="openPopup(this)">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-wrapper">
                                    <p class="card-description content-txt" id="description-{{ $product->id }}">
                                        <span class="visible-text">
                                            {{ Str::limit($product->description, 100) }}
                                        </span>
                                        <span class="more-text">
                                            {{ substr($product->description, 100) }}
                                        </span>
                                    </p>
                                    <a href="javascript:void(0)" class="read-more" onclick="toggleReadMore({{ $product->id }})">Read More</a>
                                </div>
                                <div class="card-bottom">
                                    <h6 class="product-name">
                                        <span class="title">Category: </span>
                                        <span class="pro-name">{{ $product->category->name ?? 'N/A' }}</span>
                                    </h6>
                                    <h6 class="product-name">
                                        <span class="title">Product: </span>
                                        <span class="pro-name">{{ $product->name }}</span>
                                    </h6>
                                    <h6 class="material-name">
                                        <span class="material-title">Material: </span>
                                        <span class="mt-name">{{ $product->material }}</span>
                                    </h6>
                                    <h6 class="product-size">
                                        <span class="size-title">Size: </span>
                                        <span class="sz-name">{{ $product->size }}</span>
                                    </h6>

                                    <!-- CTA button within the card -->
                                    <div class="d-flex justify-content-start mx-2 bottom-btn">
                                        @auth
                                            <a href="{{ route('inquiryform', ['product_id' => $product->id, 'product_name' => $product->name]) }}" class="cta">
                                                <span>Inquiry</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}" class="cta">
                                                <span>Sign in to Inquire</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        @endauth
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No top category products available.</p>
                @endif
            </div>
            <br>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script>
        // Toggle function
      function toggleReadMore(productId) {
    var description = document.getElementById('description-' + productId);
    var moreText = description.querySelector('.more-text');
    var readMoreBtn = description.parentNode.querySelector('.read-more');

    if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "inline"; // Show the additional text
        readMoreBtn.textContent = "Read Less"; // Update button text
    } else {
        moreText.style.display = "none"; // Hide the additional text
        readMoreBtn.textContent = "Read More"; // Update button text
    }
}

document.addEventListener("DOMContentLoaded", function () {
    var descriptions = document.querySelectorAll('.card-description');
    descriptions.forEach(function (description) {
        var moreText = description.querySelector('.more-text');
        var readMoreBtn = description.parentNode.querySelector('.read-more');

        // Only show the "Read More" link if additional text exists
        if (!moreText.textContent.trim()) {
            readMoreBtn.style.display = "none";
        }
    });
});

    </script>
</section>
