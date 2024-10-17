
const searchBar = document.getElementById('search-bar');
const suggestions = document.getElementById('suggestions');

const magnifierEl = document.querySelector(".magnifier");
const searchbox=document.querySelector(".search-box");
magnifierEl.addEventListener("click", () => {
    searchbox.classList.toggle("active");
});

// Sample data for auto-suggestions
const suggestionList = ["Apple", "Banana", "Cherry", "Date", "Elderberry", "Fig", "Grapes", "Honeydew"];

// Event listener for input
searchBar.addEventListener('input', function () {
    const input = searchBar.value.toLowerCase();
    suggestions.innerHTML = ''; // Clear previous suggestions

    if (input) {
        const filteredSuggestions = suggestionList.filter(item => item.toLowerCase().startsWith(input));

        // Show suggestions if there are matches
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

// Hide suggestions when clicking outside
document.addEventListener('click', function (e) {
    if (!searchBar.contains(e.target) && !suggestions.contains(e.target)) {
        suggestions.style.display = 'none';
    }
});

// Keep the search bar's position after clicking
suggestions.addEventListener('click', function (e) {
    if (e.target.tagName === 'LI') {
        searchBar.value = e.target.textContent; // Set value of search bar to clicked suggestion
        suggestions.style.display = 'none'; // Hide suggestions after selection
    }
});



/*header view */
const menuBtn = document.getElementById('menu-btn');
    const navMenu = document.querySelector('.nav-view');
    const closeBtn = document.getElementById('close-btn');

    menuBtn.addEventListener('click', () => {
        navMenu.classList.add('show');       // Add 'active' class to the hamburger button
      menuBtn.style.display = 'none';         // Hide the hamburger button
      closeBtn.style.display = 'block';       // Show the close (cross) button
    });

    // Close the menu
    closeBtn.addEventListener('click', () => {
        navMenu.classList.remove('show');      // Remove 'active' class from the hamburger button
      closeBtn.style.display = 'none';         // Hide the close (cross) button
      menuBtn.style.display = 'block';         // Show the hamburger button again
    });



    function startSlideshow(id) {
        const slideshow = document.getElementById(id);
        const images = slideshow.getElementsByTagName("img");
        let currentIndex = 0;

        setInterval(() => {
          images[currentIndex].classList.remove("active");
          currentIndex = (currentIndex + 1) % images.length;
          images[currentIndex].classList.add("active");
        }, 3000);
      }

      // Start the slideshow for all columns
      startSlideshow("slideshow1");
      startSlideshow("slideshow2");
      startSlideshow("slideshow3");
      startSlideshow("slideshow4");
