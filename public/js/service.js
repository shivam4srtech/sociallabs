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

