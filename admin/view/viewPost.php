<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?=$data['articleTitle']?></title>
      <link rel="stylesheet" href="css/viewPost.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
      <div class="wrapper">
            <header style="background:url(<?=$data["headerimage"]?>) no-repeat 50% 50%;">

                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              LOGO
                        </div>
                        <!--Navigation Bar Contents here-->
                        <div class="menu">
                              <ul>
                                    <li><a href="#">Resume & CV Writing</a></li>
                                    <li><a href="#">Resume & CV Samples</a></li>
                                    <li><a href="#">Career Development</a></li>
                                    <li><a href="#">Interview Tips</a></li>
                                    <li><a href="#">Blog</a></li>
                              </ul>
                        </div>
                  </nav>

            </header>
            
            <div class="content">
                  <h1><?=$data['articleTitle']?> </h1> 
                  Share This Article:  
                  <a href="fjskdjh"><i class="fa fa-share-alt" aria-hidden="true"></i></a>&nbsp<br>
                  <i>by: <?=$data['articleWriter']?></i> 
                  <a href="<?=$data['fblink']?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                  <a href="<?=$data['linkedinlink']?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                  |<i class="fa fa-clock-o"></i>
                  <i><?=$data['timetoread']?> min read</i><br>
                  <div class="dataRender">
                       <?=$data['articleBody']?> 
                  </div>
            </div>
      </div>
      
      <div class="footer">
            <!--Footer Contents here-->
            <div class="socialBar">
                  <a href="#"><i class="fa fa-facebook      fa-2x"></i></a>
                  <a href="#"><i class="fa fa-linkedin      fa-2x"></i></a>
                  <a href="#"><i class="fa fa-instagram     fa-2x"></i></a>
                  <a href="#"><i class="fa fa-twitter       fa-2x"></i></a>
                  <a href="#"><i class="fa fa-google-plus   fa-2x"></i></a>
            </div>
            <div class="footerleft">
                  <h4>SimplifiedCV</h4>
                  <a href="">Resume Templates</a>&nbsp<br>
                  <a href="">CV Templates</a>&nbsp<br>
                  <a href="">Cover Letters</a>&nbsp<br>
                  <a href="">Samples</a><br>
            </div>
            <div class="footerleft">
                  <h4>Resources</h4>
                  <a href="">Blog</a>&nbsp<br>
                  <a href="">Career Development</a>&nbsp<br>
                  <a href="">Interview Tips</a><br>
            </div>
            <div class="footerleft">
                  <h4>Others</h4>
                  <a href="">About Us</a>&nbsp<br>
                  <a href="">Work with Us</a>&nbsp<br>
                  <a href="">Contact Us</a>&nbsp<br>
                  <a href="">FAQs</a>
            </div>
            <div class="footerleft">
                  <h4>Legal</h4>
                  <a href="">Privacy Policy</a>&nbsp<br>
                  <a href="">Terms of Use</a>&nbsp<br>
                  <a href="">Affiliates</a>&nbsp<br>
            </div>
            <div class="addressbar">
                  Vivekananda Sarani<br>
                  Kolkata 700078 India<br>
                  Copyright © 2018 SimplifiedCV Pvt Ltd All Rights Reserved.<br>
            </div>      
      </div>
      <script type="text/javascript">


      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });


      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      });


      </script>

</body>
</html>
