<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Document</title>
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
      background-color: rgba(199, 198, 198, 0.808);
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
  font-size: 30;

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
    padding: 8px 20px;
    margin: 7px 3px;
    border: 2px solid rgb(105, 104, 104);
    border-radius: 8px;

    color: rgb(255, 225, 225);
    cursor: pointer; 
    text-decoration: none;
 background: linear-gradient(to right, #e64875, #8b8787);
}
.btn-sm{
padding: 6px 10px;
vertical-align: middle;
}
.btn1{
  background-color: rgb(135, 135, 221);
  padding: 0px 20px;
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
}
#x{
  float: left;

 border-color: grey;

  margin:  25px 35px 40px;
  border-radius: 50%;
}
.p{
padding-left: 90px;
padding-right: 90px;
}


.h5{
font-size: 36px;
text-align: center;
align-items: center;
}
#h2{
  font-size: 28px;
  color: #e64875;
}

#on{
  float: right;
  text-align: right;
align-items: right;

}

.nav-container a:hover, .nav-container a:focus {
  color: #f1f1f1;
}
#y{
    padding-left: 100px;
}

@media only screen and (max-width:700px){
    .h5{
font-size: 26px;
text-align: center;
align-items: center;
}
#h2{
  font-size: 16px;
  color: #e64875;
}
  #x{
  float: left;

 border-color: grey;
 padding-left: 0px;
  padding-right: 0px;
  margin:  25px 35px 40px;
  border-radius: 50%;
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
    font-size: 20px;
  color: #af446d;

  padding-left: 2px;
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
#y{
    font-size: 20px;
    padding-right: 5px;
    padding-left: 5px;
}
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

<div class="h5">Linux<span id="h2">'syllabus</span></div>
<hr>
<hr>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">

      <div class="h3">  Introduction to Linux</div>
     <ul>
        <li>	What is Linux</li>
        <li>	Why Linux</li>
        <li>	Difference between Linux and Windows OS</li>
        <li>	What is kernel</li>
        <li> Boot process        </li>	
     <li> GNU</li>
    </ul>
  
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">Login Options</div>
      <p><ul>
        <li>	Console Logon</li>
        <li> 	Controlling Console Login</li>
        <li> 	Virtual Consoles</li>
        <li>	Serial Login</li>
        <li>	 	Remote Login        </li>	
        
     <li> 	ssh Login</li>
    </ul></p>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">Building a Custom Linux Kernel</div>
      <ul>
        <li>	Kernel Versions </li>
        <li>		Kernel Source Files</li>
        <li>	Kernel Patch Files</li>
        <li> 	Kernel Configuration</li>
        <li>		Kernel Building     </li>	
     <li>	Testing a New Kernel</li>
     <li> 	Kernel Panic</li>
    </ul>
 </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">

      <div class="h3">  The Linux Filesystem</div>
      <ul>
        <li>	Partition Types </li>
        <li>	 	Filesystem Types</li>
        <li> 	Mounting</li>
        <li>	Auto mount</li>
        <li>	 	File Types    </li>	
     <li>	File Security</li>
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3"> Key Filesystem Locations</div>
      <ul>
        <li>	Boot Files</li>
        <li>	  	User Files</li>
        <li> 	Administrator Files</li>
        <li> 	Configuration Files</li>
        <li>	 	Log Files   </li>	
     
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">The /proc Pseudo Filesystem</div>
      <ul>
        <li>	Process Info</li>
        <li>		Kernel Config Info</li>
        <li>	Hardware Info</li>
        <li>	Changing /proc Info</li>
        <li>	 	Sysctl    </li>	
    </ul>
   
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">

      <div class="h3">  BASH – Borne Again Shell</div>
      <ul>
        <li>	Key /bin Commands</li>
         
        <li>	  	Key /sbin Commands</li>
        <li> 	History</li>
        <li>	man and info</li>
        <li>	 	vi   </li>	
     <li>	Using Shell Scripts</li>
     
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">User Management</div>
      <ul>
        <li>	Users and Groups</li>
        
        <li>	  	Home Directories</li>
        <li>  	Password Files</li>
        <li> 	PAM</li>
        <li>	 	Quotas  </li>	
     <li>  	NIS Intro</li>
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">Software Management</div>
      <ul>
        <li>	tar Files</li>
         <li>	  	Patch management</li>
        <li>  	Yum</li>
        <li> 	PAM</li>
        <li>	 	Repository  </li>	
     <li>  	RPM</li>
    </ul>
   
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">

      <div class="h3">  Hardware Management</div>
      <ul>
        <li>	Types of Devices </li>
        <li>	    	/dev Namespace</li>
        <li>   	Modules</li>
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3"> Network Management</div>
      <ul>
        <li>	Types of Network Devices </li> 
        <li>	  	Monitoring Network Devices</li>
        <li> 	Controlling Network Services</li>
        <li> 	Firewall</li>
        <li>	        	SELINUX  </li>	
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">Network Services – Part I</div>
      <ul>
        <li>	DHCP </li>
        <li>	    	DNS</li>
        <li>    	SSH</li>
    </ul>
         
   
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">

      <div class="h3">  Network Services – Part II</div>
      <ul>
        <li>	FTP </li>
        <li>	  	NFS </li>
        <li>    	Samba</li>
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">Network Services – Part III</div>
      <ul>
        <li>  	Sendmail </li>
        <li>	 	Apache </li>
        <li>    	Squid Proxy Server</li>
    </ul>
         
    </div>
    
  </div>
</div>
<br>
<p><div id="y">Little bit of explanation...</div></p>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">

      <div class="h3">  What is Linux?</div>
      <ul>
        <li> 	Linux is an open source operating system</li> 
            <li>	It is a family of open-source Unix-like operating systems based on the Linux kernel</li>
    </ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">  When Linux was came into picture?</div>
     <ul><li>An operating system kernel first released on September 17, 1991</li></ul>
         
    </div>
    <div class="col-sm-4">
     
      <div class="h3">Who introduced Linux?</div>
      <img src="data:image/jpeg;base64,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"height="50%"width="30%">
<h style="color:rgb(34, 34, 61);">   <ul>      <li>Linus Torvalds.  </li>  </ul></h>
         
   
    </div>
  </div>
</div>






    <br>
    <br>
<br>
<br>
<div class="social-media__wrapper x-hidden-focus">
    <span id="social-media-header" class="social-media__text x-hidden-focus">Also Follow Us...</span>
    <a id="social-media-linkedin" class="social-media__link" href="https://www.instagram.com/winlinsys?r=nametag" aria-label="Linkedin" title="Linkedin">
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

        
           
    <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2021-2025 winlintech.000webhostapp.com- All rights reserved
        </p>
    </footer>


  
</body>
</html>