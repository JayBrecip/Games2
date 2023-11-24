<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form is submitted using POST method

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create an array with user data
    $userData = array(
        'email' => $email,
        'password' => $password
    );

    // Get existing user data from the JSON file
    $existingData = file_get_contents('user_account.json');
    $existingData = json_decode($existingData, true);

    // Add the new user data to the array
    $existingData[] = $userData;

    // Convert the array to JSON format
    $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);

    // Save the JSON data back to the file
    file_put_contents('user_account.json', $jsonData);

    // You can add additional logic or redirection here
    echo "Registration successful!";
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
            <header>Registration Form</header>
            <form action="#" method="POST">
            <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name="username" required placeholder="Username">
               </div>
               <div class="field space">
                  <span class="fa fa-user"></span>
                  <input type="text" name="email" required placeholder="Email or Phone">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" name="password" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <br>
               <div class="field">
                  <input type="submit" name="signup" value="SIGN UP">
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
               If you have account
               <a href="login.php">Click Here</a>
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