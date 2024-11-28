<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snout Studio</title>
    <link rel="stylesheet" href="./static/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<?php require "inc/_header.php" ?>


<section class="login-section">
    
    <h4 class="log-reg">Login</h4>
    <div class="login-content">
        <form id="loginForm" class="form-login">
            <div class="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="" required />
                <span class="error-message" id="emailError"></span>
            </div>

            <div class="password">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="" required />
                <span class="error-message" id="passwordError"></span>
            </div>

            <div class="login">
                <button class="signup-btn" type="submit">Login</button>
            </div>
        </form>
    </div>
</section>






<?php require "inc/_footer.php" ?>
<script src="javaS.js"></script>
</body>
 


</html>