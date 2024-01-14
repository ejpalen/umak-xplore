<div class="umakDiscoveryPage">

<?php
include 'header.php';
include 'database.php';
?>

<head>
    <!--Slick Slider-->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
</head>

<div class="umakDiscoveryWrapper">
    <div id="map"></div>
<div class="wrapper">
     
    <div class="custom-dropdown">
        
        <div class="dropdown-button">
            <div class="dropdown-button-left">
            <div class="discoveries-dropdown-icon">
            <img src="media/UmakDiscovery/discoveriesHangoutsIcon.png" alt="">
            </div>
            <p>Campus Hangouts</p>
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

    <div class="custom-dropdown hangoutsDropdown">
        
        <div class="dropdown-button">
            <div class="dropdown-button-left">
            <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/mostPopularIcon.png" alt="">
            </div>
            <p>Most Popular</p>
            </div>
            <img src="media/UmakDiscovery/dropdownarrow.png" alt="" style="height: 20px;">
        </div>
        <ul class="dropdown-menu">
            <li class="dropdown-item" id="hangout-filter-popular">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/mostPopularIcon.png" alt="">
                </div>
                <p>Most Popular</p>
            </li>
            <li class="dropdown-item" id="hangout-filter-foods">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/availabilityOfFoodsIcon.png" alt="">
                </div>
                <p>Availability of Foods</p>
            </li>
            <li class="dropdown-item" id="hangout-filter-student-area">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/studentAreaIcon.png" alt="">
                </div>
                <p>Student Areas</p>
            </li>
            <li class="dropdown-item" id="hangout-filter-quiet-spaces">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/quietStudySpaceIcon.png" alt="">
                </div>
                <p>Quiet Study Spaces</p>
            </li>
            <li class="dropdown-item" id="hangout-filter-inside-hangouts">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/insideHangoutsIcon.png" alt="">
                </div>
                <p>Inside Hangouts</p>
            </li>
            <li class="dropdown-item" id="hangout-filter-outside-hangouts">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/outsideHangoutsIcon.png" alt="">
                </div>
                <p>Outside Hangouts</p>
            </li>
            <li class="dropdown-item" id="hangout-filter-all">
                <div class="discoveries-dropdown-icon">
                    <img src="media/UmakDiscovery/allIcon.png" alt="">
                </div>
                <p>All</p>
            </li>
        </ul>
    </div>
    <div class="discovery-options-wrapper">
        <div class="map-wrapper discoveries-option">
            <div class="">
            </div>
        </div>
        <div class="hangouts-wrapper discoveries-option">
            <div class="hangouts-container">
            <?php
            include 'hangouts.php';
            ?>
            </div>
        </div>
        <div class="parent-container discoveries-option">
            <div class="back-button">
                <svg viewBox="0 0 22 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="">
                    <path fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8.61039 1.53244C7.92174 2.86322 6.93268 4.393 5.95567 5.63889L5.67247 6H21.0361H20.9997V7V8H21.036H5.67214L6.06498 8.47222C6.83652 9.39956 7.98906 11.1893 8.71247 12.5833L9.4476 14H8.73856H8.02963L6.28942 12.2103C4.3558 10.2216 2.37307 8.619 0.904329 7.85756L0.000236511 7.38889L-0.000200272 6.92533C-0.000749588 6.49722 0.0275364 6.45222 0.368847 6.338C1.60186 5.92567 3.89959 4.16411 6.2005 1.86722L8.07085 0H8.73714H9.40342L8.61039 1.53244Z" />
                </svg>
            </div>

            <?php

            while ($building = mysqli_fetch_assoc($resultBldg)) {
                $floor_names = mysqli_query($conn, "SELECT id, name FROM FLOOR WHERE building_id = '{$building['id']}'");
                $floorOptions = mysqli_query($conn, "SELECT id, name FROM FLOOR WHERE building_id = '{$building['id']}'");
                echo '

                <div class="parent-div" id="'.$building["id"].'">
                    <div class="parent-div-header"
                                    style="background-image: url('.$building["image_url"].')">
                        <h1>'.$building["name"].'</h1>
                                        <div class="toggle"></div>
                    </div>
                    <div class="child-div">
                        <p>'.$building["description"].'</p>
                    </div>
                    <div class="floor-dropdown">
                        <div class="admin-custom-dropdown">
                            <button class="admin-dropdown-button"><p>Xplore Floors</p>
                            <img src="media/UmakDiscovery/dropdownarrow.png" alt="" style="height: 20px;">
                            </button>
                            <ul class="admin-dropdown-menu">

                            ';

                            $j = 1;
                            while ($floor_row = mysqli_fetch_assoc($floor_names)){
                                echo '
                                    <li class="admin-dropdown-item floor-dropdown-item" id="'.$floor_row["id"].'-dropdown-floor-'.$j.'">
                                        <p>'.$floor_row["name"].'</p>
                                    </li>
                                ';
                                $j++;
                            }
                            
                            
                            

                                        echo '
                            </ul>
                        </div>
                    </div>

                    <div class="admin-floor-facilities">

                    ';

                    
                    while ($floor = mysqli_fetch_assoc($floorOptions)){
                    
                        echo '
                            <div class="floor building-floor-options" id="'.$floor["id"].'">

                            ';

                            $facility_query = mysqli_query($conn, "SELECT * FROM FACILITY WHERE floor_id = '{$floor['id']}'");

                            if (mysqli_num_rows($facility_query) == 0){
                                echo '<div class="facility no-facility" style="background-color: white !important;
                                padding: 20px;
                                border-radius: 10px; margin: 5px 0;">
                                <p>No data available</p>
                                </div>';
                            } else{


                            while ($facility = mysqli_fetch_assoc($facility_query)){

                                echo '

                                <div class="facility" id="'.$facility["id"].'">
                                    <div class="facility-header"
                                            style="background-image: url(';
                                            if (file_exists($facility["image_url"])) {
                                                echo $facility["image_url"];
                                              } else {
                                                echo 'media/UmakDiscovery/discoveries-admin.png';
                                              }
                                            
                                            echo ')">
                                            <h1>'.$facility["name"].'</h1>
                                    </div>
                                        <div class="facility-description">
                                            <p>'.$facility["description"].'</p>
                                        <div class="facility-gallery">
                                            <div class="facility-gallery-header">
                                                <h3>Gallery</h3>
                                                <button class="view-all">View All</button>
                                            </div>
                                            <div class="facility-gallery-options">';

                                            $gallery_query = mysqli_query($conn, "SELECT * FROM GALLERY WHERE FacilityId = '{$facility['id']}'");

                                            while ($gallery = mysqli_fetch_assoc($gallery_query)){

                                                echo '
                                            
                                                                <div class="facility-gallery-option" style="background-image: url(';
                                                                
                                                                if (file_exists($gallery["PVBg"])) {
                                                                    echo $gallery["PVBg"];
                                                                  } else {
                                                                    echo 'media/UmakDiscovery/PVBgDefault.png';
                                                                  }
                                                                
                                                                echo ')">
                                                    <p>Photos and Videos</p>
                                                </div>
                                                                    <div class="facility-gallery-option" style="background-image: url(';
                                                                    

                                                                    if (file_exists($gallery["FMBg"])) {
                                                                        echo $gallery["FMBg"];
                                                                      } else {
                                                                        echo 'media/UmakDiscovery/FMBgDefault.png';
                                                                      }
                                                                    
                                                                    echo ')">
                                                    <p>From Moments</p>
                                                </div>
                                                                    <div class="facility-gallery-option" style="background-image: url(';
                                                                    
                                                                    if (file_exists($gallery["FPBg"])) {
                                                                        echo $gallery["FPBg"];
                                                                      } else {
                                                                        echo 'media/UmakDiscovery/FPBgDefault.png';
                                                                      }
                                                                    
                                                                    echo ')">
                                                    <p>From Posts</p>
                                                </div>

                                                ';
                                            }

                                                echo '
                                            </div>
                                        </div>

                                        <div class="facility-areas-nearby">
                                            <div class="facility-areas-nearby-header">
                                                <h3>Nearest Area</h3>
                                            </div>
                                            <div class="facility-areas-nearby-contents">
                                            
                                            ';

                                            $nearestarea_query = mysqli_query($conn, "SELECT * FROM nearestarea WHERE FacilityId = '{$facility['id']}'");

                                            while ($nearestarea = mysqli_fetch_assoc($nearestarea_query)){

                                            echo '


                                                    <div class="facility-areas-nearby-content"
                                                    style="background-image: url(';
                                                    

                                                    if (file_exists($nearestarea["nearestAreaBg"])) {
                                                        echo $nearestarea["nearestAreaBg"];
                                                      } else {
                                                        echo 'media/UmakDiscovery/nearestAreaBgDefault.jpg';
                                                      }
                                                    
                                                    echo ')">
                                                                    <h4>'.$nearestarea["nearestAreaName"].'</h4>
                                                        <div class="facility-areas-nearby-distance-details">
                                                                        <img src="media/UmakDiscovery/nearbyLocationIcon.png" alt="" class="icon" />
                                                        <p class="facility-areas-nearby-distance-text blueText">
                                                        '.$nearestarea["nearestAreaDistance"].'
                                                        </p>
                                                    </div>



                                                    ';

                                            }

                                                    echo '

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                                
                                ';

                                            }

                                        }

                                            //End of facility loop


                            echo '</div>

                            ';
                                            }

                                            echo '
                    </div>

                </div> ';

                                            }

            ?>

        </div>
    </div>
</div>

</div>

</div>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script src="./assets/umakDiscoveries.js"></script>
<script src="./assets/site.js"></script>


<script>
      $(function () {
        $(".hangouts-container").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          speed: 1000,
          dots: false,
          draggable: true,
          autoplay: true,
          prevArrow: '<svg class="prev-arrow hangouts-arrow" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg" class=""> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.61039 1.53244C7.92174 2.86322 6.93268 4.393 5.95567 5.63889L5.67247 6H21.0361H20.9997V7V8H21.036H5.67214L6.06498 8.47222C6.83652 9.39956 7.98906 11.1893 8.71247 12.5833L9.4476 14H8.73856H8.02963L6.28942 12.2103C4.3558 10.2216 2.37307 8.619 0.904329 7.85756L0.000236511 7.38889L-0.000200272 6.92533C-0.000749588 6.49722 0.0275364 6.45222 0.368847 6.338C1.60186 5.92567 3.89959 4.16411 6.2005 1.86722L8.07085 0H8.73714H9.40342L8.61039 1.53244Z" /></svg>',
          nextArrow: '<svg class="next-arrow hangouts-arrow" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg" class=""> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.61039 1.53244C7.92174 2.86322 6.93268 4.393 5.95567 5.63889L5.67247 6H21.0361H20.9997V7V8H21.036H5.67214L6.06498 8.47222C6.83652 9.39956 7.98906 11.1893 8.71247 12.5833L9.4476 14H8.73856H8.02963L6.28942 12.2103C4.3558 10.2216 2.37307 8.619 0.904329 7.85756L0.000236511 7.38889L-0.000200272 6.92533C-0.000749588 6.49722 0.0275364 6.45222 0.368847 6.338C1.60186 5.92567 3.89959 4.16411 6.2005 1.86722L8.07085 0H8.73714H9.40342L8.61039 1.53244Z" /></svg>',
          autoplaySpeed: 3500, //Responsive slider
          responsive: [
            {
              breakpoint: 717,
              settings: {
                slidesToShow: 1,
              },
            },
          ], //End of Responsive slider
        });
      });


      $(function () {
        $(".reviews-container").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          speed: 1000,
          draggable: false,
          dots: true,
          autoplay: true,
          autoplaySpeed: 3500, //Responsive slider
          responsive: [
            {
              breakpoint: 717,
              settings: {
                slidesToShow: 1,
              },
            },
          ], //End of Responsive slider
        });
      });
    </script>
