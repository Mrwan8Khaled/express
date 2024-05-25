let fileInput = document.getElementById("imageFileInput");
let uploadLabel = document.getElementById("title");

fileInput.onchange = function () {
  let file = new FileReader();
  file.readAsDataURL(fileInput.files[0]);
  file.onload = function () {
    img.src = file.result;
    img.onload = function () {
      img.width = img.width;
      img.height = img.height;
      uploadLabel.style.display = 'none';
      img.style.display = 'block';
    };
  };
};
let email = document.getElementById("emailInp");
let password = document.getElementById("passwordInp");
let username = document.getElementById("usernameInp");

async function registration() {
  try {
    const fileInput = document.getElementById("imageFileInput");
    const imageFile = fileInput.files[0];

    if (!imageFile || !email.value || !password.value || !username.value) {
      throw new Error("All fields are required, including the image.");
    }

    const formData = new FormData();
    formData.append("email", email.value);
    formData.append("password", password.value);
    formData.append("username", username.value);
    formData.append('image_data', imageFile);

    localStorage.setItem('email', email.value);

    console.log(localStorage.getItem('email'));

    const response = await fetch("http://localhost:7000/register", {
      method: "POST",
      body: formData,
    });

    if (response.status === 201) {
      // Uncomment and modify the line below to redirect upon successful registration
      // window.location.href = "../../frontend/Account/FamilyLink.html";
      alert("Registration successful!");
    } else {
      const errorData = await response.json();
      throw new Error(`Registration failed: ${errorData.message}`);
    }
  } catch (error) {
    console.error("Error during registration:", error.message);
    alert(`Registration error: ${error.message}`);
  }
}

let MainForm = document.getElementById("mainform");

MainForm.addEventListener('submit', registration);