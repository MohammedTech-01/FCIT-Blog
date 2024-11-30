// Select all thumbnail images
const thumbnails = document.querySelectorAll('.thumbnail');
// Select the displayed image container
const displayedImage = document.getElementById('displayed-image');

// Add event listener to each thumbnail
thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function() {
        // Update the displayed image to the clicked thumbnail's source
        displayedImage.src = thumbnail.src;
    });
});
