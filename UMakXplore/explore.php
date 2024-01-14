<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="assets/safetycenter.css" />
  <link rel="stylesheet" href="assets/explore.css" />
</head>

<body>
  <?php
  include 'header.php';
  include 'database.php';
  ?>
  <div class="safetyCenterContainer exploreContainer">

    <div class="container-top-absolute" style="background-image: url('media/exploreBg.png');     background-size: 100%;"></div>
    <div class="safety-center-container">
      <div class="safety-center-container-header">
        <h1>Explore</h1>

        <div class="custom-dropdown">
        
        <div class="dropdown-button">
            <div class="dropdown-button-left">
            <div class="discoveries-dropdown-icon">
            <img src="media/icons/hashtagIcon.png" alt="">
            </div>
            <p>Trending</p>
            </div>
            <img src="media/UmakDiscovery/dropdownarrow.png" alt="" style="height: 20px;">
        </div>
        <ul class="dropdown-menu">
            <li class="dropdown-item" id="interactive-map-option">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/discoveriesLocationIcon.png" alt="">
                </div>
                <p>Interactive Map</p>
            </li>
            <li class="dropdown-item" id="directory-option">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/discoveriesDirectoryIcon.png" alt="">
                </div>
                <p>Facility and Office Directory</p>
            </li>
            <li class="dropdown-item" id="hangouts-option">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/discoveriesHangoutsIcon.png" alt="">
                </div>
                <p>Campus Hangouts</p>
            </li>
        </ul>
    </div>
      </div>

      <div class="post-wrapper">
        <div class="post-container">
        <h3>POSTS</h3>
        <?php
          $trendingpost = mysqli_query($conn, "SELECT * FROM explore_trending WHERE category = 'Post'");
        
          while ($post = mysqli_fetch_assoc($trendingpost)) {

            echo '
            
            <a href="explore.php">
            <h4>'.$post["name"].'</h4>
            <p>'.$post["number_post"].'</p>  
            </a>

        ';

          }

        ?>
        </div>
        <div class="post-container">
        <h3>LOCATIONS</h3>

        <?php
          $trendinglocation = mysqli_query($conn, "SELECT * FROM explore_trending WHERE category = 'Locations'");
        
          while ($post = mysqli_fetch_assoc($trendinglocation)) {

            echo '
            
            <a href="explore.php">
            <h4>'.$post["name"].'</h4>
            <p>'.$post["number_post"].'</p>  
            </a>

        ';

          }

        ?>
        </div>
      </div>

      <div class="caught-up">
        <p>- You’re all caught up. -</p>
      </div>

    </div>

    </div>
  </div>

  <?php
  include 'footer.php';
  ?>

  <script src="./assets/site.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 0,
      duration: 600,
    });
  </script>

  <script>
    const dropdownButton = document.querySelector(".dropdown-button");
const dropdownButtonIcon = document.querySelector(
  ".discoveries-dropdown-icon img"
);
const dropdownButtonText = document.querySelector(".dropdown-button p");
const dropdownMenu = document.querySelector(".dropdown-menu");
const dropdownItems = dropdownMenu.querySelectorAll(".dropdown-item");
const mainOption = dropdownMenu.querySelectorAll(".dropdown-item");

// Add a click event listener to each list item
dropdownItems.forEach((item) => {
  item.addEventListener("click", () => {
    // Move the clicked item to the top of the dropdown menu
    dropdownMenu.insertBefore(item, dropdownMenu.firstChild);
    // Update the dropdown button text to show the selected option
    dropdownButtonText.textContent = item.textContent;
    const imgSrc = item.querySelector("img").src;
    dropdownButtonIcon.src = imgSrc;

    const discoveriesOption = document.querySelectorAll(".discoveries-option");

    discoveriesOption.forEach((option) => {
      if (item.id === "interactive-map-option") {
      }


      if (item.id === "hangouts-option") {
      }
    });
  });
});
  </script>

</body>

</html>