<?php
// session_start();
// error_reporting(0);
// // $user_id = $_SESSION['user_id'];

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

   <a href="index.php" class="logo"><img src="images/omg-logo.png" class="logoup"></a>

      <nav class="navbar">
         <a href="index.php">HOME</a>
         <a href="menu.php">MENU</a>

         <a href="blog.php">BLOG</a>
         <a href="franchise.php">FRANCHISE</a>
         <a href="location2.php">LOCATION</a>
         <a href="contact.php">CONTACT US</a>
      </nav>

   

   </section>

</header>

