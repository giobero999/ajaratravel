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
                <form class="" action="index.html" method="post">
                  <div class="panel-body">
                    <div class="tab-content">
                      <div id="georgian" class="tab-pane  active">
                        <div class="col-md-12 m-b-10 bottom-border">
                          <div class="">
                            <textarea class="wysihtml5 form-control" rows="8"></textarea>
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
                  <section class="panel">
                    <div class="panel-body">
                      <div class="form-group icheck-row">
                          <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Create Tour</button>
                        </div>
                      </div>
                    </div>
                  </section>
                </form>
              </section>
            </div>

            <footer>
                2016 &copy; Made with Love.
            </footer>
        </div>
        <!-- body content end-->
    </section>

<?php include("footer.php"); ?>
