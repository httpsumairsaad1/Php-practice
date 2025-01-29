<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBA Mirpurkhas University - Sign Up</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #23486A, #4C7B8B);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            gap: 30px;
            width: 80%;
            max-width: 900px;
        }

        .glassmorphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .form-container {
            flex: 1;
            padding: 20px;
        }

        .output-container {
            flex: 1;
            padding: 20px;
        }

        h2, h3 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        label {
            color: #fff;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        input[type="submit"] {
            background:rgba(110, 250, 238, 0.67);
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #A6CDC6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #fff;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid rgba(255, 255, 255, 0.7);
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="glassmorphism form-container">
            <h2>IBA Mirpurkhas University - Sign Up</h2>
            <form method="POST" action="">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>

                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>

                <label for="program">Program:</label>
                <select id="program" name="program" required>
                    <option value="bs-cs">BS Computer Science</option>
                    <option value="bs-se">BS Software Engineering</option>
                    <option value="bba">BBA</option>
                    <option value="mba">MBA</option>
                </select>

                <input type="submit" name="submit" value="Sign Up">
            </form>
        </div>

        <div class="glassmorphism output-container">
            <h3>Submitted Data</h3>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<table>";
                echo "<tr><th>Field</th><th>Value</th></tr>";
                foreach ($_POST as $key => $value) {
                    echo "<tr><td>" . ucfirst($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p style='text-align:center; color: #fff;'>No data submitted yet.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
