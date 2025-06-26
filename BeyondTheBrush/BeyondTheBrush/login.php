<?php
session_start();
require_once 'db.php'; 

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    echo "Please enter both username and password."; 
} else {
    $sql = "SELECT * FROM userinfo WHERE username = ?";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if (!$result) {
        die("Query failed: " . $stmt->error);
    }

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome, " . htmlspecialchars($username);
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close(); // ✅ only reached if $stmt is defined
}

$conn->close();
?>
