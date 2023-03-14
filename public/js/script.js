console.log("test");

// navbar Fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

// hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// typeWrite
const typeWriterEffect = () => {
    const words = ["Diagnose.", "Disscuss.", "View Medicines.", "Learn."];
    let wordCount = 0;
    let letterCount = 0;

    let currentText = "";
    let currentWord = "";

    let timeOut = 200;

    let isDeleting = false;

    const type = () => {
        if (wordCount === words.length) {
            wordCount = 0;
        }
        currentWord = words[wordCount];
        if (isDeleting) {
            currentText = currentWord.slice(0, --letterCount);
        } else {
            currentText = currentWord.slice(0, ++letterCount);
        }

        document.querySelector(".typewrite").textContent = currentText;
        timeOut = isDeleting ? 100 : 200;

        if (!isDeleting && currentText.length === currentWord.length) {
            timeOut = 800;
            isDeleting = true;
        } else if (isDeleting && currentText.length === 0) {
            timeOut = 800;
            isDeleting = false;
            wordCount++;
        }

        setTimeout(type, timeOut);
    };
    type();
};
typeWriterEffect();
