
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<style type="text/css">
@import url("Contact Us11.css");
</style>
</head>

<body style="background-image:url(Salami-Pizza.jpg)">
<div class="container">  
  <form id="contact" action="http://10.250.0.7/jc451634/project/config_process.php" method="post">
    <h3><u><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif">Contact Us</font></u></h3>
    <h4><b>We are here to answer any questions you may have about our "Find Me Food" website. Reach out to us and we'll respond as soon as we can.</b></h4>
    <fieldset>
      <input placeholder="Your name" type="text" id="name" name="name"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" id="email" name="email"  required>
    </fieldset>
    <fieldset>
      <input type="tel" placeholder="Your 10 digit Phone Number" class="tel" id="placePhone" name="phone" pattern="[0-9]{10}" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Please type your Message Here...." id="des" name="des"  required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
</body>
</html>
