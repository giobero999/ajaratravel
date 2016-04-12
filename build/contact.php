<!DOCTYPE html>
<html>
  <?php include('head.php') ?>
  <body>
    <input type="checkbox" id="sidebar-toggler" name="name" value="" >
      <div class="page-wrap">
      	<div class="wrapper" id="contact-page">
          <?php include('header.php'); ?>
          <div id="map" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d33742.671049029675!2d41.62729854102992!3d41.624210420383214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sge!4v1460485643479" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class='container marginTop'>
            <div class='row no-gutter'>
                <div class="col-md-12">
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
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col-md-6">
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
