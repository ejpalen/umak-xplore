<?php 
$menu = isset($_GET['menu']) ? $_GET['menu'] : '';
$facilityOption = isset($_GET['facilityOption']) ? $_GET['facilityOption'] : ''; 
$hangoutsOption = isset($_GET['hangoutsOption']) ? $_GET['hangoutsOption'] : ''; 

$homeTitle = "";
$homeActive  = 'class=""';
$usersActive  = 'class=""';
$DiscoveryActive  = 'class=""';
$VerseActive  = 'class=""';
$safetyActive  = 'class=""';
$calendarActive  = 'class=""';

?> 

<html lang="en">
  <head>
    <title>Dashboard | <?php 
    
    if ($menu == 'home') {
      echo $homeTitle = "Home";
      $homeActive  = 'class="active"';
      $usersActive  = 'class=""';
      $DiscoveryActive  = 'class=""';
      $VerseActive  = 'class=""';
      $safetyActive  = 'class=""';
      $calendarActive  = 'class=""';
    }elseif ($menu == 'users') {
      echo $homeTitle = "Users";
      $homeActive  = 'class=""';
      $usersActive  = 'class="active"';
      $DiscoveryActive  = 'class=""';
      $VerseActive  = 'class=""';
      $safetyActive  = 'class=""';
      $calendarActive  = 'class=""';
    }elseif ($menu == 'umakDiscoveries') {
      echo $homeTitle = "UMak Discoveries";
      $homeActive  = 'class=""';
      $usersActive  = 'class=""';
      $DiscoveryActive  = 'class="active"';
      $VerseActive  = 'class=""';
      $safetyActive  = 'class=""';
      $calendarActive  = 'class=""';
    }elseif ($menu == 'umakVerse') {
      echo $homeTitle = "UMakVerse";
      $homeActive  = 'class=""';
      $usersActive  = 'class=""';
      $DiscoveryActive  = 'class=""';
      $VerseActive  = 'class="active"';
      $safetyActive  = 'class=""';
      $calendarActive  = 'class=""';
    }elseif ($menu == 'safetyCenter') {
      echo $homeTitle = "Safety Center";
      $homeActive  = 'class=""';
      $usersActive  = 'class=""';
      $DiscoveryActive  = 'class=""';
      $VerseActive  = 'class=""';
      $safetyActive  = 'class="active"';
      $calendarActive  = 'class=""';
    } elseif ($menu == 'calendar') {
      echo $homeTitle = "Calendar";
      $homeActive  = 'class=""';
      $usersActive  = 'class=""';
      $DiscoveryActive  = 'class=""';
      $VerseActive  = 'class=""';
      $safetyActive  = 'class=""';
      $calendarActive  = 'class="active"';
    } else {
      echo $homeTitle = "Home";
      $homeActive  = 'class="active"';
      $usersActive  = 'class=""';
      $DiscoveryActive  = 'class=""';
      $VerseActive  = 'class=""';
      $safetyActive  = 'class=""';
      $calendarActive  = 'class=""';
    }
    ?></title>
  </head>
  <body>
    <div class="dashboard-wrapper">
    <?php
      include 'dashboardMenu.php';
    ?> 
      <div class="dashboard-content">
      <?php
if ($menu == 'home') {
  include 'home.php';
}elseif ($menu == 'users') {
  include 'users.php';
}elseif ($menu == 'umakDiscoveries') {
  include 'umakDiscoveries.php';
}elseif ($menu == 'umakVerse') {
  include 'umakVerse.php';
}elseif ($menu == 'safetyCenter') {
  include 'safetyCenter.php';
} elseif ($menu == 'calendar') {
  include 'calendar.php';
}

elseif($facilityOption == 'edit'){
  include 'editFacility.php';
}elseif($facilityOption == 'add'){
  include 'addFacility.php';
}elseif($facilityOption == 'delete'){
  include 'deleteFacility.php';
}

elseif($hangoutsOption == 'edit'){
  include 'editHangouts.php';
}elseif($hangoutsOption == 'add'){
  include 'addHangouts.php';
}elseif($hangoutsOption == 'delete'){
  include 'deleteHangouts.php';
}

else {
  include 'home.php';
}


?>
    </div>
    </div>
  </body>
</html>
