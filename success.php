<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            color: #555;
            text-align: center;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-left: 10px; /* Adjust this value to move the button right or left */
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
        <h1>Stripe payment</h1>
        <p>Thank you for your payment</p>
        <div class="btn-container">
            <button class="btn" onclick="goToHome()">Go Back to Home</button>
        </div>
    </div>

    <script>
        function goToHome() {
            window.location.href = "after_login.html"; // Change "index.html" to your home page URL
        }
    </script>
</body>
</html>
