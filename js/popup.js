function showPopup() {
    const popup = document.querySelector('.popup');
    const overlay = document.querySelector('.overlay');
    
    // Show the overlay and add 'show' class to popup
    overlay.style.display = 'block';
    popup.classList.add('show');
}

// JavaScript function to hide popup
function closePopup() {
    const popup = document.querySelector('.popup');
    const overlay = document.querySelector('.overlay');
    
    // Hide the popup and overlay
    popup.classList.remove('show');
    setTimeout(() => {
        overlay.style.display = 'none';
        popup.style.display = 'none';
    }, 300); // Timeout to allow closing animation (if needed)
}