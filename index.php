<!-- ====== -->
<!-- HEADER -->
<!-- ====== -->

<?php 
  require 'header.php';
?>

<!-- ====== -->
<!-- NAVBAR -->
<!-- ====== -->

<?php 
  require 'navbar.php';
?>

<div class="master container"> 

  <h1>Welcome to HarryWishYouWell</h1>

  <p>Here you can type all the text you want without someone seeing it.</p>
  <p>Then you just add your email and it will send it to you directly.</p>

  <h2>Try it for free!</h2>

  <?php
  if (isset($_REQUEST['email']))
  //if "email" is filled out, send email
    {
    //send email
    $to = $_REQUEST['email'];
    $email = $_REQUEST['email'] ;
    $subject = "A regular mail from a friend";
    $message = $_REQUEST['message'] ;
    mail($to, $subject, $message, "From: Harry@wishyouwell.com");
    echo "<h2>Thank you for using our mail form</h2>";
    }

  else
  //if "email" is not filled out, display the form
    {
    echo '<form method="post" action="index.php">
    <h3>Email:</h3><input name="email" type="text" autocomplete="off"><br>
    <h3>Message:</h3>
    <input type="password" autocomplete="off" name="message" style="height:100px; width:100px;" rows="15" cols="40">
    <br>
    <input type="submit">
    </form>';
    }
  ?>

  <p><a href=".">Go back for another secret email!</a></p>
  
</div>

<!-- ====== -->
<!-- FOOTER -->
<!-- ====== -->

<?php 
  require 'footer.php';
?>

