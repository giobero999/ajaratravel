<!DOCTYPE html>
<html>
  <?php include('head.php') ?>
  <body>
    <input type="checkbox" id="sidebar-toggler" name="name" value="" >
      <div class="page-wrap">
        <?php include('header.php'); ?>
  	<div class="wrapper" id="tours-page">
      <div class="page-cover tour-cover">
        <h3>ტურები</h3>
      </div>

      <div class='container marginTop'>
        <div class='row'>
            <div class="col-md-12">
              <div class="container ">
                  <div class=" new-tour-panel">
                    <!-- left filter start -->
                    <div class="col-md-3 left-filter black">
                      <div class="row no-gutter">
                        <h4 id="search-title">ძიება</h4>
                        <form action="" class="">
                          <div class="col-md-12 el-marginBottom">
                            <select name="" class="select" >
                              <option value="">ყველა მიმართულება</option>
                              <option value="">Europe</option>
                              <option value="">Asia</option>
                              <option value="">America</option>
        										</select>
        									</div>
        									<div class="col-sm-12 el-marginBottom">
        										<select name="" class="select" >
                              <option value="">ყველა </option>
                              <option value="">Relax</option>
                              <option value="">Cultural</option>
                              <option value="">Luxury</option>
                              <option value="">Sport</option>
        										</select>
        									</div>
        									<div class="col-sm-12 el-marginBottom">
        										<select name="" class="select" >
                              <option value="">ყველა დროით</option>
                              <option value="">1 - 3 Days</option>
                              <option value="">2 - 6 Days</option>
                              <option value="">3 - 9 Days</option>
        										</select>
        									</div>
        									<div class="col-sm-12 el-marginBottom">
        										<select name="" class="select" >
        											<option value="">რაოდენობა</option>
        											<option value="">1 person</option>
        											<option value="">2 person</option>
        											<option value="">3 person</option>
        											<option value="">20 person</option>
        										</select>
        									</div>
        									<div class="col-sm-6 el-marginBottom">
        										<input type="text" class="form-control from-date" id="left-from" placeholder="დან">
        									</div>
        									<div class="col-sm-6 el-marginBottom">
        										<input type="text" class="form-control to-date" id="left-to" placeholder="მდე">
        									</div>
        									<div class="col-sm-12 el-marginBottom">
        										<input type="text" class="" id="ion-left">
        									</div>
        									<div class="col-md-12 el-marginBottom">
        										<input type="submit" class="form-control" id="search" value="მოძებნე">
        									</div>
                        </form>
                      </div>
                    </div><!-- left filter END -->

                    <!-- tours start -->
                    <div class="col-md-9 new-tour">
                      <div class="new-tour-els">
                        <div class="row single-el no-gutter">
                          <div class="col-md-4 no-gutter" >
                            <i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
                            <div class="new-tour-img">
                              <img src="img/gallery/roma.jpg" alt="" />
                            </div>
                          </div>
                          <div class="col-md-6 no-gutter">
                            <div class="text">
                              <h3 id="title">რომი</h3>
                              <div class="new-post-date">
                                <h5>22.04.2016</h5>
                              </div>
                              <p id="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam recusandae ducimus illo laboriosam illum. Sunt, architecto, exercitationem. Voluptates aspernatur nemo, consequatur, omnis quibusdam ea maiores ad dolorem adipisci delectus quasi.
                              </p>
                              <ul>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="ევროპა">
                                    <i class="fa fa-location-arrow fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="დასვენება">
                                    <i class="fa fa-tree fa-md"></i></a>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="3 ადამიანი">
                                    <i class="fa fa-users fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="2-5 დღე">
                                    <i class="fa fa-calendar fa-md"></i>
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-2 no-gutter">
                            <div class="new-price orange" class="">
                              <div>
                                <div id="price">
                                  <h1>1000</h1>
                                  <h2>GEL</h2>
                                </div>
                                <a href="">სრულად</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row single-el no-gutter">
                          <div class="col-md-4 no-gutter" >
                            <div class="new-tour-img">
                              <i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
                              <img src="img/gallery/roma.jpg" alt="" />
                            </div>
                          </div>
                          <div class="col-md-6 no-gutter">
                            <div class="text">
                              <h3 id="title">რომი</h3>
                              <div class="new-post-date">
                                <h5>22.04.2016</h5>
                              </div>
                              <p id="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam recusandae ducimus illo laboriosam illum. Sunt, architecto, exercitationem. Voluptates aspernatur nemo, consequatur, omnis quibusdam ea maiores ad dolorem adipisci delectus quasi.
                              </p>
                              <ul>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="აზია">
                                    <i class="fa fa-location-arrow fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="ზღვა">
                                    <i class="fa fa-anchor fa-md"></i></a>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="3 ადამიანი">
                                    <i class="fa fa-users fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="2-5 დღე">
                                    <i class="fa fa-calendar fa-md"></i>
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-2 no-gutter">
                            <div class="new-price red" class="">
                              <div>
                                <div id="price">
                                  <h1>1000</h1>
                                  <h2>GEL</h2>
                                </div>
                                <a href="#">სრულად</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row single-el no-gutter">
                          <div class="col-md-4 no-gutter" >
                            <div class="new-tour-img">
                              <i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
                              <img src="img/gallery/london.jpg" alt="" />
                            </div>
                          </div>
                          <div class="col-md-6 no-gutter">
                            <div class="text">
                              <h3 id="title">რომი</h3>
                              <p id="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam recusandae ducimus illo laboriosam illum. Sunt, architecto, exercitationem. Voluptates aspernatur nemo, consequatur, omnis quibusdam ea maiores ad dolorem adipisci delectus quasi.
                              </p>
                              <ul>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="აზია">
                                    <i class="fa fa-location-arrow fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="სპორტი">
                                    <i class="fa fa-futbol-o fa-md"></i></a>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="3 ადამიანი">
                                    <i class="fa fa-users fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="2-5 დღე">
                                    <i class="fa fa-calendar fa-md"></i>
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-2 no-gutter">
                            <div class="new-price blue " class="">
                              <div style="">
                                <div id="price">
                                  <h1>1000</h1>
                                  <h2>GEL</h2>
                                </div>
                                <a href="#">სრულად</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row single-el no-gutter">
                          <div class="col-md-4 no-gutter" >
                            <div class="new-tour-img">
                              <i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
                              <img src="img/gallery/london.jpg" alt="" />
                            </div>
                          </div>
                          <div class="col-md-6 no-gutter">
                            <div class="text">
                              <h3 id="title">რომი</h3>
                              <div class="new-post-date">
                                <h5>22.04.2016</h5>
                              </div>
                              <p id="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam recusandae ducimus illo laboriosam illum. Sunt, architecto, exercitationem. Voluptates aspernatur nemo, consequatur, omnis quibusdam ea maiores ad dolorem adipisci delectus quasi.
                              </p>
                              <ul>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="აზია">
                                    <i class="fa fa-location-arrow fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="შემეცნებითი">
                                    <i class="fa fa-graduation-cap fa-md"></i></a>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="3 ადამიანი">
                                    <i class="fa fa-users fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="2-5 დღე">
                                    <i class="fa fa-calendar fa-md"></i>
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-2 no-gutter">
                            <div class="new-price green " class="">
                              <div style="">
                                <div id="price">
                                  <h1>1000</h1>
                                  <h2>GEL</h2>
                                </div>
                                <a href="#">სრულად</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row single-el no-gutter">
                          <div class="col-md-4 no-gutter" >
                            <div class="new-tour-img">
                              <i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
                              <img src="img/gallery/london.jpg" alt="" />
                            </div>
                          </div>
                          <div class="col-md-6 no-gutter">
                            <div class="text">
                              <h3 id="title">რომი</h3>
                              <p id="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam recusandae ducimus illo laboriosam illum. Sunt, architecto, exercitationem. Voluptates aspernatur nemo, consequatur, omnis quibusdam ea maiores ad dolorem adipisci delectus quasi.
                              </p>
                              <ul>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="აზია">
                                    <i class="fa fa-location-arrow fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="კონცერტი">
                                    <i class="fa fa-microphone fa-md"></i></a>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="3 ადამიანი">
                                    <i class="fa fa-users fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="2-5 დღე">
                                    <i class="fa fa-calendar fa-md"></i>
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-2 no-gutter">
                            <div class="new-price purple " class="">
                              <div style="">
                                <div id="price">
                                  <h1>1000</h1>
                                  <h2>GEL</h2>
                                </div>
                                <a href="#">სრულად</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row single-el no-gutter">
                          <div class="col-md-4 no-gutter" >
                            <div class="new-tour-img">
                              <i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
                              <img src="img/gallery/london.jpg" alt="" />
                            </div>
                          </div>
                          <div class="col-md-6 no-gutter">
                            <div class="text">
                              <h3 id="title">რომი</h3>
                              <div class="new-post-date">
                                <h5>22.04.2016</h5>
                              </div>
                              <p id="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam recusandae ducimus illo laboriosam illum. Sunt, architecto, exercitationem. Voluptates aspernatur nemo, consequatur, omnis quibusdam ea maiores ad dolorem adipisci delectus quasi.
                              </p>
                              <ul>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="აზია">
                                    <i class="fa fa-location-arrow fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="სხვა">
                                    <i class="fa fa-hourglass-start fa-md"></i></a>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="3 ადამიანი">
                                    <i class="fa fa-users fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="2-5 დღე">
                                    <i class="fa fa-calendar fa-md"></i>
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-2 no-gutter">
                            <div class="new-price purple " class="">
                              <div style="">
                                <div id="price">
                                  <h1>1000</h1>
                                  <h2>GEL</h2>
                                </div>
                                <a href="#">სრულად</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row single-el no-gutter">
                          <div class="col-md-4 no-gutter" >
                            <div class="new-tour-img">
                              <i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
                              <img src="img/gallery/roma.jpg" alt="" />
                            </div>
                          </div>
                          <div class="col-md-6 no-gutter">
                            <div class="text">
                              <h3 id="title">რომი</h3>
                              <p id="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam recusandae ducimus illo laboriosam illum. Sunt, architecto, exercitationem. Voluptates aspernatur nemo, consequatur, omnis quibusdam ea maiores ad dolorem adipisci delectus quasi.
                              </p>
                              <ul>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="აზია">
                                    <i class="fa fa-location-arrow fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="კრუიზი">
                                    <i class="fa fa-ship fa-md"></i></a>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="3 ადამიანი">
                                    <i class="fa fa-users fa-md"></i>
                                  </button>
                                </li>
                                <li>
                                  <button type="button" class="btn btn-default tool" title="2-5 დღე">
                                    <i class="fa fa-calendar fa-md"></i>
                                  </button>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-2 no-gutter">
                            <div class="new-price red">
                              <div style="">
                                <div id="price">
                                  <h1>1000</h1>
                                  <h2>GEL</h2>
                                </div>
                                <a href="#">სრულად</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--  END Tours list-->

                    <!-- pagination -->
                    <div class='col-xs-12'>
                      <div class="container">
                        
                          <div class="text-center">
                            <nav>
                            <ul class="pagination">
                              <li>
                                <a href="#" aria-label="Previous">
                                  <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                </a>
                              </li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li>
                                <a href="#" aria-label="Next">
                                  <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                          </div>

                      </div>
          					</div>
                </div>

              </div>

            </div>
        </div>
      </div>
    </div>
    <div class="marginBottom"></div>

  <?php include('footer.php') ?>
  <?php include('sidebar.php') ?>
  </div>
  </body>
</html>
