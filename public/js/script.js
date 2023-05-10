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
    const words = ["Diagnose.", "Track History.", "View Medicines.", "Learn."];
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

// // button di home
// const pilihan1 = document.querySelector("#pilihan1");
// const pilihan2 = document.querySelector("#pilihan2");
// const pilihan3 = document.querySelector("#pilihan3");

// pilihan1.addEventListener("click", function () {
//     pilihan1.classList.add("aktif");
//     pilihan2.classList.remove("aktif");
//     pilihan3.classList.remove("aktif");
// });

// pilihan2.addEventListener("click", function () {
//     pilihan1.classList.remove("aktif");
//     pilihan2.classList.add("aktif");
//     pilihan3.classList.remove("aktif");
// });

// pilihan3.addEventListener("click", function () {
//     pilihan1.classList.remove("aktif");
//     pilihan2.classList.remove("aktif");
//     pilihan3.classList.add("aktif");
// });

async function loadJSON() {
    try {
        const response = await fetch("part1.json");
        if (response.ok) {
            const data = await response.json();
            console.log(data);
        } else {
            throw new Error("Error");
        }
    } catch (error) {
        console.log(error);
    }
}

loadJSON();
