<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.examveda.com/css/new-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">


<link href="css/base.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=Open+Sans:wght@400;700&family=Roboto:ital,wght@0,900;1,400&display=swap" rel="stylesheet">

    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

    <title>Temple of learning</title>
  </head>
  <body>
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
                        <li class="nav-item"><a href="logout.php" class="nav-link font-weight-bold text-uppercase"
                                style="color: #ed5940 !important;">Logout</a></li>
                        
                                
                      
                                <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="welcome.php"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>
                                
                    </ul>
                </div>
            </nav>
        </div>
       
    </section>
    
    <!-- Main Navigation End -->
</header> 
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Temple of learning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="test.php">Practice Questions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     

      
     
    </ul> -->

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>




              <article class="question single-question question-type-normal" style="margin-top: 100px;">
      <div class="row">
      <div class="col-xs-12" id="save_alert_760" style="display:none;">
      </div>
      </div>
      <h2><div class="question-number">1. </div><div class="question-main">Which one of the following numbers can be removed from the set S = {0, 2, 4, 5, 9} without changing the average of set S?</div>
      </h2>
      <div class="question-inner">
      <div class="form-style form-style-3">
      <div class="form-inputs clearfix question-options">
      <p>
      <label class="color" for="poll-760-1">A. </label>
      <input type="radio" name="poll-radio-760" id="poll-760-1">
      <label for="poll-760-1">0</label>
      </p>
      <p>
      <label for="poll-760-2">B. </label>
      <input type="radio" name="poll-radio-760" id="poll-760-2">
      <label for="poll-760-2">2</label>
      </p>
      <p>
      <label for="poll-760-3">C. </label>
      <input type="radio" name="poll-radio-760" id="poll-760-3">
      <label for="poll-760-3">4</label>
      </p>
      <p>
      <label for="poll-760-4">D. </label>
      <input type="radio" name="poll-radio-760" id="poll-760-4">
      <label for="poll-760-4">5</label>
      </p>
      <p class="hidden">
      <input type="hidden" id="answer_760" value="3" />
      </p>
      </div>
      </div>
      </div>
      <div class="question-bottom">
      <a href="javascript:void(0);" class="box">Answer & Solution</a>
      </div>
      <div class="row answer_container" style="display:none;">
      <div class="col-md-offset-1 col-md-10">
      <div class="page-content">
      <div class="boxedtitle page-title">
      <h2 class="t_left">Answer & Solution</h2>
      </div>
      <div><span class="color">Answer:</span><strong> Option C</strong> </div>
      <div>
      <div><span class="color">Solution: </span></div>
      The average of the elements in the original set S is:<br>
      $$\eqalign{
      & \frac{{0 + 2 + 4 + 5 + 9}}{5} \cr
      & = \frac{{20}}{5} \cr
      & = 4 \cr} $$</br>
      If we remove an element that equals the average, then the average of the new set will remain unchanged. The new set after removing 4 is {0, 2, 5, 9}.</br>
      The average of the elements is,</br>
      $$\eqalign{
      & \frac{{0 + 2 + 5 + 9}}{4} \cr
      & = \frac{{16}}{4} \cr
      & = 4 \cr} $$
      </div>
      </div>
      </div>
      </div>
      </article>
      <article class="question single-question question-type-normal">
      <div class="row">
      <div class="col-xs-12" id="save_alert_761" style="display:none;">
      </div>
      </div>
      <h2><div class="question-number">2. </div><div class="question-main">Average cost of 5 apples and 4 mangoes is Rs. 36. The average cost of 7 apples and 8 mangoes is Rs. 48. Find the total cost of 24 apples and 24 mangoes.</div>
      </h2>
      <div class="question-inner">
      <div class="form-style form-style-3">
      <div class="form-inputs clearfix question-options">
      <p>
      <label class="color" for="poll-761-1">A. </label>
      <input type="radio" name="poll-radio-761" id="poll-761-1">
      <label for="poll-761-1">1044</label>
      </p>
      <p>
      <label for="poll-761-2">B. </label>
      <input type="radio" name="poll-radio-761" id="poll-761-2">
      <label for="poll-761-2">2088</label>
      </p>
      <p>
      <label for="poll-761-3">C. </label>
      <input type="radio" name="poll-radio-761" id="poll-761-3">
      <label for="poll-761-3">720</label>
      </p>
      <p>
      <label for="poll-761-4">D. </label>
      <input type="radio" name="poll-radio-761" id="poll-761-4">
      <label for="poll-761-4">3240</label>
      </p>
      <p class="hidden">
      <input type="hidden" id="answer_761" value="2" />
      </p>
      </div>
      </div>
      </div>
      <div class="question-bottom">
      <a href="javascript:void(0);" class="box">Answer & Solution</a>
      </div>
      <div class="row answer_container" style="display:none;">
      <div class="col-md-offset-1 col-md-10">
      <div class="page-content">
      <div class="boxedtitle page-title">
      <h2 class="t_left">Answer & Solution</h2>
      </div>
      <div><span class="color">Answer:</span><strong> Option B</strong> </div>
      <div>
      <div><span class="color">Solution: </span></div>
      Average cost of 5 apples and 4 mangoes = Rs. 36</br>
      Total cost = 36 × 9 = 324</br>
      Average cost of 7 apples and 8 mangoes = 48</br>
      Total cost = 48 × 15 = 720</br>
      Total cost of 12 apples and 12 mangoes = 324 + 720 = 1044</br>
      Therefore, cost of 24 apples and 24 mangoes = 1044 × 2 = 2088</p>
      </div>
      </div>
      </div>
      </div>
      </article>
      <article class="question single-question question-type-normal">
      <div class="row">
      <div class="col-xs-12" id="save_alert_762" style="display:none;">
      </div>
      </div>
      <h2><div class="question-number">3. </div><div class="question-main">The average weight of three boys A, B and C is $$\frac{{163}}{3}$$ kg, while the average weight of three boys B, D and E is 53 kg. What is the average weight of A, B, C, D and E?</div>
      </h2>
      <div class="question-inner">
      <div class="form-style form-style-3">
      <div class="form-inputs clearfix question-options">
      <p>
      <label class="color" for="poll-762-1">A. </label>
      <input type="radio" name="poll-radio-762" id="poll-762-1">
      <label for="poll-762-1">52.4 kg</label>
      </p>
      <p>
      <label for="poll-762-2">B. </label>
      <input type="radio" name="poll-radio-762" id="poll-762-2">
      <label for="poll-762-2">53.2 kg</label>
      </p>
      <p>
      <label for="poll-762-3">C. </label>
      <input type="radio" name="poll-radio-762" id="poll-762-3">
      <label for="poll-762-3"> 53.8 kg</label>
      </p>
      <p>
      <label for="poll-762-4">D. </label>
      <input type="radio" name="poll-radio-762" id="poll-762-4">
      <label for="poll-762-4">Data inadequate</label>
      </p>
      <p class="hidden">
      <input type="hidden" id="answer_762" value="4" />
      </p>
      </div>
      </div>
      </div>
      <div class="question-bottom">
      <a href="javascript:void(0);" class="box">Answer & Solution</a>
      </div>
      <div class="row answer_container" style="display:none;">
      <div class="col-md-offset-1 col-md-10">
      <div class="page-content">
      <div class="boxedtitle page-title">
      <h2 class="t_left">Answer & Solution</h2>
      </div>
      <div><span class="color">Answer:</span><strong> Option D</strong> </div>
      <div>
      <div><span class="color">Solution: </span></div>
      In this question, sum of numbers is provided, net required sum (i.e. A + B+ C+ D + E) cannot be calculated by the given data.</br>
      Therefore the answer is Data inadequate.
      </div>
      </div>
      </div>
      </div>
      </article>
      <article class="question single-question question-type-normal">
<div class="row">
<div class="col-xs-12" id="save_alert_765" style="display:none;">
</div>
</div>
<h2><div class="question-number">4. </div><div class="question-main">Average of ten positive numbers is x. If each number is increased by 10%, then x :</div>
</h2>
<div class="question-inner">
<div class="form-style form-style-3">
<div class="form-inputs clearfix question-options">
<p>
<label class="color" for="poll-765-1">A. </label>
<input type="radio" name="poll-radio-765" id="poll-765-1">
<label for="poll-765-1">remains unchanged</label>
</p>
<p>
<label for="poll-765-2">B. </label>
<input type="radio" name="poll-radio-765" id="poll-765-2">
<label for="poll-765-2">may decrease</label>
</p>
<p>
<label for="poll-765-3">C. </label>
<input type="radio" name="poll-radio-765" id="poll-765-3">
<label for="poll-765-3">may increase</label>
</p>
<p>
<label for="poll-765-4">D. </label>
<input type="radio" name="poll-radio-765" id="poll-765-4">
<label for="poll-765-4">is increased by 10%</label>
</p>
<p class="hidden">
<input type="hidden" id="answer_765" value="4" />
</p>
</div>
</div>
</div>
<div class="question-bottom">
<a href="javascript:void(0);" class="box">Answer & Solution</a>
</div>
<div class="row answer_container" style="display:none;">
<div class="col-md-offset-1 col-md-10">
<div class="page-content">
<div class="boxedtitle page-title">
<h2 class="t_left">Answer & Solution</h2>
</div>
<div><span class="color">Answer:</span><strong> Option D</strong> </div>
<div>
<div><span class="color">Solution: </span></div>
Let 10 numbers be x1, x2, x3, . . . . . . . x10<br>
According to question average of these 10 numbers is 10<br>
$$ \Rightarrow \frac{{ {x1 + x2 + x3 + .... + x10} }}{{10}} = x$$<br>
Now if each number is increased by 10%,<br>
then new average, say y.<br>
$$y = \frac{{ {1.1x1 + 1.1x2 + 1.1x3 + .... + 1.1x10} }}{{10}}$$<br>
$${\kern 1pt} \Rightarrow y = 1.1 \times {\frac{{ {x1 + x2 + x3 + .... + x10} }}{{10}}} $$<br>
$$\eqalign{
& \Rightarrow y = 1.1x \cr
& \Rightarrow y\,{\text{is }}10\% \,{\text{increased}} \cr} $$
</div>
</div>
</div>
</div>
</article>
<article class="question single-question question-type-normal">
<div class="row">
<div class="col-xs-12" id="save_alert_767" style="display:none;">
</div>
</div>
<h2><div class="question-number">5. </div><div class="question-main">The average price of 10 books is Rs.12 while the average price of 8 of these books is Rs. 11.75. Of the remaining two books, if the price of one book is 60% more than the price of the other, what is the price of each of these two books?</div>
</h2>
<div class="question-inner">
<div class="form-style form-style-3">
<div class="form-inputs clearfix question-options">
<p>
<label class="color" for="poll-767-1">A. </label>
<input type="radio" name="poll-radio-767" id="poll-767-1">
<label for="poll-767-1">Rs. 5, Rs.7.50</label>
</p>
<p>
<label for="poll-767-2">B. </label>
<input type="radio" name="poll-radio-767" id="poll-767-2">
<label for="poll-767-2">Rs. 8, Rs. 12</label>
</p>
<p>
<label for="poll-767-3">C. </label>
<input type="radio" name="poll-radio-767" id="poll-767-3">
<label for="poll-767-3">Rs. 10, Rs. 16</label>
</p>
<p>
<label for="poll-767-4">D. </label>
<input type="radio" name="poll-radio-767" id="poll-767-4">
<label for="poll-767-4">Rs. 12, Rs. 14</label>
</p>
<p class="hidden">
<input type="hidden" id="answer_767" value="3" />
</p>
</div>
</div>
</div>
<div class="question-bottom">
<a href="javascript:void(0);" class="box">Answer & Solution</a>
</div>
<div class="row answer_container" style="display:none;">
<div class="col-md-offset-1 col-md-10">
<div class="page-content">
<div class="boxedtitle page-title">
<h2 class="t_left">Answer & Solution</h2>
</div>
<div><span class="color">Answer:</span><strong> Option C</strong> </div>
<div>
<div><span class="color">Solution: </span></div>
Total cost of 10 books = Rs. 120<br>
Total cost of 8 books = Rs. 94<br>
⇒ The cost of 2 books = Rs. 26<br>
Let the price of each book be x and y.<br>
⇒ x + y = 26 - - - - - -(1)<br>
Given that the price of 1 book is 60% more than the other price<br>
$$\eqalign{
& \left( {\frac{{160}}{{100}}} \right)y + y = 26 \cr
& \Rightarrow y\left( {\frac{{160}}{{100}} + 1} \right) = 26 \cr
& \Rightarrow y\left( {\frac{{160 + 100}}{{100}}} \right) = 26 \cr
& \Rightarrow y = \frac{{\left( {26 \times 100} \right)}}{{260}} \cr
& \Rightarrow y = 10 \cr
& {\text{Substituting}}\,\,y = 10\,\,{\text{in }}{\kern 1pt} \left(1 \right){\text{we get}}, \cr
& x + 10 = 26 \cr
& x = 16 \cr} $$
</div>
</div>
</div>
</div>
</article>

<article class="question single-question question-type-normal">
<div class="row">
<div class="col-xs-12" id="save_alert_752" style="display:none;">
</div>
</div>
<h2><div class="question-number">6. </div><div class="question-main">Nine persons went to a hotel for taking their meals. Eight of them spent Rs.12 each on their meals and the ninth spent Rs.8 more than the average expenditure of all the nine. What was the total money spent by them.</div>
</h2>
<div class="question-inner">
<div class="form-style form-style-3">
<div class="form-inputs clearfix question-options">
<p>
<label class="color" for="poll-752-1">A. </label>
<input type="radio" name="poll-radio-752" id="poll-752-1">
<label for="poll-752-1">Rs. 115</label>
</p>
<p>
<label for="poll-752-2">B. </label>
<input type="radio" name="poll-radio-752" id="poll-752-2">
<label for="poll-752-2">Rs. 116</label>
</p>
<p>
<label for="poll-752-3">C. </label>
<input type="radio" name="poll-radio-752" id="poll-752-3">
<label for="poll-752-3">Rs. 117</label>
</p>
<p>
<label for="poll-752-4">D. </label>
<input type="radio" name="poll-radio-752" id="poll-752-4">
<label for="poll-752-4">Rs. 118</label>
</p>
<p class="hidden">
<input type="hidden" id="answer_752" value="3" />
</p>
</div>
</div>
</div>
<div class="question-bottom">
<a href="javascript:void(0);" class="box">Answer & Solution</a>
</div>
<div class="row answer_container" style="display:none;">
<div class="col-md-offset-1 col-md-10">
<div class="page-content">
<div class="boxedtitle page-title">
<h2 class="t_left">Answer & Solution</h2>
</div>
<div><span class="color">Answer:</span><strong> Option C</strong> </div>
<div>
<div><span class="color">Solution: </span></div>
Let the average expenditure of all the nine be Rs. X</br>
Then, 12 × 8 + (X + 8) = 9X</br>
∴ X = 13
Total money spent = 9X<br>
= Rs. (9 × 13)<br>
= Rs. 117
</div>
</div>
</div>
</div>
</article>
<article class="question single-question question-type-normal">
<div class="row">
<div class="col-xs-12" id="save_alert_754" style="display:none;">
</div>
</div>
<h2><div class="question-number">7. </div><div class="question-main">The average of runs of a cricket player of 10 innings was 32. How many runes must be made in his next innings so as to increase his average of runs by 4?</div>
</h2>
<div class="question-inner">
<div class="form-style form-style-3">
<div class="form-inputs clearfix question-options">
<p>
<label class="color" for="poll-754-1">A. </label>
<input type="radio" name="poll-radio-754" id="poll-754-1">
<label for="poll-754-1">72</label>
</p>
<p>
<label for="poll-754-2">B. </label>
<input type="radio" name="poll-radio-754" id="poll-754-2">
<label for="poll-754-2">74</label>
</p>
<p>
<label for="poll-754-3">C. </label>
<input type="radio" name="poll-radio-754" id="poll-754-3">
<label for="poll-754-3">70</label>
</p>
<p>
<label for="poll-754-4">D. </label>
<input type="radio" name="poll-radio-754" id="poll-754-4">
<label for="poll-754-4">76</label>
</p>
<p class="hidden">
<input type="hidden" id="answer_754" value="4" />
</p>
</div>
</div>
</div>
<div class="question-bottom">
<a href="javascript:void(0);" class="box">Answer & Solution</a>
</div>
<div class="row answer_container" style="display:none;">
<div class="col-md-offset-1 col-md-10">
<div class="page-content">
<div class="boxedtitle page-title">
<h2 class="t_left">Answer & Solution</h2>
</div>
<div><span class="color">Answer:</span><strong> Option D</strong> </div>
<div>
<div><span class="color">Solution: </span></div>
Average after 11 innings = 36</br>
Required number of runs<br>
= ( 36 × 11) - (32 × 10)</br>
= 396 - 320</br>
= 76
</div>
</div>
</div>
</div>
</article>
<article class="question single-question question-type-normal">
<div class="row">
<div class="col-xs-12" id="save_alert_751" style="display:none;">
</div>
</div>
<h2><div class="question-number">8. </div><div class="question-main">The average score of a cricketer for ten matches is 38.9 runs. If the average for the first six matches is 42, then find the average for the last four matches.</div>
</h2>
<div class="question-inner">
<div class="form-style form-style-3">
<div class="form-inputs clearfix question-options">
<p>
<label class="color" for="poll-751-1">A. </label>
<input type="radio" name="poll-radio-751" id="poll-751-1">
<label for="poll-751-1">33.25</label>
</p>
<p>
<label for="poll-751-2">B. </label>
<input type="radio" name="poll-radio-751" id="poll-751-2">
<label for="poll-751-2">33.5</label>
</p>
<p>
<label for="poll-751-3">C. </label>
<input type="radio" name="poll-radio-751" id="poll-751-3">
<label for="poll-751-3">34.25</label>
</p>
<p>
<label for="poll-751-4">D. </label>
<input type="radio" name="poll-radio-751" id="poll-751-4">
<label for="poll-751-4">35</label>
</p>
<p class="hidden">
<input type="hidden" id="answer_751" value="3" />
</p>
</div>
</div>
</div>
<div class="question-bottom">
<a href="javascript:void(0);" class="box">Answer & Solution</a>
</div>
<div class="row answer_container" style="display:none;">
<div class="col-md-offset-1 col-md-10">
<div class="page-content">
<div class="boxedtitle page-title">
<h2 class="t_left">Answer & Solution</h2>
</div>
<div><span class="color">Answer:</span><strong> Option C</strong> </div>
<div>
<div><span class="color">Solution: </span></div>
Total sum of last 4 matches, </br>= (10 × 38.9) - (6 × 42)</br>
= 389 - 252 = 137</br>
Average = $$\frac{{137}}{4}$$ = 34.25
</div>
</div>
</div>
</div>
</article>
<article class="question single-question question-type-normal">
<div class="row">
<div class="col-xs-12" id="save_alert_749" style="display:none;">
</div>
</div>
<h2><div class="question-number">9. </div><div class="question-main">Distance between two stations A and B is 778km. A train covers the journey from A to B at 84km per hour and returns back to A with a uniform speed of 56km per hour. Find the average speed of train during the whole journey.</div>
</h2>
<div class="question-inner">
<div class="form-style form-style-3">
<div class="form-inputs clearfix question-options">
<p>
<label class="color" for="poll-749-1">A. </label>
<input type="radio" name="poll-radio-749" id="poll-749-1">
<label for="poll-749-1">60 km/hr</label>
</p>
<p>
<label for="poll-749-2">B. </label>
<input type="radio" name="poll-radio-749" id="poll-749-2">
<label for="poll-749-2">30.5 km/hr</label>
</p>
<p>
<label for="poll-749-3">C. </label>
<input type="radio" name="poll-radio-749" id="poll-749-3">
<label for="poll-749-3">57 km/hr</label>
</p>
<p>
<label for="poll-749-4">D. </label>
<input type="radio" name="poll-radio-749" id="poll-749-4">
<label for="poll-749-4">67.2 km/hr</label>
</p>
<p class="hidden">
<input type="hidden" id="answer_749" value="4" />
</p>
</div>
</div>
</div>
<div class="question-bottom">
<a href="javascript:void(0);" class="box">Answer & Solution</a>
</div>
<div class="row answer_container" style="display:none;">
<div class="col-md-offset-1 col-md-10">
<div class="page-content">
<div class="boxedtitle page-title">
<h2 class="t_left">Answer & Solution</h2>
</div>
<div><span class="color">Answer:</span><strong> Option D</strong> </div>
<div>
<div><span class="color">Solution: </span></div>
$$\eqalign{
& {\text{Average speed}} \cr
& = {\frac{{2xy}}{{ {x + y} }}} {\kern 1pt} {\kern 1pt} {\text{km/hr}} \cr
& = {\frac{{ {2 \times 84 \times 56} }}{{ {84 + 56} }}} {\kern 1pt} {\kern 1pt} {\text{km/hr}} \cr
& = {\frac{{ {2 \times 84 \times 56} }}{{140}}} {\kern 1pt} {\kern 1pt} {\text{km/hr}} \cr
& = 67.2{\kern 1pt} {\kern 1pt} {\text{km/hr}} \cr} $$
</div>
</div>
</div>
</div>
</article>
<article class="question single-question question-type-normal">
<div class="row">
<div class="col-xs-12" id="save_alert_750" style="display:none;">
</div>
</div>
<h2><div class="question-number">10. </div><div class="question-main">The average of 50 numbers is 30. If two numbers, 35 and 40 are discarded, then the average of the remaining numbers is nearly:</div>
</h2>
<div class="question-inner">
<div class="form-style form-style-3">
<div class="form-inputs clearfix question-options">
<p>
<label class="color" for="poll-750-1">A. </label>
<input type="radio" name="poll-radio-750" id="poll-750-1">
<label for="poll-750-1">28.32</label>
</p>
<p>
<label for="poll-750-2">B. </label>
<input type="radio" name="poll-radio-750" id="poll-750-2">
<label for="poll-750-2">29.68</label>
</p>
<p>
<label for="poll-750-3">C. </label>
<input type="radio" name="poll-radio-750" id="poll-750-3">
<label for="poll-750-3">28.78</label>
</p>
<p>
<label for="poll-750-4">D. </label>
<input type="radio" name="poll-radio-750" id="poll-750-4">
<label for="poll-750-4">29.27</label>
</p>
<p class="hidden">
<input type="hidden" id="answer_750" value="2" />
</p>
</div>
</div>
</div>
<div class="question-bottom">
<a href="javascript:void(0);" class="box">Answer & Solution</a>
</div>
<div class="row answer_container" style="display:none;">
<div class="col-md-offset-1 col-md-10">
<div class="page-content">
<div class="boxedtitle page-title">
<h2 class="t_left">Answer & Solution</h2>
</div>
<div><span class="color">Answer:</span><strong> Option B</strong> </div>
<div>
<div><span class="color">Solution: </span></div>
Total sum of 48 numbers,<br>
= (50 × 30) - (35 + 40)</br>
= 1500 - 75</br>
= 1425</br>
Average = $$\frac{{1425}}{{48}}$$ = 29.68
</div>
</div>
</div>
</div>
</article>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.examveda.com/js/tabs.js"></script>
<script type="text/javascript" src="https://www.examveda.com/js/custom.js"></script>
<script>
function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
		var foot_div = $('#footDiv').offset().top;
		var temp_div = foot_div - 320;
		if(temp_div < window_top){
		 $('#sticky').removeClass('stick');
		} else if (window_top > div_top) {
        $('#sticky').addClass('stick');
    }else {
        $('#sticky').removeClass('stick');
    }
}
$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});
</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script><script type="text/x-mathjax-config">MathJax.Hub.Config({  displayAlign: "inherit",  displayIndent: "1.5em"});MathJax.Hub.Config({ "HTML-CSS": { linebreaks: { automatic: true }, styles: {".MathJax_Display": { "font-style": "normal","font-size":  "90%","display": "inline"}} }});
		</script>
  </body>
</html>