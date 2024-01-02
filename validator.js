const submitbtn = document.getElementById("sbtn");
const passwordInput = document.querySelector(".passF");
const eyeIcon = document.querySelector(".input-field i");
const requirementList = document.querySelectorAll(".requirement-list li");
const emailInput = document.querySelector("input[name='Email']");
let isEmailAvailable = false;
let isPasswordValid = false;

// An array of password requirements with corresponding 
// regular expressions and index of the requirement list item
const requirements = [
    { regex: /.{8,}/, index: 0 }, // Minimum of 8 characters
    { regex: /[0-9]/, index: 1 }, // At least one number
    { regex: /[a-z]/, index: 2 }, // At least one lowercase letter
    { regex: /[^A-Za-z0-9]/, index: 3 }, // At least one special character
    { regex: /[A-Z]/, index: 4 }, // At least one uppercase letter
]

passwordInput.addEventListener("keyup", (e) => {
    requirements.forEach(item => {
        // Check if the password matches the requirement regex
        const isValid = item.regex.test(e.target.value);
        const requirementItem = requirementList[item.index];
        submitbtn.disabled = !isValid;

        const isValidPassword = requirements.every(item => item.regex.test(e.target.value));
    
        // Enable or disable the button based on password validity
        submitbtn.disabled = !isValidPassword;
    
        
        // Updating class and icon of requirement item if requirement matched or not
        if (isValid) {
            requirementItem.classList.add("valid");
            requirementItem.firstElementChild.className = "fa-solid fa-check";
        } else {
            requirementItem.classList.remove("valid");
            requirementItem.firstElementChild.className = "fa-solid fa-circle";
        }
    });
});

eyeIcon.addEventListener("click", () => {
    // Toggle the password input type between "password" and "text"
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";

    // Update the eye icon class based on the password input type
    eyeIcon.className = `fa-solid fa-eye${passwordInput.type === "password" ? "" : "-slash"}`;
});


function showRequirements() {
    $('.crit').stop(true, true).fadeIn(1000); // Show requirements with fade in effect over 200 milliseconds
}

function hideRequirements() {
    $('.crit').stop(true, true).fadeOut(500); // Hide requirements with fade out effect over 200 milliseconds
}

const emailMessage = document.createElement("div");
emailMessage.classList.add("email-message");
emailInput.parentNode.appendChild(emailMessage);

emailInput.addEventListener("keyup", () => {
    const email = emailInput.value.trim();
    if (email !== '') {
        checkEmailAvailability(email);
    } else {
        clearEmailMessage();
    }
});

function checkEmailAvailability(email) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "checkEmail.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const count = parseInt(xhr.responseText);
                if (count > 0) {
                    setEmailMessage("Email already exists!", "red");
                    isEmailAvailable = false;
                    updateSubmitButtonState();
                } else {
                    setEmailMessage("Email available", "green");
                    isEmailAvailable = true;
                    updateSubmitButtonState();
                }
            }
        }
    };
    xhr.send(`email=${email}`);
}

function updateSubmitButtonState() {
    submitbtn.disabled = !(isEmailAvailable && isPasswordValid);
}

passwordInput.addEventListener("keyup", (e) => {
    requirements.forEach(item => {
        const isValid = item.regex.test(e.target.value);
        const requirementItem = requirementList[item.index];

        // Updating class and icon of requirement item if requirement matched or not
        if (isValid) {
            requirementItem.classList.add("valid");
            requirementItem.firstElementChild.className = "fa-solid fa-check";
        } else {
            requirementItem.classList.remove("valid");
            requirementItem.firstElementChild.className = "fa-solid fa-circle";
        }
    });

    isPasswordValid = requirements.every(item => item.regex.test(e.target.value));
    updateSubmitButtonState();
});

// Assuming you have a function to get the email input value and trigger the checkEmailAvailability function
emailInput.addEventListener("blur", () => {
    const email = getEmailInputValue(); // Implement getEmailInputValue() to get the email input value
    if (email) {
        checkEmailAvailability(email);
    }
});
function setEmailMessage(message, color) {
    emailMessage.textContent = message;
    emailMessage.style.color = color;
}

function clearEmailMessage() {
    emailMessage.textContent = '';
}