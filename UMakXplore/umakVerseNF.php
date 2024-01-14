
<div class="verse-wrapper1">


<?php
    session_start();
    include 'PHPBack/connect.php';
    $addPostBtnOptionsText = array( "Photo", "Video", "Location", "Feeling" );
    $addPostBtnOptionsIcon = array( "createPostPhoto.png", "createPostVideo.png", "createPostLocation.png", "createPostFeeling.png" );

    $popularHashtag = array( "#laronglahi", "#Umakdancextreme", "#UmakXplore" );
    $popularHashtagPostCount = array( "1k", "210", "2k" );

    $popularLocation = array( "Track Oval Field", "Grand Theater", "Basketball Court" );
    $popularLocationPostCount = array( "2k", "510", "500" );

    $PostInteraction = array( "Like", "Comment", "Share", "Save" );
    $PostInteractionIcon = array( "LikeIcon.svg", "CommentIcon.svg", "ShareIcon.svg", "SaveIcon.svg" );

    $PFP = "pfp1.png";

    if(isset($_SESSION['id'])) {
        include 'header.php';
?>

        <html>
            <head>
            <link rel="stylesheet" href="assets/CSS/site.css"/>
    <link rel="stylesheet" href="assets/CSS/home.css"/>
    <link rel="stylesheet" href="assets/CSS/UMakDiscoveries.css"/>
    <link rel="stylesheet" href="assets/CSS/site.css" />
    <link rel="stylesheet" href="assets/CSS/umakVerse.css" />
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/04f0992e18.js" crossorigin="anonymous"></script>
    <style>
        .navBar{
            position: fixed !important;
        }
    </style>
            </head>
            <body class="bg-o1">
                <main class="flex VerseMainCOnt justify-content-between" style="">
                    <div class="Verse-leftCont">
                        <div class="VerseLeftContainer1 w-100">
                            <div class="w-100 position-relative" style="height: 45%;">
                                <div class="w-100" style="height: 60%; background-image: url('media/safetyHubBg.png'); background-size: cover; background-position: top"></div>
                                <div class="position-absolute w-100 flex justify-content-center" style="bottom: 0;">
                                    <div class="VLC1-PFP">
                                        <a href="umakVerseProfile.php"><img class="w-100 h-100 position-absolute" src="media/PFP/<?= $_SESSION['PFP']?>" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="m-auto text-center w-50">
                                <p class="txt-sm1 fw-bold"><?php echo $_SESSION['name'];?></p>
                                <p class="txt-sm1 color-s4">Study first, prioritizing this Hackathon right now 👨‍💻</p>
                            </div>
                            <div class="m-auto text-center w-50">
                                <div class="w-100 flex justify-content-between">
                                    <div class="text-center bg-o1" style="padding: 10px 0; border-radius: 10px; width: 49%; cursor: pointer;">
                                        <?php
                                            $query = "SELECT * FROM `followtable` WHERE `FollowingID` = ".$_SESSION['id']."";
                                            $result = mysqli_query($conn, $query);
                                            $row = mysqli_num_rows($result);
                                        ?>
                                        <small class="txt-sm1"><?php echo $row;?></small><br/>
                                        <small class="txt-sm1 color-s4">Followers</small>
                                    </div>
                                    <div class="text-center bg-o1" style="padding: 10px 0; border-radius: 10px; width: 49%; cursor: pointer;">
                                        <?php
                                            $query = "SELECT * FROM `followtable` WHERE `FollowerID` = ".$_SESSION['id']."";
                                            $result = mysqli_query($conn, $query);
                                            $row = mysqli_num_rows($result);
                                        ?>
                                        <small class="txt-sm1"><?php echo $row?></small><br />
                                        <small class="txt-sm1 color-s4">Following</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="VerseLeftContainer2 w-100">
                            <div class="w-100">
                                <p class="txt-sm1 fw-bold">Who to follow</p>
                                <small class="color-s4 fw-bold" style="letter-spacing: 3px;">ORGANIZATIONS</small>
                                <div class="w-100" style="margin: 10px 0;">
                                    <?php
                                        for($i = 0; $i <2; $i++) {
                                    ?>
                                            <div class="w-100 flex justify-content-between" style="margin-bottom: 5px;">
                                                <div class="">
                                                    <div class="position-relative b" style=" border-radius: 100%; width: 50px; height: 50px; background-image: url('media/ccisProfile.jpg'); background-size: contain"> </div>
                                                </div>
                                                <div style=" width: 53%; line-height: 15px; padding-top: 10px;">
                                                    <small class="txt-sm1 w-100">CCIS Student Council</small><br />
                                                    <small class="txt-sm2 w-100">3K Followers</small>
                                                </div>
                                                <div class="w-25 d-flex align-items-center" style="">
                                                    <button class="w-100 h-75 border-0 bg-p1 text-white txt-m2" style="border-radius: 10px;">Follow</button>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <div class="w-100 bg-o2" style="height: 2px; margin: 20px 0;"></div>

                            <div class="w-100">
                                <small class="color-s4 fw-bold" style="letter-spacing: 3px;">PEOPLE</small>
                                <div class="w-100" style="margin: 10px 0;">
                                    <?php
                                        for($i = 0; $i <2; $i++) {
                                    ?>
                                            <div class="w-100 flex justify-content-between" style="margin-bottom: 5px;">
                                                <div class="">
                                                    <div class="position-relative bg-o1" style="border-radius: 100%; width: 50px; height: 50px; background-image: url('media/councilProfile.png'); background-size: contain"> </div>
                                                </div>
                                                <div style="width: 53%; line-height: 15px; padding-top: 10px;">
                                                    <small class="txt-sm1 w-100">CCIS Student Council</small><br />
                                                    <small class="txt-sm2 w-100">3K Followers</small>
                                                </div>
                                                <div class="w-25 d-flex align-items-center" style="">
                                                    <button class="w-100 h-75 border-0 bg-p1 text-white txt-m2" style="border-radius: 10px;">Follow</button>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="Verse-centerCont">
                        <div class="flex justify-content-between" style="margin-bottom: 10px;">
                            <small class="txt-sm1 fw-bold">Moments</small>
                            <div>
                                <i class="fa-solid fa-arrow-left" id="momentsLeftArrow" style="margin-right: 10px; cursor: pointer"></i>
                                <i class="fa-solid fa-arrow-right" id="momentsRightArrow" style="cursor: pointer"></i>
                            </div>
                        </div>
                        <div class="VerseCenterMoment w-100" id="VerseCenterMoment">

                            <div class="momentsCard" style="background-image: url('media/PFP/<?= $_SESSION['PFP']?>'); background-position: center; background-size: cover;">
                                <div style="height: 65%;"></div>
                                <div class="position-relative w-100 position-relative" style="background-image: linear-gradient(#0000, #000); height: 35%; padding: 0 10px;">
                                    <p class="txt-sm1 fw-bold color-white w-100 bottom-0 position-absolute" style="">Add moments</p>
                                </div>
                                
                            </div>
                            <?php
                                for($i=0;$i<5;$i++) { 
                            ?>
                                    <div class="momentsCard" style="background-image: url('media/UmakVerse.png'); background-position: center; background-size: cover;">
                                        <div style="height: 65%;"></div>
                                        <div class="position-relative w-100 position-relative" style="background-image: linear-gradient(#0000, #000); height: 35%; padding: 0 10px;">
                                            <p class="txt-sm1 fw-bold color-white w-100 bottom-0 position-absolute" style="">Ej Palen</p>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                        <div class="w-100 txt-sm1 fw-bold" style="margin: 20px 0 10px 0;">News Feed</div>
                        <div class="VerseCenterCreatePost">
                            <div class="flex justify-content-between w-100">
                                <div class="overflow-hidden" style="width: 50px; height: 50px; background: grey; border-radius: 100%; position: relative;">
                                    <img class="w-100 h-100 position-absolute" src="media/PFP/<?= $PFP?>" />
                                </div>
                                <div class="flex align-items-center" style="width: 91%; height: 50px; border-radius: 30px; background: #F2F2F2; padding-left: 20px; cursor: pointer;">What’s happening?</div>
                            </div>

                            <div class="flex w-100 justify-content-end">
                                <div class="flex justify-content-between" style="margin: 10px 0; width: 91%;">
                                    <?php
                                        for($i=0;$i< count($addPostBtnOptionsText);$i++) {
                                    ?>
                                            <div class="flex align-items-center" style="width: 23.5%; padding: 5px 20px; border: 1px solid #BFC7D4; border-radius: 10px; cursor: pointer;">
                                                <div class="flex justify-content-center align-items-center" style="width: 30px; height: 30px; border-radius: 100%; position: relative; margin-right: 10px; position: relative; overflow: hidden;">
                                                    <img class="h-100" src="media/umakVerse/<?= $addPostBtnOptionsIcon[$i]?>"/>
                                                </div>
                                                <?php echo $addPostBtnOptionsText[$i];?>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            $query = "SELECT * FROM `umakversenf` INNER JOIN `userstb` ON `umakversenf`.`PostAuthor` = `userstb`.`UserID`";
                            $result = mysqli_query($conn, $query);
                            while ($postGet = mysqli_fetch_assoc($result)) {
                                $queryLike = "SELECT * FROM `postlikes` WHERE `WhoLikedID`=".$_SESSION['id']." AND `PostLikedID`=".$postGet['PostID']."";
                                $queryLikeNum = "SELECT * FROM `postlikes` WHERE `PostLikedID`=".$postGet['PostID']."";
                                $querySave = "SELECT * FROM `saveddb` WHERE `SavedPostBy`=".$_SESSION['id']." AND `SavedPost`=".$postGet['PostID']."";
                                $rowLike = mysqli_num_rows(mysqli_query($conn, $queryLike));
                                $rowLike2 = mysqli_num_rows(mysqli_query($conn, $queryLikeNum));
                                $rowSaved = mysqli_num_rows(mysqli_query($conn, $querySave));
                        ?>
                                <div class="w-100 flex" style="margin: 20px 0; height: auto; background: #fff; border-radius: 10px; padding: 20px;">
                                    <div class="" style="width: 8%;">
                                        <div class="rounded-circle position-relative overflow-hidden" style="width: 50px;height: 50px; background: grey;">
                                            <img class="w-100 h-100 position-absolute" src="media/PFP/<?= $postGet['UserPFP']?>" />
                                        </div>
                                    </div>
                                    <div class="" style="width: 92%;">
                                        <div class="flex justify-content-between align-items-center">
                                            <div>
                                                <small class="txt-sm1 fw-bold"><?php echo $postGet['Name']; ?></small>
                                                <div class="txt-sm2"><i class="fa-regular fa-clock"></i><?php echo " ".$postGet['PostCreatedDate']; ?></div>
                                            </div> 
                                            <i class="fa-solid fa-ellipsis txt-m1 fw-bold"></i>
                                        </div>
                                        <div style="padding: 10px 0;">
                                            <?php echo htmlspecialchars($postGet['PostDesc']);?>
                                        </div>
                                        <img class="w-100" style="border-radius: 20px;" src="media/umakVerse/POSTS/<?= $postGet['PostImg'] ?>" />
                                        <div class="w-100 flex justify-content-between" style="margin-top: 10px;">
                                            <a href="umakVerseNF.php?type=Like&id=<?= $postGet['PostID']?>&like=<?= $rowLike?>" class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;text-decoration: none; color: black;">
                                                <img class="" src="media/umakVerse/<?= $rowLike > 0 ? "LikedIcon.svg" : "LikeIcon.svg";?>" style="margin-right: 8%;"/>
                                                <small class="txt-sm1"><?= $rowLike > 0 ? "Liked" : "Like";?>
                                                </small>
                                            </a>
                                            <div class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;">
                                                <img class="" src="media/umakVerse/CommentIcon.svg" style="margin-right: 8%;"/>
                                                <small class="txt-sm1">Comment</small>
                                            </div>
                                            <div class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;">
                                                <img class="" src="media/umakVerse/ShareIcon.svg" style="margin-right: 8%;"/>
                                                <small class="txt-sm1">Share</small>
                                            </div>
                                            <a href="umakVerseNF.php?type=Save&id=<?= $postGet['PostID']?>&save=<?= $rowSaved?>" class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;text-decoration: none; color: black;">
                                                <img class="" src="media/umakVerse/<?= $rowSaved > 0 ? "SavedIcon.svg" : "SaveIcon.svg";?>" style="margin-right: 8%;"/>
                                                <small class="txt-sm1"><?= $rowSaved > 0 ? "Saved" : "Save";?>
                                                </small>
                                            </a>
                                        </div>
                                        <div class="flex" style="margin: 10px 0 0 0;">
                                            <?php
                                                if($rowLike > 0) {
                                            ?>
                                                    <div class="flex" style="padding: 0 5px; width: 7%;">
                                                        <img class="" src="media/umakVerse/LikedIcon.svg" style="margin-right: 8%;"/>
                                                        <small class=""><?=$rowLike2?></small>
                                                    </div>
                                            <?php   
                                                }
                                                if($rowSaved > 0) {
                                            ?>
                                                    <div class="flex" style="padding: 0 5px; width: 7%;">
                                                        <img class="" src="media/umakVerse/SavedIcon.svg" style="margin-right: 8%;"/>
                                                        <small class=""><?=$rowSaved?></small>
                                                    </div>
                                            <?php    
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div> 
                        <?php
                            }
                        ?>
                    </div>

                    <div class="Verse-rightCont">
                        <div class="VerseRightContainer1 w-100">
                            <div class="w-100">
                                <p class="txt-sm1 fw-bold">Trending in Umak</p>
                                <small class="color-s4 fw-bold" style="letter-spacing: 3px;">POSTS</small>
                                <div class="w-100" style="margin: 10px 0;">
                                    <?php
                                        for ($i = 0; $i < count($popularHashtag); $i++) {
                                    ?>
                                            <div class="" style="margin-bottom: 10px;">
                                                <a asp-page="" class="text-decoration-none">
                                                    <small class="txt-sm1 text-black"><?php echo $popularHashtag[$i]; ?></small><br />
                                                    <small class="txt-sm2 color-s4"><?php echo $popularHashtagPostCount[$i]; ?> Posts</small>
                                                </a>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <a  href="explore.php" class="text-decoration-none bg-o1 text-black" asp-page="" style="padding: 5px 10px; border-radius: 10px; margin-top: 10px;">
                                    Show more
                                </a>
                            </div>

                            <div class="w-100 bg-o2" style="height: 2px; margin: 20px 0;"></div>

                            <div class="w-100">
                                <small class="color-s4 fw-bold" style="letter-spacing: 3px;">LOCATIONS</small>
                                <div class="w-100" style="margin: 10px 0;">
                                    <?php
                                        for ($i = 0; $i < count($popularLocation); $i++) {
                                    ?>
                                            <div class="" style="margin-bottom: 10px;">
                                                <a asp-page="" class="text-decoration-none">
                                                    <small class="txt-sm1 text-black"><?php echo $popularLocation[$i]; ?></small><br />
                                                    <small class="txt-sm2 color-s4"><?php echo $popularLocationPostCount[$i]; ?> Posts</small>
                                                </a>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <a href="explore.php" class="text-decoration-none bg-o1 text-black" asp-page="" style="padding: 5px 10px; border-radius: 10px; margin-top: 10px;">
                                    Show more
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </body>
            
            <script src="assets/JS/site.js"></script>
        </html>

        <script>
            const leftMomentBtn = document.getElementById('momentsLeftArrow');
            const rightMomentBtn = document.getElementById('momentsRightArrow');
            const momentCont = document.getElementById('VerseCenterMoment');

            leftMomentBtn.onclick = function () {
                momentCont.scrollLeft -= 500;
            }
            rightMomentBtn.onclick = function () {
                momentCont.scrollLeft += 500;
            }
        </script>
        <?php
            if(isset($_GET['type'], $_GET['id'])) {
                $type = $_GET['type'];
                $id = $_GET['id'];
                if($type == "Like" && $_GET['like'] == 0) {
                    $query = "INSERT INTO `postlikes`(`WhoLikedID`, `PostLikedID`, `PostLikeCreated`) VALUES (".$_SESSION['id'].",".$id.",'".date("Y-m-d H:i:s")."')";
                    $result = mysqli_query($conn, $query);
                }
                else if($type == "Like" && $_GET['like'] > 0) {
                    $query = "DELETE FROM `postlikes` WHERE `WhoLikedID`=".$_SESSION['id']." AND `PostLikedID`=".$id."";
                    $result = mysqli_query($conn, $query);
                }

                if($type == "Save" && $_GET['save'] == 0) {
                    $query = "INSERT INTO `saveddb`(`SavedPostBy`, `SavedPost`, `SavedDate`) VALUES (".$_SESSION['id'].",".$id.",'".date("Y-m-d H:i:s")."')";
                    $result = mysqli_query($conn, $query);
                }
                else if($type == "Save" && $_GET['save'] > 0) {
                    $query = "DELETE FROM `saveddb` WHERE `SavedPostBy`=".$_SESSION['id']." AND `SavedPost`=".$id."";
                    $result = mysqli_query($conn, $query);
                }
            }
        ?>
<?php
    }
    else {
        header("Location: index.php");
    }

    
?>

</div>