// Function to validate the username field
function validateUsername() {
    const username = document.getElementById('username');
    if (username.value.trim() === '') {
        alert('Username is required');
        return false;
    }
    return true;
}

// Function to validate the email field
function validateEmail() {
    const email = document.getElementById('email');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.value)) {
        alert('Please enter a valid email address');
        return false;
    }
    return true;
}

// Function to validate the phone number field
function validatePhone() {
    const phone = document.getElementById('phone');
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone.value)) {
        alert('Phone number must be exactly 10 digits');
        return false;
    }
    return true;
}

// Function to validate the address field
function validateAddress() {
    const address = document.getElementById('address');
    if (address.value.trim() === '') {
        alert('Address is required');
        return false;
    }
    return true;
}

// Function to validate the birthdate field
function validateBirthdate() {
    const birthdate = document.getElementById('birthdate');
    if (birthdate.value === '') {
        alert('Birthdate is required');
        return false;
    }
    return true;
}

// Function to validate the gender field
function validateGender() {
    const gender = document.getElementById('gender');
    if (gender.value === '') {
        alert('Gender must be selected from the dropdown options');
        return false;
    }
    return true;
}

// Function to validate the password field
function validatePassword() {
    const password = document.getElementById('password');
    if (password.value.length < 6) {
        alert('Password must be at least 6 characters long');
        return false;
    }
    return true;
}

// Function to validate the confirm password field
function validateConfirmPassword() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm-password');
    if (confirmPassword.value !== password.value) {
        alert('Confirm Password must match the Password');
        return false;
    }
    return true;
}

// Function to validate all fields and show success message
function validateForm() {
    const isUsernameValid = validateUsername();
    const isEmailValid = validateEmail();
    const isPhoneValid = validatePhone();
    const isAddressValid = validateAddress();
    const isBirthdateValid = validateBirthdate();
    const isGenderValid = validateGender();
    const isPasswordValid = validatePassword();
    const isConfirmPasswordValid = validateConfirmPassword();
    
    if (isUsernameValid && isEmailValid && isPhoneValid && isAddressValid && isBirthdateValid && isGenderValid && isPasswordValid && isConfirmPasswordValid) {
        alert('User Registered');
        return true;
    }
    return false;
}

// Attach the validateForm function to the form's onsubmit event
document.querySelector('.form').onsubmit = function(event) {
    if (!validateForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
};
