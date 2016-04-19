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
                    Dashboard
                </h3>

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
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
            <div class="right-bar">

            <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

            <ul class="nav nav-tabs nav-justified-">
                <li class="active">
                    <a href="#chat" data-toggle="tab">Chat</a>
                </li>
                <li class="">
                    <a href="#info" data-toggle="tab">Info</a>
                </li>
                <li class="">
                    <a href="#settings" data-toggle="tab">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active " id="chat">
                <div class="online-chat">
                    <div class="online-chat-container">
                        <div class="chat-list">
                            <h3>Chat list</h3>
                            <h5>34 Friends Online, 80 Offline</h5>
                            <a href="#" class="add-people tooltips" data-original-title="Add People" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="side-title">
                            <h2>online</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>

                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img1.jpg" alt="">
                                <i class="away dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="busy dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <div class="side-title">
                            <h2>Offline</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>
                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img1.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>


                </div>


            </div>

            <div role="tabpanel" class="tab-pane " id="info">
            <div class="chat-list info">
                <h3>Latest Information</h3>
                <a href="#" class="add-people tooltips" data-original-title="Refresh" data-toggle="tooltip" data-placement="left">
                    <i class="fa fa-repeat"></i>
                </a>
            </div>
            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Revenue</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value green-color">$12300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle purple-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Total Admin Template Sales
                            </span>
                            <span class="value purple-color">$40100</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle red-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Monty Revenue
                            </span>
                            <span class="value red-color">$322300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle blue-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value blue-color">$1520</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">

                <div class="side-title-alt">
                    <h2>Statistics</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                         Foreign Visit
                                    </span>
                            <small class="text-muted">25% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="foreign-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Montly Visit
                            </span>
                            <small class="text-muted">Average visit 12% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="monthly-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Unique Visit
                            </span>
                            <small class="text-muted">35% unique visitor </small>
                        </div>
                                <span class="thumb-small">
                                    <span id="unique-visit" class="chart"></span>
                                </span>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Notification</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-bell green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Meeting with John Doe at
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-users green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                3 membership request pending
                            </span>
                            <span class="value text-muted">John, Smith, Lira</span>
                        </div>
                    </li>
                </ul>

            </div>


            <div class="aside-widget">


                <div class="side-title-alt">
                    <h2>System</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Received database error report from hosting provider
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Hosting Renew notification
                            </span>
                            <span class="value text-muted">12.00 pm</span>
                        </div>
                    </li>

                </ul>
            </div>


            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Work Progress</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list sale-monitor">
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Server Setup and Configuration</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">50% completed</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Website Design & Development</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">85% completed</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            </div>

            <div role="tabpanel" class="tab-pane " id="settings">
                <div class="chat-list bottom-border settings-head">
                    <h3>Account Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Make my feature post public?
                            </span>
                            <small class="text-muted">Everyone will be able to see, like, comment
                                and share your feature post.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show offline Contacts
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small2" checked/>
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Everyone will see my stuff
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small3"/>
                        </span>
                    </li>

                </ul>

                <div class="chat-list bottom-border settings-head">
                    <h3>General Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show me Online
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small4" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Status visible to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small5" />
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Show my work progess to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small6" checked/>
                        </span>
                    </li>

                </ul>

            </div>

            </div>
            </div>
            </div>
            <!-- Right Slidebar end -->

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
