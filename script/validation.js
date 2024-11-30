document.querySelector(".blog-form").addEventListener("submit", function (e) {
  // Get form fields
  const title = document.getElementById("title").value.trim();
  const author = document.getElementById("author").value.trim();
  const email = document.getElementById("email").value.trim();
  const category = document.getElementById("category").value.trim();
  const content = document.getElementById("content").value.trim();
  const blogType = document.querySelector('input[name="blog_type"]:checked');

  // Validate mandatory fields
  if (!title || !author || !email || !category || !content || !blogType) {
    alert("Please fill in all mandatory fields.");
    e.preventDefault(); // Prevent form submission
    return;
  }

  // Validate email format
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address.");
    e.preventDefault(); // Prevent form submission
    return;
  }

  // Check if the email exists by making an AJAX request to the server
  checkEmailExists(email).then(isEmailExists => {
    if (isEmailExists) {
      alert("The email address is already associated with an existing blog post.");
      e.preventDefault(); // Prevent form submission
    } else {
      // If email is valid and does not exist, allow form submission
      alert("Form submitted successfully!");
    }
  }).catch(err => {
    alert("Error checking email existence: " + err);
    e.preventDefault(); // Prevent form submission in case of error
  });
});

// Function to check if the email exists in the database via AJAX
function checkEmailExists(email) {
  return new Promise((resolve, reject) => {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "check_email.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Send email data to check_email.php
    xhr.send("email=" + encodeURIComponent(email));

    xhr.onload = function () {
      if (xhr.status === 200) {
        // Parse the response to check if the email exists
        const response = xhr.responseText.trim();
        if (response === "exists") {
          resolve(true); // Email exists
        } else {
          resolve(false); // Email does not exist
        }
      } else {
        reject("Server error: Unable to check email.");
      }
    };

    xhr.onerror = function () {
      reject("Request failed. Please try again later.");
    };
  });
}
