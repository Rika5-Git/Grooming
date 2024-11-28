
<?php 
  require "./db/config.php";

  // $username = '';
  // $email = '';
  // $user_type = '';

  if(isset($_POST['do_signup' ])) {

      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      // $user_type = $_POST['user_type'];

      $select = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn, $select);
      
      $num_rows = mysqli_num_rows($result);
      
      if($num_rows > 0) {
        echo "Username already exists!";
        exit();
      }
      
      if($password!= $cpassword) {
        echo "Passwords do not match!";
        exit();
      }

      else {
        $insert = "INSERT INTO users (username, email, password, cpassword ) 
        VALUES('$username', '$email' , '$password','$cpassword' )"; 
        mysqli_query($conn, $insert);
        header('location: index.php');

      }

    }
  
?>

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
    
        <form 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" 
        method="post" 
        class="form-login">

            <div class="name">
               <label for="username" class="name_marg" >Your name:  </label>
              <input type="text" name="username" id="username" required />
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
              <label for="cpassword">Password confirmation: </label>
              <input type="password" name="cpassword" id="cpassword" required />
            </div>

            <!-- <div class="name">
                <label for="user_type">User Type  </label>
                <select name="user_type" id="user_type">
                  <option value="client">Client</option>
                  <option value="admin">Admin</option>
                </select>
            </div> -->

            <div class="login">
              <input class ="signup-btn" type="submit" name = "do_signup" 
              id = "do_signup" 
              value="Register">  
            </div>

        </form>
    </div>

</section>

<?php require "inc/_footer.php" ?>

<script src="javaS.js"></script>

</body>
</html>