<?php
$fullname = $username = $email = $age = "";
$errors = [];

// Password Strength
$strength = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // FULL NAME
    $fullname = trim(htmlspecialchars($_POST['fullname'] ?? ""));
    if ($fullname == "") {
        $errors['fullname'] = "Full Name is required";
    } elseif (strlen($fullname) < 3) {
        $errors['fullname'] = "Minimum 3 characters";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $fullname)) {
        $errors['fullname'] = "Only letters and spaces allowed";
    }

    // USERNAME
    $username = trim(htmlspecialchars($_POST['username'] ?? ""));
    if ($username == "") {
        $errors['username'] = "Username is required";
    } elseif (!preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username)) {
        $errors['username'] = "5–15 chars, letters, numbers, underscore only";
    }

    // EMAIL
    $email = trim($_POST['email'] ?? "");
    if ($email == "") {
        $errors['email'] = "Email is required";
    } elseif (strpos($email, " ") !== false) {
        $errors['email'] = "Email cannot contain spaces";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

    // PASSWORD
    $password = $_POST['password'] ?? "";
    $confirm = $_POST['confirm'] ?? "";

    if ($password == "") {
        $errors['password'] = "Password required";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
        $errors['password'] = "Min 8 chars, 1 uppercase, 1 lowercase, 1 number";
    }

    // Password Strength (simple logic)
    if ($password != "") {
        if (preg_match("/^[a-zA-Z0-9]{8,}$/", $password)) {
            $strength = "Weak";
        }
        if (preg_match("/^(?=.*[a-z])(?=.*[A-Z]).{8,}$/", $password)) {
            $strength = "Medium";
        }
        if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
            $strength = "Strong";
        }
    }

    // CONFIRM PASSWORD
    if ($confirm == "") {
        $errors['confirm'] = "Confirm your password";
    } elseif ($password !== $confirm) {
        $errors['confirm'] = "Passwords do not match";
    }

    // AGE
    $age = trim($_POST['age'] ?? "");
    if ($age == "") {
        $errors['age'] = "Age is required";
    } elseif (!is_numeric($age)) {
        $errors['age'] = "Age must be a number";
    } elseif ($age < 18 || $age > 100) {
        $errors['age'] = "Age must be between 18 and 100";
    }

    // SUCCESS
    if (empty($errors)) {
        echo "<h2>Registration Successful</h2>";
        echo "<p><b>Full Name:</b> $fullname</p>";
        echo "<p><b>Username:</b> $username</p>";
        echo "<p><b>Email:</b> $email</p>";
        echo "<p><b>Age:</b> $age</p>";
        echo "<p><b>Password Strength:</b> $strength</p>";
        exit;
    }
}
?>

<h2>Registration Form</h2>

<form method="POST">
    Full Name: <br>
    <input type="text" name="fullname" value="<?php echo $fullname; ?>">
    <p style="color:red;"><?php echo $errors['fullname'] ?? ''; ?></p>

    Username: <br>
    <input type="text" name="username" value="<?php echo $username; ?>">
    <p style="color:red;"><?php echo $errors['username'] ?? ''; ?></p>

    Email: <br>
    <input type="email" name="email" value="<?php echo $email; ?>">
    <p style="color:red;"><?php echo $errors['email'] ?? ''; ?></p>

    Password: <br>
    <input type="password" name="password">
    <p>Password Strength: <b><?php echo $strength; ?></b></p>
    <p style="color:red;"><?php echo $errors['password'] ?? ''; ?></p>

    Confirm Password: <br>
    <input type="password" name="confirm">
    <p style="color:red;"><?php echo $errors['confirm'] ?? ''; ?></p>

    Age: <br>
    <input type="number" name="age" value="<?php echo $age; ?>">
    <p style="color:red;"><?php echo $errors['age'] ?? ''; ?></p>

    <button type="submit">Register</button>
</form>