<?php
$homeActive  = 'class=""';
$usersActive  = 'class=""';
$DiscoveryActive  = 'class=""';
$VerseActive  = 'class=""';
$safetyActive  = 'class="active"';
$calendarActive  = 'class=""';
?>

<h1>Safety Center</h1>

<form>
  <select name="safetyCenter" id="safetyCenterOptions" onchange="showValue()">
    <option value="reportEmergencies">Reported Emergencies</option>
    <option value="reportedIncidents">Reported Incidents</option>
    <option value="updates">Safety Update</option>
    <option value="recentIncidents">Recent Incidents</option>
  </select>
</form>

<div class="summary-container">
  <div class="summary">
    <img src="../media/icons/emergencyIcon.png" alt="">
    <h1>9432</h1>
    <p>Total Reports</p>
  </div>
  <div class="summary">
    <img src="../media/icons/emergencyIcon.png" alt="">
    <h1>1.1k</h1>
    <p>Emergencies</p>
  </div>
  <div class="summary">
    <img src="../media/icons/emergencyIcon.png" alt="">
    <h1>143</h1>
    <p>Incidents</p>
  </div>
  <div class="summary">
    <img src="../media/icons/emergencyIcon.png" alt="">
    <h1>143</h1>
    <p>Not Responded</p>
  </div>
</div>

<div class="users-filter-wrapper">
  <input type="text" placeholder="Find Report">
  <input type="submit" value="Search" id="users-filter-search">
  <select name="Filter" id="centerOptions" onchange="showValue()">
    <option value="">Not Responded</option>
    <option value="">Responded</option>
    <option value="">All</option>
  </select>
</div>

<?php
$selectedValue = isset($_GET['selectedValue']) ? $_GET['selectedValue'] : '';

if ($selectedValue === 'reportEmergencies') {
  include 'reportEmergency.php';
} elseif ($selectedValue === 'reportedIncidents') {
  include 'reportIncidents.php';
} elseif ($selectedValue === 'updates') {
  include 'safetyUpdates.php';
}elseif ($selectedValue === 'recentIncidents') {
  include 'recentIncidents.php';
}
 else {
  include 'reportEmergency.php';
}
?>

<script>
  const centerOptions = document.getElementById('safetyCenterOptions');
  const form = document.querySelector('form');

  function showValue() {
    const selectedValue = centerOptions.value;
    const url = new URL(window.location.href);

    url.searchParams.set('menu', 'safetyCenter');
    url.searchParams.set('selectedValue', selectedValue);

    window.location.href = url.toString();
  }

  const urlParams = new URLSearchParams(window.location.search);
const option = urlParams.get("selectedValue");

if (option === "reportEmergencies") {
  centerOptions.options[0].innerHTML = "Reported Emergencies";
  centerOptions.options[1].innerHTML = "Reported Incidents";
  centerOptions.options[2].innerHTML = "Safety Update";
  centerOptions.options[3].innerHTML = "Recent Incidents";
  centerOptions.options[0].value = "reportEmergencies";
  centerOptions.options[1].value = "reportedIncidents";
  centerOptions.options[2].value = "updates";
  centerOptions.options[3].value = "recentIncidents";
  
  }
  else if (option === "reportedIncidents") {
    centerOptions.options[1].innerHTML = "Reported Emergencies";
  centerOptions.options[0].innerHTML = "Reported Incidents";
  centerOptions.options[2].innerHTML = "Safety Update";
  centerOptions.options[3].innerHTML = "Recent Incidents";
  centerOptions.options[1].value = "reportEmergencies";
  centerOptions.options[0].value = "reportedIncidents";
  centerOptions.options[2].value = "updates";
  centerOptions.options[3].value = "recentIncidents";
  }
  else if (option === "updates") {
    centerOptions.options[1].innerHTML = "Reported Emergencies";
  centerOptions.options[2].innerHTML = "Reported Incidents";
  centerOptions.options[0].innerHTML = "Safety Update";
  centerOptions.options[3].innerHTML = "Recent Incidents";
  centerOptions.options[1].value = "reportEmergencies";
  centerOptions.options[2].value = "reportedIncidents";
  centerOptions.options[0].value = "updates";
  centerOptions.options[3].value = "recentIncidents";
  }
  else if (option === "recentIncidents") {
    centerOptions.options[1].innerHTML = "Reported Emergencies";
  centerOptions.options[2].innerHTML = "Reported Incidents";
  centerOptions.options[3].innerHTML = "Safety Update";
  centerOptions.options[0].innerHTML = "Recent Incidents";
  centerOptions.options[1].value = "reportEmergencies";
  centerOptions.options[2].value = "reportedIncidents";
  centerOptions.options[3].value = "updates";
  centerOptions.options[0].value = "recentIncidents";
  }
  else{
    centerOptions.options[0].innerHTML = "Reported Emergencies";
  centerOptions.options[1].innerHTML = "Reported Incidents";
  centerOptions.options[2].innerHTML = "Safety Update";
  centerOptions.options[3].innerHTML = "Recent Incidents";
  centerOptions.options[0].value = "reportEmergencies";
  centerOptions.options[1].value = "reportedIncidents";
  centerOptions.options[2].value = "updates";
  centerOptions.options[3].value = "recentIncidents";
  }
</script>