let selectedCategory = "Products"; // Default category selection

// Update dropdown selection
function selectDropdown(category) {
    selectedCategory = category;
    document.getElementById("dropdownButton").textContent = category;
    document.getElementById("suggestions").innerHTML = ""; // Clear suggestions
}

// Fetch and display suggestions
function fetchSuggestions() 
{
    const query = document.getElementById("search-bar").value.trim();

    if (query.length >= 2) { // Minimum 2 characters to fetch suggestions
        fetch(`/search-suggestions?query=${query}&category=${selectedCategory}`)
            .then((response) => response.json())
            .then((data) => {
                displaySuggestions(data.suggestions);
            })
            .catch((error) => console.error("Error fetching suggestions:", error));
    } else {
        document.getElementById("suggestions").innerHTML = ""; // Clear suggestions
    }
}

// Display suggestions in the dropdown
function displaySuggestions(suggestions) {
    const suggestionsBox = document.getElementById("suggestions");
    suggestionsBox.innerHTML = "";
    suggestionsBox.style.display = "block";

    if (suggestions.length === 0) {
        suggestionsBox.innerHTML = `<div class="suggestion-item">No results found</div>`;
        return;
    }

    // Create clickable suggestion items
    suggestions.forEach((item) => {
        const suggestion = document.createElement("div");
        suggestion.className = "suggestion-item";
        suggestion.textContent = item.name;

        suggestion.onclick = () => 
            {
            if (selectedCategory === "Products") {
                window.location.href = `/product/${item.id}`; // Product details page
            }
             else if (selectedCategory === "Companies") {
                window.location.href = `/company/${item.id}/products`; // Company's product list page
            }
        

        }
        suggestionsBox.appendChild(suggestion);
    });
}

function performSearch(event) 
{
    event.preventDefault(); // Prevent form reload
    const query = document.getElementById("search-bar").value.trim();

    if (query !== "") 
        {
        // Redirect based on selected category
        window.location.href = `/search-results?query=${query}&category=${selectedCategory}`;
    }
}



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

});
    // Swiper Initializationlet timeout = null;


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


    const dropdown = document.getElementById('dropdown');
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // Toggle dropdown visibility on button click
    dropdownButton.addEventListener('click', () => {
      dropdown.classList.toggle('active');
    });

    // Handle dropdown item selection
    dropdownMenu.addEventListener('click', (e) => {
      if (e.target.classList.contains('dropdown-item')) {
        const selectedValue = e.target.textContent; // Get the selected option's text
        dropdownButton.textContent = selectedValue; // Update dropdown button text
        dropdown.classList.remove('active'); // Close the dropdown
      }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('active');
      }
    });