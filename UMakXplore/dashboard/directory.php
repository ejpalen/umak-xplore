<div class="summary-container">
  <div class="summary">
    <img src="../media/icons/buildingIcon.png" alt="">
    <h1>9432</h1>
    <p>Buildings</p>
  </div>
  <div class="summary">
    <img src="../media/icons/renovationIcon.png" alt="">
    <h1>1.1k</h1>
    <p>Buildings in Renovation</p>
  </div>
  <div class="summary">
    <img src="../media/icons/facilityIcon.png" alt="">
    <h1>143</h1>
    <p>Facilities</p>
  </div>
  <div class="summary">
    <img src="../media/icons/renovationIcon.png" alt="">
    <h1>143</h1>
    <p>Facilities in Renovation</p>
  </div>
</div>

<div class="users-filter-wrapper">
  <input type="text" placeholder="Find Directory">
  <input type="submit" value="Search" id="users-filter-search">
  <select name="Filter" id="">
    <option value="">Alphabetical</option>
    <option value="">Latest to Oldest</option>
    <option value="">Oldest to Latest</option>
  </select>
</div>

<div class="add-option">
  <a href="../dashboard/?facilityOption=add">
    <span>&#43;</span>
    <p>Add Facility</p>
  </a>
</div>

<?php
$username = "root";
$password = "";
$database = "umakversedb";

$conn = mysqli_connect("localhost", $username, $password);
mysqli_select_db($conn, $database) or die("Unabale to select database");

$resultBldg = mysqli_query($conn, "SELECT * FROM building");

while ($row = mysqli_fetch_assoc($resultBldg)) {
  // Check if building has any facilities
  $facility_query = mysqli_query($conn, "SELECT * FROM FACILITY WHERE EXISTS(SELECT * FROM FLOOR WHERE FLOOR.building_id = '{$row['id']}' AND FACILITY.floor_id = FLOOR.id)");
  if (mysqli_num_rows($facility_query) == 0) {
    // Skip building if it doesn't have any facilities
    continue;
  }

  echo '<div class="dashboard-building-wrapper">';
  echo '<h2>' . $row['name'] . '</h2>';

  $floor_names = mysqli_query($conn, "SELECT id, name FROM FLOOR WHERE building_id = '{$row['id']}'");
  echo '<div class="users-table-wrapper">';
  while ($floor_row = mysqli_fetch_assoc($floor_names)) {
    $facility_query = mysqli_query($conn, "SELECT * FROM FACILITY WHERE floor_id = '{$floor_row['id']}'");
    if (mysqli_num_rows($facility_query) > 0) {
      echo '<br><h3>' . $floor_row['name'] . '</h3><br>
      <table>
      <tr id="user-table-header">
        <th>Facility ID</th>
        <th>Facility Name</th>
        <th>Facility Image</th>
        <th>Facility Description</th>
        <th id="action-header">Action</th>
      </tr>';

      if (mysqli_num_rows($facility_query) == 0) {
        echo '<tr><td colspan="5"><br></td></tr>';
      } else {
        while ($facility_row = mysqli_fetch_assoc($facility_query)) {
          echo '<tr>
      <td>' . $facility_row['id'] . '</td>
      <td>' . $facility_row['name'] . '</td>
      <td> <img src="';

          if (file_exists($facility_row['image_url'])) {
            echo $facility_row['image_url'];
          } else {
            echo '../media/icons/facilityIcon.png';
          }

          echo '"></td>
      <td>' . $facility_row['description'] . '</td>
      <td>
      <div class="action-container">
      <a href="../dashboard/?facilityOption=edit" class="user-action-edit">
      <svg viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M87.7094 0.393171C87.317 0.550779 85.6987 1.94329 84.1132 3.48746L81.2307 6.29531L87.5593 12.6362L93.888 18.9767L96.1177 16.7924C99.0828 13.8873 100.15 12.2134 100.15 10.4663C100.15 9.71732 99.9487 8.72477 99.7026 8.26008C99.1707 7.25565 92.7854 0.911337 91.8054 0.413811C90.9936 0.00165581 88.7132 -0.00991517 87.7094 0.393171ZM58.5412 29.083L39.9526 47.7557L37.8274 54.3227C36.6585 57.9345 35.7088 61.3534 35.7166 61.92C35.7357 63.2972 36.9209 64.4814 38.2968 64.4989C38.8634 64.5058 42.2823 63.5602 45.8941 62.3975L52.4611 60.283L71.1623 41.6553L89.8634 23.0276L83.8972 17.0514C80.6156 13.7641 77.7505 10.9253 77.5303 10.7424C77.2245 10.4888 72.733 14.827 58.5412 29.083ZM8.33205 16.3121C5.14738 17.0723 1.88642 19.9718 0.725002 23.0752C0.0776869 24.8057 0.0739344 25.0302 0.155865 58.4889L0.238109 92.1609L1.04929 93.8808C2.08405 96.0742 4.14264 98.1328 6.336 99.1675L8.05592 99.9787L41.7279 100.061C75.1866 100.143 75.4111 100.139 77.1416 99.4918C79.4432 98.6306 82.0437 96.2361 83.1714 93.9402L84.0451 92.1609L84.1314 64.564C84.1789 49.3859 84.1079 36.9671 83.9738 36.9671C83.8396 36.9671 77.5385 43.1682 69.9718 50.7474C62.4047 58.3269 55.7211 64.7829 55.1192 65.0947C54.5172 65.4064 50.9288 66.6939 47.145 67.956C41.4702 69.8485 39.9363 70.245 38.3872 70.22C33.7509 70.145 30.0606 66.4553 29.9933 61.8278C29.9705 60.2798 30.3992 58.6387 32.4431 52.4464L34.9204 44.9413L49.0851 30.705C56.8757 22.8753 63.2497 16.3668 63.2497 16.2421C63.2497 15.9428 9.59322 16.011 8.33205 16.3121Z"/>
      </svg>        
      </a>
      <a href="../dashboard/?facilityOption=delete" class="user-action-delete">
      <svg viewBox="0 0 81 100" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.2622 0.767516C23.5257 1.50377 23.4947 1.69979 23.4947 5.61333V9.69164H40.0643H56.6339V5.6124C56.6339 1.60287 56.6198 1.52034 55.8066 0.766578L54.9794 0H40.0046H25.0294L24.2622 0.767516ZM3.4646 16.0425C2.70272 16.4448 1.65727 17.3724 1.14142 18.1043C0.223846 19.4055 0.201337 19.529 0.101607 23.7858L0 28.137H40.0405H80.0814L80.0726 24.1509C80.0648 20.6197 79.9819 20.0045 79.3454 18.758C78.9359 17.9561 78.0546 16.9479 77.2952 16.4133L75.9634 15.4754L40.4066 15.3934L4.84988 15.3112L3.4646 16.0425ZM6.73913 37.4378C6.94265 40.969 7.49695 49.211 8.17443 58.7751C8.47799 63.0647 8.99165 70.6158 9.76948 82.2226C10.8334 98.1 10.8396 98.1347 12.9602 99.4343C13.9344 100.031 14.6219 100.044 40.2784 99.9664L66.5972 99.8864L67.5329 98.99C68.0475 98.4967 68.6102 97.7229 68.7834 97.2706C68.9569 96.8179 69.3912 92.2972 69.7491 87.2247C70.4601 77.1401 71.1619 67.4457 71.6387 61.1198C72.3934 51.1084 73.5161 35.1981 73.5161 34.5153V33.7644H40.0218H6.52747L6.73913 37.4378ZM32.1175 43.9913C32.3507 44.2989 32.622 44.9723 32.7208 45.4882C32.8196 46.004 32.8593 55.3833 32.809 66.3314L32.7174 86.2368L31.9596 87.0434C30.8954 88.1758 29.0727 88.1664 28.0129 87.0228L27.2463 86.1955V65.4933C27.2463 45.1962 27.2588 44.775 27.8778 43.9881C28.2252 43.5464 28.8229 43.135 29.2065 43.0737C30.2301 42.9099 31.6322 43.3519 32.1175 43.9913ZM51.1478 43.2731C51.7302 43.5167 52.3586 43.9997 52.5446 44.347C53.0398 45.2728 53.0151 85.453 52.5187 86.3856C51.9631 87.4286 51.2744 87.829 50.0182 87.84C49.1172 87.8478 48.7014 87.6452 48.0643 86.888L47.2549 85.9263V65.6436C47.2549 50.2974 47.348 45.1565 47.6381 44.5202C47.8489 44.0576 48.4466 43.4939 48.9668 43.2672C50.142 42.7551 49.906 42.7545 51.1478 43.2731Z"/>
      </svg>
      </a>
    </div>
      </td>
      </tr>';
        }
      }
      echo '</table>';
    }
  }
  echo '</div>
  </div>';
}

?>