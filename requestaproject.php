<!DOCTYPE html>
<html lang="en">
<head>
<title>Upwork</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/customstyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="index.php">Uptown</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="#" class="nav-link">Home</a></li>
<li class="nav-item"><a href="projectassistance.php" class="nav-link">Project Assistance</a></li>


</ul>
</div>
</div>
</nav>

<style>
  .lbtn{
    display: none;
  }
  #map{
    display: none;
  }
</style>


<section class="ftco-section contact-section">
<div class="container">

<div class="row block-9 justify-content-center mb-5">
<div class="col-md-8 mb-md-5">
<h2 class="text-center">REQUEST FOR A PROJECT/SEMINAR</h2>


<!-- <form action="https://formspree.io/f/xayabdbz"
  method="POST" class="bg-light p-5 contact-form">
<div class="form-group">
<input type="text" class="form-control" name="Name" placeholder="Enter Your Name">
</div>

<div class="form-group">
<input type="text" class="form-control" name="Department" placeholder="Enter Your Department" required>
</div>

<div class="form-group">
<input type="text" class="form-control" name="_replyto" placeholder="Enter Your Functional Email" required>
</div>

<div class="form-group">
<select class="form-control" name="Project type" required>
  <option selected="" value="">Select project type</option>
  <option value="Software">Software</option>
  <option value="Hardware">Hardware</option>
  <option value="Notsure_Suggest_for_me">Not Sure? Suggest for me</option>
</select>
</div>


<div class="form-group">
  <label>What's your budget like? Insert a reasonable amount in ₦</label>
  <div class="form-control" style="display: flex;align-items: center;">
    <span style="display: inline-block;width:3%;">₦</span>
    <input type="number" class="form-control" name="Budget" placeholder="eg. 70,000" style="display: inline-block;width:97%;padding-left:2px;height: 50px !important;border:none;outline: none;" required>
  </div>
</div>


<div class="form-group">
<textarea id="" cols="30" rows="7" name="Message(Optional)" class="form-control" placeholder="Message (Optional)"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Request" class="btn btn-primary py-3 px-5 nlbtn">
<input type="submit" value="Loading" disabled="" class="btn btn-primary py-3 px-5 lbtn">
</div>
</form> -->



<form id="requestaproject" class="bg-light p-5 contact-form">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
</div>

<div class="form-group">
<input type="text" class="form-control" name="department" placeholder="Enter Your Department" required>
</div>

<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Enter Your Functional Email" required>
</div>

<div class="form-group">
<!-- <input type="text" class="form-control" name="subject" placeholder="Subject"> -->
<select class="form-control" name="projecttype" required>
  <option selected="" value="">Select project type</option>
  <option value="Software">Software</option>
  <option value="Hardware">Hardware</option>
  <option value="Notsure_Suggest_for_me">Not Sure? Suggest for me</option>
</select>
</div>


<div class="form-group">
  <label>What's your budget like? Insert a reasonable amount in ₦</label>
  <div class="form-control" style="display: flex;align-items: center;">
    <span style="display: inline-block;width:3%;">₦</span>
    <input type="number" class="form-control" name="budget" placeholder="eg. 70,000" style="display: inline-block;width:97%;padding-left:2px;height: 50px !important;border:none;outline: none;" required>
  </div>
</div>


<div class="form-group">
<textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message (Optional)"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Request" class="btn btn-primary py-3 px-5 nlbtn">
<input type="submit" value="Loading" disabled="" class="btn btn-primary py-3 px-5 lbtn">
</div>
</form>






</div>
</div>
<div class="row justify-content-center">
<div class="col-md-10">
<div id="map" class="bg-white"></div>
</div>
</div>
</div>
</section>
<footer class="ftco-footer ftco-section">
<div class="container">



<div class="row">
<div class="col-md-12 text-center">
<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a>Chibucious</a>
</p>
</div>
</div>
</div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js.pagespeed.jc.Yneyw-r-Yw.js"></script><script>eval(mod_pagespeed_uQdDT8kHk_);</script>
<script>eval(mod_pagespeed_TD$bnxCuBm);</script>
<script>eval(mod_pagespeed_mA2YaDvUW5);</script>
<script src="js/jquery.easing.1.3.js+jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js.pagespeed.jc.kas2iwcN9l.js"></script><script>eval(mod_pagespeed_ycJ6cv1_Cm);</script>
<script>eval(mod_pagespeed_wltBi9zUCK);</script>
<script>eval(mod_pagespeed_4MmeKFamLr);</script>
<script>eval(mod_pagespeed_BGqZdmNan1);</script>
<script src="js/jquery.magnific-popup.min.js+aos.js+jquery.animateNumber.min.js+bootstrap-datepicker.js.pagespeed.jc.pAVsT0Junx.js"></script><script>eval(mod_pagespeed_ny9rQC0UqS);</script>
<script>eval(mod_pagespeed_0$thljJrSn);</script>
<script>eval(mod_pagespeed_KuFRaBEPpj);</script>
<script>eval(mod_pagespeed_hIDZMkNLxN);</script>
<script src="js/jquery.timepicker.min.js+scrollax.min.js+google-map.js+main.js.pagespeed.jc.V0iMrDQorW.js"></script><script>eval(mod_pagespeed_IPRIcJdfpy);</script>
<script>eval(mod_pagespeed_hjVyyBjBJ$);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script>eval(mod_pagespeed_$djaVC4VZ$);</script>
<script>eval(mod_pagespeed_MZumP$LeIH);</script>

<script>
$(function(){


  $('#requestaproject').submit(function(e){
    e.preventDefault();
    $(".lbtn").show(); 
    $(".nlbtn").hide(); 
    // alert(54);
    var user = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'db/requestaproject.php',
      data: user,
      dataType:'json',
      success:function(response){
        $(".lbtn").hide(); 
        $(".nlbtn").show(); 
        // var response = JSON.parse(data);
        if(response.error === false){
          alert(response.message);
          $('input').val('');
        }else{
          alert(response.message);
        }
      
      }


    });
  });

})
</script>



</body>
</html>