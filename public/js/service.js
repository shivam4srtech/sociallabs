 //===================faqs script======================
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.faq-btn').forEach((btn) => {
      btn.addEventListener('click', () => {
        const answer = btn.nextElementSibling;
        const chevron = btn.querySelector('.chevron');
        const isOpen = answer.classList.contains('max-h-screen');

        // Close all answers
        document.querySelectorAll('.faq-answer').forEach((ans) => {
          ans.classList.remove('max-h-screen', 'opacity-100');
          ans.classList.add('max-h-0', 'opacity-0');
        });
        document.querySelectorAll('.chevron').forEach((icon) => {
          icon.classList.remove('rotate-180');
        });

        // Toggle current one
        if (!isOpen) {
          answer.classList.remove('max-h-0', 'opacity-0');
          answer.classList.add('max-h-screen', 'opacity-100');
          if (chevron) {               // ✅ safe check
            chevron.classList.add('rotate-180');
          }
        }
      });
    });
  });
// ============tabs===============
  document.addEventListener("DOMContentLoaded", () => {
    const tabSections = document.querySelectorAll(".tabsection");

    if (!tabSections.length) {
      console.warn("⚠️ No .tabsection found in DOM.");
      return;
    }

    tabSections.forEach(section => {
      const tabBtns = section.querySelectorAll(".tabBtn");
      const tabContents = section.querySelectorAll(".tabContent");

      if (!tabBtns.length || !tabContents.length) {
        console.warn("⚠️ Skipping tabsection: Missing buttons or contents.");
        return;
      }

      // Show first tab by default
      tabBtns[0].classList.add("active");
      tabContents[0].classList.add("active");

      tabBtns.forEach((btn, index) => {
        btn.addEventListener("click", () => {
          // Reset only inside this section
          tabBtns.forEach(b => b.classList.remove("active"));
          tabContents.forEach(c => c.classList.remove("active"));

          // Activate selected
          btn.classList.add("active");
          if (tabContents[index]) {
            tabContents[index].classList.add("active");
          } else {
            console.error(`❌ No tabContent found for index ${index} in this section`);
          }
        });
      });
    });
  });
//TOGGLE TABLE TABS
document.addEventListener("DOMContentLoaded", function() {
    const isiBoxes = document.querySelectorAll(".isiBox");

    isiBoxes.forEach(isiBox => {
        const buttons = isiBox.querySelectorAll(".buttons button");
        const tables = isiBox.querySelectorAll(".isiTables table");
        const searchInput = isiBox.querySelector(".searchisiItems");

        // Table toggle functionality
        buttons.forEach((button, index) => {
            button.addEventListener("click", () => {
                tables.forEach(table => table.style.display = "none");
                buttons.forEach(btn => btn.classList.remove("active"));
                tables[index].style.display = "table";
                button.classList.add("active");

                // Reset search input when switching tables
                if (searchInput) {
                    searchInput.value = "";
                    showAllRows(tables[index]);
                }
            });
        });

        // Search functionality
        if (searchInput) {
            searchInput.addEventListener("input", function() {
                const searchTerm = this.value.toLowerCase();
                const visibleTable = Array.from(tables).find(table => table.style.display !== "none");
                if (visibleTable) {
                    Array.from(visibleTable.rows).forEach(row => {
                        row.style.display = row.textContent.toLowerCase().includes(searchTerm) ? "" : "none";
                    });
                }
            });
        }

        // Helper function to show all rows
        function showAllRows(table) {
            Array.from(table.rows).forEach(row => row.style.display = "");
        }
    });
});

