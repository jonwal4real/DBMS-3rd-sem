<!DOCTYPE html>
<html>
  <head>
    <title> Airbus services</title>
    
     <link rel="stylesheet" type="text/css" href="air.css">

  </head>



  <body>
    <div class="page">
 <div class="top">
  <img src="aaa1.png" width="150" height="100" title="airbus logo">
  <p><i>The way travelling meant to be...</i></p>
</div>

<!--div class="iit_image ">
  <img src="iit.jpg" width="150" height="116" title="iitmandi logo" alt="iitmandi">
</div-->

<div class="iit">
  <center>
    <p class="text1">INDIAN INSTITUTE OF TECHNOLOGY</p>
  <p class="text2">Mandi-Kamand, Himachal Pradesh (175005)</p>
  <p class="text3">Portal For Bus Services In IIT Mandi</p>
  </center>
</div>

  <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="status.php">Status</a></li>
  <li><a href="enquiry.php">Enquiry</a></li>
  <li><a href="sugg.php">Suggestion</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a class="sign" href="airbus.php">Log out</a></li>
</ul>

</div>
<div class="user">
<?php
    session_start();

    $username = $_SESSION['username'];
    echo "welcome".'&emsp;'.$username;
    ?></div>

<div class="wrapper1">
  <form class="login" method="POST" action="pass.php">
    <p><img src="password.jpg" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>Update your password</button>
  </form>
</div>
<div class="wrapper1">
  <form class="login" method="POST" action="email.php">
    <p><img src="email.gif" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>update your E-mail address</button>
  </form>
  </div>
 <div class="wrapper1">
  <form class="login" method="POST" action="del_acc.php">
    <p><img src="email.gif" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>delete your account</button>
  </form>
  </div>

  
  
</div>
  </body>
</html>
