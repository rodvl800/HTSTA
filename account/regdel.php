<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #1a1a1a;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .registration {
            background-color: #333;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            animation: fadeIn 0.8s ease-out;
            width: 300px;
            text-align: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .registration div {
            margin-bottom: 20px;
        }

        .registration input, .registration select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #555;
            color: #fff;
            box-sizing: border-box;
        }

        .registration button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .registration button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff5555;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<form method="POST" class="registration" id="registration-form">
    <div>
        <label for="UserName">Username:</label>
        <input type="text" name="UserName" id="UserName" required>
    </div>
    <div>
        <label for="Password">Password:</label>
        <input type="password" name="Password" id="Password" required>
    </div>
    <div>
        <label for="PasswordAgain">Confirm Password:</label>
        <input type="password" name="PasswordAgain" id="PasswordAgain" required>
    </div>
    <div>
        <label for="Country">Country:</label>
        <select name="Country" id="Country" required>
            <option value="Luxembourg">Luxembourg</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="UK">UK</option>
            <option value="Romania">Romania</option>
        </select>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
    <p class="error-message" id="error-message"></p>
</form>

<script>
	document.getElementById("registration-form").addEventListener("submit", function(event) {
		var password = document.getElementById("Password").value;
		var passwordAgain = document.getElementById("PasswordAgain").value;

		if (password !== passwordAgain) {
			event.preventDefault();
			document.getElementById("error-message").innerText = "Passwords do not match!";
		} else {
			document.getElementById("error-message").innerText = "";
		}
	});
</script>
</body>
</html>
