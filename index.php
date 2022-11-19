<?php
@$message = $_GET['message'];

?>
<?php
session_start();

 include'dbconn.php'; 

if($_SERVER['REQUEST_METHOD']== 'POST'){

	
	$name = $_POST['name'];
	

	$comment = $_POST['comment'];

$sql ="INSERT INTO `comments` (`name`,`comment`) VALUES ('$name', '$comment')";
    $result = mysqli_query($conn, $sql);
    if($result){
        
        echo "Data has been entered";
        }
        else{
        echo "Data not entered due to.....>" . mysqli_error($conn);
        }
 }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3DJEEZ7C4M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3DJEEZ7C4M');
</script>
  <title>Home page - winlinsys </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body,html{
      font-family: Arial, sans-serif;
      margin: 0px;
      padding: 0px;
      background-color: rgb(247, 222, 235);
    }
    .carousel-inner img {
    width: 100%;
    height: 5%;
  }
    .image-container img{
width: 100%;
max-height: 50px;
    }
    .navigation-bar-container{
      position: absolute;
      height: 70px;
      background: #262626;
   
      width: 100%;
      top: 0px;
      left: 0px;
      right: 0px;
    }
    #cont{
color: rgb(231, 35, 100);

font-size: medium;
    }
    .logo-container{
      position: absolute;
      padding-left: 70px;
      background: #262626;
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
    .dropdown {
 float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 22px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #af446d;
  color: white;
}

.dropdown-content a:hover {
    background-color: #af446d;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.h3{
  color: #af446d;

}
.h7{
  color: #af446d;
  padding-left: 90px;
}

    .nav-container{
      max-width: 1000px;
      margin: 0px auto;
    }
    .navbar{
      float:right;
    }
    .navbar ul{
      list-style: none;
      margin: 0px;
      padding: 0px;
      z-index: 9999;
    }
    .navbar ul li{
      float: left;
      position: relative;
    }
    .btn{
    padding: 2px 4px;
    margin: 5px 2px;
    border: 2px solid rgb(105, 104, 104);
    border-radius: 4px;

    color: rgb(255, 225, 225);
    cursor: pointer; 
    text-decoration: none;
 background: linear-gradient(to right, #e64875, #8b8787);
}
.btn-sm{
padding: 4px 10px;
vertical-align: middle;
}
.btn1{
  background-color: rgb(135, 135, 221);
  padding: 2px 4px;
  text-decoration: none;
}
.btn1 a{
  text-decoration: none;
  color: #fff;
}
.btn-dark{
   
    color: black;
    border:2px solid grey;
    }
    .navbar ul li a,  .navbar ul li a:visited{
display: block;
padding: 0px 20px;
line-height: 70px;
background: #262626;
color: #fff;
text-decoration: none;
    }
   .navbar ul li a:hover,  .navbar ul li a:visited:hover{
background: #af446d;
color: #fff;
   }
   .navbar ul li ul li{
     min-width: 100px;

   }
   .navbar ul li ul li a{
     padding: 15px;
     line-height: 20px;
   }

.search-container {
  float: left;
}

.search-container button {
  float: right;
padding-right: 20px;
  margin-top: 8px;
  margin-right: 16px;
  background: rgb(221, 107, 107);
  font-size: 17px;
 border: #af446d;
  cursor: pointer;
}

.navbar .search-container button:hover {
  background: rgb(126, 90, 90);
}
.text-footer{
    background: rgb(20, 20, 20);
    text-align: center;
padding: 30px 0;
font-family: 'Ubuntu', sans-serif ;
display: flex;
justify-content: center;
color: rgb(252, 101, 101);
}
.social-media__wrapper {
    margin: 0 auto;
    width: 90%;
    padding-left: 0;
    display: flex;
    text-align: right;
    max-width: 1600px;
}
.social-media__section {
    height: 48px;
    line-height: 48px;
    margin-top: 48px;
    padding: 0;
}
.social-media__link, .social-media__text {
    color: #000;
    margin-right: 16px;
}

.phone-no {
    list-style-image: url(../images/icon_phone.png);
}
#section-03 {
    border-top: 2px solid #666565;
    background: rgb(20, 20, 20);
    padding: 30px 0 20px 0;
    color: #fff;
    font-size: 12px;
}
.row{
text-align: left;

}
.navbar .icon {
  display: none;
}
.raw{
  padding-left: 90px;
  padding-right: 80px;
}

.p{
padding-left: 90px;
padding-right: 90px;
}

#x{
  float: left;

 border-color: grey;

  margin:  25px 35px 40px;
  border-radius: 50%;
}
#e{
  float: left;

 border-color: grey;

  margin:  25px 35px 40px;
  border-radius: 40%;
}
#on{
  float: right;
  text-align: right;
align-items: right;

}
.f{
padding-left: 90px;
padding-right: 80px;
}
.nav-container a:hover, .nav-container a:focus {
  color: #f1f1f1;
}


@media only screen and (max-width:700px){
  .f{
padding-left: 5px;
padding-right: 5px;
}
.nav-container .closebtn {

  position: absolute;
  float: right;
  text-align: right;
align-items: right;

  font-size: 30px;


}
.p{
  padding-left: 25px;
  padding-right: 15px;
}

  .h3{
  color: #af446d;
  padding-left: 5px;
  padding-right: 5px;
}
.h7{
  color: #af446d;
  padding-left: 25px;
  padding-right: 15px;
}
  .raw{
  padding-left: 25px;
  padding-right: 15px;

}



    #on{
  float: right;
  text-align: right;
  padding-top: 7px;
  padding-right: 2px;
align-items: right;
background-color:rgb(231, 35, 100);
color: #fff;


}
    .nav-container {
 
  height: 100%;

  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;

  background-color: rgb(0,0,0);

  overflow-x: hidden;
  transition: 0.5s;
}

    .navbar {
 
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;

 
}

.nav-container a {  

  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #c56464;
  display: block;
  transition: 0.3s;
}
#cont{
color: rgb(231, 35, 100);

font-size: small;
    }
.nav-container a:hover, .nav-container a:focus {
  color: #f1f1f1;
}
.nav-container .closebtn {
  position: absolute;
  float: right;
  text-align: right;
align-items: right;

  font-size: 60px;
}
.logo-container a, .logo-container a:visited{
  color: #fff;
  text-decoration: none;
    }
    .logo-container{
  font-weight: bold;
      font-size: 24px;
      padding-left: 10px;
      padding-top: 15px;
      line-height: 30px;
}
 
 

  .carousel-content {

  display: none;

   }
  .carousel-item{
    display: none;
  }
  .section-03{
    font-size: 10px;
}
.carousel-inner img{
  display: none;
  }
  .nav-container a {font-size: 20px}
  .nav-container .closebtn {
  font-size: 40px;
  top: 15px;
  float: right;
  text-align: right;
align-items: right;
  right: 35px;
  }
  .social-media__wrapper {
    margin: 0 auto;
    width: 90%;
    padding-left: 0px;
    padding-right: 0px;
    display: flex;
    text-align: right;
    max-width: 1600px;
}
#e{
  float: left;

 border-color: grey;
 padding-left: 0px;
  padding-right: 0px;
  margin:  25px 35px 40px;
  border-radius: 40%;
}
#x{
  float: left;

 border-color: grey;
 padding-left: 0px;
  padding-right: 0px;
  margin:  25px 35px 40px;
  border-radius: 50%;
}
}

#form{
  width:300px;
}



  </style>
</head>
<body>


  <div class="navigation-bar-container">
    <div class="logo-container">
        <a href=""class="active">WINLINsys<span id="cont">technologies</span></a>
      </div>
    <span style="font-size:30px;cursor:pointer" id="on" onclick="openNav()">&#9776;</span>
    <div class="nav-container"id="myNav-container">
    

      <div class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li> <a href="services.php">Deskside</a></li>
          <li><a href="windows.php">Windows</a></li>
          <li><a href="linux.php">Linux</a></li></ul>
       <a href="login.php"><button class="btn btn-sm">Login</button></a>
      
   
    </div>    
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
  </div>
  <script>
    function openNav() {
      document.getElementById("myNav-container").style.width = "100%";
    }
    
    function closeNav() {
      document.getElementById("myNav-container").style.width = "0%";
    }
    </script>
    
  
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="raw">
     
      <div class="h3"><h3>Let's Grow Together!</h3></div>
      <p>Dear Aspirants!!</p>

<p>  You have landed on a great Institute's Webpage which takes you to your desired heights,We are here to provide you not only Trainings but we also guide you towards right way to success .
        Come join Us to enhance your career and ineterest in Information Technology world.
        Welcome to our Esteemed organization which is full of Excitement,learning,Growth and Joy of Growing everyday.......Let's Grow Tohether,Happy Learning.
        
   </p>

</div>
<br>
<br>
<div class="h7"><h3>Courses offered :-</h3></div>
<br>
 <div class="container">
  <div class="row">
    <div class="col-sm-4">

      <video width="320" height="240" autoplay muted>
              <source src="first.mp4" type="video/mp4">
      </video>
      <div class="h3"> <h3> Windows</h3></div>
      Microsoft windows provides larger scope of server administaration and features,Our Experienced Trainers will provide you basic to deep ideas and practical sessions of Windows Server Administartion.
      An administarator's Day to Day activities,The stake holders during various activities and the responsibilty of admin will be explained in  the way that feels like you are working in real time Environment
      <button class = "btn"><a style="color: white; text-decoration: none;" href="windows.php">Topics Covered </a></button>
      <button class="btn"><a style="color: white; text-decoration: none;" href="wquiz.html">exam</a></button> 
    </div>
    <div class="col-sm-4">
      <video width="320" height="240" autoplay muted>
         <source src="first1.mp4" type="video/mp4">
      </video>
      <div class="h3"> <h3>Linux</h3></div>
      <p>Linux Server OS are based on UNIX and are secure and fast enough to handle any kind of server hosting requirements.We at WINLINSYSsys are commited to provide All about RHEL/Centos and basic idea about Other Distros to preapare our Trainees compatible with Environment,You may learn linux easily with us wheteher you are a fresher are well experienced.</p>
      <button class = "btn"><a style="color: white; text-decoration: none;" href="linux.php">Topics Covered </a></button>
      <button class="btn"><a style="color: white; text-decoration: none;" href="wquiz.html">exam</a></button> 
    </div>
    <div class="col-sm-4">
      <video width="320" height="240" autoplay muted>
             <source src="first2.mp4" type="video/mp4">
      </video>
      <div class="h3"><h3>Deskside Support</h3></div>
      <p>
Wanna Switch to IT or still searching a place in the rapidly growing industry ,We are here to enable you enter into IT field being a desktop Support or remote suport Engineer.Our trainers will definitely make you ready to get in.</p>
<button class = "btn"><a style="color: white; text-decoration: none;" href="services.php">Topics Covered </a></button>
<button class="btn"><a style="color: white; text-decoration: none;" href="wquiz.html">exam</a></button> 
</div>
  </div>
</div>

<br>
<br>
<div class="p">
<div class="h3"><h3>Services Available at Winlinsys-</h3></div>
<p>
  We are here to train the professionals as well as freshers,aside we also provide other services to get you dream Job easily-
  </p></div>
    <br>
    

 <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img src="resume.png" width="320" height="240">
      <div class="h3"> <h3>Resume building-</h3></div>
     <p> 
      A resume says all about your educational ,personal and technicaal experience details.When it comes to Job Search,your resume plays a crucial role and it is hard to prepare an attarctive and detailed Resume.This worry  is is over with us,we help to build resume as per your domain with our expert team and help you to get shortlisted as soon as possible.
      
 </p>
         
    </div>
    <div class="col-sm-4">
 
        <img src="hr.png" width="320" height="240">

      <div class="h3"> <h3>  Referral to companies-</h3></div>
      <p>
        We are also supporting our aspirants by reffering them to few of oragnisations we are in touch with,If we get info about vacancies.
        
    </p>
    </div>

    <div class="col-sm-4">
      <img src="mock.png" width="320" height="240">
      <div class="h3"><h3>Mock Interview-</h3></div>
      <p>
        We have senior resources with us who have been involved in attending and taking multiple interviews of experienced and fresher candidates,the are surely going to help out trainees to be preapred for real interviews by attending mock interviews with our experts.Your Attempts will show us your potential and tendency of getting the job quicker.
        
   </p>
</div>
  </div>
</div>
<br>

<br>

<p><img src="team.jpg" style="width:250px" id="x">
  <br>
  <br><div class="p">
<div class="h3"> <h4>Professional Etiquette behaviorol Training-</h4></div>
 
As we know ,technical candidates are measured not only on the basis of knowledge but on the communication skills also, hence we have decided to take few classes of professional communication and Etiquettes.We want to make sure that our trainess remain no longer jobless after finishing our training.
      </p>
    </div>
    <br>
    <br>
    <br>
    <div class="f">
<p><img src="ceo1.png" style="width:200px" id="e">
 <br>
 <br>
 <div class="h3"> <h4>Winlinsys's CEO</h4></div>
 
 Meet our CEO Ms Pallavi Bharadwaj who is very agressively taking our institute ahead in the market of competetion ,Also she has been motivating us to enable our tarinees in their motive.
 Pallavi is an young enterpraneur who has dreamed about WinlinSys,She is the key of our contant growth.
 </p>
 </div>
</div>
<br>
<br>
<br>
<br>
<section class="arange">
    <div class="container">
    
          
    <div class="h3">Leave a comment </div>

      <div class="demo" style="border-radius:10px; box-shdow:0px 0px 0px 0px;"> </div>
                  <div class="comment_input" style="border-radius:10px; box-shdow:0px 0px 0px 0px;">
             
        
              
               

           
                <form method="POST" id="form">
                    <div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="name" class="form-control"required> </div>
                 
                    <div class="form-group">
                      <label for="comment">Message</label> <textarea name="comment" id="comment" comment cols="10" rows="5" class="form-control" style="background-color: rgb(172, 163, 163);"required></textarea>
                    </div>

                   
                   
                    <div class="form-group"> <input type="submit" id="submit" class="btn"value="Submit"></button> </div>
                </form>
               

<div id="comment_logs">

<?php
require("logs.php");
echo"<span style='color:red;'>$message</span>";
?>
</div>
<script>
$(document).ready(function(){
$('#form').submit(function(){
    $.ajax({
type : 'POST';
url: "insert.php";
data : {
    name :$('#name').val(),
comments : $('#comment').val(),
},
dataType : 'json',
success : function(result){
    //consoloe.log(result);
    if(result.success){
        $('#demo').html('<div style = color: green>' +result.message+'</div>');
        window.location.href = '';
    } else{
        $('#demo').html('<div style= color:red>**'+result.message+'</div>');
    }
  }
  )};
  return false;

    });
});

</script>
</div>
            </div>
 </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="social-media__wrapper x-hidden-focus">
    <span id="social-media-header" class="social-media__text x-hidden-focus">Also Follow Us...</span>
    <a id="social-media-linkedin" class="social-media__link" href="https://www.linkedin.com/in/winlinsys-technologies-946508215" aria-label="Linkedin" title="Linkedin">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/linkedin-hc-77fefd2418.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/linkedin-refresh-02734a460c.png">
        </picture>
    </a>
    <a id="social-media-facebook" class="social-media__link" href="" aria-label="Facebook" title="Facebook">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/facebook-hc-b6ac21c866.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/facebook-refresh-090a700c0f.png">
        </picture>
    </a>
    <a id="social-media-twitter" class="social-media__link" href="http://Twitter.com/winlinsys" aria-label="Twitter" title="Twitter">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/twitter-hc-e34f4d31bc.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/twitter-refresh-93ca1a80ff.png">
        </picture>
    </a>
    <a id="social-media-instagram" class="social-media__link" href="https://www.instagram.com/winlinsys?r=nametag" aria-label="Instagram" title="Instagram">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/instagram-hc-9fd0f4b194.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/instagram-refresh-5d315a943e.png">
        </picture>
    </a>
    <a id="social-media-office-blogs-link" class="social-media__link" href="" aria-label="Office blogs" title="Office blogs">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/blog-hc-bcc394c1aa.png">
            <img class="social-media__link--image x-hidden-focus" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/blog-33305b0d90.png">
        </picture>
    </a>
</div>
</div>
<br>
              <br>
              <div id="section-03">
                <div class="container1">
                    <div class="row">
                       
                      
                        <div class="col-md-3 position-9 sep-vertical">
                            <div class="module-head">
                              <p>  Contact Us</p></div>
                            <div class="module-context AddressInfo">
                               <p> <ul>
                                    <li class="add-ho">WINLINsys technology<br>
                                       Bangalore,<br>
                                     Karnataka<br>
                                     </li>
                                    <li class="phone-ho">0755 - 2734913, Fax No. : 0755 - 2742006</li>
                                    <li class="email-ho">winlintechno@gmail.com</li>
                                </ul>
                              </p>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
        
                </div>
        
           
    <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2021-2025 winlinsystech.000webhostapp.com/- All rights reserved
        </p>
    </footer>


  
</body>
</html>