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
                Menu Control
              </h3>
            </div>

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-5">
                      <section class="panel">
                        <div class="panel-body">
                          <div class="dd" id="nestable_list_1">
                            <ol class="dd-list">
                              <li class="dd-item dd3-item menu-item" data-id="13" >
                                <div class="dd-handle dd3-handle"></div>
                                <div class="dd3-content">
                                  Item 13
                                  <div class="pull-right" id="menu-settings">
                                    <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-warning btn-xs btn-edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs delete-menu"><i class="fa fa-trash-o "></i></button>
                                  </div>
                                </div>
                              </li>
                              <li class="dd-item dd3-item" data-id="14">
                                <div class="dd-handle dd3-handle"></div>
                                <div class="dd3-content">
                                  Item 13
                                  <div class="pull-right"  id="menu-settings">
                                    <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-warning btn-xs btn-edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs delete-menu"><i class="fa fa-trash-o "></i></button>
                                  </div>
                                </div>
                              </li>
                              <li class="dd-item dd3-item" data-id="15"  id="menu-settings">
                                <div class="dd-handle dd3-handle"></div>
                                <div class="dd3-content">
                                  Item 13
                                  <div class="pull-right"  id="menu-settings">
                                    <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-warning btn-xs btn-edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs delete-menu"><i class="fa fa-trash-o "></i></button>
                                  </div>
                                </div>
                                <ol class="dd-list">
                                  <li class="dd-item dd3-item" data-id="16">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">
                                      Item 13
                                      <div class="pull-right" id="menu-settings">
                                        <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-warning btn-xs btn-edit"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs delete-menu"><i class="fa fa-trash-o "></i></button>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="dd-item dd3-item" data-id="17">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">
                                      Item 13
                                      <div class=" pull-right" id="menu-settings">
                                        <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-warning btn-xs btn-edit"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs delete-menu"><i class="fa fa-trash-o "></i></button>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="dd-item dd3-item" data-id="18">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">
                                      Item 13
                                      <div class="menu-settings pull-right"  id="menu-settings">
                                        <button class="btn btn-default btn-xs btn-hide"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-warning btn-xs btn-edit"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs delete-menu"><i class="fa fa-trash-o "></i></button>
                                      </div>
                                    </div>
                                  </li>
                                </ol>
                              </li>
                            </ol>
                          </div>
                        </div>
                      </section>
                    </div>

                    <div class="col-md-7">
                      <section class="panel">
                        <header class="panel-heading tab-dark">
                          <ul class="nav nav-tabs">
                            <li class="active">
                              <a data-toggle="tab" href="#georgian">
                                <img src="img/flags/ge.png" alt="" width="16" /> <strong> GE</strong>
                              </a>
                            </li>
                            <li >
                              <a data-toggle="tab" href="#english">
                                <img src="img/flags/en.png" alt="" width="16" /><strong> EN</strong>
                              </a>
                            </li>
                            <li class="">
                              <a data-toggle="tab" href="#russian">
                                <img src="img/flags/ru.png" alt="" width="16" /><strong> RU</strong>
                              </a>
                            </li>
                          </ul>
                        </header>
                        <form class="" action="index.php" method="post">
                          <section class="panel">
                            <div class="panel-body">
                              <div class="panel-body">
                                <div class="tab-content">
                                  <div id="georgian" class="tab-pane  active">
                                    <div class="">
                                      <div class="form-group">
                                        <label>Menu title</label>
                                        <div class="iconic-input">
                                          <i class="fa fa-microphone-slash"></i>
                                          <input type="text" class="form-control" placeholder="Example - Home">
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div id="english" class="tab-pane">
                                    <div class="">
                                      <div class="form-group">
                                        <label>Menu title</label>
                                        <div class="iconic-input">
                                          <i class="fa fa-microphone-slash"></i>
                                          <input type="text" class="form-control" placeholder="Example - Home">
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div id="russian" class="tab-pane ">
                                    <div class="">
                                      <div class="form-group">
                                        <label>Menu title</label>
                                        <div class="iconic-input">
                                          <i class="fa fa-microphone-slash"></i>
                                          <input type="text" class="form-control" placeholder="Example - Home">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <section class="panel">
                            <div class="panel-body">
                              <div class="form-group icheck-row col-md-3">
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Create Tour</button>
                                </div>
                              </div>
                            </div>
                          </section>
                        </form>
                      </section>
                    </div>
                </div>

                <!-- page end-->

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
    <?php include("footer.php"); ?>
