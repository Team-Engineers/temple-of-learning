<?php
//This script will handle login

session_start();


//check if the user is already logged in
if(isset($_SESSION['username'])){

    header("location: welcome.php");
    exit;
}

require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if($_SERVER['REQUEST_METHOD']== "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        // $username_err = "Please enter username + password";
        $err = "Please enter username + password";
    }
    else{
      $username =  trim($_POST['username']);
      $password =  trim($_POST['password']);
    }
if(empty($err)){
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn , $sql);
    mysqli_stmt_bind_param($stmt , "s" , $param_username);
    $param_username = $username;
    //Try to execute the query
    if(mysqli_stmt_execute($stmt)){
      mysqli_stmt_store_result($stmt);
      if(mysqli_stmt_num_rows($stmt)==1){
         mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password);
         if(mysqli_stmt_fetch($stmt)){
           if(password_verify($password , $hashed_password)){
             //this means the password is correct. Allow user to login
             session_start();
             $_SESSION["username"] = $username;
             $_SESSION["id"] = $id;
             $_SESSION["loggedin"] = true;

             //Redirect user to welcome page
             header("location: welcome.php");
           }
         }
      }
   
  }
}
}



?>



<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEMPLE OF LEARNING</title>
    <meta name="author" content="">  
     <meta name="title" content="Join tol for DU JAT Coaching, CLAT Entrance preparation, IPMAT Coaching">     
    <meta name="description" content="Join India's Leading UG Entrance Institute for CLAT, AILET, DU JAT, IIM IPM, BJMC, HM Entrance Preparation. Registrations open. ">
    <meta name="keywords" content="">
    
    <!-- xxx Favicon xxx -->    
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <!-- Core Css Stylesheets -->
    <link href="css/base.css" rel="stylesheet">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/navigation.css">
	 
	</head>
<body style="margin-block-start: 150px">

  <!-- Page loader Start -->
 
  <!-- Page loader End -->

  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'../connect.facebook.net/en_US/fbevents.js');
fbq('init', '453168211739049');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=453168211739049&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



<!-- Global site tag (gtag.js) - Google Ads: 680712135 -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-13136377-2"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-13136377-2');
</script>


<script async src="https://www.googletagmanager.com/gtag/js?id=AW-680712135"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'AW-680712135');
</script>

<style type="text/css">
@media(min-width: 100px) and (max-width: 991.99px) {

    #mobile_top {
        display: block !important;
        width: 100% !important;
        margin: 0 auto !important;
        padding: 5px;

    }

    #mobile_top td {
        width: 50%;
    }

}

@media (min-width: 1200px){
.container, .wipad {
     max-width: 1230px !important;
}
}
</style>


<!--minen  mine <div class="row" id="mobile_top" style="display: none; background: #103f6b !important; width: 100% !important;">

    <div class="col-6" style="text-align: right;float: right;">
        <a href="payonline.php" role="button" style="">
            <button
                style="color: #ffffff; border-radius: 4px; padding: 0.6rem 1rem; border:0; background: #fff; color:#103f6b; font-weight:bold;">Pay
                Online</button>
        </a>
    </div>
    <div class="col-6" style="">
        <a href="http://psis.toledu.com/" role="button" style="">
            <button
                style="color: #ffffff; border-radius: 4px; padding: 0.6rem 1rem; border:0; background: #fff; color:#103f6b; font-weight:bold;">PSIS
                Login</button>
        </a>
    </div>


</div> -->




<header class="fixed-top header-fullpage bordered-nav wow fadeInDowm"
    style="box-shadow: rgb(204, 204, 204) 2px 2px 3px 1px;">
    <!-- <div class="top-bar-right d-flex align-items-center text-md-left">
        <div class="container px-0">
            <div class="row align-items-center">
                <div class="col d-flex">
                    <marquee behavior="scroll" direction="left"
                        style="margin-top: 0px;margin-bottom: -19px; font-weight: 600;">
                        <p style=" color:white"><span style="   margin-left: 60px; font-size: 20px;">Registration Open
                                for 2022-23  Batches</span>
                        </p>
                    </marquee>
                </div>
                <div class="col-md-auto">

                    Topbar Language Dropdown Start
                    <div class="d-inline-flex request-btn ml-2">
                        <a class="btn-theme icon-left bg-white no-shadow d-none d-lg-inline-block align-self-center"
                            href="payonline.php" role="button" style=""> Pay Online</a>
                    </div>
                    Topbar Language Dropdown End

                    <div class="d-inline-flex request-btn ml-2">
                        <a class="btn-theme icon-left bg-white no-shadow d-none d-lg-inline-block align-self-center"
                            href="#" role="button" data-toggle="modal" data-target="#request_popup">
                            Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <!-- Main Navigation Start -->
    <section style="background-color: #fff;">
        <div class="container wipad">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm" style="padding-left:0; padding-right:0;">
                <a href="index.php">
                    <img src="images/tol.png" class="head-mob-log" style="padding: 8px 0px;">
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                    style="border-color: rgb(255, 255, 255) !important;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarContent" class="collapse navbar-collapse" style="justify-content: end;">
                    <ul class="navbar-nav text-right-align" >
                        <!-- <li class="nav-item"><a href="index.php" class="nav-link font-weight-bold text-uppercase"
                                style="color: #103f6b !important;">Home</a></li> -->
                        <li class="nav-item"><a href="about-us.php" class="nav-link font-weight-bold text-uppercase"
                                style="color: #ed5940 !important;">About</a></li>
                        <!-- Megamenu-->
                        <!-- <li class="nav-item dropdown megamenu"><a id="megamneu" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                                style="color: #103f6b !important;">PREP MODULES </a>
                            <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                                <div class="container text-right-align">
                                    <div class="row bg-white rounded-0 m-0 shadow-sm">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="p-2">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-2 mt-2">
                                                        <h6 class="font-weight-bold text-uppercase h6-st">CLASSROOM
                                                            PROGRAM</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item itam-st"><a
                                                                    href="two-year-casule-program-endurance.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> TWO YEAR PROGRAM</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a href="one-year-program-wizkid.php"
                                                               class="nav-link text-small pb-0 li-st "><span
                                                               class="dis-non">•</span> ONE YEAR PROGRAM</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a href="extended.php"
                                                               class="nav-link text-small pb-0 li-st "><span
                                                               class="dis-non">•</span> EXTENDED PROGRAM</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a href="retaker.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> Retaker Program</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a href="hybrid-programme.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> Hybrid Program</a></li>
                                                            <li class="nav-item itam-st"><a href="crash-course.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> Crash Course</a></li>
                                                            <li class="nav-item  itam-st"><a href="sat-intl-edu.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> SAT® preparation</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 mb-2 mt-2">
                                                        <h6 class="font-weight-bold text-uppercase h6-st">Correspondence Course</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item itam-st"><a
                                                                    href="Online-Study-Material/index.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> ONLINE STUDY MATERIAL
                                                                    DU JAT</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="Online-Study-Material-IIM/index.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> ONLINE STUDY MATERIAL
                                                                    IIM</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="Online-Study-Material-Law/index.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> ONLINE STUDY MATERIAL
                                                                    LaW</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 mb-2 mt-">
                                                        <h6 class="font-weight-bold text-uppercase h6-st">OTHER MODULES
                                                        </h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item itam-st"><a
                                                                    href="http://tolstudyabroad.com/"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> Application Guidance
                                                                </a></li>
                                                            <li class="nav-item itam-st"><a
                                                                href="http://tolstudyabroad.com/"
                                                                class="nav-link text-small pb-0  li-st "><span
                                                                    class="dis-non">•</span> SAT
                                                            </a></li>
                                                            <li class="nav-item itam-st"><a
                                                                href="http://tolstudyabroad.com/"
                                                                class="nav-link text-small pb-0  li-st "><span
                                                                    class="dis-non">•</span> GMAT
                                                            </a></li>
                                                            <li class="nav-item itam-st"><a href="index.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> Gold @ 18</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="counselling-devision.php"
                                                                    class="nav-link text-small pb-0  li-st "><span
                                                                        class="dis-non">•</span> Counseling Division</a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown megamenu"><a id="megamneu" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                                style="color: #ed5940 !important;">COURSES</a>
                            <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0 mx-5">
                                <div class="container text-right-align">
                                    <div class="row bg-white rounded-0 m-0 shadow-sm">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="p-2">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-2 mt-2">
                                                        <h6 class="font-weight-bold text-uppercase h6-st">MANAGEMENT
                                                        </h6>
                                                        <ul class="list-unstyled">
    <li class="nav-item itam-st"><a href="CUCET.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> CUCET</a></li>
    <li class="nav-item itam-st"><a href="university-of-delhi.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> DU JAT</a></li>
                                                            <li class="nav-item itam-st"><a href="iim-indore.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> IIM Indore, IPM</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a href="iim-rohtal.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> IIM Rohtak, IPM</a>
                                                            </li>
   <li class="nav-item itam-st"><a href="iim-bodh-gaya.php"
     class="nav-link text-small pb-0 li-st "><span
      class="dis-non">•</span> IIM Bodhgaya, IPM</a>
    </li>  
    <li class="nav-item itam-st"><a href="iim-ranchi.php"
     class="nav-link text-small pb-0 li-st "><span
      class="dis-non">•</span> IIM Ranchi, IPM</a>
    </li> 
     <li class="nav-item itam-st"><a href="iim-jammu.php"
     class="nav-link text-small pb-0 li-st "><span
      class="dis-non">•</span> IIM Jammu</a>
    </li>                                                         
                                                            <li class="nav-item itam-st"><a href="nmims(npat).php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> NMIMS(NPAT)</a></li>
                                                            <li class="nav-item itam-st"><a href="scm.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Symbiosis Center for
                                                                    Management</a></li>
                                                            <li class="nav-item itam-st"><a href="ip-university.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Indraprastha
                                                                    University</a></li>
                                                            <li class="nav-item itam-st"><a href="christ-university.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Christ University</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="jamia-millia-university.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Jamia Millia
                                                                    University</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="st-xaviers-college-mumbai.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> St Xavier’s College,
                                                                    Mumbai</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="devi-ahilya-vishwavidyalaya.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Others </a></li>
                                                            
                                                            

                                                        </ul>
                                                        <h6 class="font-weight-bold text-uppercase h6-st">Mass
                                                            Communication </h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item itam-st"><a href="ipcw-university.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> IPCW University </a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="delhi-university-ba-hons.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Delhi University
                                                                    BA(hons)</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="ip-university-bjmc.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> IP University
                                                                    (BJMC)</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="symbiosis-institute-of-media.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> SYMBIOSIS INSTITUTE</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a href="sxc-m-bmm.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> St Xavier’s College,
                                                                    Mumbai</a></li>
                                                            <li class="nav-item itam-st"><a href="sxc-m-bmm.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Others</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 mb-2 mt-2">
                                                        <h6 class="font-weight-bold text-uppercase h6-st">LAW</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item itam-st"><a href="clat.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> CLAT</a></li>
                                                            <li class="nav-item itam-st"><a href="nlud.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> National Law
                                                                    University, Delhi</a></li>
                                                            <li class="nav-item itam-st"><a href="ip-university-law.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> IP University Law</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="christ-university-law.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Christ University</a>
                                                            </li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="jamia-millia-islamia-law.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Jamia Millia
                                                                    Islamia</a></li>
                                                          
                                                            <li class="nav-item itam-st"><a
                                                                    href="nmims-school-of-law.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> NMIMS - School of
                                                                    Law</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="symbiosis-law-college.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Symbiosis Law
                                                                    College</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="symbiosis-law-college.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Others</a></li>
                                                            
                                                        
                                                           


                                                        </ul>
       <h6 class="font-weight-bold text-uppercase h6-st">Hotel
                                                            Management</h6>
        <ul class="list-unstyled">
          <li class="nav-item itam-st">
            <a href="nchmct.php"class="nav-link text-small pb-0 li-st ">
                <span class="dis-non">•</span> NCHMCT</a></li>
          <li class="nav-item itam-st">
            <a href="wgsha-manipal.php"class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> WGSHA, Manipal</a></li>
          <li class="nav-item itam-st">
            <a href="christ-university-hm.php"class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Christ University</a>
          </li>
          <li class="nav-item itam-st">
            <a href="gsiu-hm.php"class="nav-link text-small pb-0 li-st ">
                <span class="dis-non">•</span> Gobind Singh IP University</a></li>
         <li class="nav-item itam-st">
            <a href="ihm-aurangabad.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IHM , Aurangabad</a>
         </li>
         <li class="nav-item itam-st">
            <a href="ihm-aurangabad.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Others</a>
         </li>
         </ul>
              </div>
                                                    <div class="col-lg-4 mb-2 mt-2">
                                                        <h6 class="font-weight-bold text-uppercase h6-st">Bachelor of
                                                            Computer Applications</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="nav-item itam-st"><a href="ip-university-bca.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> IP University </a></li>
                                                            <li class="nav-item itam-st"><a href="sic-bca.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Symbiosis Institute of
                                                                    Computer</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="christ-university-bca.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Christ University</a>
                                                            </li>
                                                           
                                                            <li class="nav-item itam-st"><a
                                                                    href="jamia-millia-islamia-bca.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Jamia Millia
                                                                    Islamia</a></li>
                                                         
                                                            <li class="nav-item itam-st"><a
                                                                    href="banaras-hindu-university.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Others</a></li>
                                                        </ul>
                                                        <h6 class="font-weight-bold text-uppercase h6-st">B.Com</h6>
                                                        <ul class="list-unstyled">
                                                          
                                                            <li class="nav-item itam-st"><a
                                                                    href="ip-university-b-com.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> IP University</a></li>
                                                            <li class="nav-item itam-st"><a href="nmims-asmsc-b.com.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> NMIMS (ASMSC)</a></li>
                                                            <li class="nav-item itam-st"><a
                                                                    href="christ-university-b.com.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Christ University
                                                                    B.com</a></li>
                                                            <li class="nav-item itam-st"><a href="scac-pune-b.com.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Symbiosis College AC,
                                                                    Pune</a></li>
                                                            <li class="nav-item itam-st"><a href="scac-pune-b.com.php"
                                                                    class="nav-link text-small pb-0 li-st "><span
                                                                        class="dis-non">•</span> Others</a></li>
                                                            
                                                            
                                                        </ul>
                                                    
           <h6 class="font-weight-bold text-uppercase h6-st">PSYCHOLOGY</h6>
          <ul class="list-unstyled">
            <li class="nav-item itam-st">
            <a href="du-psychology.php"class="nav-link text-small pb-0 li-st ">
                <span class="dis-non">•</span> DU (Psychology) </a>
            </li>
          <li class="nav-item itam-st">
            <a href="christ-university-psychology.php"class="nav-link text-small pb-0 li-st ">
                <span class="dis-non">•</span> Christ University (Psychology) </a>
            </li>
          <li class="nav-item itam-st">
            <a href="jamia-milliaIslamia-university-psychology.php"class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> JamiaMilliaIslamia University (Psychology) </a>
         </li>
          <li class="nav-item itam-st">
            <a href="banaras-hindu-university-BHU-UET.php"class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Banaras Hindu University (BHU-UET) </a>
          </li>
          <li class="nav-item itam-st">
            <a href="mount-carmel-college-psychology.php"class="nav-link text-small pb-0 li-st ">
                <span class="dis-non">•</span> Mount Carmel College (Psychology) </a>
         </li>
         <li class="nav-item itam-st">
            <a href="aligarh-muslim-university-psychology.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Aligarh Muslim University (Psychology) </a>
         </li>
         <li class="nav-item itam-st">
            <a href="aligarh-muslim-university-psychology.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Others</a>
         </li>
        
        
         </ul>                                              
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="nav-item dropdown megamenu"><a id="megamneu" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                                style="color: #103f6b !important;">Results </a>
                            <div aria-labelledby="megamneu"
                                class="dropdown-menu border-0 p-0 m-0 result-drop text-right-align" style="">
                                <div class="">
                                    <div class=" bg-white rounded-0 m-0 shadow-sm">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="p-2">
                                                <div class="">
                                                    <div class="col-lg-12 mb-2 mt-2 ">

                                                        <ul class="list-unstyled">
     <li class="nav-item itam-st"><a href="result-2021.php"
       class="nav-link text-small pb-0 li-str "><span
       class="dis-non">•</span> Result 2021</a></li>                                                       
     <li class="nav-item itam-st"><a href="result-2020.php"
       class="nav-link text-small pb-0 li-str "><span
       class="dis-non">•</span> Result 2020</a></li>                                                         
                                                            <li class="nav-item itam-st"><a href="result-2019.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2019</a></li>
                                                            <li class="nav-item itam-st"><a href="result-2018.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2018</a></li>
                                                            <li class="nav-item itam-st"><a href="result-2017.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2017</a></li>
                                                            <li class="nav-item itam-st"><a href="result-2016.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2016</a></li>
                                                            <li class="nav-item itam-st"><a href="result-2015.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2015</a></li>
                                                            <li class="nav-item itam-st"><a href="result-2014.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2014</a></li>
                                                            <li class="nav-item itam-st"><a href="result-2013.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2013</a></li>
                                                            <li class="nav-item itam-st"><a href="result-2012.php"
                                                                    class="nav-link text-small pb-0 li-str "><span
                                                                        class="dis-non">•</span> Result 2012</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
      
                        <!-- <li class="nav-item"><a href="http://guidanceedge.com/"
                                class="nav-link font-weight-bold text-uppercase"
                                style="color: #103f6b !important;">Blog</a></li> -->
                        <li class="nav-item"><a href="contact-us.php" class="nav-link font-weight-bold text-uppercase"
                                style="color: #ed5940 !important;">Contact</a></li>
                        <!-- <li class="nav-item"><a href="career.php"
                                class="nav-link font-weight-bold text-uppercase"
                                style="color: #103f6b !important;">Career</a></li> -->
                        <li class="nav-item"><a href="register.php"
                                class="nav-link font-weight-bold text-uppercase"
                                style="color: #ed5940 !important;">Register</a></li>
                        <!-- <li class="nav-item"><a href="partners/index.php"
                                class="nav-link font-weight-bold text-uppercase"
                                style="color: #103f6b !important;">Partners</a></li> -->

                                
                    </ul>
                </div>
            </nav>
        </div>
        <div class="top-bar-right d-flex align-items-center text-md-left">
         <div class="container px-0">
             <div class="row align-items-center">
                 <div class="col d-flex">
                     <marquee behavior="scroll" direction="left"
                         style="margin-top: 0px;margin-bottom: -19px; font-weight: 600;">
                         <p style=" color:white"><span style="   margin-left: 60px; font-size: 20px;">Enroll Now
                                 for Crash Course </span>
                         </p>
                     </marquee>
                 </div>
                 <div class="col-md-auto">
    
                     <!-- Topbar Language Dropdown Start -->
                     <div class="d-inline-flex request-btn ml-2">
                         <a class="btn-theme icon-left bg-white no-shadow d-none d-lg-inline-block align-self-center"
                             href="payonline.php" role="button" style=""> Enroll Now</a>
                     </div>
                     <!-- Topbar Language Dropdown End -->
    
                     <div class="d-inline-flex request-btn ml-2">
                         <a class="btn-theme icon-left bg-white no-shadow d-none d-lg-inline-block align-self-center"
                             href="#" role="button" data-toggle="modal" data-target="#request_popup">
                             Connect with us</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    </section>
    
    <!-- Main Navigation End -->
</header> 

<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  

      <button type="submit"  class="btn btn-primary"><a href="register.php">Register</a></button>
    


</form>



</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>