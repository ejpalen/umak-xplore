<div class="dashboard-umakDiscoveriesWrapper">
<h1>UMak Discoveries</h1>
<form>
  <select name="discoveries" id="discoveriesOptions" onchange="showValue()">
    <option value="directory">Facility and Office Directory</option>
    <option value="hangouts">Campus Hangouts</option>
  </select>
</form>
<?php
$selectedValue = isset($_GET['selectedValue']) ? $_GET['selectedValue'] : '';

                    if ($selectedValue === 'directory') {
                        include 'directory.php';
                    } elseif ($selectedValue === 'hangouts') {
                        include 'hangouts.php';
                    }
                    else{
                        include 'directory.php';
                    }
?>
</div>

<script>
const discoveriesOptions = document.getElementById('discoveriesOptions');
  const form = document.querySelector('form');
  function showValue(){
        const selectedValue = discoveriesOptions.value;
    const url = new URL(window.location.href);
    
    url.searchParams.set('menu', 'umakDiscoveries');
    url.searchParams.set('selectedValue', selectedValue);
    
    window.location.href = url.toString();
  }

  const urlParams = new URLSearchParams(window.location.search);
const option = urlParams.get("selectedValue");

if (option === "hangouts") {
  discoveriesOptions.options[0].innerHTML = "Campus Hangouts";
  discoveriesOptions.options[0].value = "hangouts";
  discoveriesOptions.options[1].innerHTML = "Facility and Office Directory";
  discoveriesOptions.options[1].value = "directory";
  }
  else if (option === "directory") {
    discoveriesOptions.options[1].innerHTML = "Campus Hangouts";
  discoveriesOptions.options[1].value = "hangouts";
  discoveriesOptions.options[0].innerHTML = "Facility and Office Directory";
  discoveriesOptions.options[0].value = "directory";
  } else {
    discoveriesOptions.options[1].innerHTML = "Campus Hangouts";
  discoveriesOptions.options[1].value = "hangouts";
  discoveriesOptions.options[0].innerHTML = "Facility and Office Directory";
  discoveriesOptions.options[0].value = "directory";
  }
</script>
