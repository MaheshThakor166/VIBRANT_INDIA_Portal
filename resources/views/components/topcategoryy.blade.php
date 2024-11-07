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
                                <a href="{{ route('productdetails', $product->id) }}" class="card-link"></a>
                                <div class="image-container">
                                    <div class="thumbnail_container">
                                        <div class="thumbnail">
                                            <img src="{{ asset('storage/' . $product->image_url) }}" class="product-image swiper-img" alt="{{ $product->name }}" onclick="openPopup(this)">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-wrapper">
                                    <p class="card-description content-txt" id="description-{{ $product->id }}">
                                        <span class="visible-text">
                                            {{ Str::limit($product->description, 30) }}
                                        </span>
                                
                                        <span class="more-text" style="display:none;">
                                            {{ substr($product->description, 30) }}
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
                                        <a href="{{ route('inquiryform', ['product_id' => $product->id]) }}" class="cta">
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
