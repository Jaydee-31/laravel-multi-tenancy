// Get all navigation links
const navLinks = document.querySelectorAll(".nav-link");

// Get the height of the fixed header
const headerHeight = document.querySelector("header").offsetHeight;

// Loop through each link and add a click event listener
navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        // Remove the active class from all links
        navLinks.forEach((navLink) => navLink.classList.remove("active"));

        // Add the active class to the clicked link
        link.classList.add("active");
    });
});

// Add a scroll event listener to the window
window.addEventListener("scroll", () => {
    // Get the current scroll position
    const scrollPosition = window.scrollY;

    // Loop through each navigation link
    navLinks.forEach((link) => {
        // Get the target element associated with the link
        const targetElement = document.querySelector(link.getAttribute("href"));

        // If the target element is in the viewport, add the active class to the link
        if (
            targetElement.offsetTop - headerHeight <= scrollPosition &&
            targetElement.offsetTop +
                targetElement.offsetHeight -
                headerHeight >
                scrollPosition
        ) {
            // Remove the active class from all links
            navLinks.forEach((navLink) => navLink.classList.remove("active"));

            // Add the active class to the link
            link.classList.add("active");
        }
    });
});
