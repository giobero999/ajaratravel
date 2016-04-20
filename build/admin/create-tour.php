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
              <form class="" action="index.html" method="post">
              <div class="row">
                <div class="col-md-7">
                  <section class="panel">
                    <header class="panel-heading tab-dark">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#georgian">
                                    Georgian
                                </a>
                            </li>
                            <li >
                                <a data-toggle="tab" href="#english">
                                    English
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#russian">
                                    Russian
                                </a>
                            </li>

                        </ul>
                    </header>
                    <div class="panel-body">
                      <div class="tab-content">
                          <div id="georgian" class="tab-pane active ">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Tour Name</label>
                                      <div class="iconic-input">
                                          <i class="fa fa-microphone-slash"></i>
                                          <input type="text" class="form-control" placeholder="Enter tour name, example: Tbilisi - roma - london">
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <label>Price</label>
                                  <div class="input-group m-b-10">
                                    <span class="input-group-addon"><strong>GEL</strong></span>
                                    <input type="text" class="form-control" placeholder="Enter the Price">
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Contact Number</label>
                                      <div class="iconic-input">
                                          <i class="fa fa-mobile"></i>
                                          <input type="text" class="form-control" placeholder="number" value="558 606 606">
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <header class="panel-heading ">
                                      small description
                                  </header>
                                  <div class="">
                                      <textarea class="wysihtml5 form-control" rows="6"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12 m-b-10 bottom-border">
                                  <header class="panel-heading ">
                                      large description
                                  </header>
                                  <div class="">
                                      <textarea class="wysihtml5 form-control" rows="12"></textarea>
                                  </div>
                                </div>
                                <div class="">
                                  <div class="panel-heading">
                                    DAYS REVIEW
                                  </div>
                                  <div class="panel-body days-review">
                                      <div class="">
                                        <button type="button" class="btn btn-warning btn-review"><i class="fa fa-plus"></i> Add </button>
                                      </div>
                                      <br/>
                                  </div>
                                </div>
                            </div>

                          <div id="english" class="tab-pane ">
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label>Tour Name</label>
                                  <div class="iconic-input">
                                      <i class="fa fa-microphone-slash"></i>
                                      <input type="text" class="form-control" placeholder="Enter tour name, example: Tbilisi - roma - london">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label>Price</label>
                              <div class="input-group m-b-10">
                                <span class="input-group-addon"><i class="fa  fa-euro"></i></span>
                                <input type="text" class="form-control" placeholder="Enter the Price">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label>Contact Number</label>
                                  <div class="iconic-input">
                                      <i class="fa fa-mobile"></i>
                                      <input type="text" class="form-control" placeholder="number" value="+767 54 44 541">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <header class="panel-heading ">
                                  small description
                              </header>
                              <div class="">
                                  <textarea class="wysihtml5 form-control" ></textarea>
                              </div>
                            </div>
                            <div class="col-md-12 m-b-10 bottom-border">
                              <header class="panel-heading ">
                                  large description
                              </header>
                              <div class="">
                                  <textarea class="wysihtml5 form-control" rows="12"></textarea>
                              </div>
                            </div>
                            <div class="">
                              <div class="panel-heading">
                                DAYS REVIEW
                              </div>
                              <div class="panel-body days-review">
                                  <div class="">
                                    <button type="button" class="btn btn-warning btn-review"><i class="fa fa-plus"></i> Add </button>
                                  </div>
                                  <br/>
                              </div>
                            </div>
                          </div>
                          <div id="russian" class="tab-pane ">
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label>Tour Name</label>
                                  <div class="iconic-input">
                                      <i class="fa fa-microphone-slash"></i>
                                      <input type="text" class="form-control" placeholder="Enter tour name, example: Tbilisi - roma - london">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label>Price</label>
                              <div class="input-group m-b-10">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input type="text" class="form-control" placeholder="Enter the Price">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label>Contact Number</label>
                                  <div class="iconic-input">
                                      <i class="fa fa-mobile"></i>
                                      <input type="text" class="form-control" placeholder="number" value="+1 120 456 55">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <header class="panel-heading ">
                                  small description
                              </header>
                              <div class="">
                                  <textarea class="wysihtml5 form-control" rows="6"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12 m-b-10 bottom-border">
                              <header class="panel-heading ">
                                  large description
                              </header>
                              <div class="">
                                  <textarea class="wysihtml5 form-control" rows="12"></textarea>
                              </div>
                            </div>
                            <div class="">
                              <div class="panel-heading">
                                DAYS REVIEW
                              </div>
                              <div class="panel-body days-review">
                                  <div class="">
                                    <button type="button" class="btn btn-warning btn-review"><i class="fa fa-plus"></i> Add </button>
                                  </div>
                                  <br/>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </section>
                  <section class="panel">

                  </section>
                </div>
                <div class="col-md-5">
                  <section class="panel">
                    <div class="panel-heading">
                      People
                      <span class="tools pull-right">
                          <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                      </span>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>People</label>
                            <div class="iconic-input">
                                <i class="fa fa-microphone-slash"></i>
                                <input type="text" class="form-control" placeholder="enter the number of people">
                            </div>
                        </div>
                    </section>
                  <section class="panel">
                    <div class="panel-heading">
                      date
                      <span class="tools pull-right">
                          <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                      </span>
                    </div>
                    <div class="panel-body">
                      <div class="form-group">
                          <div class="input-group input-large custom-date-range" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                              <input type="text" class="form-control dpd1" name="from">
                              <span class="input-group-addon">To</span>
                              <input type="text" class="form-control dpd2" name="to">
                          </div>
                      </div>
                    </section>
                    <section class="panel">
                      <div class="panel-heading">
                        VISA (need or not)
                        <span class="tools pull-right">
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                      </div>
                      <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-12">
                              <div class="col-md-4 radio-custom radio-success">
                                  <input type="radio" value="yes"  name="visa-yes" id="visa-yep">
                                  <label for="visa-yep">Yep</label>
                              </div>
                              <div class="col-md-2 radio-custom radio-danger">
                                  <input type="radio" checked value="no" name="visa-yes" id="visa-nope">
                                  <label for="visa-nope">Nope</label>
                              </div>
                            </div>
                        </div>
                      </div>
                    </section>
                    <section class="panel">
                      <div class="panel-heading">
                        OFFER
                        <span class="tools pull-right">
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                      </div>
                      <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-12">
                              <div class="col-md-4 radio-custom radio-success">
                                  <input type="radio" value="yes"  name="offer-yes" id="offer-yep">
                                  <label for="offer-yep">Yep</label>
                              </div>
                              <div class="col-md-2 radio-custom radio-danger">
                                  <input type="radio" checked value="no" name="offer-yes" id="offer-nope">
                                  <label for="offer-nope">Nope</label>
                              </div>
                            </div>
                        </div>
                      </div>
                    </section>
                      <section class="panel">
                        <div class="panel-heading">
                          Category
                          <span class="tools pull-right">
                              <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                          </span>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
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
                      </section>
                      <section class="panel">
                        <div class="panel-heading">
                          CONTINENTS
                          <span class="tools pull-right">
                              <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                          </span>
                        </div>
                        <div class="panel-body">
                          <div class="form-group icheck-row">
                              <div class="col-md-6">
                                  <input type="checkbox" class="iCheck-flat-green" >
                                  <label class="  control-label">Europe</label>
                              </div>
                              <div class="col-md-6">
                                  <input type="checkbox" class="iCheck-flat-green">
                                  <label class="  control-label">Azia</label>
                              </div>

                              <div class="col-md-6">
                                  <input type="checkbox" class="iCheck-flat-green" >
                                  <label class="  control-label">North America</label>
                              </div>
                              <div class="col-md-6">
                                  <input type="checkbox" class="iCheck-flat-green">
                                  <label class="  control-label">South America</label>
                              </div>
                              <div class="col-md-6">
                                  <input type="checkbox" class="iCheck-flat-green">
                                  <label class="  control-label">Africa</label>
                              </div>
                              <div class="col-md-6">
                                  <input type="checkbox" class="iCheck-flat-green">
                                  <label class="  control-label">Australia</label>
                              </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel">
                        <div class="panel-heading">
                          ADDS ONE
                          <span class="tools pull-right">
                              <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                          </span>
                        </div>
                        <div class="panel-body">
                          <div class="form-group icheck-row">
                                  <div class="col-md-6">
                                      <input type="checkbox" checked class="iCheck-flat-green" >
                                      <label class="  control-label">სასმელი</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="checkbox" checked class="iCheck-flat-green ">
                                      <label class="  control-label">Checkbox red</label>
                                  </div>

                                  <div class="col-md-6">
                                      <input type="checkbox" checked class="iCheck-flat-green" >
                                      <label class="  control-label">Checkbox blue</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="checkbox" checked class="iCheck-flat-green ">
                                      <label class="  control-label">Checkbox red</label>
                                  </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel">
                        <div class="panel-heading">
                          uploaded images
                          <span class="tools pull-right">
                              <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                          </span>
                        </div>
                        <div class="panel-body">

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
                                  <input id="file-2" class="file" type="file" multiple=true>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel">
                        <div class="panel-heading">
                          video link
                          <span class="tools pull-right">
                              <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                          </span>
                        </div>
                        <div class="panel-body">
                          <div class="form-group icheck-row">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="http://youtube.com" value="">
                            </div>
                          </div>
                        </div>
                      </section>
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
              </div>

            </form><!-- end form -->
            <footer>
                2016 &copy; Made with Love.
            </footer>
          </div><!-- end wrapper -->


        </div>
        <!-- body content end-->
    </section>

<?php include("footer.php"); ?>
