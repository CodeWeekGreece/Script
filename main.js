document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createaccount");

    document.querySelector("#linkCreatesAccount").addEventListener("click", () => {
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });
});