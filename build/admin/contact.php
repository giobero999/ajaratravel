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
                    About us
                </h3>
            </div>

            <div class="wrapper">
              <form class="" action="index.html" method="post">
                <div class="col-md-12">
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
                    <div class="panel-body">
                      <div class="tab-content">
                        <div id="georgian" class="tab-pane  active">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Country</label>
                              <div class="iconic-input">
                                <i class="fa fa-globe"></i>
                                <input type="text" class="form-control" placeholder="Country" value="">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>City</label>
                              <div class="iconic-input">
                                <i class="fa fa-globe"></i>
                                <input type="text" class="form-control" placeholder="City" value="">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Address</label>
                              <div class="iconic-input">
                                <i class="fa fa-location-arrow"></i>
                                <input type="text" class="form-control" placeholder="Address" value="">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="english" class="tab-pane">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Country</label>
                              <div class="iconic-input">
                                <i class="fa fa-globe"></i>
                                <input type="text" class="form-control" placeholder="Country" value="">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>City</label>
                              <div class="iconic-input">
                                <i class="fa fa-globe"></i>
                                <input type="text" class="form-control" placeholder="City" value="">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Address</label>
                              <div class="iconic-input">
                                <i class="fa fa-location-arrow"></i>
                                <input type="text" class="form-control" placeholder="Address" value="">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="russian" class="tab-pane ">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Country</label>
                              <div class="iconic-input">
                                <i class="fa fa-globe"></i>
                                <input type="text" class="form-control" placeholder="Country" value="">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>City</label>
                              <div class="iconic-input">
                                <i class="fa fa-globe"></i>
                                <input type="text" class="form-control" placeholder="City" value="">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Address</label>
                              <div class="iconic-input">
                                <i class="fa fa-location-arrow"></i>
                                <input type="text" class="form-control" placeholder="Address" value="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="panel">
                    <div class="panel-heading">
                      Phone numbers
                    </div>
                    <div class="panel-body">
                      <form class="" action="index.html" method="post">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Contact Number 1</label>
                            <div class="iconic-input">
                              <i class="fa fa-mobile"></i>
                              <input type="text" class="form-control" placeholder="number" value="+1 120 456 55">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Contact Number 2</label>
                            <div class="iconic-input">
                              <i class="fa fa-mobile"></i>
                              <input type="text" class="form-control" placeholder="number" value="+1 120 456 55">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Contact Number 3</label>
                            <div class="iconic-input">
                              <i class="fa fa-mobile"></i>
                              <input type="text" class="form-control" placeholder="number" value="+1 120 456 55">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </section>
                  <section class="panel">
                    <div class="panel-body">
                      <div class="form-group icheck-row">
                        <div class="form-group">
                          <button type="submit" class="btn btn-success btn-lg btn-block">Change</button>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </form>
          </div>

            <footer>
                2016 &copy; Made with Love.
            </footer>
        </div>
        <!-- body content end-->
    </section>

<?php include("footer.php"); ?>
