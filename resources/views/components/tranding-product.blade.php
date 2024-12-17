<section class="section-margin" id="TrendingProducts">
    <div class="container">
        <div class="heading-section">
            <div class="main-heading">Trending Products</div>
            <a href="{{ route('alltrendingcategory') }}"  class="btn-view primary-btn">View More</a>
        </div>

        <div class="row g-1">
            @foreach($trendingProducts as $product)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
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
        </div>
    </div>
</section>
