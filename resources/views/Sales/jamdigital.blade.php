<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
     body {
    font-family: "Work Sans", sans-serif;
    margin-top: 150px;
    background: #bbbcbd;
    margin-left: 70px;
    } 
    .time {
    background: rgb(12, 12, 12);
    color: #fff;
    text-align: center;
    width: 500px;
    border: 7px solid rgb(255, 252, 252);
    padding: 8px;
    box-shadow: 0 2px 10px 0 rgba(0,0,0,0.16), 0 2px 10px 0 
    rgba(0,0,0,0.12);
    } 
    .hms {
    font-size: 68pt;
    font-weight: 200;
    }
    .ampm {
    font-size: 22pt;
    }
    .date {
    font-size: 15pt;}
    </style>
</head>
<body>
<div class="time">
<span class="hms"></span>
        <span class="ampm"></span>
        <br>
        <span class="date"></span>

</div>
<script>
function updateTime() {
  var dateInfo = new Date();

  /* time */
  var hr,
    _min = (dateInfo.getMinutes() < 10) ? "0" + dateInfo.getMinutes() : dateInfo.getMinutes(),
    sec = (dateInfo.getSeconds() < 10) ? "0" + dateInfo.getSeconds() : dateInfo.getSeconds(),
    ampm = (dateInfo.getHours() >= 12) ? "PM" : "AM";

  // replace 0 with 12 at midnight, subtract 12 from hour if 13–23
  if (dateInfo.getHours() == 0) {
    hr = 12;
  } else if (dateInfo.getHours() > 12) {
    hr = dateInfo.getHours() - 12;
  } else {
    hr = dateInfo.getHours();
  }
// Add to time format

  var currentTime = hr + ":" + _min + ":" + sec;




  // AM/ PM options 

  document.getElementsByClassName("hms")[0].innerHTML = currentTime;
  document.getElementsByClassName("ampm")[0].innerHTML = ampm;



/*  Add Date options */



// print time and date once, then update them every second
updateTime();
setInterval(function() {
  updateTime()
}, 1000); 
var dow = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    month = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ],
    day = dateInfo.getDate();

  // store date
  var currentDate = dow[dateInfo.getDay()] + ", " + month[dateInfo.getMonth()] + " " + day;

  document.getElementsByClassName("date")[0].innerHTML = currentDate;
};
</script>
</body>
</html>
