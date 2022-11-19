<?php

session_start();


require_once "dbconn.php";
$user_email = $pass = "";
$err = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(empty(trim($_POST['email'])) || empty(trim($_POST['pass'])))
{
  $err = "please enter email + pass";
}
if(empty($err)){
    $Sql = "select id, email, pass from users where email = ?"; 
   
                if(password_verify($pass,$pass))
                {
                    session_start();
                    $_SESSION["email"] = $user_email;
                    $_SESSION["id"] = $id;
                    $_SESSION["loggedin"] = true;

                    header('location: index.php');

                }
            }
 
}

?>

<?php include'dbconn.php'; 

if($_SERVER['REQUEST_METHOD']== 'POST'){

	$user_email = $_POST['email'];
	$pass = $_POST['pass'];

	$existSql = "select * from `users` where email = '$user_email'"; 
	$result = mysqli_query($conn, $existSql);
	$numRows = mysqli_num_rows($result);
	if($numRows==1){
		$row = mysqli_fetch_assoc($result);
	
			//if(password_verify($user_pass, $hash)){
				$_SESSION['loggedin'] = true;
				$_SESSION['S.no'] = $row['S.no'];
				$_SESSION['email'] = $user_email;
				header('location:index.php');
				
			}else{
				echo"Incorrect password";
			}
		}else{
		echo"Incorrect email";}
		

?>



<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to winlinsys</title>
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-3DJEEZ7C4M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3DJEEZ7C4M');
</script>
   
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

 <!-- Sing in  Form -->
 <section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="signin-image.jpg" alt="sing up image"></figure>
                <a href="sinnew.php" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Log in</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-email"></i></label>
                        <input type="text" name="email" id="email" placeholder="email id">
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="pass" name="pass" id="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="http://Twitter.com/winlinsys"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


      


  </div>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="jquery.min.js"></script>
    <script src="js/main.js"></script>

<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon="{&quot;rayId&quot;:&quot;662d71d11d4f0ef4&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.5.2&quot;,&quot;si&quot;:10}"></script>

</body></html>