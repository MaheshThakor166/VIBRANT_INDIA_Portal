<section class="blog-section" id="Blogs">
    <div class="container">
        <div class="heading-section">
            <div class="main-heading">
                Blog
            </div>
          
        </div>

        <div class="row mt-5">
            <div class="col-lg-7">
                <div class="featured-blog">
                    <div class="featured-content">
                        <h2 class="blog-title">Introducing Our New Product</h2>
                        <div class="blog-title-underline"></div>
                        <p class="blog-description mt-4">
                            To enhance your website's blog section with business advertisement-related content, focus on
                            defining your target audience and selecting relevant topics like digital marketing trends
                            and social media strategies. Create engaging posts that are optimized for search engines,
                            incorporating catchy headlines, visuals, and clear call-to-actions. Promote your content
                            across social media to reach a broader audience and foster engagement by responding to
                            comments.
                        </p>
                        <p class="blog-description">
                            Additionally, use analytics tools to monitor performance, ensuring your blog resonates with
                            readers and drives meaningful interactions. By implementing these strategies, you can
                            effectively communicate valuable insights on advertising and attract more visitors to your
                            website.
                        </p>
                        <div class="logo-container mt-4">
                            <a href="#">
                                <img src="http://127.0.0.1:8000/images/company-logo.png" alt="company logo">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-5 mt-sm-5 mt-lg-0 mt-0">
                <div class="blog-list">
                    @foreach ($blogs as $blog)
                        <div class="blog-item">
                            <img src="{{ asset('storage/' . $blog->image_url) }}" alt="Blog Thumbnail" class="blog-thumbnail">
                            <div class="blog-info">
                                <p class="blog-date">{{ $blog->created_at->format('d F Y') }}</p>
                                <h3 class="blog-title">{{ $blog->heading }}</h3>
                                <a href="{{ route('blogsection', $blog->id) }}" class="read-more">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>  
</section>
