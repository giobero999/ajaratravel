<!DOCTYPE html>
<html lang="en">

 <?php include('head.php'); ?>

<body>
	<?php include('header.php'); ?>
	<div class="wrapper ">
			<div class="row slider no-gutter">
				<div class="col-xs-12 no-gutter">
					<ul id="slippry-demo">
					  <li>
					    <a href="#slide1"><img src="img/Georgia.jpg" alt="Welcome to Slippry!"></a>
					  </li>
						<li>
					    <a href="#slide1"><img src="img/paris.jpg" alt="Welcome to Slippry!"></a>
					  </li>
						<li>
					    <a href="#slide3"><img src="img/2.jpg" ></a>
					  </li>
					</ul>
				</div>
			</div>
			<div class="container marginTop">
				<div class="row filter no-gutter">
						<div class="col-md-12 no-gutter" style="margin-top: -205px !important;" >
							<input id="tab1" type="radio" name="tabs"  checked>
							<label for="tab1" class="black"> ძიება</label>
							<input id="tab2" type="radio" name="tabs">
							<label for="tab2" class="black"> დაწვრილებით</label>
							<section id="content1" class="black">
								<div class="row">
									<div class="col-md-12">
										<form action="" class="form-horizontal" autocomplete="off">
											<div class="form-group">
												<div class="col-md-3">
													<input type="text" class="form-control" id="destination" placeholder="Type Your Destination" >
												</div>
												<div class="col-md-2">
													<input type="text" class="form-control from-date" id="from" placeholder="From">
												</div>
												<div class="col-md-2">
													<input type="text" class="form-control to-date" id="to" placeholder="To">
												</div>
												<div class="col-md-3">
													<input type="text" class="" id="ion-default">
												</div>
												<div class="col-md-2">
													<input type="submit" class="form-control" id="search" value="search">
												</div>
											</div>
										</form>
									</div>
								</div>
							</section>

							<section id="content2" class="black">
								<div class="row">
									<div class="col-md-12">
										<form action="" class="form-horizontal" autocomplete="off">
										<div class="form-group advanced">
											<div class="col-sm-6 col-md-3">
												<select name="" class="select" >
													<option value="">All Destinations</option>
													<option value="">Europe</option>
													<option value="">Asia</option>
													<option value="">America</option>
												</select>
											</div>
											<div class="col-sm-6 col-md-3">
												<select name="" class="select" >
													<option value="">All Typologies</option>
													<option value="">Relax</option>
													<option value="">Cultural</option>
													<option value="">Luxury</option>
													<option value="">Sport</option>
												</select>
											</div>
											<div class="col-sm-6 col-md-3">
												<select name="" class="select" >
													<option value="">All Duration</option>
													<option value="">1 - 3 Days</option>
													<option value="">2 - 6 Days</option>
													<option value="">3 - 9 Days</option>
												</select>
											</div>
											<div class="col-sm-6 col-md-3">
												<select name="" class="select" >
													<option value="">All People</option>
													<option value="">1 person</option>
													<option value="">2 person</option>
													<option value="">3 person</option>
													<option value="">20 person</option>
												</select>
											</div>
										</div>
										<div class="form-group ">
											<div class="col-md-3">
												<input type="text" class="form-control from-date" placeholder="From">
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control to-date"  placeholder="To">
											</div>
											<div class="col-md-3">
												<input type="text" class="" id="ion-advanced">
											</div>
											<div class="col-md-3">
												<input type="submit" class="form-control" id="search" value="search">
											</div>
										</div>
										</form>
									</div>
								</div>
							</section>
						</div>
				</div>
			</div>
			<div class="container">
				<div class="row new-tour">
					<div class="col-md-12 ">
						<div>
							<h2 class="top-tour-title">კატეგორიები</h2>
							<div class="line"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="owl-carousel categories">
						<div><a href=""><i class="fa fa-tree fa-2x"></i><p>დასვენება</p></a></div>
						<div><a href=""><i class="fa fa-futbol-o fa-2x"></i><p>სპორტი</p></a></div>
						<div><a href=""><i class="fa fa-anchor fa-2x"></i><p>ზღვა</p></a></div>
						<div><a href=""><i class="fa fa-graduation-cap fa-2x"></i><p>შემეცნებითი</p></a></div>
						<div><a href=""><i class="fa fa-microphone fa-2x"></i><p>კონცერტი</p></a></div>
						<div><a href=""><i class="fa fa-ship fa-2x"></i><p>კრუიზები</p></a></div>
						<div><a href=""><i class="fa fa-hourglass-start fa-2x"></i><p>სხვა</p></a></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="container marginTop marginBottom">
				<div class="row new-tour">
					<div class="col-md-12 ">
						<div>
							<h2 class="top-tour-title">პოპულარული ტურები</h2>
							<div class="line"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="container marginTop marginBottom">
				<div class="row  ">
					<div class="col-md-12">
						<div class="owl-carousel top-tours">
							<div class="single-tour">
								<i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
								<h3><span>1200</span> GEL</h3>
								<!-- <h6><i class="fa fa-dollar"></i>details</h6> -->
								<img src="img/gallery/berlin.jpg" alt="">
								<p><span id="tour-title">ბერლინი</span></p>
								<div class="caption">
									<div class="cont-relax">
										<h4 id="continent"><i class="fa fa-location-arrow"></i> ევროპა</h4>
									</div>
									<div>
										<h4><i class="fa fa-info"></i> დასვენება</h4>
									</div>
								</div>
								<h5 id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quibusdam fugit laborum iure cum nesciunt incidunt neque ad ab autem obcaecati eligendi facilis, natus, aut placeat, doloribus, unde dolore? Porro.</h5>
								<button class="">სრულად</button>
								<i class="fa fa-film fa-md video"></i>
							</div>
							<div class="single-tour">
								<i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
								<h3><i class="fa fa-dollar"></i>1200</h3>
								<img src="img/gallery/roma.jpg" alt="">
								<p><span id="tour-title">ბერლინი</span></p>
								<div class="caption">
									<div class="cont-relax">
										<h4 id="continent"><i class="fa fa-location-arrow"></i> ევროპა</h4>
									</div>
									<div>
										<h4><i class="fa fa-info"></i> დასვენება</h4>
									</div>
								</div>
								<h5 id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quibusdam fugit laborum iure cum nesciunt incidunt neque ad ab autem obcaecati eligendi facilis, natus, aut placeat, doloribus, unde dolore? Porro.</h5>
								<button class="">სრულად</button>
								<i class="fa fa-film fa-md video"></i>
							</div>
							<div class="single-tour">
								<i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
								<h3><span>1200</span> GEL</h3>
								<img src="img/gallery/london.jpg" alt="">
								<p><span id="tour-title">ლონდონი</span></p>
								<div class="caption">
									<div class="cont-relax">
										<h4 id="continent"><i class="fa fa-location-arrow"></i> ევროპა</h4>
									</div>
									<div>
										<h4><i class="fa fa-info"></i> დასვენება</h4>
									</div>
								</div>
								<h5 id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quibusdam fugit laborum iure cum nesciunt incidunt neque ad ab autem obcaecati eligendi facilis, natus, aut placeat, doloribus, unde dolore? Porro.</h5>
								<button class="">სრულად</button>
								<i class="fa fa-film fa-md video"></i>
							</div>
							<div class="single-tour">
								<i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
								<h3><span>1200</span> GEL</h3>
								<img src="img/gallery/roma.jpg" alt="">
								<p><span id="tour-title">რომა</span></p>
								<div class="caption">
									<div class="cont-relax">
										<h4 id="continent"><i class="fa fa-location-arrow"></i> ევროპა</h4>
									</div>
									<div>
										<h4><i class="fa fa-info"></i> დასვენება</h4>
									</div>
								</div>
								<h5 id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quibusdam fugit laborum iure cum nesciunt incidunt neque ad ab autem obcaecati eligendi facilis, natus, aut placeat, doloribus, unde dolore? Porro.</h5>
								<button class="">სრულად</button>
								<i class="fa fa-film fa-md video"></i>
							</div>
							<div class="single-tour">
								<i class="fa fa-heart-o fa-heart fa-2x favorite"></i>
								<h3><i class="fa fa-dollar"></i>1200</h3>
								<img src="img/gallery/roma.jpg" alt="">
								<p><span id="tour-title">ბერლინი</span></p>
								<div class="caption">
									<div class="cont-relax">
										<h4 id="continent"><i class="fa fa-location-arrow"></i> ევროპა</h4>
									</div>
									<div>
										<h4><i class="fa fa-info"></i> დასვენება</h4>
									</div>
								</div>
								<h5 id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quibusdam fugit laborum iure cum nesciunt incidunt neque ad ab autem obcaecati eligendi facilis, natus, aut placeat, doloribus, unde dolore? Porro.</h5>
								<button class="">სრულად</button>
								<i class="fa fa-film fa-md video"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="container marginTop marginBottom">
				<div class="row new-tour ">
					<div class="col-md-12 ">
						<div>
							<h2 class="top-tour-title">ახალი ტურები</h2>
							<div class="line"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="container ">
					<div class=" new-tour-panel">
						<div class="col-md-3 left-filter black">
							<div class="row no-gutter">
								<h4 id="search-title">Advanced Search</h4>
								<form action="" class="">
									<div class="col-md-12 el-marginBottom">
										<select name="" class="select" >
											<option value="">All Destinations</option>
											<option value="">Europe</option>
											<option value="">Asia</option>
											<option value="">America</option>
										</select>
									</div>
									<div class="col-sm-12 el-marginBottom">
										<select name="" class="select" >
											<option value="">All Typologies</option>
											<option value="">Relax</option>
											<option value="">Cultural</option>
											<option value="">Luxury</option>
											<option value="">Sport</option>
										</select>
									</div>
									<div class="col-sm-12 el-marginBottom">
										<select name="" class="select" >
											<option value="">All Duration</option>
											<option value="">1 - 3 Days</option>
											<option value="">2 - 6 Days</option>
											<option value="">3 - 9 Days</option>
										</select>
									</div>
									<div class="col-sm-12 el-marginBottom">
										<select name="" class="select" >
											<option value="">All People</option>
											<option value="">1 person</option>
											<option value="">2 person</option>
											<option value="">3 person</option>
											<option value="">20 person</option>
										</select>
									</div>
									<div class="col-sm-6 el-marginBottom">
										<input type="text" class="form-control from-date" id="left-from" placeholder="From">
									</div>
									<div class="col-sm-6 el-marginBottom">
										<input type="text" class="form-control to-date" id="left-to" placeholder="To">
									</div>
									<div class="col-sm-12 el-marginBottom">
										<input type="text" class="" id="ion-left">
									</div>
									<div class="col-md-12 el-marginBottom">
										<input type="submit" class="form-control" id="search" value="search">
									</div>
								</form>
							</div>
						</div>
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
													<button type="button" class="btn btn-default tool" title="კულტურა">
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
													<button type="button" class="btn btn-default tool" title="ლუქსი">
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
							</div>
						</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="container marginTop marginBottom">
				<div class="row new-tour">
					<div class="col-md-12 marginTop">
						<div>
							<h2 class="top-tour-title">მსოფლიო</h2>
							<div class="line"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row no-gutter">
					<div class="owl-carousel continental">
						<div class="continent">
							<h3 class="uppercase">ევროპა</h3>
							<a href="#" class="view-all uppercase">ყველა</a>
							<div class="cont-img">
								<img src="img/gallery/berlin.jpg" alt="">
							</div>
						</div>

						<div class="continent">
							<h3 class="uppercase">ევროპა</h3>
							<a href="#" class="view-all uppercase">ყველა</a>
							<div class="cont-img">
								<img src="img/gallery/berlin.jpg" alt="">
							</div>
						</div>

						<div class="continent">
							<h3 class="uppercase">ევროპა</h3>
							<a href="#" class="view-all uppercase">ყველა</a>
							<div class="cont-img">
								<img src="img/gallery/berlin.jpg" alt="">
							</div>
						</div>

						<div class="continent">
							<h3 class="uppercase">აზია</h3>
							<a href="#" class="view-all uppercase">ყველა</a>
							<div class="cont-img">
								<img src="img/1.jpg" alt="">
							</div>
						</div>
						<div class="continent">
							<h3 class="uppercase">აზია</h3>
							<a href="#" class="view-all uppercase">ყველა</a>
							<div class="cont-img">
								<img src="img/1.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="marginBottom"></div>
<?php include('footer.php'); ?>

</body>


</html>
