<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamos Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="assets/logo.png" alt="Logo" class="logo">
            <h1>Vamos Form </h1>
        </header>

        <section class="form-section">
            <form action="form_submit.php" method="POST">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" id="full_name" required>

                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" name="date_of_birth" id="dob" required>

                <input type="submit" value="Submit">
            </form>
        </section>
    </div>
</body>
</html>
