<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thambapanni</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
  <link href="css/remodal.min.css" rel="stylesheet">
  <link href="ajax/libs/remodal/1.0.7/remodal-default-theme.min.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/base.css" />
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <div id="backgroundaudio">
     <audio id="player" autoplay controls="" loop="" preload="">
      <source src="sound.mp3" type="audio/mp3"> Your browser does not support the audio element. </audio>
        <a href="javascript:void(0)" class="btn btn-success" data-toggle="tooltip" title="Preview" onclick="aud_play_pause()"><i id="stateicon" class="sound2"><img src="images/audio_off.png" class="img-responsive play-ico"/><img src="images/audio_on.png" class="img-responsive pause-ico"/></i></a>   
  </div>
  <div class="container">    
    <div class="row">
        <div class="col-sm-3" id="logo">
            <img src="images/logo.png" class="img-responsive" alt="logo">
        </div>
        <div class="col-sm-2" >
        </div>
        <div class="col-sm-7"> 
            <img src="images/menu.png" class="img-responsive" alt="sword" width="604" height="436">
        </div>
    </div>

    <div class="row">
        <nav id="navbar-1" class="navbar navbar-default">
          <div id="nav_bar" class="container-fluid">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Instruction</a></li>
              <li><a href="kathikawatha/kathikawatha/forum/forumTopics.php">Kathikawatha</a></li>
              <li><a class="" data-toggle="modal" data-target="#download_modal">Wallpapers</a></li>
            </ul>
          </div>
        </nav>
    </div>
</div>

<hr id="hr1"></hr>

<div class="container">
  <div class="row" id="sea">
    <div class="m-imagemap">
      <img class="imagemap__img" src="images/river.jpg" alt="Infografik1" usemap="#imagemap1" height="547" width="1224">
        <map id="imagemap1" name="imagemap1">
          <area shape="rect" alt="Ohren" coords="0,68,756,144" href="#map__item1" />
          <area shape="rect" alt="Augen" coords="608,200,500,276" href="#map__item2" />
          <area shape="rect" alt="Barthaar" coords="485,445,760,520" href="#map__item3" />
        </map>
    </div>
    <br></br>
        <div class="col-sm-9">
            
        </div>

        <div class="col-sm-9">
            
        </div>
        <div class="col-sm-3">
            
        </div>

    </div>
</div>

<hr></hr>
<div class="modal fade bs-example-modal-sm" id="download_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="images/logo.png" class="modal-tit-img"> | DOWNLOAD WALLPAPERS</h4>
      </div>
      <div class="modal-body text-center">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Desktop&nbsp;&nbsp;<i class="fa fa-laptop" aria-hidden="true"></i></a></li>
            <li><a href="#tab2" data-toggle="tab">Mobile&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile" aria-hidden="true"></i></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active fade in" id="tab1">
              <div class="row">
                <div class="col-sm-12 scrl-down">
                  <?php
                    $sql="SELECT path FROM wallpapers";
                    $result= mysqli_query($connections, $sql);
                    foreach($result as $x){
                      echo"<div class='row down-div'>";
                      echo"<div class='col-sm-6 col-xs-6'>";
                      echo"<img src='".$x['path']."' class='img-responsive wal-thumb'/>";
                      echo"</div>";
                                                            
                      echo"<div class='col-sm-6 col-xs-6 down-pad'>";
                      echo"<a href='".$x['path']."' download class='btn btn-default'>DOWNLOAD</a>";
                      echo"</div>";
                                                
                      echo "</div>";
                                                    
                    }
                                                
                  ?>                          
                </div>
              </div>
            </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="row">
                                            <div class="col-sm-12 scrl-down">
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/mobile_wallpaper_1.jpg" class="img-responsive  mob-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/mobile_wallpaper_1.jpg" download class="btn btn-default">DOWNLOAD</a>
                                                    </div>
                                                </div>
                                                <div class="row down-div">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <img src="images/mobile_wallpaper_2.jpg" class="img-responsive mob-thumb"/>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 down-pad">
                                                        <a href="wallpapers/mobile_wallpaper_2.jpg" download class="btn btn-default" >DOWNLOAD</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="container">
    <div class="row" id="discr">
        <div class="col-sm-8">
          <h1 style="font-family: 'Cinzel Decorative', cursive;font-size: 30px;color: #FFFFFF;text-align: center;text-decoration: underline;">Thambapanni</h1>
          <p style="font-family: 'Slabo 27px', cursive;color: #FFFFFF;margin-left: 10px" align="justify">Thambapanni uses cutting edge technology to capture detailed 3D representations of Sri Lanka's significant historical heritage sites before they are lost to natural disasters,destroyed by human aggression or ravaged by the passage of time.The 3D model generated from using Maya and Unity is then colored using photographs taken of the surface of the structure.</p>
          
        </div>
    </div>
</div>

<hr></hr>

<div class="container">
  <div class="row" id="emailsend">
    <div class="row" id="buy-div">
      <div class="col-sm-12 mesh2 img-bg white">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
              <div class="col-sm-7 text-pad pre-pad">
                <h3>Contact Us</h3>
                <div class="row">
                  <div class="col-lg-12 subscribe">
                    <form method="post" id="frmPreOrder" action="email.php">
                      <div class="input-group">
                        <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name" required=>
                        <input type="text" class="form-control" name="last_name" id="lnama" placeholder="Last Name" required>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        <textarea rows="5" class="form-control" name="message" id="msg" placeholder="Message" cols="30"></textarea>
                        <input type="hidden" value="1f828df0d0c387e" name="secret">
                        <input type="submit" class="btn btn-default" name="submit" value="Submit">
                      </div>
                    </form>
                  </div>
                </div>
                <p align="justify">The story and the concept are designed based on a historical Sri Lankan background. The storyline, places and surroundings are entirely fictional.</p>
              </div>
              <div class="col-sm-4 col-sm-offset-1 cover-pad"><img src="images/thuparama.jpg" class="img-responsive" alt="thambapanni"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr></hr>
<footer>
  <div class="row foot">
    <div class="col-md-10 col-md-offset-1 ">
      <div class="row">
        <div class="col-xs-12 text-center">
          <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span> </a>
          <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span> </a>
          <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-instagram fa-stack-1x fa-inverse"></i> </span> </a>
          <a href="" class="foot-social" target="_blank"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i> </span> </a>              
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="row">
        <div class="col-md-12 foot-tag-pad">
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="foot-tag-copy">Copyright © 2016 <a target="_blank" href=""></a> All rights reserved. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
  <script src="js/jquery.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.ui.touch-punch.min.js"></script>
  <script  src="js/custom.js"></script>
  <script  src="ajax/libs/remodal/1.0.7/remodal.min.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  
 <script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(150).css({'overflow':'visible'});
        })
    //]]>
</script>
<script>
    /*
* rwdImageMaps jQuery plugin v1.5
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2013 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
;(function(a){a.fn.rwdImageMaps=function(){var c=this;var b=function(){c.each(function(){if(typeof(a(this).attr("usemap"))=="undefined"){return}var e=this,d=a(e);a("<img />").load(function(){var g="width",m="height",n=d.attr(g),j=d.attr(m);if(!n||!j){var o=new Image();o.src=d.attr("src");if(!n){n=o.width}if(!j){j=o.height}}var f=d.width()/100,k=d.height()/100,i=d.attr("usemap").replace("#",""),l="coords";a('map[name="'+i+'"]').find("area").each(function(){var r=a(this);if(!r.data(l)){r.data(l,r.attr(l))}var q=r.data(l).split(","),p=new Array(q.length);for(var h=0;h<p.length;++h){if(h%2===0){p[h]=parseInt(((q[h]/n)*100)*f)}else{p[h]=parseInt(((q[h]/j)*100)*k)}}r.attr(l,p.toString())})}).attr("src",d.attr("src"))})};a(window).resize(b).trigger("resize");return this}})(jQuery);


$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();

    $('area').on('click', function(e) {
      e.preventDefault();
      var target = $(this).attr('href');
      var imagemapItems = $('.imagemap__item');

      imagemapItems.hide();
      $(target).show();
      $(target+'> h4').addClass('is-open');
    });
});
  </script>
</body>
</html>
<script>

    function aud_play_pause() {
    var myAudio = document.getElementById("player");
    if (myAudio.paused) {
      $('#stateicon').removeClass('sound');
      $('#stateicon').addClass('sound2');
      myAudio.play();
    } else {
      $('#stateicon').removeClass('sound2');
      $('#stateicon').addClass('sound');
      myAudio.pause();
   }
 }

</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
