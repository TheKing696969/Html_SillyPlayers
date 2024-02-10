<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // TODO: Add validation and secure password handling here

    // Save registration data to a text file
    $file = 'registered_users.txt';
    $data = "$username|$password\n"; // You can customize the format

    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Display success message
    echo "<h2>Registration Successful!</h2>";
    echo "<p>Username: $username</p>";
    echo '<a href="display_users.html">View Registered Users</a>';
} else {
    // Redirect back to the registration form if accessed directly
    header('Location: Account.html');
    exit();
}
?>
