// Μόνο φόρμα επικοινωνίας
const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

contactForm.addEventListener("submit", e => {
    e.preventDefault();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    if (name === "" || email === "" || message === "") {
        formFeedback.style.color = "red";
        formFeedback.textContent = "Παρακαλώ συμπληρώστε όλα τα πεδία!";
        return;
    }
    formFeedback.style.color = "green";
    formFeedback.textContent = `Ευχαριστούμε ${name}, το μήνυμά σας στάλθηκε επιτυχώς!`;
    contactForm.reset();
    setTimeout(() => formFeedback.textContent = "", 5000);
});

