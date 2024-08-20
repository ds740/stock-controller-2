document.addEventListener("DOMContentLoaded", () => {
    const openFormBtn = document.getElementById("openFormBtn");
    const popupForm = document.getElementById("popupForm");
    const closeFormBtn = document.getElementById("closeFormBtn");

    // Open popup
    openFormBtn.addEventListener("click", () => {
        popupForm.style.display = "flex";
    });

    // Close popup
    closeFormBtn.addEventListener("click", () => {
        popupForm.style.display = "none";
    });

    // Close popup if clicked outside
    window.addEventListener("click", (event) => {
        if (event.target === popupForm) {
            popupForm.style.display = "none";
        }
    });
});
