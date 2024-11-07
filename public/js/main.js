const searchBar = document.getElementById('search-bar');
const suggestions = document.getElementById('suggestions');

const magnifierEl = document.querySelector(".magnifier");
const searchbox = document.querySelector(".search-box");
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


/*card oepn toggle*/
// document.querySelector(".open-bar").addEventListener("click", function () {
//     const card = this.closest('.card-view');
//     card.classList.toggle("open");
// });


var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true, // Make dots clickable
    },
    loop: true,  // Infinite loop for continuous sliding
    slidesPerView: 1,  // Show 1 slide at a time on small screens
    spaceBetween: 10,  // Space between slides

    // Breakpoints for responsive design
    breakpoints: {

        430: {  // Small tablets and phones
            slidesPerView: 2,
            spaceBetween: 10
        },
        592:{
            slidesPerView: 2,
            spaceBetween: 10
        },
        640: {  // Small tablets and phones
            slidesPerView: 2,
            spaceBetween: 20
        },
        768: {  // Tablets
            slidesPerView: 3,
            spaceBetween: 5
        },
        893: {  // Tablets
            slidesPerView: 3,
            spaceBetween: 10
        },
        1024: {  // Desktops
            slidesPerView: 4,
            spaceBetween: 15
        }
    }
});



// function zoom(e){
//     var zoomer = e.currentTarget;
//     e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
//     e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
//     x = offsetX/zoomer.offsetWidth*100
//     y = offsetY/zoomer.offsetHeight*100
//     zoomer.style.backgroundPosition = x + '% ' + y + '%';
//   }


const popup = document.getElementById('popup');
const popupImage = document.getElementById('popupImage');
const popupClose = document.getElementById('popupClose');

// Add event listener to images inside swiper slides
const swiperImages = document.querySelectorAll('.product-image');
swiperImages.forEach((img) => {
  img.addEventListener('click', (e) => {
    popupImage.src = e.target.src;
    popup.style.display = 'block'; // Show popup
  });
});

// Close popup when "x" is clicked
popupClose.addEventListener('click', () => {
  popup.style.display = 'none';
});

// Close popup when clicking outside the image
popup.addEventListener('click', (e) => {
  if (e.target === popup) {
    popup.style.display = 'none';
  }
});


    /*read more add*/
    document.addEventListener("DOMContentLoaded", function () {
        // Set a character limit for when to add "Read More"
        var charLimit = 70; // Minimum character limit to trigger "Read More"
        var minVisibleChar = 33; // Maximum character limit to avoid "Read More"

        // Get all text wrappers
        var textWrappers = document.querySelectorAll('.text-wrapper');

        textWrappers.forEach(function (wrapper) {
            var content = wrapper.querySelector(".content-txt").innerHTML;

            // Check if the content exceeds the character limit
            if (content.length > charLimit) {
                // Split the content into two parts: visible and hidden based on character count
                var visibleText = content.slice(0, charLimit); // First 35 characters
                var hiddenText = content.slice(charLimit); // Remaining characters

                // Create the structure: visible text + dots + hidden text + "Read More" link
                var newHtml = `
                    <span class="visible-text">${visibleText}</span>
                    <span class="dots">...</span>
                    <span class="full-text" style="display:none;">${hiddenText}</span>
                    <a href="javascript:void(0);" class="readmore-btn">Read more</a>
                `;

                wrapper.innerHTML = newHtml; // Replace the original content with the new structured content

                var readMoreBtn = wrapper.querySelector(".readmore-btn");
                var fullText = wrapper.querySelector(".full-text");
                var dots = wrapper.querySelector(".dots");

                // Toggle between showing and hiding the extra content
                readMoreBtn.addEventListener("click", function () {
                    if (fullText.style.display === "none" || fullText.style.display === "") {
                        fullText.style.display = "inline"; // Show the full text
                        dots.style.display = "none"; // Hide the dots
                        readMoreBtn.innerHTML = "Read less";
                    } else {
                        fullText.style.display = "none"; // Hide the full text
                        dots.style.display = "inline"; // Show the dots
                        readMoreBtn.innerHTML = "Read more";
                    }
                });
            } else if (content.length > minVisibleChar) {
                // If content is between 33 and 35 characters, show it fully without "Read More"
                wrapper.innerHTML = content; // Show the full text without any button
            } else {
                // If content is 33 characters or fewer, show it fully without "Read More"
                wrapper.innerHTML = content; // Show the full text without any button
            }
        });
    });

// let scrollTimeout;

//         window.addEventListener("scroll", function () {
//           clearTimeout(scrollTimeout); // Clear previous timeout
//           scrollTimeout = setTimeout(function () {
//             var fullTexts = document.querySelectorAll('.full-text');
//             var dots = document.querySelectorAll('.dots');
//             var buttons = document.querySelectorAll('.readmore-btn');

//             fullTexts.forEach(function (text) {
//               text.style.display = "none";
//             });

//             dots.forEach(function (dot) {
//               dot.style.display = "inline";
//             });

//             buttons.forEach(function (button) {
//               button.textContent = "Read more";
//             });
//           }, 200);
//         });

// window.addEventListener("scroll", function () {
//     var fullTexts = document.querySelectorAll('.full-text');
//     var dots = document.querySelectorAll('.dots');
//     var buttons = document.querySelectorAll('.readmore-btn');

//     fullTexts.forEach(function (text) {
//       text.style.display = "none";
//     });

//     dots.forEach(function (dot) {
//       dot.style.display = "inline";
//     });

//     buttons.forEach(function (button) {
//       button.textContent = "Read more";
//     });
//   });



  // JavaScript to add the sticky class on scroll
 // Get the header element
const header = document.getElementsByClassName("header-bottom")[0];
const originalOffsetTop = header.offsetTop; // Store the original position

// Add a single onscroll event to handle both functionalities
window.onscroll = function () {
    makeSticky();     // For sticky header
    toggleTopButton(); // For showing the back-to-top button
};

// Function for sticky header
function makeSticky() {
    if (window.scrollY > originalOffsetTop) {
        header.classList.add("fix-postion"); // Add the sticky class
    } else {
        header.classList.remove("fix-postion"); // Remove the sticky class
    }
}

// Function to scroll to the top
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Function to show/hide back-to-top button
function toggleTopButton() {
    // Show the button when the user scrolls 20px or more from the top
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('back-to-up').classList.remove('d-none');
    } else {
        document.getElementById('back-to-up').classList.add('d-none');
    }
}
