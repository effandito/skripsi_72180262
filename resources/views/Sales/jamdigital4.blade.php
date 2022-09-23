<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    html {
  height: 100%;
}
body {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: gray;
}
#digital-clock {
  width: 80%;
  font-size: 20px;
  text-align: center;
  font-size: 19vw;
  color: white;
}
.red-dot {
  color: red;
}
    </style>
</head>
<body>
<div id='digital-clock'>
  <span id='hour'></span><span class='red-dot'>:</span><span id='min'></span><span class='red-dot'>:</span><span id='second'></span>
</div>
<script>
function showclock() {
  let today = new Date();
  let hours = today.getHours();
  let mins = today.getMinutes();
  let seconds = today.getSeconds();
  const addZero = num => {
    if(num < 10) { return '0' + num };
    return num;
  }
  $('#hour').text(addZero(hours));
  $('#min').text(addZero(mins));
  $('#second').text(addZero(seconds));
}
setInterval(showclock, 1000);
</script>
</body>
</html>