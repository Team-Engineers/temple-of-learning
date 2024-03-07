<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
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
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">


    <link href="css/base.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=Open+Sans:wght@400;700&family=Roboto:ital,wght@0,900;1,400&display=swap" rel="stylesheet">


    <title>Temple of learning</title>
</head>

<body>
    <header class="fixed-top header-fullpage bordered-nav wow fadeInDowm" style="box-shadow: rgb(204, 204, 204) 2px 2px 3px 1px;">
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
                    <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" style="border-color: rgb(255, 255, 255) !important;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarContent" class="collapse navbar-collapse" style="justify-content: end;">
                        <ul class="navbar-nav text-right-align">
                            <!-- <li class="nav-item"><a href="index.php" class="nav-link font-weight-bold text-uppercase"
                                style="color: #103f6b !important;">Home</a></li> -->
                            <li class="nav-item"><a href="about-us.php" class="nav-link font-weight-bold text-uppercase" style="color: #ed5940 !important;">About</a></li>
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
                            <li class="nav-item dropdown megamenu"><a id="megamneu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase" style="color: #ed5940 !important;">COURSES</a>
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
                                                                <li class="nav-item itam-st"><a href="iim-indore.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IIM Indore, IPM</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="iim-rohtal.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IIM Rohtak, IPM</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="iim-bodh-gaya.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IIM Bodhgaya, IPM</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="iim-ranchi.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IIM Ranchi, IPM</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="iim-jammu.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IIM Jammu</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="nmims(npat).php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> NMIMS(NPAT)</a></li>
                                                                <li class="nav-item itam-st"><a href="scm.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Symbiosis Center for
                                                                        Management</a></li>
                                                                <li class="nav-item itam-st"><a href="ip-university.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Indraprastha
                                                                        University</a></li>
                                                                <li class="nav-item itam-st"><a href="christ-university.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Christ University</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="jamia-millia-university.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Jamia Millia
                                                                        University</a></li>
                                                                <li class="nav-item itam-st"><a href="st-xaviers-college-mumbai.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> St Xavier’s College,
                                                                        Mumbai</a></li>
                                                                <li class="nav-item itam-st"><a href="devi-ahilya-vishwavidyalaya.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Others </a></li>



                                                            </ul>
                                                            <h6 class="font-weight-bold text-uppercase h6-st">Mass
                                                                Communication </h6>
                                                            <ul class="list-unstyled">
                                                                <li class="nav-item itam-st"><a href="ipcw-university.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IPCW University </a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="delhi-university-ba-hons.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Delhi University
                                                                        BA(hons)</a></li>
                                                                <li class="nav-item itam-st"><a href="ip-university-bjmc.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IP University
                                                                        (BJMC)</a></li>
                                                                <li class="nav-item itam-st"><a href="symbiosis-institute-of-media.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> SYMBIOSIS INSTITUTE</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="sxc-m-bmm.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> St Xavier’s College,
                                                                        Mumbai</a></li>
                                                                <li class="nav-item itam-st"><a href="sxc-m-bmm.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Others</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 mb-2 mt-2">
                                                            <h6 class="font-weight-bold text-uppercase h6-st">LAW</h6>
                                                            <ul class="list-unstyled">
                                                                <li class="nav-item itam-st"><a href="clat.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> CLAT</a></li>
                                                                <li class="nav-item itam-st"><a href="nlud.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> National Law
                                                                        University, Delhi</a></li>
                                                                <li class="nav-item itam-st"><a href="ip-university-law.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IP University Law</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="christ-university-law.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Christ University</a>
                                                                </li>
                                                                <li class="nav-item itam-st"><a href="jamia-millia-islamia-law.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Jamia Millia
                                                                        Islamia</a></li>

                                                                <li class="nav-item itam-st"><a href="nmims-school-of-law.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> NMIMS - School of
                                                                        Law</a></li>
                                                                <li class="nav-item itam-st"><a href="symbiosis-law-college.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Symbiosis Law
                                                                        College</a></li>
                                                                <li class="nav-item itam-st"><a href="symbiosis-law-college.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Others</a></li>





                                                            </ul>
                                                            <h6 class="font-weight-bold text-uppercase h6-st">Hotel
                                                                Management</h6>
                                                            <ul class="list-unstyled">
                                                                <li class="nav-item itam-st">
                                                                    <a href="nchmct.php" class="nav-link text-small pb-0 li-st ">
                                                                        <span class="dis-non">•</span> NCHMCT</a>
                                                                </li>
                                                                <li class="nav-item itam-st">
                                                                    <a href="wgsha-manipal.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> WGSHA, Manipal</a>
                                                                </li>
                                                                <li class="nav-item itam-st">
                                                                    <a href="christ-university-hm.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Christ University</a>
                                                                </li>
                                                                <li class="nav-item itam-st">
                                                                    <a href="gsiu-hm.php" class="nav-link text-small pb-0 li-st ">
                                                                        <span class="dis-non">•</span> Gobind Singh IP University</a>
                                                                </li>
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
                                                                <li class="nav-item itam-st"><a href="ip-university-bca.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IP University </a></li>
                                                                <li class="nav-item itam-st"><a href="sic-bca.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Symbiosis Institute of
                                                                        Computer</a></li>
                                                                <li class="nav-item itam-st"><a href="christ-university-bca.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Christ University</a>
                                                                </li>

                                                                <li class="nav-item itam-st"><a href="jamia-millia-islamia-bca.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Jamia Millia
                                                                        Islamia</a></li>

                                                                <li class="nav-item itam-st"><a href="banaras-hindu-university.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Others</a></li>
                                                            </ul>
                                                            <h6 class="font-weight-bold text-uppercase h6-st">B.Com</h6>
                                                            <ul class="list-unstyled">

                                                                <li class="nav-item itam-st"><a href="ip-university-b-com.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> IP University</a></li>
                                                                <li class="nav-item itam-st"><a href="nmims-asmsc-b.com.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> NMIMS (ASMSC)</a></li>
                                                                <li class="nav-item itam-st"><a href="christ-university-b.com.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Christ University
                                                                        B.com</a></li>
                                                                <li class="nav-item itam-st"><a href="scac-pune-b.com.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Symbiosis College AC,
                                                                        Pune</a></li>
                                                                <li class="nav-item itam-st"><a href="scac-pune-b.com.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Others</a></li>


                                                            </ul>

                                                            <h6 class="font-weight-bold text-uppercase h6-st">PSYCHOLOGY</h6>
                                                            <ul class="list-unstyled">
                                                                <li class="nav-item itam-st">
                                                                    <a href="du-psychology.php" class="nav-link text-small pb-0 li-st ">
                                                                        <span class="dis-non">•</span> DU (Psychology) </a>
                                                                </li>
                                                                <li class="nav-item itam-st">
                                                                    <a href="christ-university-psychology.php" class="nav-link text-small pb-0 li-st ">
                                                                        <span class="dis-non">•</span> Christ University (Psychology) </a>
                                                                </li>
                                                                <li class="nav-item itam-st">
                                                                    <a href="jamia-milliaIslamia-university-psychology.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> JamiaMilliaIslamia University (Psychology) </a>
                                                                </li>
                                                                <li class="nav-item itam-st">
                                                                    <a href="banaras-hindu-university-BHU-UET.php" class="nav-link text-small pb-0 li-st "><span class="dis-non">•</span> Banaras Hindu University (BHU-UET) </a>
                                                                </li>
                                                                <li class="nav-item itam-st">
                                                                    <a href="mount-carmel-college-psychology.php" class="nav-link text-small pb-0 li-st ">
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
                            <li class="nav-item"><a href="contact-us.php" class="nav-link font-weight-bold text-uppercase" style="color: #ed5940 !important;">Contact</a></li>
                            <li class="nav-item"><a href="logout.php" class="nav-link font-weight-bold text-uppercase" style="color: #ed5940 !important;">Logout</a></li>
                            <li class="nav-item"><a href="test.php" class="nav-link font-weight-bold text-uppercase" style="color: #ed5940 !important;">Practice Questions</a></li>


                            <div class="navbar-collapse collapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
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

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
      </li>
  </ul>
  </div>


  </div>
</nav> -->

    <div class="container mt-4">
        <h3><?php echo "Welcome " . $_SESSION['username'] ?>! We have best courses for you.</h3>
        <hr>

    </div>
    <div class="container" style="display: flex; justify-content: space-between;">
        <div class="card" style="width: 30rem;">
            <img src="images/bg_8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: 'serif';">2 Year Course Program</h5>
                <p class="card-text" style="color: #000;">• Most comprehensive training<br>
                    • 500+ hours of training<br>
                    • 24*7 one on one mentoring<br>
                    • Unlimited support / guidance</p>

                <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <img src="images/bg_8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: 'serif';">1 Year Course Program</h5>
                <p class="card-text" style="color: #000;">• 350+ hours of training <br>
                    • 24*7 one on one mentoring<br>
                    • Unlimited support / guidance<br>
                    • Recorded videos and mock test</p>

                <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <img src="images/bg_8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: 'serif';">Crash Course</h5>
                <p class="card-text" style="color: #000;">• 200 + hours of intensive Training<br>
                    • Maximum personalized attention<br>
                    • Most experienced faculty<br>
                    • Latest study material with past year papers</p>

                <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
        </div>

    </div>
    <div class="container my-4" style="display: flex; justify-content: space-between;">
        <div class="card" style="width: 30rem;">
            <img src="images/bg_8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: 'serif';">Sprint (Basic Foundation)</h5>
                <p class="card-text" style="color: #000;">• Most comprehensive training<br>
                    • 500+ hours of training<br>
                    • 24*7 one on one mentoring<br>
                    • Unlimited support / guidance</p>

                <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <img src="images/bg_8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: 'serif';">Gallop (Advanced Foundation)</h5>
                <p class="card-text" style="color: #000;">• 350+ hours of training <br>
                    • 24*7 one on one mentoring<br>
                    • Unlimited support / guidance<br>
                    • Recorded videos and mock test</p>

                <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <img src="images/bg_8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: 'serif';">Bridge Course</h5>
                <p class="card-text" style="color: #000;">• 200 + hours of intensive Training<br>
                    • Maximum personalized attention<br>
                    • Most experienced faculty<br>
                    • Latest study material with past year papers</p>

                <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>