<?php 
    session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Matrix Help</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        
        <?php include('php/header.php'); ?>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <?php include ('php/nav.php'); ?>


        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Our Services</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Presentation</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View Users</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                 
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Provide Advice for users || 12 Traditions of Alcohlic anonyms</h5>
                                     <div class="accordion" id="accordionExample">
                            <div class="card m-b-0">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span> Unity </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                             Many people try to recover from addiction on their own but isolation often makes it more difficult to abstain from drugs or alcohol. Tradition one is based on the fact that unity within the group will allow members of 12-step support groups to make more progress. The underlying message: While you want to reach your own individual goal of sobriety, your journey can become rudderless if you place “self” over others. 
                                  </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Leadership  </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                     In 12-step groups, there is no such thing as individual authority or governance, but there are group leaders entrusted with the responsibility to serve the group, not make decisions for it. Tradition two ensures that no member has authority "over" the group, providing a sense of "belonging" to all members—no matter their background, education, or professional expertise. 
                                  </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Eligibility</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <h2>Eligibility </h2>
                                    Tradition three states that the only requirement in A.A. is a desire to stop drinking. For members of Al-Anon, the only requirement is that you have a relative or friend with an alcohol use disorder. This tradition was created to protect the fellowship from outside influences and ensure that the meetings would maintain their primary focus and not be diluted by the influx of other issues or influences. 
                                  </div>
                                </div>
                            </div>
                             <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingFour">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Autonomy</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <h2>Autonomy</h2>
                                    Tradition four gives individual groups the freedom to vary their meetings, including where the meeting will be held, whether it’s open or closed, how to begin and end meetings, the program content and topics discussed, and how to spend funds as needed. At the same time, it also cautions against straying too far from the program's basic tenets.  
                                  </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingFive">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Carrying the Message</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <h2>Carrying the Message</h2>

                                        While individual members bring their own needs into the 12-step rooms and progress at their own pace through the journey of recovery, the group should have but one purpose. According to tradition five, the group's primary purpose is to carry its message and give experience, strength, comfort, and hope to others inside the rooms. 
                                  </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingSix">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Outside Enterprises</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                  <div class="card-body">
                                     <h2>Outside Enterprises</h2>

                                         Tradition six seeks to preserve the integrity of the 12-step program and maintain the primary spiritual aim by preventing groups from endorsing any outside organizations and causes. As individuals, members of 12-step support groups are free to endorse, finance, or affiliate with any organization, religion, political party, the charitable or civic organization they wish. As a group, such endorsement could lead to misunderstanding and confusion, particularly as many outside organizations attempt to use the name of Alcoholics Anonymous or Al-Anon Family Groups to promote their treatment programs or therapeutic approaches.

                                  </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingSeven">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span> Self-Supporting </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <h2> Self-Supporting </h2>

                                        By being self-supporting and declining outside contributions, the group protects its basic fellowship structure and basic spiritual foundations. Tradition seven makes it clear that members of each local group can choose whether or not to place money in the basket for contributions but also ensures that the fellowship does not become involved with outside issues or conflicts by accepting "outside contributions."
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingEight">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Giving It Away </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                  <div class="card-body">
                                       <h2>Giving It Away </h2>

                                        There is a saying in the rooms, "In order to keep it, you must give it away." Tradition eight allows contributions to be used for support services while the groups provide only non-professional, mutual support, ensuring A.A. or Al-Anon remains an unpaid, nonprofessional organization. Anytime a newcomer reaches out for help, they will receive it, free of charge. In turn, as members freely share their own experience, strength, and hope with the newcomer, they help themselves and reinforce their own recovery.
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingNine">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Organization </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                  <div class="card-body">
                                       <h2>Organization </h2>

                                        By not being highly organized, support groups keep the emphasis on true fellowship and their primary purpose. There may be committees or a secretary to help with handling contributions. Unlike many other traditions, tradition nine does not require much from its members. 
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingTen">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span> Outside Opinions </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                  <div class="card-body">
                                        <h2> Outside Opinions </h2>

                                        By choosing not to express opinions on outside issues such as politics, alcohol reform, or religion, A.A. and Al-Anon avoid controversy, both publicly and within the fellowship itself. Tradition 10 helps members to maintain focus on their common purpose. 
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingEleven">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Public Relations </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                                  <div class="card-body">
                                         <h2>Public Relations </h2>

                                            Anonymity in the media protects not only the individual member but the fellowship as a whole. It is A.A.'s public relations policy to attract rather than promote. Part of the eleventh tradition is not using full names or naming groups. For example, if a member wishes to discuss the benefits of being a member of A.A. with the media, they should identify themselves by their first name only.  
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingTwelve">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Anonymity </span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                                  <div class="card-body">
                                         <h2>Anonymity</h2>

                                            A hallmark of 12-step recovery programs is the offer of anonymity to participants. Anonymity helps protect the group and keep the focus on principles rather than personalities. According to tradition 12, personal anonymity should be maintained at all levels of participation in 12-step fellowship including in meetings, in 12th step work, and even in sponsorship.  
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="card-body">
                                <h4 class="card-title m-b-0">Provide testimony os users</h4>
                        </div>
                            <ul class="list-style-none">
                                <li class="d-flex no-block card-body">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0"> Paola Nde Priscill share his testimony during the Alcohlic Anonyms meeting</a>
                                        <span>
                                            <b>As alcoholics, we have learned the hard way that willpower alone, however strong in other respects, was not enough to keep us sober.</b><br>

                                            We have tried going on the wagon for specific periods. We have taken solemn pledges. We have switched brands and beverages. We have tried drinking at only certain hours. But none of our plans worked. We always wound up, sooner or later, getting drunk when we not only wanted to stay sober and had every rational incentive to do so.
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0"> Anne Marie Tatoue share his testimony during the Alcohlic Anonyms meeting</a>
                                        <span>
                                            <b>We have gone through stages of dark despair when we were sure that something was wrong with us mentally.</b><br>

                                            We came to hate ourselves for wasting the talents with which we were endowed and for the trouble we were causing our families and others. Frequently, we indulged in self-pity and proclaimed that nothing could ever help us. We can smile at those recollections now but at the time they were grim, unpleasant experiences.
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0"> Florian Ngoula share the notions that he have learn during the AA meeting</a>
                                        <span>
                                            <b>We have also learned that there are few alternatives for the alcoholic. If they continue to drink, their problem will become progressively worse.</b><br>

                                            They seems assuredly on the path to the gutter, to hospitals, to jails or other institutions, or to an early grave. The only alternative is to stop drinking completely and to abstain from even the smallest quantity of alcohol in any form. If they are willing to follow this course, and to take advantage of the help available to them, a whole new life can open up for the alcoholic.
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0"> Marielle Tafo share the basic notions of alcoholsim</a>
                                        <span>
                                           <b>What we have learned about alcoholism</b><br>

                                            The first thing we have learned about alcoholism is that it is one of the oldest problems in Man’s history. Only recently have we begun to benefit from new approaches to the problem. Doctors today, for example, know a great deal more about alcoholism than their predecessors knew only two generations ago. They are beginning to define the problem and study it in detail.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('php/footer.php'); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>