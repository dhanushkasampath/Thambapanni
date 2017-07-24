<?php 
require_once ("db.php");


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thambapanni</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../../images/favicon.ico">
  <link rel="icon" href="../../../images/favicon.ico" type="image/x-icon">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">

  <link href="../css/mystyle.css" rel="stylesheet">

    

<link href="../bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
<script src="../bootstrap/jquary.js"></script> 
<script src="../bootstrap/bootstrapjs.js"></script>

<link href="../css/forum.css" rel="stylesheet" type="text/css"> 
<link href="../css/navbar1n2.css" rel="stylesheet" type="text/css">
<link href="../css/footer.css" rel="stylesheet">

  <link href="../../../css/remodal.min.css" rel="stylesheet">
  <link href="../../../ajax/libs/remodal/1.0.7/remodal-default-theme.min.css" rel="stylesheet" />
  <link href="../../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../css/font-awesome.min.css" rel="stylesheet">
  <link href="../../../css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../css/base.css" />
  <link href="../../../css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

</head>


<body>
  
  
  <div class="container">    
    
    <div class="row">
        <div class="col-sm-3" id="logo">
            <img src="../../../images/logo.png" class="img-responsive" alt="logo">
        </div>
        <div class="col-sm-2" >
        </div>
        <div class="col-sm-7"> 
            <img src="../../../images/menu.png" class="img-responsive" alt="sword" width="604" height="436">
        </div>
    </div>

    <div class="row">
        <nav id="navbar-1" class="navbar navbar-default">
          <div id="nav_bar" class="container-fluid">
            <ul class="nav navbar-nav">
              <li><a href="../../../index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Instruction</a></li>
              <li><a href="kathikawatha/kathikawatha/forum/forumTopics.php">Kathikawatha</a></li>
              <li><a data-toggle="modal" data-target="#download_modal">Wallpapers</a></li>
            </ul>
          </div>
        </nav>
    </div>

  </div>

<hr></hr>

    

 <div class="post-wrapper" style=" margin-left:13%; margin-right:13%;">
   
    <div id="posts_content" style="">
    <?php
   
    
    //Include database configuration file
    include('connection.php');
    
    $limit = 10;
    
    //get number of rows
    $queryNum = $db->query("SELECT COUNT(*) as postNum FROM topics");
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];
    
 
  
    
    //get rows
    $query = $db->query("SELECT * FROM topics ORDER BY topic_id DESC LIMIT $limit");
    
    if($query->num_rows > 0){ 
    	echo "<table style='border-collapse: collapse;width: 100%;'>";
    	?>

        <div class="posts_list"  style="color: #f7e70f;">
        <?php
            while($row = $query->fetch_assoc()){ 

                $postID = $row['topic_id'];
        ?>
            <!--<div style="color:#49160b ;" class="list_item"><a href='discussion.php?id=".$row['topic_id']."'>-->

            
            <?php echo "<tr><td><a href='discussion.php?id=".$row['topic_id']."'>".$row["topic_subject"]."</a></td><td>". $row["topic_date"]."</td><td>". $row["user"]."</td></tr>";
            ?>
            </a>

            <!--</div>-->

        <?php } 
        echo "</table>";
        ?>
        </div>
        
    <?php } ?>

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


  <script src="../../../js/jquery.min.js"></script>
  <script  src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/jquery.countdown.min.js"></script>
  <script src="../../../js/jquery.ui.touch-punch.min.js"></script>
  <script  src="../../../js/custom.js"></script>
  <script  src="../../../ajax/libs/remodal/1.0.7/remodal.min.js"></script>
  <script src="../../../js/jquery-1.9.1.min.js"></script>
  <script src="../../../js/modernizr.custom.js"></script>
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
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
