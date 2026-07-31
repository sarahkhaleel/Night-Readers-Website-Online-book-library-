<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>night readers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon(1).ico">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Dancing+Script|Montserrat|Sacramento&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body >


    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->




    <div class="menu-bar">
               <ul>
    <li><i aria-hidden="true"></i>Famous Novels
      <div class="sub-menu">
        <ul>
    <li><a href="userfiction.php">Fictional</a></li>
    <li><a href="userromance.php">Romantic</a></li>
    <li><a href="useradventure.php">Adventorous</a></li>
    <li><a href="userhorror.php">Horror</a></li>



      </ul>
      </div>


    </li>
                  <li><a href="user.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                  <li><a href="usercontact.php"><i class="fa fa-phone" ></i>Contact</a></li>
                  <li><a href="userabout.php"><i class="fa fa-user" ></i>About us</a></li>
                  <li><a href="userservices.php"><i class="fa fa-clone" ></i>Services</a></li>

        <li><a href="login.php"><i class="fa fa-sign-in" ></i>Log Out</a></li>
        <li><a href="profile.php"><i class="fa fa-user" ></i>Welcome <?php session_start(); echo $_SESSION['username']; ?></a></li>
      </ul>

    </div>

<div class="signup-form">

<h1>User Info</h1>
  <img class="i" src="icons8-male-user-48.png" alt="user"><br>
<text> Name: <?php echo $_SESSION['username'].' '.$_SESSION['lastname']; ?> </text><br>
<text> Email: <?php echo $_SESSION['email']; ?></text><br>
<text> Password: <?php echo $_SESSION['password']; ?></text><br>

  <hr>
</div>

  </body>
</html>
