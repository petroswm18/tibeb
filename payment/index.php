<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tibeb Subscription Payment</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Noto+Sans+Ethiopic&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(135deg, #6b8cff, #a569ff);
            color: #fff;
        }

        .container {
		    margin-top: 5%;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 150vw;
            max-width: 70%;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .price {
            font-size: 32px;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-15px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        /* Credit Card */
        .credit-card {
            position: relative;
            width: 90%;
            height: 180px;
            perspective: 1000px;
        }

        .credit-card-inner {
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        

        .credit-card-front, .credit-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            backface-visibility: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .credit-card-front {
            background: linear-gradient(135deg, #0a8ffe, #6b8cff);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
			
        }

        .credit-card-back {
            background: linear-gradient(135deg, #2c3e50, #4a6fa1);
            transform: rotateY(180deg);
            padding: 20px;
        }

        .card-number {
            font-size: 18px;
            letter-spacing: 2px;
            margin-bottom: 10px;
            position: relative;
        }

        .card-holder,
        .card-expiration {
            font-size: 14px;
        }

        .card-cvv {
            font-size: 16px;
            text-align: right;
        }

        .bank-label {
            font-size: 16px;
            font-weight: 600;
            text-align: left;
        }

        .copy-btn {
            position: absolute;
            right: 0;
            top: 0;
            cursor: pointer;
            background: none;
            border: none;
            color: #fff;
            font-size: 14px;
            text-decoration: underline;
        }

        .copy-icon {
            font-size: 16px;
            vertical-align: middle;
            cursor: pointer;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
        }

        input[type="text"]::placeholder, input[type="number"]::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        input[type="text"]:focus, input[type="number"]:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.3);
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #6b8cff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .submit-btn:hover {
            background-color: #5677e5;
            transform: translateY(-2px);
        }

        .secure-icons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .secure-icons img {
            height: 30px;
        }

        .progress-indicator {
            margin-top: 20px;
            font-size: 14px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .checkbox-group input {
            width: auto;
            margin: 0;
        }

        .telebirr-option {
            margin-top: 30px;
        }

        .qr-code {
            width: 120px;
            height: 120px;
            background: #fff;
            margin: 10px auto;
        }

        .explanation {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
            animation: fadeIn 3s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .explanation h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .explanation p {
            font-size: 16px;
            margin: 0;
        }

        .amharic-text {
            font-family: 'Noto Sans Ethiopic', sans-serif;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Subscribe to Tibeb</h2>
        <div class="price">300 ብር</div>

        <div class="credit-card">
            <div class="credit-card-inner">
                <div class="credit-card-front">
                    <div class="bank-label">የኢትዮጵያ ንግድ ባንክ</div>
                    <div class="card-number" id="card-number">
                        1000026528015
                    </div>
					<span class="copy-icon" onclick="copyCardNumber()">📋 Copy</span>
                    <div class="card-holder" id="card-holder">Name : Daniel</div>
                </div>
                <div class="credit-card-back">
                    <div class="card-cvv" id="card-cvv"></div>
                </div>
            </div>
        </div>
         <br><br><br><br>
        <form>
            <div class="form-group">
                <label for="card-holder-input">Cardholder Name</label>
                <input type="text" id="card-holder-input" value="Daniel" readonly>
            </div>
            <div class="form-group">
                <label for="card-number-input">Card Number</label>
                <input type="number" id="card-number-input" value="1000026528015" readonly>
            </div>
            

        </form>
		
		<div class="explanation">
            <p>After you pay the amount, you will have access to all the premium quizzes and notes available</p><br>
            <p>መጠኑን ከከፈሉ በኋላ ያሉትን ሁሉንም ዋና ጥያቄዎች እና ማስታወሻዎች ማግኘት ይችላሉ</p><br>
            <p>Just Text us the username of your account or the email you registered with to the number 0989285318 after you have made the payment</p><br>
            <p>ክፍያውን ከፈጸሙ በኋላ የመለያዎን ተጠቃሚ ስም ወይም የተመዘገቡበትን ኢሜል በቁጥርራችን 0989285318 ቴክስት ይላኩልን</p><br>
            
			</div>

        <div class="telebirr-option">
            <h3>Pay with Telebirr (ቴሌብር)</h3>
            <div class="form-group">
                <label for="telebirr-phone">Telebirr phone</label><br>
                <input type="number" id="telebirr-phone" placeholder="0989285318"><br>
                <span class="copy-icon" onclick="copyPhoneNumber()">📋 Copy</span>
            </div>
            <div id="qrcode">
                <!-- QR Code Placeholder -->
            </div>
        </div>
<br><br>
        <div class="explanation">
            <h3>Why Subscribe?</h3>
            <p>Unlock access to premium quizzes featuring detailed explanations, helpful hints, and expertly crafted notes to review before you start.</p>
            <div class="amharic-text">ከመጀመርዎ በፊት ዝርዝር ማብራሪያዎችን፣ ትንተናዎችን፣ አጋዥ ፍንጮችን እና በባለሙያ የተሰሩ ማስታወሻዎችን የሚያሳዩ የፕሪሚየም ጥያቄዎች መዳረሻን ይክፈቱ።</div>
        </div>

        

       
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js"></script>
    <script>
        // Function to generate a QR code
        function generateQRCode(content) {
            var qr = qrcode(4, 'L'); // 4 is the QR code version, 'L' stands for Low error correction level
            qr.addData(content);
            qr.make();
            document.getElementById('qrcode').innerHTML = qr.createImgTag(); // Create an <img> tag and set it inside the qrcode div
        }

        // Example Telebirr QR code content
        var telebirrContent = "tel:0989285318"; // Replace with actual Telebirr content

        // Generate the QR code
        generateQRCode(telebirrContent);
    </script>
    <script>
	    var token = localStorage.getItem('jwtToken');
        // Copy Card Number
        function copyCardNumber() {
            const cardNumber = document.getElementById('card-number').innerText.trim();
            navigator.clipboard.writeText(cardNumber).then(() => {
                alert("Card number copied to clipboard!");
            });
        }

        // Copy Phone Number
        function copyPhoneNumber() {
            const phoneNumber = document.getElementById('telebirr-phone').value.trim();
            navigator.clipboard.writeText(phoneNumber).then(() => {
                alert("Phone number copied to clipboard!");
            });
        }

        fetch(`../api/?action=registerPaymentVisit`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        }).then(response => {
    if (response.status === 401) {
      // If the status is 401, redirect to the login page
      window.location.href = '../login/';  // Redirects to the login page
    } else if (response.ok) {
      // If the request is successful, parse the response
      return response.json();
    } else {
      // Handle other types of errors
      throw new Error('Something went wrong: ' + response.statusText);
    }
  }).then(response => {
			
			
		})
    </script>
</body>
</html>
