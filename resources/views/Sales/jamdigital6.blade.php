<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jam Digital</title>
    <style>
            @font-face{
            font-family: 'Digital-7';
            src:  url('fonts/digital-7.ttf') format('woff2'),   b ,g,mdrx
            url('digital-7.woff') format('woff');
        }
        .clockdate-wrapper {
            background: #141E30;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding:25px;
            max-width:350px;
            width:100%;
            text-align:center;
            border-radius:5px;
            margin:0 auto;
        
        }
        #clock{
            font-family: Digital-7, 'sans-serif';
            font-size:60px;
            text-shadow:0px 0px 1px #fff;
            color:#fff;
        }
        #clock span {
            color: rgba(255, 255, 255, 0.8);
            text-shadow:0px 0px 1px #333;
            font-size:50px;
            position:relative;
            top:-5px;
            left:10px;
        }
        #date {
            letter-spacing:3px;
            font-size:14px;
            font-family:arial,sans-serif;
            color:#fff;
        }
    </style>

</head>
<body onload="startTime()">

    <div id="clockdate">
    <div class="clockdate-wrappper">
    <div id="clock"></div>
    <div id="date"></div>
    </div>
    </div>
    <script>
    function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
startTime();
    </script>
</body>

</html>
