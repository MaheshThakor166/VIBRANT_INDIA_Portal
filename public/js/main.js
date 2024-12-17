document.addEventListener("DOMContentLoaded", function () {
    // Toggle Read More
    const descriptions = document.querySelectorAll('.card-description');
    descriptions.forEach(function (description) {
        const visibleText = description.querySelector('.visible-text');
        const moreText = description.querySelector('.more-text');
        if (visibleText && moreText && visibleText.textContent.length <= 30) {
            description.parentNode.querySelector('.read-more').style.display = "none";
        }
    });

    // Swiper Initialization
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
            430: { slidesPerView: 2, spaceBetween: 10 },
            768: { slidesPerView: 3, spaceBetween: 5 },
            1024: { slidesPerView: 4, spaceBetween: 15 },
        },
    });

    // Popup Logic
    const popup = document.getElementById('popup');
    const popupImage = document.getElementById('popupImage');
    const popupClose = document.getElementById('popupClose');
    if (popup && popupImage && popupClose) {
        const swiperImages = document.querySelectorAll('.product-image');
        swiperImages.forEach((img) => {
            img.addEventListener('click', (e) => {
                popupImage.src = e.target.src;
                popup.style.display = 'block';
            });
        });
        popupClose.addEventListener('click', () => {
            popup.style.display = 'none';
        });
        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.style.display = 'none';
            }
        });
    }

    // Search Bar Suggestions
    const searchBar = document.getElementById('search-bar');
    const suggestions = document.getElementById('suggestions');
    const suggestionList = ["Apple", "Banana", "Cherry", "Date", "Elderberry", "Fig", "Grapes", "Honeydew"];
    if (searchBar && suggestions) {
        searchBar.addEventListener('input', function () {
            const input = searchBar.value.toLowerCase();
            suggestions.innerHTML = '';
            if (input) {
                const filteredSuggestions = suggestionList.filter(item => item.toLowerCase().startsWith(input));
                if (filteredSuggestions.length > 0) {
                    suggestions.style.display = 'block';
                    filteredSuggestions.forEach(item => {
                        const li = document.createElement('li');
                        li.textContent = item;
                        li.addEventListener('click', function () {
                            searchBar.value = item;
                            suggestions.style.display = 'none';
                        });
                        suggestions.appendChild(li);
                    });
                } else {
                    suggestions.style.display = 'none';
                }
            } else {
                suggestions.style.display = 'none';
            }
        });

        document.addEventListener('click', function (e) {
            if (!searchBar.contains(e.target) && !suggestions.contains(e.target)) {
                suggestions.style.display = 'none';
            }
        });
    }
});
