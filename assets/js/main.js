// Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            // Add the class when the page is scrolled more than 50px
            navbar.classList.add("scrolled");
        } else {
            // Remove the class when the page is at the top
            navbar.classList.remove("scrolled");
        }
    });
});
