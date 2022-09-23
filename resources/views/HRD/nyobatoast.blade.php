<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/toasty.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" />
    <style>
    body{background:#eee}.btn{margin-right: 0.5rem !important}.btn{font-size: 0.875rem;line-height: 1;font-weight: 400;padding: .7rem 1.5rem;border-radius: 0.1275rem}.container{margin-top: 100px}.toast{transition: 0.32s all ease-in-out}.toast-container--fade{right: 0;bottom: 0}.toast-container--fade .toast-wrapper{display: inline-block}.toast.fade-init{opacity: 0}.toast.fade-show{opacity: 1}.toast.fade-hide{opacity: 0}
</style>
</head>
<body>


<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center"> <button type="button" id="successtoast" class="btn btn-success btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification success</button> <button type="button" id="infotoast" class="btn btn-info btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification info</button> <button type="button" id="warningtoast" class="btn btn-warning btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification warning</button> <button type="button" id="errortoast" class="btn btn-primary btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification error</button> </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/toasty.js"></script>
<script>
$(document).ready(function() {
   
   //success toast
       
           
          
           var options = {
               autoClose: true,
               progressBar: true,
               enableSounds: true,
               sounds: {
          
           info: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233294/info.mp3",
           // path to sound for successfull message:
           success: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233524/success.mp3",
           // path to sound for warn message:
           warning: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233563/warning.mp3",
           // path to sound for error message:
           error: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233574/error.mp3",
       }, 
           };
           
           var toast = new Toasty(options);
           toast.configure(options);
           
           
          
      
      
      $('#successtoast').click(function() {
          
           toast.success("This toast notification with sound");
           
       });
       
       $('#infotoast').click(function() {
          
           toast.info("This toast notification with sound");
           
       });
       
       $('#warningtoast').click(function() {
          
           toast.warning("This toast notification with sound");
           
       });
       
       $('#errortoast').click(function() {
          
           toast.error("This toast notification with sound");
           
       });
       
     });
</script>
</body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Toast Example</h3>
  <p>A toast is like an alert box that is only shown for a couple of seconds when something happens (i.e. when a user clicks on a button, submits a form, etc.).</p>
  <p>In this example, we use the .show class to always show the toast by default. You can close it by clicking on the close (x) icon inside the toast header.</p>
  
  <div class="toast show">
    <div class="toast-header">
      <strong class="me-auto">Toast Header</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      <p>Some text inside the toast body</p>
    </div>
  </div>
</div>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
</head>
<body>
     <!-- Use a button to open the snackbar -->
<button onclick="myFunction()">Show Snackbar</button>

<!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div> 
<script>
    function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
} 
    </script>
</body>
</html>