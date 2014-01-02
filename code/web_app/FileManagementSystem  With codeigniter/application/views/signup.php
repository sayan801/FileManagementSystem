<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

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
			
			var c=document.getElementById("con_password").value;
			var d=document.getElementById("hints").value;
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
if(c=="")
{
alert("Please fill confirm password");
return false;
}
if(b!=c)
{
alert("Password and confirm password should be match");
return false;
}

if(d=="")
{
alert("Please fill hints ");
return false;
}


return true;		 
 } 
</script>

  </head>

 
<body>

    <div class="container" >

      <form class="form-signin" name="sign_up" method="post" action="<?php echo base_url(); ?>index.php?/signup/save_order"  onsubmit="return chkval();">
        <h2 class="form-signin-heading">Please sign up</h2>
		<h5 class="form-signin-heading">User name/Email</h5>
        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="User name/Email address" autofocus>
		<h5 class="form-signin-heading">Password</h5>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
		<h5 class="form-signin-heading">Confirm Password</h5>
        <input type="password" name="con_password" id="con_password" class="form-control" placeholder="Password">
		<h5 class="form-signin-heading">Password Hints</h5>
        <input type="text" name="hints" id="hints"class="form-control" placeholder="Password Hints" autofocus>
             <p><input type="submit" value="Sign up" /></p>
      </form>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
