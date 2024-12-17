<!DOCTYPE html>
<html lang="en">
<x-head/>
<body>
    <x-innerheader />
    <section class="content product-detail-container">
        <div class="product-container container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <article class="demo-area">
                        <div class="product-img">
                            <a class="demo-trigger" href="{{ asset($product->image_url) }}">
                                <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="detail">
                        <div class="product-details">
                            <h2 class="product-title">{{  $product->name }}</h2>
                            <p class="product-subtitle">{{ $product->description }}</p>

                            <!-- Product Information -->
                            <div class="product-info">
                                <div class="info-item">
                                    <div class="info-label">Category:</div>
                                    <div class="info-value">{{ $product->category->name }}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Subcategory:</div>
                                    <div class="info-value">{{ $product->subcategory->name }}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Material:</div>
                                    <div class="info-value">{{ $product->material }}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Size:</div>
                                    <div class="info-value">{{ $product->size }}</div>
                                </div>
                                <div class="info-item">
                                    {{-- <div class="info-label">Weight:</div>
                                    <div class="info-value">{{ $product->weight }}</div> --}}
                                    <div class="info-value bottom-btn">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
    <x-script/>
</body>
</html>
