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
<style>
#googleMap{
    float: left;
}
.mySlides {display:none;
             
              float: right;
              margin-right: -470px;

          }

#tour{
    background-color: #feae01; /* Green */
    border: none;
    color: black;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    /*margin: 4px 2px;*/
    cursor: pointer;
    border-radius: 20px;
}

#down{
    font-size: 20px;
}
hr{
    width: 950px;
    background: #feae01;
}
img {
   padding:1px;
   border:1px solid #021a40;
}
</style>
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
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Instruction</a></li>
              <li><a href="#">Kathikawatha</a></li>
              <li><a class="" data-toggle="modal" data-target="#download_modal">Wallpapers</a></li>
            </ul>
          </div>
        </nav>
    </div>
</div>


<div align="center">   
  <a id="down" href="pdf/temple.pdf" target="_blank" type="application/octet-stream" 
            download="pdf/temple.pdf">download pdf
  </a>

  <input style="background-color: #FBA817;border: none;padding: 8px 32px;text-align: center;text-decoration: none;display: inline-block; cursor: pointer;margin-left:2%;border-radius: 20px;width: 10em; font-weight: bold;  color: #000; border-radius: 10px;  font-size: 16px;" type="button" value="Go to tour" onclick="window.location.href='map.php'" />
</div>
    <!--begining of translate-->
       
    <div style="margin-left:70%;margin-top:-3%;" id="google_translate_element"></div>

      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
      </script>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
      <!--end of translate-->
    <hr></hr>

        
    <div class="row" style="margin-top:5%">
      <div class="col-sm-12 mesh banner-pad">
        <div class="details" id="ss">
          <h2 style="font-family:'Cinzel Decorative', cursive;color: #000;font-size: 38px;">Temple of Tooth</h2>
          <br>
                  Kandy was the capital of the Sinhalese Kings from 1592 to 1815.<img src="images/dalada1.jpg" alt="temple" height="200" width="400" align=left> 
                    Fortified by a terrain of mountains and the difficult approach Kandy managed to operate in independence 
                    from Dutch, Portuguese and the English till 1815. The city is a world heritage site declared by UNESCO, 
                    in part due to this temple.
                    <br>
                    The Sri Dalada Maligawa or The Temple of the Sacred Tooth Relic is a temple in the city of Kandy in Sri Lanka.
                     It was built within the royal palace complex which houses the one of the two surviving relic of the tooth
                      of Buddha, an object of veneration for Buddhists. The other tooth relic is believed to be enshrined in a 
                      stupa called Somawathi Chethiya.
                                <br>
                    The Sri Dalada Maligawa in Kandy, the temple which houses the Sacred Tooth Relic of The Buddha, is possibly 
                    the most sacred Buddhist shrine in the world. It is venerated not only by Buddhists in Sri Lanka but by 
                    Buddhists all over the world.
                                <br>
                    King Wimaladharmasuriya I (1592 - 1603), the first to select Kandy as the ruling capital, originally 
                    built a two storied temple for the Relic and brought the tooth relic from Delgamuwa near Kuruwita in
                     Sabaragamuwa which had been hidden for protection. Remains of this temple no longer exist.
                   
                                <br>
                    The last king of sri lanka, Sri Wickrama Rajasinghe (1797 - 1814) built the Pattirippuwa 
                    (the Octagon). Originally, the Pattirippuwa (octagon) was part of the royal palace. It was used 
                    by the king to address his follow countrymen. Today the Pattirippuwa has become a part of the temple 
                    and houses ancient textures written in ola leaves.
                    <br>
                

                    <h3>More info:</h3>
                    <br>
                    <a href="http://daladamaligawa.org/asiaexplorers.htm">http://daladamaligawa.org/asiaexplorers.htm</a>
                    
                    <br>
                    <a href="https://en.wikipedia.org/wiki/Temple_of_the_Tooth">https://en.wikipedia.org/wiki/Temple_of_the_Tooth/</a>
                    
                    <br>
                    <a href="http://daladamaligawa.org/amazing.lanka.htm">http://daladamaligawa.org/amazing.lanka.htm</a>

        </div>  
      </div>
   </div>
   <!--begining of map-->
   <div id="googleMap" style="width:500px;height:300px;"></div>

            <script>
                function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng(8.3712,80.4016),
                        zoom:18,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    
                    var marker = new google.maps.Marker({
                      position: mapProp,
                      map: map,
                      draggable: true,
                      animation: google.maps.Animation.DROP,
                      position: {lat: 7.2936, lng: 80.6413}
                    });
                    marker.addListener('click', toggleBounce);
               }
               function toggleBounce() {
                  if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                  } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                  }
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDuHnG2Uz1RGg3zHa5ygcZUDsTER-lduzs&callback=myMap"></script>
        </div>
<!--end of map-->
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