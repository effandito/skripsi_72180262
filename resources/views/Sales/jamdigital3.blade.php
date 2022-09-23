<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi </title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Orbitron');

@import "bourbon";
@import "neat";

$base-duration: 500ms;

// Colors
$color-1: slategray;
$color-2: #3498db;
$color-3: #e74c3c;

// Breakpoints
$sm: new-breakpoint(min-width 320px);
$med: new-breakpoint(min-width 768px);
$lg: new-breakpoint(min-width 1024px);

*, *:before, *:after {
	box-sizing: border-box;
	outline: none;
}

html {
	font-family: 'Courier New', monospace;
	font-size: 16px;
	font-smooth: auto;
	font-weight: 300;
	line-height: 1.5;
	color: #444;
}

body {
	position: relative;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 100vh;
}

.alarm-clock {
	position: relative;
	padding: 10px;
	border-radius: 10px;
	background-color: tan;
	
	.date {
		position: absolute;
		bottom: 15px;
		left: 50%;
		color: white;
		font-size: 12px;
		text-transform: uppercase;
		transform: translateX(-50%);
		z-index: 9;
	}
	
	.time {
		position: relative;
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 20px 40px 15px;
		background-color: #333;
		border-radius: 10px;

		font-family: 'RockwellExtraBold', sans-serif;
		//font-family: 'Menlo', monospace;
		font-size: 52px;

		span {
			position: relative;
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			//width: 85px;
			color: $color-3;
			text-shadow: 0 0 15px rgba($color-3,0.4);
			line-height: 1.75;

			// background-color: white;
			// border: 1px solid red;

			&:nth-of-type(5) {
				width: 90px;
			}

			&.colon {
				width: 12px;
				text-align: center;
				animation: blink 2s infinite;
			}
		}
	}
}



@keyframes blink {
	0%   { opacity: 0; }
	30%  { opacity: 1; }
	50%  { opacity: 0; }
	70%  { opacity: 1; }
	100% { opacity: 0; }
}
    </style>
</head>
<body>
<div class="alarm-clock">
	<div class="date">
		<span class="month"></span>
		<span class="day"></span>,
		<span class="year"></span>
	</div>

	<div class="time">
		<span class="hours"></span>
		<span class="colon">:</span>
		<span class="minutes"></span>
		<span class="colon">:</span>
		<span class="seconds"></span>
	</div>
</div>

<button type="submit" class="btn btn-primary" name="" value="">Edit</button></a><br/>
<button type="submit" class="btn btn-primary" name="" value="">Edit</button></a><br/>
<button type="submit" class="btn btn-primary" name="" value="">Edit</button></a><br/>
<button type="submit" class="btn btn-primary" name="" value="">Edit</button></a><br/>
<button type="submit" class="btn btn-primary" name="" value="">Edit</button></a><br/>
<script>
const hours = document.querySelector('.hours');
const minutes = document.querySelector('.minutes');
const seconds = document.querySelector('.seconds');

const month = document.querySelector('.month');
const day = document.querySelector('.day');
const year = document.querySelector('.year');

function setDate() {
	const now = new Date();
	const mm = now.getMonth();
	const dd = now.getDate();
	const yyyy = now.getFullYear();
	const secs = now.getSeconds();
	const mins = now.getMinutes();
	const hrs = now.getHours();
	const monthName = [
		'January','February','March','April',
		'May','June','July','August','September',
		'October','November','December'
	];
	
	if (hrs > 12) {
		hours.innerHTML = hrs - 12;
	} else {
		hours.innerHTML = hrs;
	}
	
	if (secs < 10) {
		seconds.innerHTML = '0' + secs;
	} else {
		seconds.innerHTML = secs;
	}
	
	if (mins < 10) {
		minutes.innerHTML = '0' + mins;
	} else {
		minutes.innerHTML = mins;
	}
	
	month.innerHTML = monthName[mm];
	day.innerHTML = dd;
	year.innerHTML = yyyy;
}

setInterval(setDate,1000);
</script>
</body>
</html>