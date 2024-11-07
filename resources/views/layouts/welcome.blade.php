<!DOCTYPE html>
<html lang="en">
<x-head/>
<body>
    <x-header />
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


<x-script/>
</body>
</html>
