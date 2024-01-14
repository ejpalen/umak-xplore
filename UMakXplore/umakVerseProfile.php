<?php
    session_start();
    include 'PHPBack/connect.php';

    $popularHashtag = array( "#laronglahi", "#Umakdancextreme", "#UmakXplore" );
    $popularHashtagPostCount = array( "1k", "210", "2k" );

    $popularLocation = array( "Track Oval Field", "Grand Theater", "Basketball Court" );
    $popularLocationPostCount = array( "2k", "510", "500" );   
    
    $PostInteraction = array( "Like", "Comment", "Share", "Save" );
    $PostInteractionIcon = array( "LikeIcon.svg", "CommentIcon.svg", "ShareIcon.svg", "SaveIcon.svg" );

    if(isset($_SESSION['id'])) {
        include 'header.php';
        $query = "SELECT * FROM `userstb` WHERE `UserID`=".$_SESSION['id']."";
        $query2 = "SELECT * FROM `followtable` WHERE `FollowingID` = ".$_SESSION['id']."";
        $query3 = "SELECT * FROM `followtable` WHERE `FollowerID` = ".$_SESSION['id']."";
        $result = mysqli_query($conn, $query); 
        $result2 = mysqli_query($conn, $query2);
        $result3 = mysqli_query($conn, $query3);
        $row = mysqli_fetch_array($result); 
        $row2 = mysqli_num_rows($result2);
        $row3 = mysqli_num_rows($result3);
?>
        <html>
            <body class="bg-o1">
                <div class="box-b2" style="min-height: 100vh; margin: 100px auto 0 auto;">
                    <div class="w-100 bg-white overflow-hidden" style="height: 70vh; border-radius: 20px;margin: 20px 0;">
                        <div class="position-relative" style="height: 50%;background: grey;"></div>
                        <div class="position-relative" style="height: 50%; padding: 30px;">
                            <div class="flex">
                                <div class="rounded-circle UVP-PFP overflow-hidden" style="border: 1px solid #fff;">
                                    <img class="w-100 h-100 position-absolute" src="media/PFP/<?= $row['UserPFP']?>" />
                                </div>
                                <div class="bg-o1 position-absolute" style="padding: 10px 30px;border-radius: 10px;right: 30px;cursor: pointer;">
                                    Edit Profile
                                </div>
                            </div>
                            <div class="UVP-NameCont">
                                <p class="txt-b2"><?php echo $row['Name'];?></p>
                                <p class="txt-s2">Study first, prioritizing this Hackathon right now 👨‍💻</p>
                                <div class="flex">
                                    <p class="txt-s2" style="margin-right: 10px;"><b><?php echo $row2;?></b> Followers</p>
                                    <p class="txt-s2"><b><?php echo $row3;?></b> Following</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 bg-white overflow-hidden position-relative" style="height: 50vh; border-radius: 20px;padding: 30px;">
                        <p class="fw-bold txt-m1">About</p>
                        <p class="txt-sm1" style="letter-spacing: 3px;">CONTACT INFORMATION</p>
                        <div class="flex">
                            <img src="media/umakVerse/EmailIcon.png" style="margin: 0 10px 10px 0;"/>
                            <?php echo $row['Email'];?>
                        </div>
                        <div class="flex">
                            <img src="media/umakVerse/EmailIcon.png" style="margin: 0 10px 10px 0;"/>
                            096796344521
                        </div>
                        <div class="txt-sm1" style="letter-spacing: 5px;">PROGRAM</div>
                        <div class="txt-sm1">Bachelor of Science in Computer Science Major in Application Development</div>
                        <div class="txt-sm1" style="letter-spacing: 5px;">BLOCK SECTION</div>
                        <div class="txt-sm1">II-ACSAD</div>
                        <div class="txt-sm1" style="letter-spacing: 5px;">SCHEDULE</div>
                        <div class="txt-sm1">II-ACSAD</div>
                        <div class="position-absolute w-100 justify-content-center flex" style="left: 0; padding: 30px;">
                            <button class="w-100" style="border-radius: 20px;margin: auto;border: none;padding: 5px 0;">See All</button>
                        </div>
                    </div>

                    <div class="flex justify-content-between w-100" style="margin: 20px 0;">
                        <a href="umakVerseProfile.php?type=UserPost" class="bg-white text-decoration-none" style="width: 49%;text-align: center;border-radius: 20px; padding: 10px 0;color: black;">
                            <img src="media/umakVerse/<?= $x = (!isset($_GET['type']) || $_GET['type'] != "SavedPost") ? "PostsActive.svg" : "Posts.svg";?>"/>    
                            POSTS
                        </a>
                        <a href="umakVerseProfile.php?type=SavedPost" class="bg-white text-decoration-none" style="width: 49%;text-align: center;border-radius: 20px; padding: 10px 0;color: black;">
                            <img src="media/umakVerse/<?= (!isset($_GET['type']) ? "SaveIcon.svg" : ($_GET['type'] != "SavedPost" ? "SaveIcon.svg" : "SavedIcon.svg")) ;?>"/>
                            SAVED
                        </a>
                    </div>

                    <div class="flex justify-content-between w-100">
                        <?php
                        if(!isset($_GET['type']) || $_GET['type'] == "UserPost" || $_GET['type'] != "SavedPost") {
                        ?>
                            <div style="width: 60%;">
                                <?php
                                $profileQuery = "SELECT * FROM `umakversenf` INNER JOIN `userstb` ON `umakversenf`.`PostAuthor` = `userstb`.`UserID` WHERE `PostAuthor`=".$_SESSION['id']."";
                                $profileResult = mysqli_query($conn, $profileQuery);
                                while($postGet = mysqli_fetch_assoc($profileResult)) {
                                    $queryLike = "SELECT * FROM `postlikes` WHERE `WhoLikedID`=".$_SESSION['id']." AND `PostLikedID`=".$postGet['PostID']."";
                                    $queryLikeNum = "SELECT * FROM `postlikes` WHERE `PostLikedID`=".$postGet['PostID']."";
                                    $resultLike = mysqli_query($conn, $queryLike);
                                    $querySave = "SELECT * FROM `saveddb` WHERE `SavedPostBy`=".$_SESSION['id']." AND `SavedPost`=".$postGet['PostID']."";
                                    $rowSaved = mysqli_num_rows(mysqli_query($conn, $querySave));
                                    if (!$resultLike) {
                                        die('Invalid query: ' . mysqli_error($conn));
                                    }
                                    $rowLike = mysqli_num_rows($resultLike);
                                    $rowLike2 = mysqli_num_rows(mysqli_query($conn, $queryLikeNum));
                                ?>
                                    <div class="w-100 flex" style="margin-bottom: 20px; height: auto; background: #fff; border-radius: 10px; padding: 20px;">
                                        <div class="" style="width: 8%;">
                                            <div class="rounded-circle position-relative" style="width: 50px;height: 50px; background: grey; overflow:hidden;">
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
                                                <div class="w-100 flex justify-content-between" style="margin-top: 20px;">
                                                    <a href="umakVerseProfile.php?type=Like&id=<?= $postGet['PostID']?>&like=<?= $rowLike?>" class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;text-decoration: none; color: black">
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
                                                    <a href="umakVerseProfile.php?type=Save&id=<?= $postGet['PostID']?>&save=<?= $rowSaved?>" class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;text-decoration: none; color: black;">
                                                        <img class="" src="media/umakVerse/<?= $rowSaved > 0 ? "SavedIcon.svg" : "SaveIcon.svg";?>" style="margin-right: 8%;"/>
                                                        <small class="txt-sm1"><?= $rowSaved > 0 ? "Saved" : "Save";?>
                                                        </small>
                                                    </a>
                                                </div>
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
                                }?>
                            </div>
                        <?php
                        }
                        else if($_GET['type'] == "SavedPost") {
                        ?>
                            <div style="width: 60%;">
                                <?php
                                $profileQuery = "SELECT * FROM `saveddb` 
                                                INNER JOIN `umakversenf` ON `saveddb`.`SavedPost` = `umakversenf`.`PostID`
                                                INNER JOIN `userstb` ON `umakversenf`.`PostAuthor` = `userstb`.`UserID`
                                                WHERE `SavedPostBy`=".$_SESSION['id']."";
                                $profileResult = mysqli_query($conn, $profileQuery);
                                while($postGet = mysqli_fetch_assoc($profileResult)) {
                                    $queryLike = "SELECT * FROM `postlikes` WHERE `WhoLikedID`=".$_SESSION['id']." AND `PostLikedID`=".$postGet['PostID']."";
                                    $queryLikeNum = "SELECT * FROM `postlikes` WHERE `PostLikedID`=".$postGet['PostID']."";
                                    $resultLike = mysqli_query($conn, $queryLike);
                                    $querySave = "SELECT * FROM `saveddb` WHERE `SavedPostBy`=".$_SESSION['id']." AND `SavedPost`=".$postGet['PostID']."";
                                    $rowSaved = mysqli_num_rows(mysqli_query($conn, $querySave));
                                    if (!$resultLike) {
                                        die('Invalid query: ' . mysqli_error($conn));
                                    }
                                    $rowLike = mysqli_num_rows($resultLike);
                                    $rowLike2 = mysqli_num_rows(mysqli_query($conn, $queryLikeNum));
                                ?>
                                    <div class="w-100 flex" style="margin-bottom: 20px; height: auto; background: #fff; border-radius: 10px; padding: 20px;">
                                        <div class="" style="width: 8%;">
                                            <div class="rounded-circle position-relative" style="width: 50px;height: 50px; background: grey; overflow:hidden;">
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
                                                <div class="w-100 flex justify-content-between" style="margin-top: 20px;">
                                                    <a href="umakVerseProfile.php?type=Like&id=<?= $postGet['PostID']?>&like=<?= $rowLike?>" class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;text-decoration: none; color: black">
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
                                                    <a href="umakVerseProfile.php?type=Save&id=<?= $postGet['PostID']?>&save=<?= $rowSaved?>" class="bg-o1 justify-content-center flex align-items-center" style="border-radius: 10px; width: 24%; padding: 10px 0; cursor: pointer;text-decoration: none; color: black;">
                                                        <img class="" src="media/umakVerse/<?= $rowSaved > 0 ? "SavedIcon.svg" : "SaveIcon.svg";?>" style="margin-right: 8%;"/>
                                                        <small class="txt-sm1"><?= $rowSaved > 0 ? "Saved" : "Save";?>
                                                        </small>
                                                    </a>
                                                </div>
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
                                }?>
                            </div>
                        <?php
                        }
                        ?>

                        <div style="width: 39%;">
                            <div class="w-100">
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
                                        <a class="text-decoration-none bg-o1 text-black" asp-page="" style="padding: 5px 10px; border-radius: 10px; margin-top: 10px;">
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
                                        <a class="text-decoration-none bg-o1 text-black" asp-page="" style="padding: 5px 10px; border-radius: 10px; margin-top: 10px;">
                                            Show more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="assets/JS/site.js"></script>
            </body>
        </html>
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
            else if(isset($_GET['type'])) {
                $type = $_GET['type'];
                if($type == "SavedPost") {
                    
                }
            }
    }
    else {
        header("Location: index.php");
    }
?>