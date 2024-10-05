// Initialize EmailJS with your Public Key
(function() {
    emailjs.init("kWj7BnTl_1CbGf8AH"); // Replace with your Public Key from EmailJS
})();

// Add event listener for the "Send" button
window.onload = function () {
    document.getElementById("sendButton").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Collect form data
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const subject = document.getElementById("subject").value;
        const message = document.getElementById("message").value;

        if (name && email && subject && message) {
            // Construct the parameters to send to EmailJS
            const templateParams = {
                from_name: name,
                from_email: email,
                subject: subject,
                message: message
            };

            // Send the email using EmailJS
            
            emailjs.send("service_omu2dl4", "template_nb10jyp", templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    document.getElementById("statusMessage").innerHTML = `<p style="color: green;">Thank you for contacting us! We will get back to you soon.</p>`;
                    document.getElementById("contactForm").reset(); // Reset the form after submission
                }, function(error) {
                    console.log('FAILED...', error);
                    document.getElementById("statusMessage").innerHTML = `<p style="color: red;">Sorry, there was an error sending your message. Please try again later.</p>`;
                });
        } else {
            document.getElementById("statusMessage").innerHTML = `<p style="color: red;">Please fill out all fields before submitting.</p>`;
        }
    });
};
