<?php
include "config.php";

if(isset($_POST['login'])){

    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    $data = mysqli_fetch_assoc($query);

    if($data && password_verify($password, $data['password'])){
        $_SESSION['user'] = $data['name'];
        header("Location: index.php");
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow form-box">
        <style>
            body {
     background-image: url("https://wallpapercave.com/wp/wp6371102.jpg");
      background-repeat: no-repeat;
  background-size: 1300px 680px;
     }

.form-box {
    width: 350px;
    border-radius: 15px;
}

.card {
    border: none;
}
        </style>
        <h3 class="text-center mb-3">Sign In</h3>

        <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form method="POST">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <div class="input-group mb-3">
    <input type="password" name="password" id="loginPassword" 
           class="form-control" placeholder="Password" required>
    <button type="button" class="btn btn-outline-secondary" 
            onclick="toggleLoginPassword()">
        👁
    </button>
</div>
            <button type="submit" name="login" class="btn btn-success w-100">Login</button>
        </form>

        <p class="text-center mt-3">
            Belum punya akun? <a href="register.php">Daftar</a>
        </p>
    </div>
</div>

<script src="script.js"></script>
<script>
function toggleLoginPassword() {
    const passwordInput = document.getElementById("loginPassword");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
</script>
</body>
</html>