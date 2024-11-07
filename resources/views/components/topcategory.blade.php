<!-- resources/views/components/topcategoryy.blade.php -->
<section class="top-category section-margin" id="TopCategory">
    <div class="container">
        <div class="heading-section">
            <div class="main-heading">Top Categories</div>
            <div class="btn-view primary-btn">View More</div>
        </div>
        <div class="swiper mySwiper mx-lg-2 mx-md-2 mx-sm-0">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <!-- The link is applied to the entire card using CSS -->
                        <a href="{{ route('productdetails') }}" class="card-link"></a>
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to1.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>

                        <div class="text-wrapper">
                            <p class="card-description content-txt">
                                Vinod Classique Deluxe Stainless Steel Cookware Set of 4 pcs/Saucepan, Saucepot, Kadai and Frypan/Steel Utensils Cooking Set for Kitchen
                            </p>
                        </div>

                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span class="pro-name">Stainless Steel Houseware</span></h6>
                            <h6 class="product-name"><span class="title">Product: </span><span class="pro-name">Cookware Set</span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span class="mt-name">Stainless Steel</span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">(L) 5.00 in</span></h6>

                            <!-- CTA button within the card -->
                            <div class="d-flex justify-content-start mx-2 bottom-btn">
                                <a href="{{ route('inquiryform') }}" class="cta">
                                    <span>Inquiry</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Card 2 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <a href="{{ route('inquiryform') }}" class="card-link"></a>
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to2.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="card-description content-txt">
                                ergner Be Bergner Essentials TriPly Stainless Steel 4 Pcs Cookware Set - 22cm Indian
                                Wok/Kadai with Common Lid
                            </p>
                        </div>
                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span
                                    class="pro-name">Kitchen Ware</span></h6>
                            <h6 class="product-name"><span class="title">Product: </span><span class="pro-name">
                                    Bergner Essentials TriPly
                                </span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span
                                    class="mt-name">Stainless Steel</span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">
                                    22cm Frypan, 10cm
                                </span></h6>
                            <div class="d-flex justify-content-start mx-2">
                                {{-- <div class="inqury-cheap"><a href="#">Inquiry</a></div> --}}
                                <a href="{{ route('inquiryform') }}" class="cta bottom-btn">
                                    <span>Inquiry</span>
                                    {{-- <path d="M1,5 L11,5"></path>
                              <polyline points="8 1 12 5 8 9"></polyline> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <a href="{{ route('inquiryform') }}" class="card-link"></a>
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to3.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>
                            <div class="text-wrapper">
                                <p class="card-description content-txt">
                                    Larah by Borosil Luna Silk Series Opalware Dinner Set | 35 Pieces for Family of 6 |
                                    Microwave & Dishwasher Safe
                                </p>
                            </div>
                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span class="pro-name">Table
                                    Ware</span></h6>

                            <h6 class="product-name"><span class="title">Product: </span><span class="pro-name">
                                    Crockery Set
                                </span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span
                                    class="mt-name">Glass1</span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">
                                    0.2(m) 0.3(m)
                                </span></h6>
                            <div class="d-flex justify-content-start mx-2">
                                {{-- <div class="inqury-cheap"><a href="#">Inquiry</a></div> --}}
                                <a href="{{ route('inquiryform') }}" class="cta bottom-btn">
                                    <span>Inquiry</span>
                                    {{-- <path d="M1,5 L11,5"></path>
                                  <polyline points="8 1 12 5 8 9"></polyline> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div />
                        </div>
                    </div>
                </div>


                <!-- Card 4 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <a href="{{ route('inquiryform') }}" class="card-link"></a>
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to4.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="card-description content-txt">
                                Simran Handicrafts Wooden Serving And Cooking Spoons Wood Brown Spoons Kitchen
                            </p>
                        </div>
                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span
                                    class="pro-name">Utensils</span></h6>
                            <h6 class="product-name"><span class="title">Product: </span><span class="pro-name">
                                    Cooking Spoons
                                </span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span
                                    class="mt-name">Wood</span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">
                                    8.3L x 6.9W Centimeters
                                </span></h6>
                            <div class="d-flex justify-content-start mx-2">
                                {{-- <div class="inqury-cheap"><a href="#">Inquiry</a></div> --}}
                                <a href="{{ route('inquiryform') }}" class="cta">
                                  <span>Inquiry</span>
                                    {{-- <path d="M1,5 L11,5"></path>
                                  <polyline points="8 1 12 5 8 9"></polyline> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 5 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <a href="{{ route('inquiryform') }}" class="card-link"></a>
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to5.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="card-description content-txt">
                                MATIC HOUSEWARE Air Tight Containers Storage Set For Kitchen, Pantry Organization,
                                Bpa-Free, Dishwasher Safe
                            </p>
                        </div>
                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span
                                    class="pro-name">Plastic Ware</span></h6>
                            <h6 class="product-name"><span class="title">Product: </span><span
                                    class="pro-name">Storage Set</span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span
                                    class="mt-name">Plastic</span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">1100
                                    ml
                                </span></h6>
                            <div class="d-flex justify-content-start mx-2">
                                {{-- <div class="inqury-cheap"><a href="#">Inquiry</a></div> --}}
                                <a href="{{ route('inquiryform') }}" class="cta">
                                    <span>Inquiry</span>
                                    {{-- <path d="M1,5 L11,5"></path>
                              <polyline points="8 1 12 5 8 9"></polyline> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <a href="{{ route('inquiryform') }}" class="card-link"></a>
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to6.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="card-description content-txt">
                                Diamond Steel Royal Glass Set for Water, Juice Glass| Water Brass Glass Set | Brass
                                Utensils | Pital Glass Homeware Hotelware Dinnerware
                            </p>
                        </div>
                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span
                                    class="pro-name">Hotelware</span></h6>
                            <h6 class="product-name"><span class="title">Product: </span><span class="pro-name">
                                    Glass Set
                                </span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span
                                    class="mt-name">Brass</span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">
                                    300 ml
                                </span></h6>
                            <div class="d-flex justify-content-start mx-2">
                                {{-- <div class="inqury-cheap"><a href="#">Inquiry</a></div> --}}
                                <a href="{{ route('inquiryform') }}" class="cta">
                                    <span>Inquiry</span>
                                    {{-- <path d="M1,5 L11,5"></path>
                              <polyline points="8 1 12 5 8 9"></polyline> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to7.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="card-description content-txt">
                                Crompton DS 500 BLK 500-Watt Mixer Grinder with Powertron Motor & Motor Vent-X Technology
                            </p>
                        </div>
                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span class="pro-name">Kitchen Appliances</span></h6>
                            <h6 class="product-name"><span class="title">Product: </span><span class="pro-name">
                                Mixer Grinder
                                </span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span
                                    class="mt-name">Stainless Steel </span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">
                                1.2 (L)
                                </span></h6>
                            <div class="d-flex justify-content-start mx-2">
                                {{-- <div class="inqury-cheap"><a href="#">Inquiry</a></div> --}}
                                <a href="{{ route('inquiryform') }}" class="cta">
                                    <span>Inquiry</span>
                                    {{-- <path d="M1,5 L11,5"></path>
                                  <polyline points="8 1 12 5 8 9"></polyline> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 8 -->
                <div class="swiper-slide">
                    <div class="card-view">
                        <div class="image-container">
                            <div class="thumbnail_container">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/to8.jpg') }}" class="product-image swiper-img"
                                        alt="Product Image" onclick="openPopup(this)">
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="card-description content-txt">
                                     zart Samadhi Buddha Showpiece for Home & Office Decor Gift Itam
                            </p>
                        </div>
                        <div class="card-bottom">
                            <h6 class="product-name"><span class="title">Category: </span><span class="pro-name">Gift & Decore</span></h6>
                            <h6 class="product-name"><span class="title">Product: </span><span class="pro-name">
                                Buddha Showpiece
                                </span></h6>
                            <h6 class="material-name"><span class="material-title">Material: </span><span
                                    class="mt-name">Resin</span></h6>
                            <h6 class="product-size"><span class="size-title">Size: </span><span class="sz-name">
                                12L x 15W x 15H Centimeters
                            </span></h6>
                            <div class="d-flex justify-content-start mx-2">
                                {{-- <div class="inqury-cheap"><a href="#">Inquiry</a></div> --}}
                                <a href="{{ route('inquiryform') }}" class="cta">
                                    <span>Inquiry</span>
                                    {{-- <path d="M1,5 L11,5"></path>
                                  <polyline points="8 1 12 5 8 9"></polyline> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <br>
            <div class="swiper-pagination"></div>
        </div>
        {{-- <div class="popup-overlay" id="popup">
            <span class="popup-close" id="popupClose">&times;</span>
            <img id="popupImage" class="popup-content" />
        </div> --}}

    </div>
</section>
