<?php
require_once ("connection.php");
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



 <link href='search/style.css' rel='stylesheet' type='text/css'>
    <script src="search/jquery.min.js"></script>

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
	
	<div>
        <div class="col-sm-12" style="padding: 2%;">

            <div class="row">
                <?php
                    $sql="SELECT topic_id, topic_subject, topic_content FROM topics
                    WHERE topics.topic_id = " . mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);
                    $result= mysqli_query($db, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $id=mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);

                    
                    
                ?>
                
                <div class="col-xs-12 " id = "-1">
                    
                     <h2 align="center" style="margin-top:-30px"><?php echo $row['topic_subject']; ?></h2>
                    
                    <div class="row" style="margin-left: 400px;">
                        <div class="col-xs-push-1 col-xs-11">
                            <h2 style="font-size: 20px;"><?php echo $row['topic_content']; ?></h2>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-push-11 col-xs-1">
                            <a class="btn btn-default btn-xs" onclick = "ajaxReply(-1)"> Reply </a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-left:15px;" id = "replytopLevel"> </div>
        </div>
    </div>

<!-- New Replay Model -->
	<!--<div class="modal fade"  id = "replyModel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Your Reply</h4>
                </div>
                <div class="modal-body">
                    <form id = "replayform">
                        <div class="form-group">
                            <label class="control-label" for="message">Massage:</label>
                            <div>
                                <textarea class="massage form-row form-control" rows="6" cols="8" name="message" id = "message"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default submitModel btn-custom">Post to forum</button>
                </div>
            </div>
        </div>
    </div>-->
    <?php 
        $email=$_SESSION['email']


    ?>



<hr></hr>

<!--<footer>
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
</footer>-->
	  
</body>
</html>


<script src="../js/forum.discussion.js"></script>
