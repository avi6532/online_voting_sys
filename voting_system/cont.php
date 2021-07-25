<head>
<?php
    include("includes/header.php")
?>

<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="contact-form.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
<div class="contact-section">
<h2 class="ct-section-head">
   CONTACT US
</h2>
<div class="row contact-fields">
<div class="col-md-8 left-form">
   <form method="post" action="">
      <div class="form-group">
         <label class="sr-only" for="fname">First Name *</label>
         <input class="required form-control" id="fname" name="fname" placeholder="First Name&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="lname">Last Name *</label>
         <input class="required form-control" id="lname" name="lname" placeholder="Last Name&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="contactEmail">Email *</label>
         <input class="required form-control h5-email" id="contactEmail" name="contactEmail" placeholder="Email&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="contactPhone">Phone *</label>
         <input class="required form-control h5-phone" id="contactPhone" name="contactPhone" placeholder="Phone&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="comment">What Sort of problem is been faced...</label>
         <textarea class="required form-control" id="comment" name="comment" placeholder="What Sort of problem is been faced...&nbsp;*" rows="6"></textarea>
      </div>
      <button class="btn btn-accent" type="submit">Submit</button>  
   </form>
</div>
<div class="col-md-4 contact-info">
<div class="phone">
   <h2>Call</h2>
   <a href="tel:+4046872730">23052220, 23052221</a>
</div>
<div class="email">
   <h2>Email</h2>
   <a href="mailto:info@decidedekalb.com">complaints@eci.gov.in</a>
</div>
<div class="location">
   <h2>Visit</h2>
   <p> Nirvachan Sadan, Ashoka Road, </br>
      123 Easy Street </br>
      Ashoka Road, </br>
       New Delhi 110001
      <br>
   </p>
</div>
<br>
<?php
include("includes/footer.php")
?>
</head>