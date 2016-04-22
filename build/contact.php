<!DOCTYPE html>
<html>
  <?php include('head.php') ?>
  <body>
    <input type="checkbox" id="sidebar-toggler" name="name" value="" >
      <div class="page-wrap">
        <?php include('header.php'); ?>
      	<div class="wrapper" id="contact-page">
          <div id="map" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d33742.671049029675!2d41.62729854102992!3d41.624210420383214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sge!4v1460485643479" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class='container marginBottom'>
            <div class="col-md-3">
              <div class="text-center contact-title marginBottom">
                 <h2>კონტაქტი</h2>
              </div>
              <div class="address-info ">
                <p>
                  <i class="fa fa-location-arrow fa-lg"></i>
                  <span>საქართველო</span>,
                  <span>ბათუმი</span>
                </p>
                <p>
                  <i class="fa fa-home fa-lg"></i>
                  <span>კობალაძის #6</span>
                </p>
                <p>
                  <i class="fa fa-phone-square fa-lg"></i>
                  <span>+995 556 653 097</span>
                </p>
                <p>
                  <i class="fa fa-phone-square fa-lg"></i>
                  <span>+995 556 653 097</span>
                </p>
                <p>
                  <i class="fa fa-phone-square fa-lg"></i>
                  <span>+995 556 653 097</span>
                </p>
              </div>
            </div>
            <div class="col-md-9">
              <div class="text-center contact-title marginBottom">
                 <h2>დაგვიკავშირდით</h2>
              </div>
              <form  action="index.html" method="post" class="contact-us">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="სახელი" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="გვარი" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="სათაური">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment" placeholder="ტექსტი"></textarea required>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-default  pull-right send" id="" name="button">გაგზავნა</button>
                </div>
              </form>
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
