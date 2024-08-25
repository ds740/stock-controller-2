document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    const modal = document.getElementById("reportModal");

    // Get the button that opens the modal
    const exportButtons = document.querySelectorAll(".export-btn");

    // Get the <span> element that closes the modal
    const closeModal = document.querySelector(".modal .close");

    // Open the modal when any export button is clicked
    exportButtons.forEach(function (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            modal.style.display = "flex";

            // Here you can add logic to load the specific report content into the modal
        });
    });

    // When the user clicks on <span> (x), close the modal
    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    // Handle download action
    document.getElementById("downloadBtn").addEventListener("click", function () {
        // Add your download logic here, e.g., redirect to a download link or trigger download
        alert("Download initiated!");
    });
});


