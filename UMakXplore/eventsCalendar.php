<?php

include 'header.php';
?>

<head>
    <link rel="stylesheet" href="assets/eventsCalendar.css">
</head>

<div class="calendar-wrapper">
    <div class="calendar-container">

<div class="calendar">
  <div class="calendar-header">
  <p>May 2023</p>   
  <div class="calendar-arrow">
  <svg viewBox="0 0 151 100"  xmlns="http://www.w3.org/2000/svg" class="calendar-arrow-prev">
<path fill-rule="evenodd" clip-rule="evenodd" d="M88.7553 10.946C93.6742 20.4516 100.739 31.3786 107.718 40.2778L109.74 42.8571H0L0.000851949 50V57.1429H109.743L106.937 60.5159C101.426 67.1397 93.1934 79.9238 88.0262 89.8809L82.7752 100H87.8398H92.9036L105.334 87.2167C119.145 73.0111 133.308 61.5643 143.799 56.1254L150.256 52.7778L150.26 49.4667C150.263 46.4087 150.061 46.0873 147.623 45.2714C138.816 42.3262 122.404 29.7437 105.969 13.3373L92.6092 0H87.85H83.0908L88.7553 10.946Z"/>
</svg>   
<svg viewBox="0 0 151 100"  xmlns="http://www.w3.org/2000/svg" class="calendar-arrow-next">
<path fill-rule="evenodd" clip-rule="evenodd" d="M88.7553 10.946C93.6742 20.4516 100.739 31.3786 107.718 40.2778L109.74 42.8571H0L0.000851949 50V57.1429H109.743L106.937 60.5159C101.426 67.1397 93.1934 79.9238 88.0262 89.8809L82.7752 100H87.8398H92.9036L105.334 87.2167C119.145 73.0111 133.308 61.5643 143.799 56.1254L150.256 52.7778L150.26 49.4667C150.263 46.4087 150.061 46.0873 147.623 45.2714C138.816 42.3262 122.404 29.7437 105.969 13.3373L92.6092 0H87.85H83.0908L88.7553 10.946Z"/>
</svg>   
  </div>
  </div>
  <div class="calendar-days">Sun</div>
  <div class="calendar-days">Mon</div>
  <div class="calendar-days">Tue</div>
  <div class="calendar-days">Wed</div>
  <div class="calendar-days">Thu</div>
  <div class="calendar-days">Fri</div>
  <div class="calendar-days">Sat</div>
  <div class="calendar-date"></div>
  <div class="calendar-date"><p>1</p></div>
  <div class="calendar-date with-event"><p>2</p></div>
  <div class="calendar-date"><p>3</p></div>
  <div class="calendar-date with-event"><p>4</p></div>
  <div class="calendar-date"><p>5</p></div>
  <div class="calendar-date"><p>6</p></div>
  <div class="calendar-date"><p>7</p></div>
  <div class="calendar-date with-event"><p>8</p></div>
  <div class="calendar-date "><p>9</p></div>
  <div class="calendar-date "><p>10</p></div>
  <div class="calendar-date with-event"><p>11</p></div>
  <div class="calendar-date with-event"><p>12</p></div>
  <div class="calendar-date"><p>13</p></div>
  <div class="calendar-date"><p>14</p></div>
  <div class="calendar-date"><p>15</p></div>
  <div class="calendar-date"><p>16</p></div>
  <div class="calendar-date"><p>7</p></div>
  <div class="calendar-date"><p>18</p></div>
  <div class="calendar-date"><p>19</p></div>
  <div class="calendar-date"><p>20</p></div>
  <div class="calendar-date"><p>21</p></div>
  <div class="calendar-date"><p>22</p></div>
  <div class="calendar-date"><p>23</p></div>
  <div class="calendar-date"><p>24</p></div>
  <div class="calendar-date"><p>25</p></div>
  <div class="calendar-date"><p>26</p></div>
  <div class="calendar-date"><p>27</p></div>
  <div class="calendar-date"><p>28</p></div>
  <div class="calendar-date"><p>29</p></div>
  <div class="calendar-date"><p>30</p></div>
  <div class="calendar-date"><p>31</p></div>
</div>

<div class="calendar-events">
    <div class="calendar-events-header">
        <h2>Events</h2>
    </div>
    <div class="events-wrapper">

<?php

include 'database.php';

$date = isset($_GET['date']) ? intval($_GET['date']) : 0;


$event_query = mysqli_query($conn, "SELECT * FROM events WHERE DAY(date) = $date");

if (mysqli_num_rows($event_query) == 0){

    echo '
    <div class="no-event">
        <p>No events in this day</p>
    </div>

    ';

}else{

while ($event = mysqli_fetch_assoc($event_query)){

    echo '<div class="event" data-aos="fade-up" data-aos-delay="0"  data-aos-offset="0">
    <h3>'.$event["name"].'</h3>
    <p><b>Time:</b> '.$event["time"].'</p>
    <p><b>Location:</b> '.$event["location"].'</p>
    <p><b>Description:</b> '.$event["description"].'</p>
    <a target="_blank" href="'.$event["link"].'">Click here for additional info</a>
</div>';

}
}

?>
    
    </div>
</div>

</div>
</div>

<script>
    const date = document.querySelectorAll(".calendar-date");
    const urlParams = new URLSearchParams(window.location.search);
    const option = urlParams.get("date");

    date.forEach((d) =>{
        d.addEventListener("click", ()=>{
            d.classList.toggle("date-active");

            var dateText = d.innerText;
    window.location.href = "?month=may&date=" + dateText;
        })

        if(option == d.innerText){
            d.classList.toggle("date-active");
        }
    });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
      AOS.init({
        offset: 200,
        duration: 600,
      });
    </script>