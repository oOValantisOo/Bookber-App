document.addEventListener("DOMContentLoaded", function () {
    const preloader = document.getElementById("js-preloader");
    const animationDuration = 2000;

    preloader.style.animation = `fadeOut ${animationDuration / 1000}s ease`;

    setTimeout(() => {
        preloader.classList.add("loaded");
    }, animationDuration);
});

function togglePassword(inputId, iconId) {
    const passwordInput = document.getElementById(inputId);
    const eyeIcon = document.getElementById(iconId);

    const eyeOpenPath = eyeIcon.dataset.eyeOpenPath;
    const eyeClosedPath = eyeIcon.dataset.eyeClosedPath;

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.src = eyeOpenPath;
    } else {
        passwordInput.type = "password";
        eyeIcon.src = eyeClosedPath;
    }
}

setTimeout(() => {
    const notification = document.getElementById("notification");
    if (notification) {
        notification.style.transition = "opacity 0.5s ease";
        notification.style.opacity = "0";
        setTimeout(() => notification.remove(), 500);
    }
}, 3000);

function newPasswordForm() {
    const password = document.getElementById("password");
    const passwordError = document.getElementById("password-error");
    const newPassword = document.getElementById("password_confirmation");
    const newPasswordError = document.getElementById(
        "password_confirmation-error"
    );

    let valid = true;

    password.classList.remove("input-error");
    newPassword.classList.remove("input-error");
    passwordError.classList.add("hidden");
    newPasswordError.classList.add("hidden");

    // Validate Password
    const passwordPattern = /^(?=.*[A-Z])(?=.*\d).{6,}$/;
    if (password.value.length === 0 || !passwordPattern.test(password.value)) {
        password.classList.add("input-error");
        passwordError.classList.remove("hidden");
        valid = false;
    }

    // Validate PasswordError
    const passwordErrorPattern = /^(?=.*[A-Z])(?=.*\d).{6,}$/;
    if (
        newPassword.value.length === 0 ||
        !passwordErrorPattern.test(newPassword.value)
    ) {
        newPassword.classList.add("input-error");
        newPasswordError.classList.remove("hidden");
        valid = false;
    }

    return valid;
}

function forgetPasswordForm() {
    const email = document.getElementById("email");
    const emailError = document.getElementById("email-error");

    let valid = true;

    email.classList.remove("input-error");
    emailError.classList.add("hidden");

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email.value)) {
        email.classList.add("input-error");
        emailError.classList.remove("hidden");
        valid = false;
    }

    return valid;
}

function updateProfileForm() {
    const name = document.getElementById("name");
    const nameError = document.getElementById("name-error");
    const status = document.getElementById("status");
    const statusError = document.getElementById("status-error");

    let valid = true;

    // Reset error states
    name.classList.remove("input-error");
    nameError.classList.add("hidden");
    status.classList.remove("input-error");
    statusError.classList.add("hidden");

    // Validate Name
    if (name.value.length <= 5) {
        name.classList.add("input-error");
        nameError.classList.remove("hidden");
        valid = false;
    }

    // Validate Status
    if (status.value.length <= 5) {
        status.classList.add("input-error");
        statusError.classList.remove("hidden");
        valid = false;
    }

    return valid;
}

function registerForm() {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const phone_number = document.getElementById("phone_number");
    const nameError = document.getElementById("name-error");
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");
    const phone_numberError = document.getElementById("phone_number-error");

    let valid = true;

    // Reset error states
    name.classList.remove("input-error");
    email.classList.remove("input-error");
    password.classList.remove("input-error");
    phone_number.classList.remove("input-error");
    nameError.classList.add("hidden");
    emailError.classList.add("hidden");
    passwordError.classList.add("hidden");
    phone_numberError.classList.add("hidden");

    // Validate Name
    if (name.value.length <= 5) {
        name.classList.add("input-error");
        nameError.classList.remove("hidden");
        valid = false;
    }

    // Validate Email
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email.value)) {
        email.classList.add("input-error");
        emailError.classList.remove("hidden");
        valid = false;
    }

    // Validate Password
    const passwordPattern = /^(?=.*[A-Z])(?=.*\d).{6,}$/;
    if (password.value.length === 0 || !passwordPattern.test(password.value)) {
        password.classList.add("input-error");
        passwordError.classList.remove("hidden");
        valid = false;
    }

    // Validate Phone Number
    if (phone_number.value.length === 0 || phone_number.value.length > 20) {
        phone_number.classList.add("input-error");
        phone_numberError.classList.remove("hidden");
        valid = false;
    }

    return valid;
}

function loginForm() {
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");

    let valid = true;

    email.classList.remove("input-error");
    password.classList.remove("input-error");
    emailError.classList.add("hidden");
    passwordError.classList.add("hidden");

    // Validate Email
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email.value)) {
        email.classList.add("input-error");
        emailError.classList.remove("hidden");
        valid = false;
    }

    // Validate Password
    const passwordPattern = /^(?=.*[A-Z])(?=.*\d).{6,}$/;
    if (password.value.length === 0 || !passwordPattern.test(password.value)) {
        password.classList.add("input-error");
        passwordError.classList.remove("hidden");
        valid = false;
    }

    return valid;
}
