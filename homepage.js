// script.js

// Get the search form and input elements
const searchForm = document.getElementById('searchForm');
const searchInput = document.getElementById('searchInput');

// Add event listener to the search form
searchForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    // Check if the search input value is "registration"
    if (searchInput.value.toLowerCase() === "registration") {
        // Scroll to the registration section
      //  document.getElementById('registrationSection').scrollIntoView({ behavior: 'smooth' });
      window.location.href = 'registerationpro.html';
    } else {
        // Perform regular search functionality
        // For now, let's just log the search query
        console.log("Performing search for: " + searchInput.value);
    }
});

