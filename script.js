const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");

// Mobile navigation
if (menuToggle && navLinks) {
    menuToggle.addEventListener("click", () => {
        const isOpen = navLinks.classList.toggle("open");
        menuToggle.setAttribute("aria-expanded", String(isOpen));
    });

    navLinks.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            navLinks.classList.remove("open");
            menuToggle.setAttribute("aria-expanded", "false");
        });
    });
}

// Automatically update the copyright year
const year = document.getElementById("year");
if (year) {
    year.textContent = new Date().getFullYear();
}

// Contact form
const contactForm = document.getElementById("contactForm");
const formStatus = document.getElementById("formStatus");

if (contactForm) {
    contactForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        const yourEmail = "sanjuan386@gmail.com";
        const subject = `Portfolio message from ${name}`;
        const body = `Name: ${name}\nEmail: ${email}\n\n${message}`;

        const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);

        if (isMobile) {
            // Phones: use the default mail app
            window.location.href =
                `mailto:${yourEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        } else {
            // Desktop: many PCs have no mail app set up, so open Gmail compose instead
            const gmailUrl =
                "https://mail.google.com/mail/?view=cm&fs=1" +
                `&to=${encodeURIComponent(yourEmail)}` +
                `&su=${encodeURIComponent(subject)}` +
                `&body=${encodeURIComponent(body)}`;
            window.open(gmailUrl, "_blank", "noopener");
        }

        if (formStatus) {
            formStatus.textContent = "Opening your email draft... just press Send there.";
        }
    });
}