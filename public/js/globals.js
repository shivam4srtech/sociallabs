
  //==================navbar js========================
    document.querySelectorAll(".menu-btn").forEach(btn => {
    const targetId = btn.getAttribute("data-target");
    const menu = document.getElementById(targetId);
    const chevron = btn.querySelector(".chevron");

    let hideTimeout;

    function showMenu() {
        // Close other menus
        document.querySelectorAll(".mega-menu").forEach(m => {
        if (m !== menu) {
            m.classList.add("hidden");
            const otherBtn = document.querySelector(`[data-target="${m.id}"]`);
            otherBtn?.classList.remove("active");
            otherBtn?.querySelector(".chevron")?.classList.remove("rotate-180");
        }
        });

        menu.classList.remove("hidden");
        btn.classList.add("active");
        chevron.classList.add("rotate-180");
    }

    function hideMenu() {
        menu.classList.add("hidden");
        btn.classList.remove("active");
        chevron.classList.remove("rotate-180");
    }

    // Toggle on click
    btn.addEventListener("click", (e) => {
        e.stopPropagation();
        if (menu.classList.contains("hidden")) {
        showMenu();
        } else {
        hideMenu();
        }
    });

    // Keep visible on hover
    [btn, menu].forEach(el => {
        el.addEventListener("mouseenter", () => {
        clearTimeout(hideTimeout);
        showMenu();
        });
        el.addEventListener("mouseleave", () => {
        hideTimeout = setTimeout(() => hideMenu(), 200);
        });
    });

    // Close if clicking outside
    document.addEventListener("click", (e) => {
        if (!btn.contains(e.target) && !menu.contains(e.target)) {
        hideMenu();
        }
    });
    });
  // header tab toggle
  document.addEventListener("DOMContentLoaded", function () {
  try {
    const tabButtons = document.querySelectorAll(".pageHeader .headerTabList button");
    const tabContents = document.querySelectorAll(".pageHeader .headerTabContent .headerContent");

    if (!tabButtons.length || !tabContents.length) {
      console.warn("Tab buttons or contents not found on the page.");
      return;
    }

    // Activate the first tab by default
    tabButtons[0].classList.add("active");
    tabContents[0].classList.add("active");

    tabButtons.forEach((button, index) => {
      button.addEventListener("click", () => {
        // Remove active from all buttons and contents
        tabButtons.forEach(btn => btn.classList.remove("active"));
        tabContents.forEach(content => content.classList.remove("active"));

        // Add active to clicked button and corresponding content
        button.classList.add("active");
        if (tabContents[index]) {
          tabContents[index].classList.add("active");
        }
      });
    });
  } catch (error) {
    console.error("Error initializing tabs:", error);
  }
});

// cenquiry modal
document.addEventListener("DOMContentLoaded", () => {
    const modalForm = document.getElementById("modalContactForm");
    const submitBtn = document.getElementById("modalSubmitBtn");
    const successBox = document.getElementById("modal-success");
    const errorBox = document.getElementById("modal-errors");

    modalForm.addEventListener("submit", async function (e) {
        e.preventDefault();

        // Reset alerts
        successBox.classList.add("hidden");
        errorBox.classList.add("hidden");
        successBox.innerHTML = "";
        errorBox.innerHTML = "";

        // Disable button while submitting
        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        try {
            const formData = new FormData(modalForm);

            const response = await fetch(modalForm.action, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                    "Accept": "application/json",
                },
                body: formData,
            });

            if (response.ok) {
                const data = await response.json();

                // ✅ Success
                successBox.textContent = data.message || "Thank you! We will get back to you shortly.";
                successBox.classList.remove("hidden");

                modalForm.reset(); // clear fields
            } else {
                const errorData = await response.json();

                // Show validation errors
                if (errorData.errors) {
                    let messages = Object.values(errorData.errors).flat().join("<br>");
                    errorBox.innerHTML = messages;
                } else {
                    errorBox.textContent = errorData.message || "Something went wrong. Please try again.";
                }
                errorBox.classList.remove("hidden");
            }
        } catch (err) {
            errorBox.textContent = "Network error. Please try again.";
            errorBox.classList.remove("hidden");
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = "Send Message";
        }
    });
});

