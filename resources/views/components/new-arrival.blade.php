
<section class="section-margin" id="NewArrival">
    <div class="container">
        <div class="heading-section">
            <div class="main-heading">
                New Arrival Products
            </div>
            <div class="btn-view primary-btn">
                View More
            </div>
        </div>

        <div class="row g-1">
            @foreach($newArrivalCategoryProducts as $product)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card-view">
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('storage/' . $product->image_url) }}" class="product-image swiper-img" alt="{{ $product->name }}" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>

                        <div class="text-wrapper">
                            <p class="tranding-card-description content-txt">
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="card-bottom">
                            <h6 class="tranding-product-name">
                                <span class="title">Category:</span>
                                <span class="tranding-pro-name">{{ $product->category->name }}</span>
                            </h6>
                            <h6 class="tranding-product-name">
                                <span class="title">Product:</span>
                                <span class="trnding-pro-name">{{ $product->name }}</span>
                            </h6>
                            <h6 class="tranding-material-name">
                                <span class="tranding-material-title">Material:</span>
                                <span class="mt-name tranding-mt-name">{{ $product->material }}</span>
                            </h6>
                            <h6 class="tranding-product-size">
                                <span class="tranding-size-title">Size:</span>
                                <span class="tranding-sz-name">{{ $product->size }}</span>
                            </h6>
                            <div class="d-flex justify-content-start mx-2">
                                <a href="{{ route('inquiry', ['product' => $product->id]) }}" class="cta">
                                    <span>Inquiry</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
