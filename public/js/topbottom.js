
// window.onscroll = () => {
//     toggleTopButton();
// }

// function scrollToTop() {
//     window.scrollTo({ top: 0, behavior: 'smooth' });
// }

// function toggleTopButton() {
//     // Show the button when the user scrolls 20px or more from the top
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         document.getElementById('back-to-up').classList.remove('d-none');
//     } else {
//         document.getElementById('back-to-up').classList.add('d-none');
//     }
// }



const header = document.getElementsByClassName("header-bottom")[0];
const originalOffsetTop = header.offsetTop;
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

