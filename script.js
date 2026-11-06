
// MOBILE NAVIGATION
const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");

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

// AUTOMATIC COPYRIGHT YEAR
const year = document.getElementById("year");

if (year) {
    year.textContent = new Date().getFullYear();
}

// CONTACT FORM
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
            // Phones: open the default email app
            window.location.href =
                `mailto:${yourEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        } else {
            // Desktop: open Gmail compose
            const gmailUrl =
                "https://mail.google.com/mail/?view=cm&fs=1" +
                `&to=${encodeURIComponent(yourEmail)}` +
                `&su=${encodeURIComponent(subject)}` +
                `&body=${encodeURIComponent(body)}`;

            window.open(gmailUrl, "_blank", "noopener");
        }

        if (formStatus) {
            formStatus.textContent =
                "Opening your email draft... just press Send there.";
        }
    });
}

// GRAPHICS DESIGN IMAGE PREVIEW
const graphicsImages = [
    "images/p1.png",
    "images/p2.png",
    "images/p3.png",
    "images/p4.png",
    "images/p5.png",
    "images/p6.jpg",
    "images/p7.jpg",
    "images/p8.jpg"
];

let currentGraphicsIndex = 0;

// OPEN FULLSCREEN IMAGE PREVIEW
function openGraphicsPreview(index) {
    const lightbox = document.getElementById("graphicsLightbox");
    const image = document.getElementById("lightboxImage");

    if (!lightbox || !image) {
        console.error("Lightbox HTML or image element not found.");
        return;
    }

    if (index < 0 || index >= graphicsImages.length) {
        console.error("Invalid graphics image index:", index);
        return;
    }

    currentGraphicsIndex = index;

    image.src = graphicsImages[currentGraphicsIndex];
    image.alt = `Graphics design ${currentGraphicsIndex + 1}`;

    image.onerror = () => {
        console.error("Could not load image:", image.src);
        image.alt = "Image could not be loaded. Please check the image file path.";
    };

    lightbox.classList.add("active");
    document.body.style.overflow = "hidden";
}

// CLOSE FULLSCREEN IMAGE PREVIEW
function closeGraphicsPreview(event) {
    const lightbox = document.getElementById("graphicsLightbox");

    if (!lightbox) return;

    // Close only when clicking the background or close button
    if (event) {
        const clickedCloseButton =
            event.target.closest(".lightbox-close");

        if (
            event.target !== lightbox &&
            !clickedCloseButton
        ) {
            return;
        }
    }

    lightbox.classList.remove("active");
    document.body.style.overflow = "";
}

// PREVIOUS / NEXT IMAGE
function changeGraphicsImage(direction, event) {
    if (event) {
        event.stopPropagation();
    }

    currentGraphicsIndex += direction;

    if (currentGraphicsIndex >= graphicsImages.length) {
        currentGraphicsIndex = 0;
    }

    if (currentGraphicsIndex < 0) {
        currentGraphicsIndex = graphicsImages.length - 1;
    }

    const image = document.getElementById("lightboxImage");

    if (image) {
        image.src = graphicsImages[currentGraphicsIndex];
        image.alt = `Graphics design ${currentGraphicsIndex + 1}`;
    }
}

// MAKE FUNCTIONS AVAILABLE TO HTML ONCLICK ATTRIBUTES
window.openGraphicsPreview = openGraphicsPreview;
window.closeGraphicsPreview = closeGraphicsPreview;
window.changeGraphicsImage = changeGraphicsImage;

// KEYBOARD CONTROLS
document.addEventListener("keydown", (event) => {
    const lightbox = document.getElementById("graphicsLightbox");

    if (!lightbox || !lightbox.classList.contains("active")) {
        return;
    }

    if (event.key === "Escape") {
        closeGraphicsPreview();
    }

    if (event.key === "ArrowRight") {
        changeGraphicsImage(1);
    }

    if (event.key === "ArrowLeft") {
        changeGraphicsImage(-1);
    }
});
