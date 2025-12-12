const menuLinks = document.querySelectorAll("nav ul li a");
const sections = document.querySelectorAll("main section.page");

function showSection(id) {
    sections.forEach(sec => sec.classList.remove("active"));
    document.getElementById(id).classList.add("active");
}

// Αρχικά εμφανίζουμε την Αρχική
showSection("home");

menuLinks.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        const target = link.getAttribute("href").substring(1);
        showSection(target);
    });
});

















