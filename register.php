<?php
include "config.php";

if(isset($_POST['register'])){

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    
    if(mysqli_num_rows($cek) > 0){
        $error = "Email sudah terdaftar!";
    } else {
        $query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
        if(mysqli_query($conn,$query)){
            header("Location: login.php");
        } else {
            $error = "Registrasi gagal!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
        <h3 class="text-center mb-3">Sign Up</h3>

        <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form method="POST">
            <input type="text" name="name" class="form-control mb-3" placeholder="Nama" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
           <div class="input-group mb-3">
    <input type="password" name="password" id="registerPassword" 
           class="form-control" placeholder="Password" required>
    <button type="button" class="btn btn-outline-secondary" 
            onclick="toggleRegisterPassword()">
        👁
    </button>
</div>
            <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
        </form>

        <p class="text-center mt-3">
            Sudah punya akun? <a href="login.php">Login</a>
        </p>
    </div>
</div>

<script src="js/script.js"></script>
<script>
function toggleRegisterPassword() {
    const passwordInput = document.getElementById("registerPassword");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
</script>

</body>
</html>