
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#user_password, #createUser_password");

togglePassword.addEventListener("click", function () {

    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle("fa-eye");
});
         
const form = document.querySelector("form");

form.addEventListener('', function (e) {
    e.preventDefault();
});
        