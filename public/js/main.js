
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





      function validateForm() {
        // Get form elements
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const contact = document.getElementById("contact").value;
        const password = document.getElementById("password").value;
        const confirmPassword =
          document.getElementById("confirmPassword").value;

        // Clear previous error messages
        document.getElementById("usernameError").textContent = "";
        document.getElementById("emailError").textContent = "";
        document.getElementById("contactError").textContent = "";
        document.getElementById("passwordError").textContent = "";
        document.getElementById("confirmPasswordError").textContent = "";

        let valid = true;

        // UserName validation
        if (username === "") {
          document.getElementById("usernameError").textContent =
            "Username is required";
          valid = false;
        } else if (username.length < 6) {
          document.getElementById("usernameError").textContent =
            "Username must be at least 6 characters";
          valid = false;
        }

        // Email validation
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (email === "") {
          document.getElementById("emailError").textContent =
            "Email is required";
          valid = false;
        } else if (!emailPattern.test(email)) {
          document.getElementById("emailError").textContent =
            "Invalid email format";
          valid = false;
        }

        // Contact No validation
        if (contact === "") {
          document.getElementById("contactError").textContent =
            "Contact No is required";
          valid = false;
        } else if (contact.length < 10) {
          document.getElementById("contactError").textContent =
            "Contact No must be at least 10 characters";
          valid = false;
        }

        // Password validation
        if (password === "") {
          document.getElementById("passwordError").textContent =
            "Password is required";
          valid = false;
        } else if (password.length < 6) {
          document.getElementById("passwordError").textContent =
            "Password must be at least 6 characters";
          valid = false;
        }

        // Confirm password validation
        if (confirmPassword === "") {
          document.getElementById("confirmPasswordError").textContent =
            "Please confirm your password";
          valid = false;
        } else if (confirmPassword !== password) {
          document.getElementById("confirmPasswordError").textContent =
            "Passwords do not match";
          valid = false;
        }

        return valid;
      }







      function validateForm() {
        // Get form elements
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        // Clear previous error messages
        document.getElementById("emailError").textContent = "";
        document.getElementById("passwordError").textContent = "";

        let valid = true;

        // Email validation
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (email === "") {
          document.getElementById("emailError").textContent =
            "Email is required";
          valid = false;
        } else if (!emailPattern.test(email)) {
          document.getElementById("emailError").textContent =
            "Invalid email format";
          valid = false;
        }
        // Password validation
        if (password === "") {
          document.getElementById("passwordError").textContent =
            "Password is required";
          valid = false;
        } else if (password.length < 6) {
          document.getElementById("passwordError").textContent =
            "Password must be at least 6 characters";
          valid = false;
        }
        return valid;
      }
