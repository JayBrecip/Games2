<?php
session_start();
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
 ?>
     <div class="container-fluid">
            <div class="wrapper">
                <div class="search-container">
                    <img src="uploads/icons/download.png" width="90">
                </div>
                <div class="header_links">
                    <ul>
                        <a href="" style="text-decoration:none"><li>Home</li></a>
                        <a href="#discover-games" style="text-decoration:none"><li>Discover</li></a>
                        <a href="#game-announcement"><li>News</li></a>
                        <a href="#contact_us" style="text-decoration:none"><li>Contact Us</li></a>
                    </ul>
                </div>
                <div class="user-profile">
                <div class="dropdown">
                  
                    <button onclick="toggleDropdown()" class="dropbtn"><?= $email ?> <i class="fa fa-caret-down"></i></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout.php">Logout</a>
                    </div>
                  
                </div>
        </div>
            </div>
        </div>
 <?php
}else{
    ?>
        <div class="container-fluid">
            <div class="wrapper">
                <div class="search-container">
                    <img src="uploads/icons/download.png" width="90">
                </div>
                <div class="header_links">
                    <ul>
                        <a href="" style="text-decoration:none"><li>Home</li></a>
                        <a href="#discover-games" style="text-decoration:none"><li>Discover</li></a>
                        <a href="#game-announcement"><li>News</li></a>
                        <a href="#contact_us" style="text-decoration:none"><li>Contact Us</li></a>
                    </ul>
                </div>
                <div class="user-profile">
                    <a href="login.php">Login</a>
                </div>
            </div>
        </div>
    <?php
}
?>