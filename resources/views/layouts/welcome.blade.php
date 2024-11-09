<!DOCTYPE html>
<html lang="en">
<x-head />
<body>
    <x-header />
    <x-banner />
    <x-topcategoryy :topCategoryProducts="$topCategoryProducts" />
    <x-tranding-product :trendingProducts="$trendingCategoryProducts" />
    <x-newarrival :newArrivalCategoryProducts="$newArrivalCategoryProducts" />
    <x-blog />
    <button class="btn btn-sm rounded-circle translate-middle" onclick="scrollToTop()" id="back-to-up">
        <i class="fa fa-arrow-up" style="color: aliceblue" aria-hidden="true"></i>
    </button>
    <x-footer />

    <x-script />
</body>
</html>
