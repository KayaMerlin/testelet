function showMessage() {
    var modal = document.getElementById("myModal");
    modal.style.display = "flex";
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

function moveButton() {
    var button = document.getElementById("noButton");
    var x = Math.random() * (window.innerWidth - button.offsetWidth);
    var y = Math.random() * (window.innerHeight - button.offsetHeight);
    button.style.left = x + "px";
    button.style.top = y + "px";
}

// Fechar o modal quando clicar fora dele
window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function togglePassword() {
    var passwordField = document.getElementById("password");
    var passwordIcon = document.querySelector(".show-password");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordIcon.textContent = "🙈";
    } else {
        passwordField.type = "password";
        passwordIcon.textContent = "👁️";
    }
}
