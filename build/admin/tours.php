<!DOCTYPE html>
<html lang="en">

<?php include ("head.php"); ?>

<body class="sticky-header">
    <section>
        <?php include("sidebar.php"); ?>
        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">Ajaratravel</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->
                <!--mega menu end-->
                <div class="notification-wrap">
                    <div class="right-notification">
                        <ul class="notification-menu">
                            <li>
                                <form class="search-content" action="index.html" method="post">
                                    <input type="text" class="form-control" name="keyword" placeholder="Search...">
                                </form>
                            </li>

                            <li>
                                <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/avatar-mini.jpg" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Static Table
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Data Table</a></li>
                        <li class="active">Static Table</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">



                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading head-border">
                                Custom Table
                            </header>
                            <table class="table table-striped custom-table table-hover">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-bookmark-o"></i> Company</th>
                                        <th class="hidden-xs"><i class="fa fa-building-o"></i> Descrition</th>
                                        <th><i class="fa fa-bar-chart-o"></i> Profit</th>
                                        <th><i class="fa fa-line-chart"></i> Progress</th>
                                        <th><i class=" fa fa-edit"></i> Status</th>
                                        <th class="hidden-xs"><i class="fa fa-cogs"></i> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">VectorLab</a></td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                        <td>693030.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-info label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">
                                                Admin Lab
                                            </a>
                                        </td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo</td>
                                        <td>10003.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">
                                                Metro Lab
                                            </a>
                                        </td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo</td>
                                        <td>23400.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 76%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" role="progressbar" class="progress-bar progress-bar-info"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-success label-mini">Paid</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">
                            Flat Lab
                        </a>
                                        </td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo</td>
                                        <td>36342.50$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-danger label-mini">Paid</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Slick Lab</a></td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                        <td>4022.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-primary label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">
                            TroCode
                        </a>
                                        </td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo</td>
                                        <td>526456.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Vector Ltd</a></td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                        <td>12120.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 43%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="43" role="progressbar" class="progress-bar progress-bar-info"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-success label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">
                            Dashboard
                        </a>
                                        </td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo</td>
                                        <td>56456.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Vector Ltd</a></td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                        <td>12120.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar" class="progress-bar progress-bar-info"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-info label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">
                            Modern
                        </a>
                                        </td>
                                        <td class="hidden-xs">Lorem Ipsum dorolo</td>
                                        <td>56456.00$ </td>
                                        <td>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info"></div>
                                            </div>
                                        </td>
                                        <td><span class="label label-warning label-mini">Due</span></td>
                                        <td class="hidden-xs">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>

            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2015 &copy; SlickLab by VectorLab.
            </footer>
        </div>
        <!-- body content end-->
    </section>

    <!-- Placed js at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.min.js"></script>

    <!--Nice Scroll-->
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--switchery-->
    <script src="js/switchery/switchery.min.js"></script>
    <script src="js/switchery/switchery-init.js"></script>

    <!--Sparkline Chart-->
    <script src="js/sparkline/jquery.sparkline.js"></script>
    <script src="js/sparkline/sparkline-init.js"></script>


    <!--common scripts for all pages-->
    <script src="js/scripts.js"></script>


</body>

</html>
