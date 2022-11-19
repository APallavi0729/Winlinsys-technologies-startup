<?php include'dbconn.php'; 

if($_SERVER['REQUEST_METHOD']== 'POST'){
	$user_name = $_POST['user'];
	$user_email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	$existSql = "select * from `users` where email = '$user_email'"; 
	$result = mysqli_query($conn, $existSql);
	$numRows = mysqli_num_rows($result);
	if($numRows>0){
		echo"Email already exists..please choose other email.";
	}else{
		 
	if($pass == $cpass){
		//$hash = password_hash($pass, PASSWORD_DEFAULT);
		$sql = "INSERT INTO `users` (`user`, `email`, `pass`) VALUES ('$user_name', '$user_email', '$pass')";
    	$result = mysqli_query($conn, $sql);
		if($result){
		header("location: login.php");     
			 
		}
		
	}else{
		echo"Passwords do not match!";
		
	}	
		
	 } 
 }  
?>


<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resister with us - winlinsys</title>

   
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="style.css">
<meta name="robots" content="noindex, follow">

<style>
    body {
    font-size: 13px;
    line-height: 1.8;
    color: rgb(240, 205, 205);
    background: #797272;
    font-weight: 400;
    font-family: Poppins;
    display: block;
    margin: 8px;
}
#cont{
color: rgb(29, 28, 28);

font-size: medium;
    }
    .logo-container{
      position: absolute;
      padding-left: 0px;
      background: #e78585;
      float: left;
      line-height: 70px;
      text-transform: uppercase;
      font-weight: bold;
      font-size: xx-large;
    }
    .logo-container a, .logo-container a:visited{
  color: #fff;
  text-decoration: none;
    }
.main {
    background: #e78585;
    padding: 150px 0;
}
.signup {
    margin-bottom: 150px;
}
section {
    display: block;
}
.container {
    width: 700px;
    background: #fff;
    margin: 0 auto;
    box-shadow: 0 15px 16.83px 0.17px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 15px 16.83px .17px rgba(0,0,0,.05);
    -webkit-box-shadow: 0 15px 16.83px 0.17px rgb(0 0 0 / 5%);
    -o-box-shadow: 0 15px 16.83px .17px rgba(0,0,0,.05);
    -ms-box-shadow: 0 15px 16.83px .17px rgba(0,0,0,.05);
    border-radius: 20px;
    -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    -o-border-radius: 20px;
    -ms-border-radius: 20px;
}

.signup {
    margin-bottom: 150px;
}@media screen and (max-width: 1200px){
.container {
    width: calc( 100% - 30px);
    max-width: 100%;
}
}
@media screen and (max-width: 768px){
.signup-content, .signin-content {
    flex-direction: column;
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -o-flex-direction: column;
    -ms-flex-direction: column;
    justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -o-justify-content: center;
    -ms-justify-content: center;
}
#cont{
    color: rgb(29, 28, 28);

font-size: 22px;
    }
    .logo-container{
      position: absolute;
      padding-left: 0px;
      background: #e78585;
      float: left;
      line-height: 50px;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 30px;
    }
    .logo-container a, .logo-container a:visited{
  color: #fff;
  text-decoration: none;
    }
}






</style>

</head>
<body>
    <div class="logo-container">
        <a href="">Winlinsys<span id="cont">technologies</span></a>
      </div>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Resister your self</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="user"><i class="zmdi zmdi-account material-icons-user"></i></label>
                                <input type="text" name="user" id="user" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpass" id="cpass" placeholder="Repeat your password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register">
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
      


    <!-- JS -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="jquery.min.js"></script>
    <script src="js/main.js"></script>

<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon="{&quot;rayId&quot;:&quot;662d71d11d4f0ef4&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.5.2&quot;,&quot;si&quot;:10}"></script>

</body></html>