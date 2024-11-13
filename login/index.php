<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Bright Addis Training, Research, and Consultancy Institute</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #333;
            padding: 20px;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .container {
            background-color: #ffffffcc;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 360px;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 60px;
            height: 60px;
        }
        .header h1 {
            margin: 10px 0;
            font-size: 24px;
            color: #007bff;
        }
        h2 {
            margin-top: 0;
            text-align: center;
            font-weight: 500;
            color: #444;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        button {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            color: #d9534f;
            margin-bottom: 10px;
            font-size: 14px;
            text-align: center;
        }
        .toggle-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            cursor: pointer;
            color: #007bff;
            text-decoration: none;
        }
        .toggle-link:hover {
            text-decoration: underline;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin: 8px 0;
        }
        .remember-me input {
            margin-right: 10px;
        }
        .language-switch {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .language-switch button {
            width: 48%;
            background-color: #f8f9fa;
            color: #007bff;
            border: 1px solid #007bff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .language-switch button:hover {
            background-color: #007bff;
            color: white;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
		
		html,body{
overflow:auto;
}
    </style>
</head>
<body>
     <br><br>
    <div class="container fade-in" id="register-container" style="display: none;">
	<br><br>
        <div class="header">
            
            <h1>Bright Addis Training, Research, and Consultancy Institute</h1>
        </div>
        
        <h2>Register</h2>
        <div class="message" id="register-message"></div>
        <input type="text" id="register-name" placeholder="Full Name">
        <input type="tel" id="register-phone" placeholder="Phone Number">
        <input type="text" id="register-username" placeholder="Username">
        <input type="email" id="register-email" placeholder="Email">
        <input type="password" id="register-password" placeholder="Password">
        <button onclick="registerUser()">Register</button>
        <a class="toggle-link" onclick="toggleForms()">Already have an account? Log in</a><br>
		<div class="language-switch">
            <button onclick="switchLanguage('am')">አማርኛ</button>
        </div>
    </div>
    
    <div class="container fade-in" id="login-container">
        <div class="header">
           
            <h1>Bright Addis Training, Research, and Consultancy Institute</h1>
        </div>
        
        <h2>Login</h2>
        <div class="message" id="login-message"></div>
        <input type="email" id="login-email" placeholder="Email">
        <input type="password" id="login-password" placeholder="Password">
        <div class="remember-me">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember Me</label>
        </div>
        <button onclick="loginUser()">Login</button>
        <a class="toggle-link" onclick="toggleForms()">Don't have an account? Register</a><br>
		
		<div class="language-switch">
            <button onclick="switchLanguage('am')">አማርኛ</button>
        </div>
    </div>

    <script>
        const apiUrl = '../api/';

        function registerUser() {
            const name = document.getElementById('register-name').value.trim();
            const phone = document.getElementById('register-phone').value.trim();
            const username = document.getElementById('register-username').value.trim();
            const email = document.getElementById('register-email').value.trim();
            const password = document.getElementById('register-password').value;

            if (!validatePhone(phone)) {
                displayMessage('register-message', 'Invalid phone number format.', false);
                return;
            }

            if (!validateEmail(email)) {
                displayMessage('register-message', 'Invalid email format.', false);
                return;
            }

            if (password.length < 8) {
                displayMessage('register-message', 'Password must be at least 8 characters.', false);
                return;
            }

            fetch(`${apiUrl}?action=register`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ name, phone, username, email, password })
            })
            .then(response => response.json())
            .then(data => {
                if (data.message=="User registered successfully.") {
                    displayMessage('register-message', 'Registration successful!', true);
                    setTimeout(toggleForms, 2000);
                } else {
                    displayMessage('register-message', data.error || 'Registration failed.', false);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                displayMessage('register-message', 'An error occurred. Please try again.', false);
            });
        }

        function loginUser() {
            const email = document.getElementById('login-email').value.trim();
            const password = document.getElementById('login-password').value;
            const rememberMe = document.getElementById('remember-me').checked;

            if (!validateEmail(email)) {
                displayMessage('login-message', 'Invalid email format.', false);
                return;
            }

            fetch(`${apiUrl}?action=login`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email, password })
            })
            .then(response => response.json())
            .then(data => {
                if (data.message == "Login successful.") {
                    displayMessage('login-message', 'Login successful!', true);
                    if (rememberMe) {
                        localStorage.setItem('email', email);
                        localStorage.setItem('password', password);
                    }
                    localStorage.setItem('jwtToken', data.token);
                    window.location.replace('../explore/');
                } else {
                    displayMessage('login-message', data.error || 'Login failed.', false);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                displayMessage('login-message', 'An error occurred. Please try again.', false);
            });
        }

               function toggleForms() {
            const registerContainer = document.getElementById('register-container');
            const loginContainer = document.getElementById('login-container');

            if (registerContainer.style.display === 'none') {
                registerContainer.style.display = 'block';
                loginContainer.style.display = 'none';
            } else {
                registerContainer.style.display = 'none';
                loginContainer.style.display = 'block';
            }
        }

        function displayMessage(elementId, message, isSuccess) {
            const messageEl = document.getElementById(elementId);
            messageEl.textContent = message;
            messageEl.style.color = isSuccess ? 'green' : 'red';
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function validatePhone(phone) {
            const re = /^\d{10}$/; // Adjust the regex based on the required phone number format
            return re.test(phone);
        }

        function switchLanguage(language) {
            const elements = document.querySelectorAll('[placeholder], h2, .toggle-link, label');
            const translations = {
                "en": {
                    'Register': 'Register',
                    'Login': 'Login',
                    'Full Name': 'Full Name',
                    'Phone Number': 'Phone Number',
                    'Username': 'Username',
                    'Email': 'Email',
                    'Password': 'Password',
                    'Already have an account? Log in': 'Already have an account? Log in',
                    "Don't have an account? Register": "Don't have an account? Register",
                    'Remember Me': 'Remember Me',
                    'Invalid email format.': 'Invalid email format.',
                    'Invalid phone number format.': 'Invalid phone number format.',
                    'Password must be at least 8 characters.': 'Password must be at least 8 characters.',
                    'Registration successful!': 'Registration successful!',
                    'Registration failed.': 'Registration failed.',
                    'Login successful!': 'Login successful!',
                    'Login failed.': 'Login failed.'
                },
                "am": {
                    'Register': 'መመዝገብ',
                    'Login': 'መግባት',
                    'Full Name': 'ሙሉ ስም',
                    'Phone Number': 'ስልክ ቁጥር',
                    'Username': 'የተጠቃሚ ስም',
                    'Email': 'ኢሜይል',
                    'Password': 'የሚስጥር ቃል',
                    'Already have an account? Log in': 'አካውንት አለዎት? ይግቡ',
                    "Don't have an account? Register": "አካውንት የለዎትም? ይመዝገቡ",
                    'Remember Me': 'አስታውሰኝ',
                    'Invalid email format.': 'የተሳሳተ ኢሜል ቅርጸት።',
                    'Invalid phone number format.': 'የተሳሳተ ስልክ ቁጥር ቅርጸት።',
                    'Password must be at least 8 characters.': 'የሚስጥር ቃል ቢያንስ 8 ቁምፊ መሆን አለበት።',
                    'Registration successful!': 'ምዝገባ ተሳክቷል!',
                    'Registration failed.': 'ምዝገባ አልተሳካም።',
                    'Login successful!': 'መግባት ተሳክቷል!',
                    'Login failed.': 'መግባት አልተሳካም።'
                }
            };

            elements.forEach(el => {
                const key = el.placeholder || el.textContent.trim();
                if (translations[language][key]) {
                    if (el.placeholder) {
                        el.placeholder = translations[language][key];
                    } else {
                        el.textContent = translations[language][key];
                    }
                }
            });
        }

        // Load remembered credentials if available
        window.onload = function() {
            const savedEmail = localStorage.getItem('email');
            const savedPassword = localStorage.getItem('password');
            if (savedEmail && savedPassword) {
                document.getElementById('login-email').value = savedEmail;
                document.getElementById('login-password').value = savedPassword;
                document.getElementById('remember-me').checked = true;
            }
        }
    </script>
</body>
</html>
