<?php
include '../database.php';
?>

<h1>Home</h1>
<div class="summary-container">
          <div class="summary">
            <img src="../media/icons/activeUsersIcon.png" alt="">
            <h1>1.1k</h1>
            <p>Active Users</p>
          </div>
          <div class="summary">
            <img src="../media/icons/newUsersIcon.png" alt="">
            <h1>143</h1>
            <p>New Users</p>
          </div>
          <div class="summary">
          <img src="../media/icons/emergencyIcon.png" alt="">
            <h1>10k</h1>
            <p>Reported Emergencies</p>
          </div>
          <div class="summary">
          <img src="../media/icons/eventsIcon.png" alt="">
            <h1>23</h1>
            <p>Upcoming Events</p>
          </div>
</div>
<div class="total-users-container">
    <h2>Total Users</h2>
    <h1>9432</h1>
</div>

<div class="report-wrapper">
    <h2>Recent Reports from Safety Center</h2>
    <div class="report-container">
        <div class="report-header">
        <h3>Emergencies</h3>
        <a href="?menu=safetyCenter">View all</a>
        </div>

<div class="users-table-wrapper" style="padding: 0;margin-top: 0;box-shadow: none;">
  <table>
    <tr id="user-table-header">
      <th>Reporter</th>
      <th>Emergency Type</th>
      <th>Building</th>
      <th>Floor</th>
      <th>Room</th>
      <th>Description</th>
      <th>Mobile Number</th>
      <th>Date and Time</th>
    </tr>

    <?php

    $query = "SELECT * FROM report_emergencies ORDER BY id DESC LIMIT 2";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);

    $num = 0;
    while ($row = mysqli_fetch_array($result)) {
      ++$num;
      $reporter = $row['reporter'];
      $emergencyType = $row['emergency_type'];
      $building = $row['building'];
      $floor = $row['floor'];
      $room = $row['room'];
      $description = $row['description'];
      $mobileNum = $row['mobile_number'];
      $date = $row['date'];
      $time = $row['time'];
    ?>
    <a>
      <tr>
        <td><?php echo $reporter; ?></td>
        <td><?php echo $emergencyType; ?></td>
        <td><?php echo $building; ?></td>
        <td><?php echo $floor; ?></td>
        <td><?php echo $room; ?></td>
        <td><?php echo $description; ?></td>
        <td><?php echo $mobileNum; ?></td>
        <td><?php echo 
        $date ."<br>". 
        $time; ?></td>
        <td>
      </tr>
      </a>
    <?php } ?>
  </table>
</div>
    </div>

    <div class="report-container">
        <div class="report-header">
        <h3>Incidents</h3>
        <a href="?menu=safetyCenter&selectedValue=reportedIncidents">View all</a>
        </div>
        <div class="users-table-wrapper" style="padding: 0;margin-top: 0;box-shadow: none;">
  <table>
    <tr id="user-table-header">
      <th>Reporter</th>
      <th>Incident Type</th>
      <th>Building</th>
      <th>Floor</th>
      <th>Room</th>
      <th>Description</th>
      <th>Evidence</th>
      <th>Mobile Number</th>
      <th>Date and Time</th>
      <th id="action-header">Action</th>
    </tr>

    <?php
    include '../database.php';

    $IncidentQuery = "SELECT * FROM report_incidents ORDER BY id DESC LIMIT 2";
    $IncidentResult = mysqli_query($conn, $IncidentQuery);

    $num = 0;
    while ($row = mysqli_fetch_array($IncidentResult)) {
      ++$num;
      $reporter = $row['reporter'];
      $incidentType = $row['incident_type'];
      $building = $row['building'];
      $floor = $row['floor'];
      $room = $row['room'];
      $description = $row['description'];
      $evidence = $row['evidence'];
      $mobileNum = $row['mobile_number'];
      $date = $row['date'];
      $time = $row['time'];
    ?>

      <tr>
        <td><?php echo $reporter; ?></td>
        <td><?php echo $incidentType; ?></td>
        <td><?php echo $building; ?></td>
        <td><?php echo $floor; ?></td>
        <td><?php echo $room; ?></td>
        <td><?php echo $description; ?></td>
        <td>
          <?php 
          if (file_exists($evidence)) {
            echo '<img src="'.$evidence.'">';
          } else {
            echo '<img src="../media/default/incidentDefault.webp" style="width: 100px">';
          }
          ?>
        </td>
        <td><?php echo $mobileNum; ?></td>
        <td><?php echo 
        $date ."<br>". 
        $time; ?></td>
        <td>
          <div class="action-container">
          <a href="../dashboard/?menu=users&userId=user" class="user-action-respond">
              Respond
            </a>
          </div>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>
    </div>
</div>

<div class="report-wrapper">
    <h2>Recent Crowded Areas</h2>
    <div class="report-container">
            <a href="" class="report">
            <p class="facility-name">UMak Grand Theater</p>
            <p class="facility-bldg">Admin Building, 6th floor</p>
            <p class="facility-crowd">500 People</p>
            </a>
            <a href="" class="report">
            <p class="facility-name">Student Area</p>
            <p class="facility-bldg">HPSB Building, 10th floor</p>
            <p class="facility-crowd">64 People</p>
            </a>
            <a href="" class="report">
            <p class="facility-name">Food Stalls</p>
            <p class="facility-bldg">HPSB Building, 1st floor</p>
            <p class="facility-crowd">89 People</p>
            </a>
            <a href="" class="report">
            <p class="facility-name">UMak Football Field</p>
            <p class="facility-bldg">UMak Stadium</p>
            <p class="facility-crowd">863 People</p>
            </a>
    </div>
</div>