// const fileInput = document.getElementById('fileInput');
// const fileUploadContainer = document.getElementById('fileUploadContainer');
// const fileNameDisplay = document.getElementById('fileName');

// // Trigger file input on click
// fileUploadContainer.addEventListener('click', () => {
//   fileInput.click();
// });

// // Update file name when a file is selected
// fileInput.addEventListener('change', (event) => {
//   const files = event.target.files;
//   if (files.length > 0) {
//     fileNameDisplay.textContent = `Selected file: ${files[0].name}`;
//     fileNameDisplay.style.color = "green";
//   } else {
//     fileNameDisplay.textContent = '';
//   }
// });

// // Prevent default behavior for drag-and-drop
// ['dragenter', 'dragover', 'dragleave', 'drop'].forEach((eventName) => {
//   fileUploadContainer.addEventListener(eventName, (event) => {
//     event.preventDefault();
//     event.stopPropagation();
//   });
// });

// // Highlight on drag
// ['dragenter', 'dragover'].forEach((eventName) => {
//   fileUploadContainer.addEventListener(eventName, () => {
//     fileUploadContainer.style.borderColor = '#215a29';
//   });
// });

// // Remove highlight on drag leave or drop
// ['dragleave', 'drop'].forEach((eventName) => {
//   fileUploadContainer.addEventListener(eventName, () => {
//     fileUploadContainer.style.borderColor = '#c0c4c9';
//   });
// });

// // Handle file drop
// fileUploadContainer.addEventListener('drop', (event) => {
//   const files = event.dataTransfer.files;
//   if (files.length > 0) {
//     fileInput.files = files; // Assign dropped files to the file input
//     fileNameDisplay.textContent = `Selected file: ${files[0].name}`;
//     fileNameDisplay.style.color = "green";
//   }
// });
