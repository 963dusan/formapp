<?php
require_once 'db.php';

// Function to sanitize user input
function sanitize_input($data) {
    $data = trim($data);  // Remove extra spaces
    $data = stripslashes($data);  // Remove backslashes
    $data = htmlspecialchars($data);  // Convert special characters to HTML entities
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate form inputs
    $full_name = sanitize_input($_POST['full_name']);
    $email = sanitize_input($_POST['email']);
    $date_of_birth = $_POST['date_of_birth'];

    // Basic validation
    if (!empty($full_name) && !empty($email) && !empty($date_of_birth) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Use prepared statements to insert data safely
        $query = "INSERT INTO user_submissions (full_name, email, date_of_birth) 
                  VALUES (:full_name, :email, :date_of_birth)";
        $stmt = $pdo->prepare($query);

        // Execute the statement with the sanitized data
        $stmt->execute([
            ':full_name' => $full_name,
            ':email' => $email,
            ':date_of_birth' => $date_of_birth
        ]);

        echo "Form submitted successfully! <a href='index.php'>Go back</a>";
    } else {
        echo "All fields are required and email must be valid! <a href='index.php'>Try again</a>";
    }
}
?>
