<?php
session_start();
include 'header.php';

$quicAccessPic = array("SafetyCenter.png", "UmakVerse.png", "pfp1.png", "adminBldg.png");
$quicAccessTxt = array("Safety Center", "UmakVerse", "Profile", "About UMak Xplore");
$recAreasPic = array("studentAreaHome.JPG", "ovalChair.png", "foodStalls.png", "adminBldg.png");
$recAreasTitle = array("Student Study Area", "Umak Stadium", "Food Stalls", "Admin Building");
$recAreasBadge = array("Ultimate Chill Spot!", "Best View!", "Foodie Fave!", "");
$recAreasDesc = array("Check out the student lounge at the 10th floor of HPSB building for a cozy and comfortable study spot with a great view.", "Relax and unwind at our spacious outdoor seating area with stunning views of the oval trackfield.", "Satisfy your cravings with diverse food options at HPSB's front food stalls.", "Check out the student lounge at the 10th floor of HPSB building for a cozy and comfortable study spot with a great view.");
$quickAccessIcon =  array("media\icons\safetyCenterIcon.png", "media\icons\umakVerseIcon.png", "media\icons\profileIcon.png", "media\icons\aboutIcon.png");
?>


<main>
    <div class="w-100 Mainsection1" id="Mainsection1">
        <div data-aos="fade-up" data-aos-delay="0" class="Mainsection1Content1 fw-bold" >
            <small data-aos="fade-up" data-aos-delay="50" class="txt-m2 txt-sm1 color-p1 fw-normal" style="display:inline-block; color: #000; margin-left: 20px;">
                <svg viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                    <path fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M10.0723 0.0873106C9.96392 0.143558 9.81732 0.276162 9.74663 0.382029C9.62383 0.565839 9.61805 0.624522 9.61805 1.69062C9.61805 2.75672 9.62383 2.8154 9.74663 2.99921C10.1104 3.54373 10.8862 3.50702 11.1916 2.93084C11.3182 2.6918 11.3228 2.63975 11.3063 1.62378C11.2906 0.658679 11.2788 0.551961 11.1722 0.409445C10.8857 0.0260785 10.4414 -0.104033 10.0723 0.0873106ZM9.39147 5.22843C7.94603 5.4669 6.727 6.09695 5.6741 7.14968C4.3416 8.48201 3.67133 10.0879 3.67066 11.9499C3.66998 13.711 4.32801 15.3474 5.54767 16.6178C5.80262 16.8834 6.1835 17.2284 6.39404 17.3845L6.77679 17.6682L6.53231 18.1902C6.17109 18.9613 6.08188 19.3688 6.08301 20.2415C6.0838 20.8271 6.10958 21.0682 6.20876 21.4191C6.61886 22.869 7.52596 23.9591 8.83126 24.5708C9.80883 25.029 9.25139 24.9996 16.9818 24.9996C23.1847 24.9996 23.9034 24.9904 24.2631 24.9059C26.5479 24.3697 28.2374 22.7251 28.8264 20.4643C29.017 19.7322 29.0167 18.4279 28.8257 17.6925C28.5328 16.5647 28.0335 15.6833 27.2365 14.8869C26.1008 13.7522 24.6274 13.1327 23.0642 13.1327H22.5908L22.3688 12.6937C21.5636 11.1015 20.1332 9.91017 18.4482 9.42853C17.9466 9.28522 17.2464 9.16836 16.8786 9.16666C16.6783 9.16576 16.6616 9.14973 16.4498 8.75599C15.5068 7.00388 13.8652 5.74882 11.9405 5.30858C11.297 5.16137 10.0379 5.12183 9.39147 5.22843ZM0.45407 5.63338C0.0305425 5.84948 -0.128231 6.39909 0.113639 6.81186C0.222056 6.99691 0.397539 7.1213 1.17809 7.56647C2.05704 8.06771 2.12858 8.09807 2.3794 8.07564C2.88313 8.03067 3.21144 7.6226 3.1446 7.12448C3.09668 6.767 2.93372 6.61678 2.01892 6.0867C1.06107 5.53165 0.801127 5.45637 0.45407 5.63338ZM19.7687 5.60189C19.5093 5.70588 18.1392 6.52394 17.9863 6.66594C17.6463 6.98179 17.6674 7.53917 18.0315 7.85881C18.4456 8.22241 18.6708 8.1814 19.7717 7.54217C20.7455 6.97675 20.8902 6.828 20.8902 6.39207C20.8902 5.80529 20.2993 5.38896 19.7687 5.60189ZM11.3447 6.9316C12.6365 7.15688 13.842 7.92808 14.611 9.02109L14.8864 9.41272L14.4189 9.58872C13.5765 9.90587 12.9114 10.3297 12.2616 10.9634C11.1633 12.0345 10.5292 13.3291 10.3407 14.8854L10.269 15.4769L9.90104 15.5448C9.41056 15.6353 8.69532 15.9167 8.33161 16.1622C8.16932 16.2717 8.00777 16.3614 7.97271 16.3614C7.83529 16.3614 7.0433 15.7559 6.72184 15.4051C4.86545 13.3792 4.91745 10.3066 6.84091 8.37014C7.31734 7.89042 7.61121 7.67568 8.18156 7.39031C9.16948 6.89603 10.2458 6.73998 11.3447 6.9316ZM17.3783 10.9259C19.1219 11.2009 20.5773 12.4413 21.1172 14.1124C21.2699 14.5852 21.3936 14.742 21.7088 14.8623C21.9222 14.9438 22.0138 14.9487 22.3217 14.8951C24.9902 14.4304 27.4391 16.6118 27.2733 19.3058C27.2065 20.3907 26.8058 21.2693 26.0187 22.0564C25.4664 22.6088 24.9793 22.9069 24.2039 23.1672L23.8074 23.3003L17.2367 23.3166C12.4962 23.3284 10.5579 23.3149 10.2781 23.2681C9.08797 23.0691 8.09195 22.0757 7.82515 20.8216C7.54788 19.5181 8.19368 18.156 9.38592 17.5295C9.89447 17.2622 10.3326 17.1544 10.91 17.1544C11.458 17.1544 11.7062 17.0638 11.8991 16.7934C12.0168 16.6284 12.0258 16.5528 12.0312 15.6817C12.0374 14.6823 12.1038 14.3281 12.418 13.6177C13.2499 11.7367 15.3372 10.6039 17.3783 10.9259ZM1.94279 15.8806C1.10746 16.3297 0.240522 16.8716 0.145643 17.0038C-0.235458 17.5349 0.179516 18.344 0.832905 18.344C1.13012 18.344 2.84835 17.3786 3.02146 17.1144C3.25613 16.7562 3.15576 16.1996 2.8108 15.9468C2.60592 15.7967 2.16183 15.7627 1.94279 15.8806Z" />
                </svg>
                32°C at UMak</small><br />
                <small class="txt-b1 color-p1" style="margin-left: 17px;">Hello, <?php echo $_SESSION['name'];?>!</small><br />
            <p data-aos="fade-up" data-aos-delay="150" class="txt-m2 bg-p2 color-p1" style="display:inline-block; margin-bottom: 10px;  margin-top: 10px;padding:10px 20px; backdrop-filter: blur(10px); background: rgba(255, 255, 255, .5); border-radius: 30px;">Today's Highlights</p>
            <div class="fw-normal highlights-container"">
                <div data-aos="fade-up" data-aos-delay="200" class="notifContainer">Your next class is Modern Physics at 1:30 PM.</div>
                <div data-aos="fade-up" data-aos-delay="250" class="notifContainer">You have a 3-hour break between classes today. Take a look at Umak Discoveries for places to explore on campus.</div>
                <div data-aos="fade-up" data-aos-delay="300" class="notifContainer">Recent incident reported on campus, stay informed and report any suspicious activity to Umak Safety Center.</div>
                <div data-aos="fade-up" data-aos-delay="300" data-aos-offset="0" class="notifContainer">Don't forget to attend the campus-wide event, "Umak Sports Fest," happening today.</div>
            </div>
        </div>
    </div>

    <div class="MainSection2 flex">
        <div class="Mainsection2Content1" >
            <p class="txt-b2 color-p1 fw-bold">Quick Access</p>
            <div class="flex">
            <?php for ($i = 0; $i < count($quicAccessPic); $i++): ?>
    <div class="quickAccesCont" data-aos="fade-up" data-aos-delay="<?php echo $i*50 ?>" data-aos-offset="100"  >
        <div class="quickAccesImg" style='background-image: url("media/<?php echo $quicAccessPic[$i]; ?>")'></div>
        <div class="quickAccessOverlay">
            <div>
            <img src="<?php echo $quickAccessIcon[$i]; ?>" alt="">
            <p><?php echo $quicAccessTxt[$i]; ?></p>
            </div>
        </div>
    </div>
<?php endfor; ?>
            </div>
        </div>
    </div>

    <?php include 'safetyUpdate.php'?>

    <div class="MainSection4 flex w-100">
        <div class="EventsContainer">
            <p data-aos="fade-up" data-aos-offset="100"  class="txt-b2 color-p1 fw-bold MainSection4-h1">This Week's Events</p>

            <div data-aos="fade-up" data-aos-offset="100" class="flex" style="margin-bottom: 30px;">
            <svg viewBox="0 0 50 50"  xmlns="http://www.w3.org/2000/svg">
            <circle cx="25" cy="25" r="25"/>
            </svg>

                <div style="margin-left: 20px;">
                    <small class="txt-sm1 color-p1 fw-bold">Monday, March 22</small><br />
                    <small class="txt-sm1">
                        "Student Leadership Conference" from 9:00 AM to 4:00 PM at the Student Union.
                    </small>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-offset="100" class="flex" style="margin-bottom: 30px;">
            <svg viewBox="0 0 50 50"  xmlns="http://www.w3.org/2000/svg">
            <circle cx="25" cy="25" r="25"/>
            </svg>
                <div style="margin-left: 20px;">
                    <small class="txt-sm1 color-p1 fw-bold">Tuesday, March 23</small><br />
                    <small class="txt-sm1">
                        "Career Fair" from 10:00 AM to 2:00 PM at the Athletics Center.
                    </small>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-offset="100" class="flex" style="margin-bottom: 30px;">
            <svg viewBox="0 0 50 50"  xmlns="http://www.w3.org/2000/svg">
            <circle cx="25" cy="25" r="25"/>
            </svg>
                <div style="margin-left: 20px;">
                    <small class="txt-sm1 color-p1 fw-bold">Thursday, March 25</small><br />
                    <small class="txt-sm1">
                        "Research Symposium" from 1:00 PM to 5:00 PM at the Science Center.
                    </small>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-offset="100" class="flex" style="margin: 20px 30px 0;">
                <a class="viewAllBtns2" asp-page="">View All Upcoming Events
                <svg viewBox="0 0 151 100"  xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M88.7553 10.946C93.6742 20.4516 100.739 31.3786 107.718 40.2778L109.74 42.8571H0L0.000851949 50V57.1429H109.743L106.937 60.5159C101.426 67.1397 93.1934 79.9238 88.0262 89.8809L82.7752 100H87.8398H92.9036L105.334 87.2167C119.145 73.0111 133.308 61.5643 143.799 56.1254L150.256 52.7778L150.26 49.4667C150.263 46.4087 150.061 46.0873 147.623 45.2714C138.816 42.3262 122.404 29.7437 105.969 13.3373L92.6092 0H87.85H83.0908L88.7553 10.946Z"/>
</svg>        
            </a>
            </div>

        </div>
    </div>

    <div class="MainSection5 w-100 flex align-items-center">
        <div class="w-100">
            <div class="flex justify-content-between" >
                <p class="fw-bold txt-b2 color-p1">Recomended Areas</p>
                <div class="flex txt-m1 align-items-center justify-content-between" style="width: 3%;"><i class="fa-solid fa-arrow-left"></i><i class="fa-solid fa-arrow-right"></i></div>
            </div>
            <div class="flex w-100 RecAreas" style="overflow-x: scroll;">
            <?php for ($i = 0; $i < count($recAreasPic); $i++): ?>
    <div class="RecomendedAreasCont" data-aos="fade-up" data-aos-offset="100"  data-aos-delay="<?php echo $i*50 ?>">
        <div class="RecAreaPic" style='background-image: url("media/<?php echo $recAreasPic[$i]; ?>")'></div>
        <div class="RecAreaPicOverlay">
            <div style="padding: 20px;">
            <div class="w-100">
                <?php if (!empty($recAreasBadge[$i])): ?>
                    <div class="Badge1 txt-sm2"><?php echo $recAreasBadge[$i]; ?></div>
                <?php endif; ?>
            </div>
            <div class="w-100 RecAreaTxt">
                <small class="txt-m1 fw-bolder"><?php echo $recAreasTitle[$i]; ?></small><br />
                <small class="txt-sm1 fw-bold"><?php echo $recAreasDesc[$i]; ?></small>
            </div>
            <div class="flex" style="margin-top: 5px;">
                <a class="viewAllBtns2 text-white bg-p1" href="" role="button">Visit now
                <svg viewBox="0 0 151 100"  xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M88.7553 10.946C93.6742 20.4516 100.739 31.3786 107.718 40.2778L109.74 42.8571H0L0.000851949 50V57.1429H109.743L106.937 60.5159C101.426 67.1397 93.1934 79.9238 88.0262 89.8809L82.7752 100H87.8398H92.9036L105.334 87.2167C119.145 73.0111 133.308 61.5643 143.799 56.1254L150.256 52.7778L150.26 49.4667C150.263 46.4087 150.061 46.0873 147.623 45.2714C138.816 42.3262 122.404 29.7437 105.969 13.3373L92.6092 0H87.85H83.0908L88.7553 10.946Z"/>
</svg>        </a>
            </div>
        </div>
        </div>
    </div>
<?php endfor; ?>

            </div>
            <div class="urAllCUp w-100 position-relative overflow-hidden" >
                <div class="flex justify-content-center align-items-center position-absolute w-100 urAllCupchild" style="background: rgba(1, 0, 104, .4); height: 100%; border-radius: 150px;">
                    <div>
                        <p data-aos="fade-up" data-aos-offset="100" class="txt-b2 text-white fw-bold">You're all caught up!</p>
                        <div class="flex justify-content-center">
                            <a data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" class="viewAllBtns3 text-black bg-p2 fw-bold">Explore more pages
                            <svg viewBox="0 0 151 100"  xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M88.7553 10.946C93.6742 20.4516 100.739 31.3786 107.718 40.2778L109.74 42.8571H0L0.000851949 50V57.1429H109.743L106.937 60.5159C101.426 67.1397 93.1934 79.9238 88.0262 89.8809L82.7752 100H87.8398H92.9036L105.334 87.2167C119.145 73.0111 133.308 61.5643 143.799 56.1254L150.256 52.7778L150.26 49.4667C150.263 46.4087 150.061 46.0873 147.623 45.2714C138.816 42.3262 122.404 29.7437 105.969 13.3373L92.6092 0H87.85H83.0908L88.7553 10.946Z"/>
</svg>          
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>

<?php include 'assets/aos.php'?>

<script src="./assets/site.js"></script>
