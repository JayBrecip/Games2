<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form is submitted using POST method

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Get existing user data from the JSON file
    $existingData = file_get_contents('user_account.json');
    $existingData = json_decode($existingData, true);

    // Loop through existing users to find a match
    foreach ($existingData as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            // Authentication successful, redirect or set session variables
            $_SESSION['email'] = $user['email'];
           header('location:index.php');

            // You can add additional logic or redirection here
            exit;
        }
    }

    // If no match is found, display an error message
    echo "Invalid email or password. Please try again.";
}
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Transparent Login Form HTML CSS</title>
      <link rel="stylesheet" href="css/style2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="bg-img">
         <div class="content">
            <header>Login Form</header>
            <form action="#" method="POST">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name="email" required placeholder="Email or Phone">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" name="password" class="pass-key" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" name="login" value="LOGIN">
               </div>
            </form>
            <div class="login">
               Or login with
            </div>
            <div class="links">
               <div class="facebook">
                  <i class="fab fa-facebook-f"><span>Facebook</span></i>
               </div>
               <div class="instagram">
                  <i class="fab fa-instagram"><span>Instagram</span></i>
               </div>
            </div>
            <div class="signup">
               Don't have account?
               <a href="signup.php">Signup Now</a>
            </div>
         </div>
      </div>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>
   </body>
</html>