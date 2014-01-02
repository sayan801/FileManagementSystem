<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>
  
    File Management System
  
</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

<!-- Documentation extras -->
<link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/pygments-manni.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="../assets/js/html5shiv.js"></script>
  <script src="../assets/js/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
                <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
                               <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">

<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-146052-10']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<style>
    .bs-example:after {
  content: "Folder";
    }
</style>
    <!-- Place anything custom after this. -->
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">File Management System</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Support</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign out <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url(); ?>index.php?/signin">Sign out</a></li>
                        </ul>
                    </li>
                    <li><a></a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-3">
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
              <li>
                <a href="#Desktop"><span class="badge pull-right">   </span>Dekstop</a>
              </li>
              <li>
                  <a href="#Mobile"><span class="badge pull-right">   </span>Mobile</a>
              </li>
              <li>
                  <a href="#Pendrive"><span class="badge pull-right">  </span>Pendrive</a>
                </li>
              <li>
                <a href="#SDcard"><span class="badge pull-right">  </span>SD card</a>
              </li>
              <li>
                <a href="#CDDVD"><span class="badge pull-right">  </span>CD/DVD</a>
              </li>
           </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
              <li>
                <a href="#Desktop">Dekstop</a>
                <hr></hr>
                    <ul class="nav">
                        <li><a href="#Soumen-PC"><span class="label label-success pull-right">  </span>My-Desktop</a></li>
                        <li><a href="#Technicise-PC"><span class="label label-success pull-right">  </span>My-Drive</a></li>
                    </ul>
              </li>
              <li>
                  <a href="#Mobile">Mobile</a>
                  <hr></hr>
                    <ul class="nav">
                        <li><a href="#Android-mob"><span class="label label-success pull-right">  </span>Android-mob</a></li>
                        <li><a href="#Windows-mob"><span class="label label-success pull-right">  </span>Windows-mob</a></li>
                    </ul>
              </li>
             <li>
                    <a href="#Pendrive">Pendrive</a>
                    <hr></hr>
                    <ul class="nav">
                        <li><a href="#HP"><span class="label label-success pull-right">  </span>HP</a></li>
                        <li><a href="#Sony"><span class="label label-success pull-right">  </span>Sony</a></li>
                    </ul>
                </li>
              <li>
                <a href="#SDcard">SD card</a>
                <hr></hr>
                    <ul class="nav">
                        <li><a href="#Soumen-SD"><span class="label label-success pull-right">  </span>Soumen-SD</a></li>
                        <li><a href="#Technicise-SD"><span class="label label-success pull-right">  </span>Technicise-SD</a></li>
                    </ul>
              </li>
              <li>
                <a href="#CDDVD">CD/DVD</a>
                <hr></hr>
                    <ul class="nav">
                        <li><a href="#MovieCD"><span class="label label-success pull-right">  </span>Movie CD</a></li>
                        <li><a href="#SongDVD"><span class="label label-success pull-right">   </span>Song DVD</a></li>
                    </ul>
              </li>         
            </ul>
          </div>
        </div>
        <div class="col-md-6" role="main">
            <!-- Overview
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="Desktop"><i class="icon-desktop"></i>	  Desktop</h1>
      <div class="bs-example">
	  <legend id="Soumen-PC">My-Desktop</legend>
      <div class="row">
	   <?php
			foreach ($files as $files){
			     $id=$files['id'];
				$cat_id = $files['cat_id'];
				$cat_name = $files['cat_name'];
				$sub_cat_name = $files['sub_cat_name'];
				$file_name = $files['file_name'];
				$picture = $files['picture'];				
		?>
        <div class="col-sm-3 col-md-3">
          <a href="#" class="thumbnail">
		 <img src="<?php echo base_url().$files['picture']?>" alt="">
			<h5 style="text-align:center"><?php echo $files['file_name']?></h5>
           </a>
		   <h5 style="text-align:center">
		   <a href="<?php echo base_url(); ?>index.php?/details/remove/<?php echo $files['id']; ?>" onClick = "javascript: return confirm('Are you sure to delete this?');">Delete</a></h5>
        </div>
		<?php } ?>                      
		</div>
      </div>
    
	<div class="bs-example">
	  <legend id="Technicise-PC">My-Drive</legend>
      <div class="row">
        <?php
			foreach ($second as $file){
				$cat_id = $file['cat_id'];
				$cat_name = $file['cat_name'];
				$sub_cat_name = $file['sub_cat_name'];
				$file_name = $file['file_name'];
				$picture = $file['picture'];				
		?>
        <div class="col-sm-3 col-md-3">
          <a href="#" class="thumbnail">
		 <img src="<?php echo base_url().$picture;?>" alt="">
			<h5 style="text-align:center"><?php echo $file_name;?></h5>
           </a>
		    <h5 style="text-align:center">
		   <a href="<?php echo base_url(); ?>index.php?/details/remove/<?php echo $files['id']; ?>" onClick = "javascript: return confirm('Are you sure to delete this?');">Delete</a></h5>
        </div>
		<?php } ?> 
        </div>
      </div>
	
	</div>
    </div>  
  
  <!-- Mobile
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="Mobile"><i class="icon-mobile-phone"></i>	  Mobile</h1>
    </div>
      <div class="bs-example">
	  <legend id="Android-mob"><i class="icon-android"></i>	Android-mob</legend>
      <div class="row">
<?php
			foreach ($third as $file){
				$cat_id = $file['cat_id'];
				$cat_name = $file['cat_name'];
				$sub_cat_name = $file['sub_cat_name'];
				$file_name = $file['file_name'];
				$picture = $file['picture'];				
		?>
        <div class="col-sm-3 col-md-3">
          <a href="#" class="thumbnail">
		 <img src="<?php echo base_url().$picture;?>" alt="">
			<h5 style="text-align:center"><?php echo $file_name;?></h5>
           </a>
		    <h5 style="text-align:center">
		   <a href="<?php echo base_url(); ?>index.php?/details/remove/<?php echo $files['id']; ?>" onClick = "javascript: return confirm('Are you sure to delete this?');">Delete</a></h5>
        </div>
		<?php } ?>
	  
        
      </div>
    </div>
    
	<div class="bs-example">
	  <legend id="Windows-mob"><i class="icon-windows"></i> Windows-mob</legend>
      <div class="row">
<?php
			foreach ($fourth as $file){
				$cat_id = $file['cat_id'];
				$cat_name = $file['cat_name'];
				$sub_cat_name = $file['sub_cat_name'];
				$file_name = $file['file_name'];
				$picture = $file['picture'];				
		?>
        <div class="col-sm-3 col-md-3">
          <a href="#" class="thumbnail">
		 <img src="<?php echo base_url().$picture;?>" alt="">
			<h5 style="text-align:center"><?php echo $file_name;?></h5>
           </a>
		    <h5 style="text-align:center">
		   <a href="<?php echo base_url(); ?>index.php?/details/remove/<?php echo $files['id']; ?>" onClick = "javascript: return confirm('Are you sure to delete this?');">Delete</a></h5>
        </div>
		<?php } ?>        
      </div>
    </div>
	
	</div>
  



  <!-- Modal
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="Pendrive"><i class="icon-stackexchange"></i>	  Pendrive</h1>
    </div>
    <div class="bs-example">
	  <legend id="HP"><i class="icon-bitbucket"></i>	HP</legend>
      <div class="row">
<?php
			foreach ($fifth as $file){
				$cat_id = $file['cat_id'];
				$cat_name = $file['cat_name'];
				$sub_cat_name = $file['sub_cat_name'];
				$file_name = $file['file_name'];
				$picture = $file['picture'];				
		?>
        <div class="col-sm-3 col-md-3">
          <a href="#" class="thumbnail">
		 <img src="<?php echo base_url().$picture;?>" alt="">
			<h5 style="text-align:center"><?php echo $file_name;?></h5>
           </a>
		    <h5 style="text-align:center">
		   <a href="<?php echo base_url(); ?>index.php?/details/remove/<?php echo $files['id']; ?>" onClick = "javascript: return confirm('Are you sure to delete this?');">Delete</a></h5>
        </div>
		<?php } ?>         
      </div>
    </div>

	<div class="bs-example">
	  <legend id="Sony"><i class="icon-xing"></i>	Sony</legend>
      <div class="row">
<?php
			foreach ($sixth as $file){
				$cat_id = $file['cat_id'];
				$cat_name = $file['cat_name'];
				$sub_cat_name = $file['sub_cat_name'];
				$file_name = $file['file_name'];
				$picture = $file['picture'];				
		?>
        <div class="col-sm-3 col-md-3">
          <a href="#" class="thumbnail">
		 <img src="<?php echo base_url().$picture;?>" alt="">
			<h5 style="text-align:center"><?php echo $file_name;?></h5>
           </a>
		    <h5 style="text-align:center">
		   <a href="<?php echo base_url(); ?>index.php?/details/remove/<?php echo $files['id']; ?>" onClick = "javascript: return confirm('Are you sure to delete this?');">Delete</a></h5>
        </div>
		<?php } ?>         
      </div>
    </div>
	</div>
    <!-- sample modal content -->
   
 
  <!-- Dropdowns
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="CDDVD">CD/DVD</h1>
    </div>
<div class="bs-example">
<legend id="MovieCD"><i class="icon-cloud-upload"></i>	Movie-CD</legend>
      <div class="row">
        <ul class="bs-glyphicons">
		<li><i class="icon-camera-retro icon-4x"></i> Message</li>
		<li><span class="icon-camera icon-4x"></span> DICM</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
		<li><span class="icon-anchor icon-4x"></span> Movies </li>
		<li><span class="icon-bell icon-4x"></span> Technicise</li>
		<li><span class="icon-book icon-4x"></span> Personal</li>
		<li><span class="icon-asterisk icon-4x"></span> Exam</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
      </ul>
          </div>
         </div>
       
	   <div class="bs-example">
	   <legend id="SongDVD"><i class="icon-music"></i>	Songs-DVD</legend>
      <div class="row">
        <ul class="bs-glyphicons">
		<li><i class="icon-camera-retro icon-4x"></i> Message</li>
		<li><span class="icon-camera icon-4x"></span> DICM</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
		<li><span class="icon-anchor icon-4x"></span> Movies </li>
		<li><span class="icon-bell icon-4x"></span> Technicise</li>
		<li><span class="icon-book icon-4x"></span> Personal</li>
		<li><span class="icon-asterisk icon-4x"></span> Exam</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
      </ul>
          </div>
         </div>
       
	   
  </div>
  
  <!-- Tooltips
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="SDcard">SD Card</small></h1>
    </div>
     <div class="bs-example">
	 <legend id="Soumen-SD"><i class="icon-microphone"></i>	Soumen-SD</legend>
      <div class="row">
        <ul class="bs-glyphicons">
		<li><i class="icon-camera-retro icon-4x"></i> Message</li>
		<li><span class="icon-camera icon-4x"></span> DICM</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
		<li><span class="icon-anchor icon-4x"></span> Movies </li>
		<li><span class="icon-bell icon-4x"></span> Technicise</li>
		<li><span class="icon-book icon-4x"></span> Personal</li>
		<li><span class="icon-asterisk icon-4x"></span> Exam</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
      </ul>
          </div>
         </div>
       
	   <div class="bs-example">
	   <legend id="Technicise-SD"><i class="icon-magic"></i>	Technicise-SD</legend>
      <div class="row">
        <ul class="bs-glyphicons">
		<li><i class="icon-camera-retro icon-4x"></i> Message</li>
		<li><span class="icon-camera icon-4x"></span> DICM</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
		<li><span class="icon-anchor icon-4x"></span> Movies </li>
		<li><span class="icon-bell icon-4x"></span> Technicise</li>
		<li><span class="icon-book icon-4x"></span> Personal</li>
		<li><span class="icon-asterisk icon-4x"></span> Exam</li>
		<li><span class="icon-download icon-4x"></span> Download</li>
		<li><span class="icon-dropbox icon-4x"></span> Music</li>
		<li><span class="icon-cloud-download icon-4x"></span> Document</li>
		<li><span class="icon-dashboard icon-4x"></span> Pics</li>
      </ul>
          </div>
         </div>
       
	   
	   </div>
         

    <!-- Footer
    ================================================== -->
    <footer class="bs-footer" role="contentinfo">
      <div class="container">
        <div class="bs-social">
  <ul class="bs-social-buttons">
   
  </ul>
</div>
   </div>
    </footer>
    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="http://platform.twitter.com/widgets.js"></script>
<script src="<?php echo base_url(); ?>assets/js/holder.js"></script>
<script src="<?php echo base_url(); ?>assets/js/application.js"></script>
<!-- Analytics
================================================== -->
<script>
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
  </body>
  </html>
