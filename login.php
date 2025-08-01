<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Your authentication logic here (e.g., check against database)
    // For demonstration purposes, let's assume the username is "user" and password is "password"
    if ($username === "PaulAsRock" && $password === "Paul123") {
        // Authentication successful, redirect to dashboard or welcome page
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed, display error message
        $error = "Invalid username or password. Please try again.";
    }
}
?>
<?php
// In your PHP file (e.g., login.php), after performing necessary operations, you can redirect to another PHP file.
header("dashboard.php");
exit(); // Ensure no further code is executed after the redirect
?>