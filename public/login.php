<?php


require_once '../src/config/database.php';
require_once '../src/models/user.php';


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("Request method is POST");

    $role = $_POST["role"];
    $username = $_POST["username"];
    $password = $_POST["password"];


    error_log("Submitted values - Role: $role, Username: $username");

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    $user->username = $username;
    $user->password = $password;
    $is_valid = $user->validateUser();

    if ($is_valid) {
        error_log("User validated: $username");

        if ($user->role == $role) {
            error_log("Role matched: $role");

            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            
            error_log("Redirecting to appropriate page based on role: $role");

            
            if ($role == "veterinarian") {
                header("Location: veterinaire.html");
            } elseif ($role == "employee") {
                header("Location: employe.html");
            } elseif ($role == "admin") {
                header("Location: administrateur.html");
            } else {
                
                error_log("Role invalid: $role");
                header("Location: connexion.html?error=role_invalid");
            }
        } else {
            error_log("Role mismatch: expected $role, got $user->role");
            header("Location: connexion.html?error=role_mismatch");
        }
    } else {
        error_log("Invalid credentials for user: $username with role: $role");
        header("Location: connexion.html?error=invalid_credentials");
    }
    exit();
} else {

    error_log("Request method is not POST");
    header("Location: connexion.html");
    exit();
}
?>
