
document.addEventListener("DOMContentLoaded", () => {
    const openFormBtn = document.getElementById("openFormBtn");
    const popupForm = document.getElementById("popupForm");
    const searchBox = document.getElementById("search");
    const closeFormBtn = document.getElementById("closeFormBtn");

  
    openFormBtn.addEventListener("click", () => {
        popupForm.style.display = "flex";
    });


    closeFormBtn.addEventListener("click", () => {
        popupForm.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === popupForm) {
            popupForm.style.display = "none";
        }
    });







    document.querySelectorAll(".delete-icon").forEach(icon => {
        icon.addEventListener("click", (e) => {
            e.preventDefault();
            const row = icon.closest("tr");
            const supplierId = icon.getAttribute("data-id");

            if (confirm("Are you sure you want to delete this supplier?")) {
                fetch("supplier_connect.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: `delete_id=${supplierId}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        row.remove(); // Remove the row from the table if deletion is successful
                    } else {
                        alert("Failed to delete supplier.");
                    }
                })
                .catch(error => console.error("Error:", error));
            }
        });
    });

    




    search.addEventListener("input", () => {
        const filter = search.value.toLowerCase().trim();

       
        tableRows.forEach(row => {
            const supplierNameCell = row.querySelector("td:nth-child(4)");

            if (supplierNameCell && supplierNameCell.textContent.toLowerCase().includes(filter)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });


});
