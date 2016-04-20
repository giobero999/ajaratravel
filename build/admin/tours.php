<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>

<body class="sticky-header">

    <section>
      <?php include("sidebar.php"); ?>
        <!-- body content start-->
        <div class="body-content" style="min-height: 1200px;">

          <?php include("header.php"); ?>

            <!-- page head start-->
            <div class="page-head">
                <h3>
                    ALL TOURS
                </h3>

            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading head-border">
                            <form class="" action="index.html" method="post">
                              <div class="input-group m-b-10">
                                  <input type="text" class="form-control" placeholder="Search tour">
                                  <span class="input-group-btn">
                                    <button type="submit" class="btn btn-white" >Go</button>
                                  </span>
                              </div>
                            </form>
                          </header>
                          <table class="table table-striped custom-table table-hover">
                              <thead>
                                  <tr>
                                      <th><i class="fa fa-bookmark-o"></i> id</th>
                                      <th class="hidden-xs"><i class="fa fa-building-o"></i> description</th>
                                      <th><i class="fa fa-bar-chart-o"></i> Price</th>
                                      <th class="hidden-xs"><i class="fa fa-cogs"></i> Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>34</td>
                                      <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                      <td>693030.00$ </td>
                                      <td class="hidden-xs">
                                        <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i> hide</button>
                                        <button class="btn btn-primary btn-xs btn-edit"><i class="fa fa-pencil"></i> edit</button>
                                        <button class="btn btn-danger btn-xs btn-remove"><i class="fa fa-trash-o "></i> remove</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>34</td>
                                      <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                      <td>693030.00$ </td>
                                      <td class="hidden-xs">
                                          <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i> hide</button>
                                          <button class="btn btn-primary btn-xs btn-edit"><i class="fa fa-pencil"></i> edit</button>
                                          <button class="btn btn-danger btn-xs btn-remove"><i class="fa fa-trash-o "></i> remove</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>34</td>
                                      <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                      <td>693030.00$ </td>
                                      <td class="hidden-xs">
                                        <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i> hide</button>
                                        <button class="btn btn-primary btn-xs btn-edit"><i class="fa fa-pencil"></i> edit</button>
                                        <button class="btn btn-danger btn-xs btn-remove"><i class="fa fa-trash-o "></i> remove</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>34</td>
                                      <td class="hidden-xs">Lorem Ipsum dorolo imit</td>
                                      <td>693030.00$ </td>
                                      <td class="hidden-xs">
                                        <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i> hide</button>
                                        <button class="btn btn-primary btn-xs btn-edit"><i class="fa fa-pencil"></i> edit</button>
                                        <button class="btn btn-danger btn-xs btn-remove"><i class="fa fa-trash-o "></i> remove</button>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </section>
                      <section class="panel">
                          <div class="panel-body">
                              <div class="text-center">
                                  <ul class="pagination pagination-sm">
                                      <li><a href="#">«</a></li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">»</a></li>
                                  </ul>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>


            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2015 &copy; Powered by StarLab - Made with love.
            </footer>
            <!--footer section end-->


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
