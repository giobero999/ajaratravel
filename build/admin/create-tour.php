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
                    Create tour
                </h3>
            </div>

            <div class="wrapper">
              <section class="panel">
                  <header class="panel-heading tab-dark">
                      <ul class="nav nav-tabs">
                          <li class="active">
                              <a data-toggle="tab" href="#home-2">
                                  <i class="fa fa-home"></i>
                              </a>
                          </li>
                          <li >
                              <a data-toggle="tab" href="#about-2">
                                  <i class="fa fa-user"></i>
                              </a>
                          </li>
                          <li class="">
                              <a data-toggle="tab" href="#contact-2">
                                  <i class="fa fa-envelope-o"></i>
                              </a>
                          </li>
                      </ul>
                  </header>
                  <div class="panel-body">
                      <div class="tab-content">
                          <div id="home-2" class="tab-pane active">
                            <form role="form">
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Left Icon</label>
                                      <div class="iconic-input">
                                          <i class="fa fa-microphone-slash"></i>
                                          <input type="text" class="form-control" placeholder="left icon">
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Left Icon</label>
                                      <div class="iconic-input">
                                          <i class="fa fa-microphone-slash"></i>
                                          <input type="text" class="form-control" placeholder="left icon">
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Left Icon</label>
                                      <div class="iconic-input">
                                          <i class="fa fa-microphone-slash"></i>
                                          <input type="text" class="form-control" placeholder="left icon">
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <header class="panel-heading ">
                                      small description
                                  </header>
                                  <div class="">
                                      <textarea class="wysihtml5 form-control" rows="12"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <header class="panel-heading ">
                                      large description
                                  </header>
                                  <div class="">
                                      <textarea class="wysihtml5 form-control" rows="12"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12 days-review">
                                  <header class="panel-heading ">
                                      days review
                                  </header>
                                  <button type="button" class="btn btn-success btn-review"><i class="fa fa-plus"></i> Add </button>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="control-label">File input</label>
                                      <input id="file-2" class="file" type="file" multiple=true>
                                  </div>
                                </div>
                            </form>
                          </div>
                          <div id="about-2" class="tab-pane ">About</div>
                          <div id="contact-2" class="tab-pane ">Contact</div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-12">Date Range</label>
                          <div class="col-md-6">
                              <div class="input-group input-large custom-date-range" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                  <input type="text" class="form-control dpd1" name="from">
                                  <span class="input-group-addon">To</span>
                                  <input type="text" class="form-control dpd2" name="to">
                              </div>
                              <span class="help-block">Select date range</span>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Defaults:</label>
                                <input type="text" class="tags tags-input" data-type="tags" value="foo,bar,baz,roffle"/>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="inputSuccess">visa yes/no</label>
                                <div class="col-lg-12">
                                    <input type="checkbox" class="js-switch-blue" checked/>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-lg-12 col-md-12 control-label">Category</label>
                              <div class="col-lg-9 col-md-12">
                                <select class="form-control  select2">
                                  <option value="AK">Alaska</option>
                                  <option value="HI">Hawaii</option>
                                  <option value="CA">California</option>
                                  <option value="NV">Nevada</option>
                                  <option value="OR">Oregon</option>
                                  <option value="WA">Washington</option>
                                </select>
                              </div>
                            </div>
                          </div>
                            <div class="col-md-6">
                              <div class="form-group icheck-row">
                                  <div class=" col-md-6">
                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green" >
                                          <label class="  control-label">Checkbox black</label>
                                      </div>
                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green">
                                          <label class="  control-label">Checkbox red</label>
                                      </div>

                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green" >
                                          <label class="  control-label">Checkbox blue</label>
                                      </div>
                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green">
                                          <label class="  control-label">Checkbox green</label>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group icheck-row">
                                  <div class=" col-md-6">
                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green" >
                                          <label class="  control-label">სასმელი</label>
                                      </div>
                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green">
                                          <label class="  control-label">Checkbox red</label>
                                      </div>

                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green" >
                                          <label class="  control-label">Checkbox blue</label>
                                      </div>
                                      <div>
                                          <input type="checkbox" checked class="iCheck-flat-green">
                                          <label class="  control-label">Checkbox green</label>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <br/>







                      </div>
                  </div>
              </section>
              <section class="panel">

              </section>
            </div>

            <footer>
                2016 &copy; Made with Love.
            </footer>
        </div>
        <!-- body content end-->
    </section>

<?php include("footer.php"); ?>
