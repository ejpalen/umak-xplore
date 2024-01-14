<div class="users-table-wrapper">
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
      <th id="action-header">Action</th>
    </tr>

    <?php
    $username = "root";
    $password = "";
    $database = "umakversedb";

    $conn = mysqli_connect("localhost", $username, $password);

    mysqli_select_db($conn, $database) or die("Unabale to select database");

    $query = "SELECT * FROM report_emergencies";
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