<?php

$hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts WHERE filter = 'Most Popular'");

if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
    if ($filter === "hangout-filter-popular") {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts WHERE filter = 'Most Popular'");
    }
    else if ($filter === "hangout-filter-foods") {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts WHERE filter = 'Availability of Foods'");
    }
    else if ($filter === "hangout-filter-student-area") {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts WHERE filter = 'Student Areas'");
    }
    else if ($filter === "hangout-filter-quiet-spaces") {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts WHERE filter = 'Quiet Study Spaces'");
    }
    else if ($filter === "hangout-filter-inside-hangouts") {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts WHERE filter = 'Inside Hangouts'");
    }
    else if ($filter === "hangout-filter-outside-hangouts") {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts WHERE filter = 'Outside Hangouts'");
    }
    else if ($filter === "hangout-filter-all") {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts");
    }
    else {
        $hangouts_query = mysqli_query($conn, "SELECT * FROM hangouts");
    }
}


while ($hangout = mysqli_fetch_assoc($hangouts_query)){

    $review_query = mysqli_query($conn, "SELECT * FROM review_hangouts WHERE hangouts_id = '{$hangout["id"]}'");

echo '

<div class="hangout" id="'.$hangout["id"].'">
    <div class="facility-header"
        style="background-image: url(';
        
        

        if (file_exists($hangout["image_url"])) {
            echo $hangout["image_url"];
          } else {
            echo 'media/UmakDiscovery/discoveries-hpsb.png';
          }

        echo ')">
        <h1>'.$hangout["name"].'</h1>
    </div>
    <div class="hangout-description">

    
    
    <div class="hangouts-review-count">
    <div class="hangouts-review-count-stars">';

    $review_query1 = mysqli_query($conn, "SELECT * FROM review_hangouts WHERE hangouts_id = '{$hangout["id"]}'");
    $review_query_count = mysqli_query($conn, "SELECT * FROM review_hangouts WHERE hangouts_id = '{$hangout["id"]}'");
    $reviewstars = mysqli_fetch_assoc($review_query1);
    for($i = 0; $i< intval($reviewstars["rate"]); $i++){
        echo '
        <img src="media/UmakDiscovery/starIcon.png">';
        
    }



    echo '
    </div>
    <p class="hangouts-review-count-text">('. mysqli_num_rows($review_query_count).' Reviews)</p>
    </div>

        <p>'.$hangout["description"].'</p>';

        $hangout_location_floor_query = mysqli_query($conn, "SELECT * FROM floor WHERE id = '{$hangout["floor_id"]}'");
        $hangoutLocationFloor = mysqli_fetch_assoc($hangout_location_floor_query);
        $hangout_location_building_query = mysqli_query($conn, "SELECT * FROM building WHERE id = '{$hangoutLocationFloor["building_id"]}'");
        $hangoutLocationBuilding = mysqli_fetch_assoc($hangout_location_building_query);

        echo '<div class=hangouts-location>
        
        <b>Location</b>
        <p>'.$hangoutLocationFloor["name"].', '.$hangoutLocationBuilding ["name"].'</p>
        </div>

        <div class=hangouts-time>

        <b>Open Hours</b>
        <p>'.$hangout["time"].'</p>
        </div>

        <div class="hangouts-options-wrapper">
        <div class="hangouts-options-1">
            <div class="live-crowd-tracker">
                <img src="media/UmakDiscovery/liveCrowdTrackerIcon.png">
                <div>
                    <h3>Live Crowd Tracker</h3>
                    <p>'.$hangout["status"].'</p>
                </div>
            </div>
            <div class="live-crowd-tracker-info">
                <button>
                <img src="media/UmakDiscovery/infoIcon.png">
                </button>
                <button>
                <img src="media/UmakDiscovery/flagIcon.png">
                </button>
            </div>
        </div>
        <div class="hangouts-options-2">
            <button>
            <div class="hangouts-btn-img-container">
            <img src="media/UmakDiscovery/requestLiveSnapIcon.png">
            </div>
            <p>Request Live Snap</p>
            </button>
            <button>
            <div class="hangouts-btn-img-container">
            <img src="media/UmakDiscovery/shareIcon.png">
            </div>
            <p>Share</p>
            </button>
            <button>
            <div class="hangouts-btn-img-container"';
            
            if($hangout["saved"] == "Yes"){
                echo 'id="saved"' ;
            }else{
                echo 'id="not-saved"' ;
            }
            
            echo '

            >

            
            <img src="media/UmakDiscovery/saveIcon.png">
            </div>
            <p>';

            if($hangout["saved"] == "Yes"){
             echo "Saved";
            }
            else{
                echo "Save";
            }
            
            echo '</p>
            </button>
        </div>
    </div>

        <div class="facility-gallery">
            <div class="facility-gallery-header">
            <h3>Gallery</h3>
            <button class="view-all">View All</button>
            </div>
            <div class="facility-gallery-options">';

            $gallery_query1 = mysqli_query($conn, "SELECT * FROM hangouts_gallery WHERE HangoutsId = '{$hangout["id"]}'");

if (mysqli_num_rows($gallery_query1) == 0) {
    echo '
            <div class="facility-gallery-option" style="background-image: url(media/UmakDiscovery/PVBgDefault.png)">
                <p>Photos and Videos</p>
            </div>
            <div class="facility-gallery-option" style="background-image: url(media/UmakDiscovery/FMBgDefault.png)">
                <p>From Moments</p>
            </div>
            <div class="facility-gallery-option" style="background-image: url(media/UmakDiscovery/FPBgDefault.png)">
                <p>From Posts</p>
            </div>
        ';
} else {
    while ($gallery1 = mysqli_fetch_assoc($gallery_query1)){
        echo '
            <div class="facility-gallery-option" style="background-image: url(';
            
            if (file_exists($gallery1["PVBg"])) {
                echo $gallery1["PVBg"];
              } else {
                echo 'media/UmakDiscovery/hangoutsPVBgDefault.jpg';
              }
            
            echo ')">
                <p>Photos and Videos</p>
            </div>
            <div class="facility-gallery-option" style="background-image: url(';
            
            if (file_exists($gallery1["FMBg"])) {
                echo $gallery1["FPBg"];
              } else {
                echo 'media/UmakDiscovery/hangoutsFMBgDefault.jpg';
              }

            echo ')">
                <p>From Moments</p>
            </div>
            <div class="facility-gallery-option" style="background-image: url(';
            
            if (file_exists($gallery1["FPBg"])) {
                echo $gallery1["FPBg"];
              } else {
                echo 'media/UmakDiscovery/hangoutsFPBgDefault.jpg';
              }
            
            echo ')">
                <p>From Posts</p>
            </div>
        ';
    }
}


echo '
            </div>
        </div>

        <div class="review-wrapper">
            <div class="reviews-header">
                <h3>Reviews</h3>
                <button class="view-all">View All</button>
            </div><div class="reviews-container">';

            $review_query = mysqli_query($conn, "SELECT * FROM review_hangouts WHERE hangouts_id = '{$hangout["id"]}'");

            if (mysqli_num_rows($review_query) == 0) {
                echo '<div class="no-reviews"><p>No reviews yet.</p></div>';
            }
            else {

            while ($review = mysqli_fetch_assoc($review_query)){

                $user_query = mysqli_query($conn, "SELECT * FROM users WHERE id = '{$review["user_id"]}'");

                echo '

            <div class="review">
                <div class="review-user">
                    <img src="media/pfp1.png">
                    <p>'.mysqli_fetch_assoc($user_query)["name"].'</p>
                </div>
                <div class="review-stars">
                    <div class="review-stars-count">';  

                    for($i = 0; $i< intval($review["rate"]); $i++){
                        echo '
                        <img src="media/UmakDiscovery/starIcon.png">';
                    }
                    echo '    </div>
                    <p>'.$review["date"].'</p>
                </div>
                <div class="review-description">
                    <p>'.$review["description"].'</p>
                </div>
            </div>

            ';

            }

        }

            echo '
            </div>

            <button class="add-review">
            <img src="media/UmakDiscovery/writeReviewIcon.png">
            <p>Write a Review</p>
            </button>
        </div>

   </div>
</div>

';

            }
    

            ?>

