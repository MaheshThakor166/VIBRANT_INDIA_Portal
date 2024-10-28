<!-- resources/views/components/topcategoryy.blade.php -->
<section class="top-category section-margin" id="TopCategory">
    <div class="container">
        <div class="heading-section">
            <div class="main-heading">Top Categories</div>
            <div class="btn-view primary-btn">View More</div>
        </div>
        <div class="swiper mySwiper mx-lg-2 mx-md-2 mx-sm-0">
            <div class="swiper-wrapper">
                @if($topCategoryProducts && $topCategoryProducts->isNotEmpty())
                    @foreach($topCategoryProducts as $product)
                        <div class="swiper-slide">
                            <div class="card-view">
                                <div class="img-container zoom" onmousemove="zoom(event)">
                                    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}">
                                </div>
                                <p class="card-description">{{ $product->description }}</p>
                                <div class="card-bottom">
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
                                    <div class="d-flex justify-content-start mx-2">
                                        <a href="#" class="cta">
                                            <span>Inquiry</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
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
</section>
