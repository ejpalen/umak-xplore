<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="assets/safetycenter.css" />
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <?php
  $username = "root";
  $password = "";
  $database = "umakversedb";

  $conn = mysqli_connect("localhost", $username, $password);
  mysqli_select_db($conn, $database) or die("Unabale to select database");

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submitEmergency'])) {
      // retrieve the user inputs
      $emergency = $_POST['emergency'];
      $building = $_POST['building'];
      $floor = $_POST['floor'];
      $room = $_POST['room'];
      $description = $_POST['description'];
      $contact = $_POST['contact'];

      // insert the user inputs into the database
      $sql = "INSERT INTO report_emergencies (reporter, emergency_type, building, floor, room, description, mobile_number, date, time)
            VALUES ('Airich Jay Diawan', '$emergency', '$building', '$floor', '$room', '$description', '$contact', CURDATE(), CURTIME())";
      $result = mysqli_query($conn, $sql);

      // check if query is successful and display a success message
      if ($result) {
        // Display success message
        $message = "Form submitted successfully!";
        echo "<script>alert('$message');</script>";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    } else if (isset($_POST['submitIncident'])) {
      // retrieve the user inputs
      $incident = $_POST['incident'];
      $building = $_POST['building'];
      $floor = $_POST['floor'];
      $room = $_POST['room'];
      $description = $_POST['description'];
      $evidence = $_POST['evidence'];
      $contact = $_POST['contact'];

      // insert the user inputs into the database
      $sql = "INSERT INTO report_incidents (reporter, incident_type, building, floor, room, description, evidence, mobile_number, date, time)
            VALUES ('Edgar Palen Jr.','$incident', '$building', '$floor', '$room', '$description', '$evidence', '$contact', CURDATE(), CURTIME())";
      $result = mysqli_query($conn, $sql);

      // check if query is successful and display a success message
      if ($result) {
        // Display success message
        $message = "Form submitted successfully!";
        echo "<script>alert('$message');</script>";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    }
  }

  $sql = "SELECT name FROM building";
  $result = mysqli_query($conn, $sql);
  $options = "";

  // Loop through all rows and append options to the $options variable
  foreach ($result as $row) {
    $options .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
  }

  $sql2 = "SELECT DISTINCT name FROM floor";
  $result2 = mysqli_query($conn, $sql2);
  $options2 = "";

  // Loop through all rows and append options to the $options variable
  foreach ($result2 as $row) {
    $options2 .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
  }

  $query = "SELECT * FROM recent_incidents";
  $result1 = mysqli_query($conn, $query);


  ?>

  <div class="safetyCenterContainer">

    <div class="container-top-absolute"></div>
    <div class="safety-center-container">
      <div class="safety-center-container-header">
        <h1>Safety Center</h1>
        <p>Report, Connect, Protect: Your Safety, Our Priority</p>
      </div>
      <div class="safety-center-container-main-buttons">
        <div class="safety-center-container-main-button report-emergencies">
          <span class="report-back-button">&#8592;</span>
          <h2>Report Emergencies, Get Help Fast.</h2>
          <button id="report-emergency-button">Click Here</button>

          <div class="report-emergencies-action-buttons">
            <button id="call-now-action-button">
              <svg viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.615 0.254183C20.4972 0.934222 20.2608 2.69333 20.2608 2.88995C20.2608 3.1087 20.2721 3.11418 20.9843 3.24229C24.815 3.93124 28.3035 5.71795 31.1737 8.46094C33.9921 11.1545 36.0865 14.9361 36.8076 18.6336C36.881 19.0099 36.9778 19.3179 37.0228 19.3179C37.14 19.3179 40.0034 18.8271 40.0369 18.8013C40.0832 18.7655 39.7397 17.2228 39.4903 16.3459C38.0331 11.2258 34.6547 6.61088 30.1624 3.60432C27.6279 1.9081 24.6641 0.706865 21.6714 0.16299C21.1783 0.0733612 20.7487 0 20.7169 0C20.6851 0 20.6392 0.114343 20.615 0.254183ZM5.83105 3.97027C5.15078 4.21788 4.82605 4.48927 2.83841 6.47135C1.01259 8.29209 0.8769 8.44726 0.564137 9.07239C-0.610581 11.4205 0.0616358 15.3208 2.46551 20.1043C5.44641 26.036 10.5215 31.6914 16.1766 35.383C19.6398 37.6439 23.0491 39.1931 25.8529 39.7802C26.7252 39.9629 27.0641 39.9939 28.2383 39.9988C29.5766 40.0044 29.6219 39.9992 30.281 39.7633C31.354 39.3791 31.8457 38.9888 33.8303 36.9463C34.8197 35.928 35.705 34.9678 35.7976 34.8124C36.0871 34.3266 36.2409 33.6587 36.1856 33.1274C36.0879 32.1889 35.9717 32.0403 32.9792 29.027C31.4685 27.5061 30.0488 26.1418 29.8241 25.9953C28.9703 25.4388 28.0656 25.3793 27.1365 25.8187C26.7126 26.0192 26.3689 26.3223 24.8223 27.8599C23.2148 29.4581 22.9782 29.6649 22.7644 29.6588C22.4863 29.6509 20.8201 28.7929 19.948 28.2085C16.8948 26.1625 13.8311 23.1008 11.8179 20.0836C11.1312 19.0544 10.3986 17.6133 10.3889 17.2727C10.3834 17.0807 10.6415 16.785 12.1377 15.2693C13.103 14.2914 13.9884 13.3264 14.1052 13.1249C14.4393 12.5483 14.5811 11.8826 14.4853 11.3395C14.3229 10.4171 14.191 10.2534 11.1676 7.21998C7.96791 4.00976 7.84098 3.91231 6.78905 3.85749C6.37625 3.83598 6.11574 3.86664 5.83105 3.97027ZM20.225 8.15342C20.1644 8.42849 19.7985 11.0607 19.8182 11.0804C19.8279 11.09 20.1865 11.1734 20.6153 11.2658C23.2704 11.8377 25.6061 13.4224 27.1559 15.7037C27.8689 16.7531 28.4615 18.1163 28.7101 19.2788C28.7654 19.5369 28.8326 19.774 28.8595 19.8056C28.9162 19.872 31.7616 19.403 31.8671 19.3099C32.0226 19.1726 31.462 17.2027 30.9266 16.0045C29.111 11.9415 25.3059 8.93537 20.9148 8.09515C20.5767 8.0304 20.2918 7.97745 20.2819 7.97745C20.272 7.97745 20.2464 8.05668 20.225 8.15342Z" />
              </svg>

              <p>Call Security Now</p>
            </button>
            <button id="form-action-button">
              <svg viewBox="0 0 31 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.48422 0.150859C1.85508 0.351953 1.4268 0.622734 0.964531 1.11148C0.519297 1.58234 0.312813 1.94203 0.125781 2.57281C0.0117969 2.95719 0 4.59641 0 20C0 35.4036 0.0117969 37.0428 0.125781 37.4272C0.312813 38.058 0.519297 38.4177 0.964531 38.8885C1.43492 39.3858 1.85836 39.6501 2.50977 39.8528C2.96445 39.9944 3.45344 40 15.2272 40C26.2562 40 27.5137 39.9875 27.8959 39.8742C28.5267 39.6872 28.8864 39.4807 29.3573 39.0355C29.8545 38.5651 30.1188 38.1416 30.3216 37.4902C30.4632 37.0352 30.4688 36.5383 30.4688 24.368V11.7188L26.2305 11.7176C21.6096 11.7163 21.3959 11.6993 20.5959 11.2674C20.0916 10.9952 19.4735 10.3772 19.2013 9.87289C18.7695 9.07289 18.7524 8.85914 18.7512 4.23828L18.75 0L10.8398 0.00421875C3.40695 0.008125 2.90281 0.0170312 2.48422 0.150859ZM21.0938 4.61758V8.57063L21.2705 8.83609C21.6383 9.3882 21.5549 9.37883 25.8868 9.35617L29.7662 9.33594L25.43 5.00023L21.0938 0.664609V4.61758ZM6.22539 18.9112C6.7482 19.1087 7.09289 19.686 6.99609 20.2021C6.93023 20.553 6.5493 20.982 6.20195 21.0967C5.42398 21.3534 4.57086 20.6071 4.72195 19.8019C4.81273 19.318 5.36109 18.8397 5.83477 18.8312C5.92867 18.8295 6.10445 18.8655 6.22539 18.9112ZM22.8605 19.0283C23.2472 19.317 23.3984 19.5902 23.3984 20C23.3984 20.4098 23.2472 20.683 22.8605 20.9717C22.6477 21.1307 22.5654 21.1331 16.6154 21.1555C13.2992 21.168 10.4709 21.1575 10.3304 21.1322C10.1898 21.1068 9.95461 20.9805 9.80781 20.8516C9.31719 20.4209 9.25898 19.774 9.66719 19.2888C10.0676 18.813 9.78523 18.8312 16.4982 18.85C22.5709 18.867 22.6474 18.8691 22.8605 19.0283ZM6.22539 23.5987C6.7482 23.7962 7.09289 24.3735 6.99609 24.8896C6.93023 25.2405 6.5493 25.6695 6.20195 25.7842C5.42398 26.0409 4.57086 25.2946 4.72195 24.4894C4.81273 24.0055 5.36109 23.5272 5.83477 23.5187C5.92867 23.517 6.10445 23.553 6.22539 23.5987ZM22.8605 23.7158C23.2472 24.0045 23.3984 24.2777 23.3984 24.6875C23.3984 25.0973 23.2472 25.3705 22.8605 25.6592C22.6477 25.8182 22.5654 25.8206 16.6154 25.843C13.2992 25.8555 10.4709 25.845 10.3304 25.8197C10.1898 25.7943 9.95461 25.668 9.80781 25.5391C9.31719 25.1084 9.25898 24.4615 9.66719 23.9763C10.0676 23.5005 9.78523 23.5187 16.4982 23.5375C22.5709 23.5545 22.6474 23.5566 22.8605 23.7158ZM6.22539 28.2862C6.7482 28.4837 7.09289 29.061 6.99609 29.5771C6.93023 29.928 6.5493 30.357 6.20195 30.4717C5.42398 30.7284 4.57086 29.9821 4.72195 29.1769C4.81273 28.693 5.36109 28.2147 5.83477 28.2062C5.92867 28.2045 6.10445 28.2405 6.22539 28.2862ZM22.8605 28.4033C23.2472 28.692 23.3984 28.9652 23.3984 29.375C23.3984 29.7848 23.2472 30.058 22.8605 30.3467C22.6477 30.5057 22.5654 30.5081 16.6154 30.5305C13.2992 30.543 10.4709 30.5325 10.3304 30.5072C10.1898 30.4818 9.95461 30.3555 9.80781 30.2266C9.31719 29.7959 9.25898 29.149 9.66719 28.6638C10.0676 28.188 9.78523 28.2062 16.4982 28.225C22.5709 28.242 22.6474 28.2441 22.8605 28.4033Z" />
              </svg>

              <p>Submit Emergency Report Form</p>
            </button>
          </div>

          <div class="form-wrapper">
            <form method="POST">
              <div class="form-label-input-wrapper">
                <p>EMERGENCY TYPE</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <select id="building-select" name="emergency">
                      <option value="">Select an emergency type</option>
                      <option value="Medical Emergency">Medical Emergency</option>
                      <option value="Fire">Fire</option>
                      <option value="Intruder or Threat">Intruder or Threat</option>
                      <option value="Severe Weather (e.g. tornado, hurricane)">Severe Weather (e.g. tornado, hurricane)</option>
                      <option value="Explosion">Explosion</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-label-input-wrapper">
                <p>LOCATION</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <label for="building-select">Building:</label>
                    <select id="building-select" name="building">
                      <option value="">Select a Building</option>
                      <?php echo $options; ?>
                    </select>
                  </div>
                  <div class="form-label-input">
                    <label for="floor-select">Floor:</label>
                    <select id="floor-select" name="floor">
                      <option value="">Select a Floor</option>
                      <?php echo $options2; ?>
                    </select>
                  </div>
                  <div class="form-label-input">
                    <label for="room-select">Room:</label>
                    <select id="room-select" name="room">
                      <option value="">Select a room</option>
                      <?php for ($i = 100; $i <= 120; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                      <?php for ($i = 200; $i <= 220; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                      <?php for ($i = 300; $i <= 320; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                      <?php for ($i = 400; $i <= 420; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-label-input-wrapper">
                <p>DESCRIPTION</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <textarea name="description" id="" cols="50" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-label-input-wrapper">
                <p>CONTACT INFORMATION</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <label for="building-select">Mobile Number</label>
                    <input type="text" name="contact" id="" value="09178336267" />
                  </div>
                </div>
              </div>
              <input type="submit" value="Submit" name="submitEmergency" />
            </form>
          </div>
        </div>
        <div class="safety-center-container-main-button report-incidents">
          <span class="report-back-button">&#8592;</span>
          <h2>Report Incidents & Suspicious Activity</h2>
          <button id="report-incident-btn">Click Here</button>


          <div class="form-wrapper">
            <form method="POST">
              <div class="form-label-input-wrapper">
                <p>INCIDENT TYPE</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <select name="incident" id="building-select">
                      <option value="">Select an Incident Type</option>
                      <option value="Bullying">Bullying</option>
                      <option value="Theft or vandalism">Theft or vandalism</option>
                      <option value="Cybersecurity breach">Cybersecurity breach</option>
                      <option value="Physical altercations or threats of violence">Physical altercations or threats of violence</option>
                      <option value="Substance abuse or possession of drugs or alcohol">Substance abuse or possession of drugs or alcohol</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-label-input-wrapper">
                <p>LOCATION</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <label for="building-select">Building:</label>
                    <select id="building-select" name="building">
                      <option value="">Select a Building</option>
                      <?php echo $options; ?>
                    </select>
                  </div>
                  <div class="form-label-input">
                    <label for="floor-select">Floor:</label>
                    <select name="floor" id="floor-select">
                      <option value="">Select a Floor</option>
                      <?php echo $options2; ?>
                    </select>
                  </div>
                  <div class="form-label-input">
                    <label for="room-select">Room:</label>
                    <select name="room" id="room-select">
                      <option value="">Select a room</option>
                      <?php for ($i = 100; $i <= 120; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                      <?php for ($i = 200; $i <= 220; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                      <?php for ($i = 300; $i <= 320; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                      <?php for ($i = 400; $i <= 420; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-label-input-wrapper">
                <p>DESCRIPTION</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <textarea name="description" id="" cols="50" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-label-input-wrapper">
                <p>EVIDENCE</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <input type="file" id="file" name="evidence">
                  </div>
                </div>
              </div>
              <div class="form-label-input-wrapper">
                <p>CONTACT INFORMATION</p>
                <div class="form-label-input-container">
                  <div class="form-label-input">
                    <label for="building-select">Mobile Number</label>
                    <input type="text" name="contact" id="" value="09178336267" />
                  </div>
                </div>
              </div>
              <input type="submit" value="Submit" name="submitIncident" />
            </form>
          </div>
        </div>
      </div>

      <?php include 'safetyUpdate.php' ?>

      <div class="MainSection4 flex w-100">
        <div class="EventsContainer">
          <p data-aos="fade-up" data-aos-offset="100" class="txt-b2 color-p1 fw-bold MainSection4-h1">Incidents on UMak</p>

          <div data-aos="fade-up" data-aos-offset="100" class="flex" style="margin-bottom: 30px;">
            <svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
              <circle cx="25" cy="25" r="25" />
            </svg>

            <div style="margin-left: 20px;">
              <?php
              $row = mysqli_fetch_assoc($result1);
              if ($row) {
                $num = 1;
                $title = $row['title'];
                $description = $row['description'];
              }
              ?>
              <small class="txt-sm1 color-p1 fw-bold"><?php echo $title; ?></small><br />
              <small class="txt-sm1">
                <?php echo $description; ?>
                <?php ?>
              </small>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-offset="100" class="flex" style="margin: 20px 30px 0 20px;">
            <a class="viewAllBtns2" asp-page="">View All Incidents
              <svg viewBox="0 0 151 100" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M88.7553 10.946C93.6742 20.4516 100.739 31.3786 107.718 40.2778L109.74 42.8571H0L0.000851949 50V57.1429H109.743L106.937 60.5159C101.426 67.1397 93.1934 79.9238 88.0262 89.8809L82.7752 100H87.8398H92.9036L105.334 87.2167C119.145 73.0111 133.308 61.5643 143.799 56.1254L150.256 52.7778L150.26 49.4667C150.263 46.4087 150.061 46.0873 147.623 45.2714C138.816 42.3262 122.404 29.7437 105.969 13.3373L92.6092 0H87.85H83.0908L88.7553 10.946Z" />
              </svg>
            </a>
          </div>

        </div>
      </div>

      <div class="guidelines-wrapper">
        <h2>Stay Safe and Secure: Tips and Guidelines</h2>
        <p>
          Our Safety Center is dedicated to helping you stay safe and secure on
          campus. Our comprehensive list of tips and guidelines covers a wide
          range of topics, including personal safety, theft prevention, and
          more. Whether you're walking to class or studying late at night, our
          team has compiled the information you need to make informed decisions
          and protect yourself from harm. Click below to learn more and take
          steps to safeguard your wellbeing.
        </p>
        <a href="">Learn More</a>
      </div>
    </div>
  </div>

  <?php
  include 'footer.php';
  ?>

  <script src="./assets/site.js"></script>
  <script>
    const reportEmergencydiv = document.querySelector(".report-emergencies");
    const reportIncidentdiv = document.querySelector(".report-incidents");
    const reportEmergencybtn = document.querySelector(
      ".report-emergencies button"
    );
    const reportIncidentbtn = document.querySelector(
      ".report-incidents button"
    );

    const safetyCenterContent = document.querySelectorAll(
      ".MainSection3, .guidelines-wrapper"
    );

    const actionButtons = document.querySelector(
      ".report-emergencies-action-buttons"
    );
    const form = document.querySelector(
      ".safety-center-container-main-buttons form"
    );
    const formActionbtn = document.querySelector("#form-action-button");

    reportEmergencybtn.addEventListener("click", (e) => {
      reportIncidentdiv.classList.add("remove-report-div");
      reportEmergencydiv.classList.add("expand-report-div");

      safetyCenterContent.forEach((content) => {
        content.classList.add("remove-content");
      });
    });

    reportIncidentbtn.addEventListener("click", (e) => {
      reportIncidentdiv.classList.add("expand-report-div");
      reportEmergencydiv.classList.add("remove-report-div");
      safetyCenterContent.forEach((content) => {
        content.classList.add("remove-content");
      });
    });

    form.classList.toggle("action-expanded");

    formActionbtn.addEventListener("click", (e) => {
      form.classList.toggle("action-expanded");
    });

    document.querySelectorAll(".report-back-button").forEach((button) => {
      button.addEventListener("click", (e) => {
        safetyCenterContent.forEach((content) => {
          content.classList.remove("remove-content");
        });
        reportIncidentdiv.classList.remove("remove-report-div");
        reportEmergencydiv.classList.remove("remove-report-div");
        reportIncidentdiv.classList.remove("expand-report-div");
        reportEmergencydiv.classList.remove("expand-report-div");
      });
    });
  </script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 0,
      duration: 600,
    });
  </script>

</body>

</html>