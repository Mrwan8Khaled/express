document.addEventListener("DOMContentLoaded", () => {
    const email = document.getElementById("emailInp");
    const password = document.getElementById("passwordInp");
    const mainForm = document.getElementById("mainform");
    const notification = document.getElementById("notification");

    const showNotification = (message, type) => {
        notification.innerText = message;
        notification.className = `notification ${type}`;
        notification.style.display = 'block';
        setTimeout(() => {
            notification.style.display = 'none';
            notification.className = 'notification'; // Reset class
        }, 3000);
    };

    async function registration(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        try {
            const formData = new FormData();
            formData.append("email", email.value);
            formData.append("password", password.value);

            const response = await fetch("http://localhost:7000/login", {
                method: "POST",
                body: formData,
            });

            if (response.ok) {
                showNotification('Logged in successfully!', 'success');
                setTimeout(() => {
                    // Uncomment and modify the line below to redirect upon successful login
                    // window.location.href = "/service/services.en.html";
                }, 2000);
            } else {
                const errorData = await response.json(); // Assuming the server sends a JSON error message
                throw new Error(`Login failed: ${errorData.message}`);
            }
        } catch (error) {
            console.error("Error during login:", error.message);
            showNotification(`Login error: ${error.message}`, 'error');
        }
    }

    mainForm.addEventListener('submit', registration);
});