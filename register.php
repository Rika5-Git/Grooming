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


<section class="login-section" >
    
    
    <h4 class = "log-reg">Register</h4>
    <div class="login-content">
        
        <form action="" method="get" class="form-login">

            <div class="name">
               <label for="name" class="name_marg" >Your name:  </label>
              <input type="text" name="name" id="name" required />
            </div>

            <div class="name">
             <label for="email">E-mail: </label>
             <input type="email" name="email" id="email" required />
            </div>

            <div class="name">
                <label for="password">Password:  </label>
               <input type="password" name="password" id="password" required />
            </div>
            
            <div class="password">
              <label for="password">Password confirmation: </label>
              <input type="password" name="password" id="password" required />
            </div>

            <div class="login">
              <button class ="signup-btn" type="submit" value="Login"> Register  </button>
            </div>
        
        </form>
    </div>

  
</section>





<?php require "inc/_footer.php" ?>
<script src="javaS.js"></script>

</body>
 


</html>