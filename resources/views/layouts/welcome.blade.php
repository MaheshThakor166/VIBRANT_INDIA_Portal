<!DOCTYPE html>
<html lang="en">
<x-head />
<body>
    <x-header />
<<<<<<< HEAD
     <x-banner />
     <x-topcategory />
     <x-topcategoryy :topCategoryProducts="$topCategoryProducts" />
     <x-trandingproduct   />
     <x-newarrival />
     <x-trandingproduct  />
     <x-blog />
     <button class="btn btn-sm rounded-circle translate-middle" onclick="scrollToTop()" id="back-to-up">
        <i class="fa fa-arrow-up" style="color: aliceblue" aria-hidden="true"></i>
    </button>
     <x-footer />
=======
    <x-banner />
    <x-topcategoryy :topCategoryProducts="$topCategoryProducts" />
    <x-tranding-product :trendingProducts="$trendingCategoryProducts" />
    <x-newarrival :newArrivalCategoryProducts="$newArrivalCategoryProducts" />
    <x-blog />
    <x-footer />
>>>>>>> fc6ed1fd51d29cfed062f51a7691e23d9afe64ed

    <x-script />
</body>
</html>
