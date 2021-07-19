<!DOCTYLE html>
<html lang="en">
<head>
      <script src="https://polyfill.io/v3/polyfill.js?features=es6%2Ces2015%2Ces2016%2Ces2017%2Ces2018%2Ces2019%2Ces7%2Ces5"></script>
 <?php
 $user = $_SERVER['HTTP_USER_AGENT'];
 ?> 
  <script>
     const ua = "<?php echo $user ?>"
 
     if (ua.includes("Trident")) {
         window.location = "ie.html" 
     } else {
        console.log("Good")
     }
 </script>
  </head>
  <body>
    Hello
  </body>
</html>
