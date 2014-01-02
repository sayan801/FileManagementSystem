<?php extract($_POST);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript" language="javascript">
		 function chkval()

		 {

		 	var a=document.getElementById("user_name").value; 
		
			var b=document.getElementById("password").value;
if(a=="")
{
alert("Please fill User Name");
return false;

}
if(b=="")
{
alert("Please fill password");
return false;
}

return true;		 
 } 
</script>

	
  </head>

  <body>

    <div class="container">

      <form class="form-signin" name="sign_in" method="post" action="<?php echo base_url(); ?>index.php?/signin/login" onsubmit="return chkval();">
        <h2 class="form-signin-heading">Please sign in</h2>
		<h5 class="form-signin-heading"><?php //if($msg==1){echo $msg;}?></h5>
        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Email address" autofocus>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <!--<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <p><input type="submit" value="Submit"> </p>
<p>New user!!&nbsp;<a href="<?php echo base_url(); ?>index.php?/signup">Sign up</a></p>
		</form>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
