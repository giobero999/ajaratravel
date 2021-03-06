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
                <div class="col-md-5">
                  <section class="panel">
                    <div class="panel-heading">
                      meeting time
                      <span class="tools pull-right">
                        <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                      </span>
                    </div>
                    <div class="panel-body">
                      <div class="form-group">
                        <div class="input-group date form_datetime-component">
                          <input type="text" class="form-control" readonly="" size="16" required>
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-primary date-set"><i class="fa fa-calendar"></i></button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="panel">
                    <div class="panel-heading">
                      upload image
                      <span class="tools pull-right">
                        <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                      </span>
                    </div>
                    <div class="panel-body">
                      <div class="form-group icheck-row">
                        <div class="form-group">
                            <input id="file-2" class="file" type="file" multiple=false required>
                        </div>
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
                      <div class="panel-body">
                        <div class="tab-content">
                            <div id="georgian" class="tab-pane  active">
                              <div class="col-md-12 m-b-10 bottom-border">
                                <div class="">
                                  <textarea class="wysihtml5 form-control" rows="8" required></textarea>
                                </div>
                              </div>
                            </div>

                            <div id="english" class="tab-pane">
                              <div class="col-md-12 m-b-10 bottom-border">
                                <div class="">
                                  <textarea class="wysihtml5 form-control" ></textarea>
                                </div>
                              </div>
                            </div>

                            <div id="russian" class="tab-pane ">
                              <div class="col-md-12 m-b-10 bottom-border">
                                <div class="">
                                  <textarea class="wysihtml5 form-control" ></textarea>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </section>
                </div>
                <div class="col-md-12">
                  <section class="panel">
                    <div class="panel-body">
                      <div class="form-group icheck-row">
                          <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Create Tour</button>
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
