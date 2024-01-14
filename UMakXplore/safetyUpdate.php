<?php
$username = "root";
$password = "";
$database = "umakversedb";

$conn = mysqli_connect("localhost", $username, $password);

mysqli_select_db($conn, $database) or die("Unabale to select database");

$query = "SELECT * FROM safety_update";
$result = mysqli_query($conn, $query);


?>

<div class="MainSection3 flex bg-p1 w-100">
    <div>
        <p class="txt-b2 text-white MainSection3-h1">UMak Safety Update</p>
        <?php
            $num = 0;
            while ($row = mysqli_fetch_array($result)) {
                ++$num;
                $icon = $row['icon'];
                $title = $row['title'];
                $description = $row['description'];

            ?>
        <div class="flex" style="margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="0" data-aos-offset="100">
                <img src="<?php echo $icon; ?>" alt="">
                <div style="margin-left: 30px;">
                    <small class="txt-m2 color-p2" style="letter-spacing: 5px;"><?php echo $title; ?></small><br />
                    <small class="txt-m2 text-white">
                        <?php echo $description; ?>
                    </small>
                </div>
        </div>
    <?php
            }
            mysqli_close($conn);
    ?>
    <div class="flex" style="margin-top: 20px;" data-aos="fade-up" data-aos-offset="100">
        <a class="viewAllBtns1 text-white" asp-page="">View All Safety Alerts
            <svg viewBox="0 0 151 100" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M88.7553 10.946C93.6742 20.4516 100.739 31.3786 107.718 40.2778L109.74 42.8571H0L0.000851949 50V57.1429H109.743L106.937 60.5159C101.426 67.1397 93.1934 79.9238 88.0262 89.8809L82.7752 100H87.8398H92.9036L105.334 87.2167C119.145 73.0111 133.308 61.5643 143.799 56.1254L150.256 52.7778L150.26 49.4667C150.263 46.4087 150.061 46.0873 147.623 45.2714C138.816 42.3262 122.404 29.7437 105.969 13.3373L92.6092 0H87.85H83.0908L88.7553 10.946Z" />
            </svg>

        </a>
    </div>

    </div>
</div>