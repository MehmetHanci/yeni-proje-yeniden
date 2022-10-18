
<?php
ob_start();

include 'baglan.php';
include 'fonksiyon.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php

if(isset($_SESSION['kullanici_mail'])){

session_start();



$kullanici_mail = $_GET['kullanici_mail'];
$_SESSION['kullanici_mail']=$kullanici_mail;
}


?> 

<?php


if(isset($kullanici_mail)){

$sorgu="SELECT * from kullanici WHERE 
kullanici_mail='$kullanici_mail'";
$gonder = mysqli_query($db, $sorgu);
$satir = mysqli_fetch_array($gonder)

?>
<tr>
<td><?php echo $satir['kullanici_id1']; ?></td>
<td><?php echo $satir['kullanici_adsoyad']; ?></td>
<td><?php echo $satir['kullanici_mail']; ?></td>
<td><?php echo $satir['kullanici_password']; ?></td>
</tr>
<?php
}
?>








<?php
if(isset($_GET['kullanici_mail'])) { ?>

<?php
$kullanici_mail = $_GET['kullanici_mail'];
?>


<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">KALEM</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="profile-yonlendir.php?kullanici_mail=<?php echo $kullanici_mail; ?>">Profil</a></li>
        <li><a href="Logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Profil</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<?php
} else { ?> 
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">KALEM</a>
      <ul class="right hide-on-med-and-down">

        <li><a href="Hakkimizda.php">Hakkımızda</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Profil</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<?php } ?>  



















<?php
include 'baglan.php'
?>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      



      
      
      <br><br>
      <h3 class="header center orange-text">Kitap Mütalaa Platformu >> Kalem </h3>
      <div class="row">
      <div class="row center">
        <h5 class="header col s12 light"> İnsanların okudukları kitapları mütalaa ettikleri bir Platform</h5>
      </div>
    <div class="row center">
      <div class="col s12 m4">
        <a href="Giris-kabul.php" id="download-button" class="btn-large waves-effect waves-light orange">Giriş için</a>
      </div>   
      <div class="col s12 m4">
        <a href="mutalaa.php" id="download-button" class="btn-large waves-effect waves-light orange">Mutalaa Platformuna Gider</a>
      </div>   
      <div class="col s12 m4">
        <a href="kayit-kabul.php" id="download-button" class="btn-large waves-effect waves-light orange">Kayıt için</a>
      </div> 
    </div>

        </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <!-- <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div> -->

        <div class="col s12 m8">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
