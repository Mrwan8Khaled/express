let locationValue = localStorage.getItem('location');
let themeMode = localStorage.getItem('themeMode');
let email = localStorage.getItem('email');
let lang = localStorage.getItem('lang');
let role = localStorage.getItem('role');

const saveBtn = document.getElementById("Save");
const logoutBtn = document.getElementById("logout");

// Check if email is null, if yes, redirect to registration page
if (email === null) {
    window.open("https://wasal-feen.web.app/register", "_self");
}else if (email === "anonymous") {
    localStorage.setItem('email', "anonymous");
}

// Set default language if not set
if (lang === null) {
    localStorage.setItem('lang', "en");
}

// Set default theme mode if not set
if (themeMode === null) {
    localStorage.setItem('themeMode', "light");
}

// Check if location is null, if yes, redirect to current location page
if (locationValue === null) {
    window.open("https://wasal-feen.web.app/setCurrntLocation", "_self");
}

// Set default role if not set
if (role === null) {
    localStorage.setItem('role', "unknown");
}

// Function to set localStorage items to empty strings
function setStorage() {
    localStorage.setItem('themeMode', themeMode);
    localStorage.setItem('location', locationValue);
    localStorage.setItem('email', email);
    localStorage.setItem('lang', lang);
    localStorage.setItem('role', role);
}

// Function to clear localStorage
function clearStorage() {
    localStorage.removeItem('themeMode');
    localStorage.removeItem('location');
    localStorage.removeItem('email');
    localStorage.removeItem('lang');
    localStorage.removeItem('role');
}

function logout() {
    clearStorage()
    window.open("https://wasal-feen.web.app" ,"_self")
}

saveBtn.addEventListener("click", setStorage);
logoutBtn.addEventListener("click", logout);