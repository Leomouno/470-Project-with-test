  <?php  $this->view("music/header",$data); ?>
      <!-- MAIN -->
      <!-- banner area -->
  			<div class="banner">
  				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  					<!-- Wrapper for slides -->
  					<div class="carousel-inner" role="listbox">
  						<div class="item active">
  							<img src="<?=ASSETS?>music/img/banner/b1.jpg" alt="...">
  							<div class="container">
  								<!-- banner caption -->
  								<div class="carousel-caption slide-one">
  									<!-- heading -->
  									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Melodi For You!</h2>
  									<!-- paragraph -->
  									<h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>

  								</div>
  							</div>
  						</div>
  						<div class="item">
  							<img src="<?=ASSETS?>music/img/banner/b2.jpg" alt="...">
  							<div class="container">
  								<!-- banner caption -->
  								<div class="carousel-caption slide-two">
  									<!-- heading -->
  									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
  									<!-- paragraph -->
  									<h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>

  								</div>
  							</div>
  						</div>
  					</div>

  					<!-- Controls -->
  					<a class="left carousel-control" href="scarousel-example-generic" role="button" data-slide="prev">
  						<span class="fa fa-arrow-left" aria-hidden="true"></span>
  					</a>
  					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  						<span class="fa fa-arrow-right" aria-hidden="true"></span>
  					</a>
  				</div>
  			</div>
  			<!--/ banner end -->

  			<!-- block for animate navigation menu -->
  			<div class="nav-animate"></div>

  			<!-- Hero block area -->
  			<div id="latestalbum" class="hero pad">
  				<div class="container">
  					<!-- hero content -->
  					<div class="hero-content ">
  						<!-- heading -->
  						<h2>Latest Album</h2>
  						<hr>
  						<!-- paragraph -->
  						<p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p>
  					</div>
  					<!-- hero play list -->
  					<div class="hero-playlist">
  						<div class="row">
  							<div class="col-md-6 col-sm-6">
  								<!-- music album image -->
  								<div class="figure">
  									<!-- image -->
  									<img class="img-responsive" src="<?=ASSETS?>music/img/album/1.jpg" alt="" />
  									<!-- disk image -->
  									<img class="img-responsive disk" src="<?=ASSETS?>music/img/album/disk.png" alt="" />
  								</div>
  								<!-- album details -->
  								<div class="album-details">
  									<!-- title -->
  									<h4>Black Bird</h4>
  									<!-- composed by -->
  									<h5>Alter Brigde</h5>

  									<!-- button -->
  									<audio id="audio">
  	                    	<source src="<?=ASSETS?>music/audio/audio.mp3" type="audio/mpeg" type="audio">
  	                    </audio>
  											<button type="button" name="button" class="a btn btn-lg btn-theme" id="playNowBtn" onclick="playPause()"><i class="fa fa-play"></i>&nbsp; Play Now</a></button>

                        <?php if(isset($_SESSION['user_name'])): ?>
                       <a class="a btn btn-lg btn-theme" href="<?=ROOT?>subscription">Supscription</a>
                       <?php else: ?>
                       <a class="a btn btn-lg btn-theme" href="<?=ROOT?>login">Supscription</a>
                       <?php endif; ?>
  								</div>
  							</div>
  							<div class="col-md-6 col-sm-6">
  								<!-- play list -->
  								<div class="playlist-content">
  									<ul class="list-unstyled">
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track One</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>: Dawn</p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="#"><i class="fa fa-play"></i></a>
  												<a href="#"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track Two</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>:Alter Bridge </p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="#"><i class="fa fa-play"></i></a>
  												<a href="#"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track Three</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>: Alter Bridge</p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="#"><i class="fa fa-play"></i></a>
  												<a href="#"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track Four</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>: Alter Bridge</p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="<?=ASSETS?>music/#"><i class="fa fa-play"></i></a>
  												<a href="<?=ASSETS?>music/#"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track Five</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>: Alter Bridge</p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="<?=ASSETS?>music/#"><i class="fa fa-play"></i></a>
  												<a href="<?=ASSETS?>music/#"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track Six</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>: Alter Bridge</p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="<?=ASSETS?>music/#"><i class="fa fa-play"></i></a>
  												<a href="<?=ASSETS?>music/#"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track Seven</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>: Alter Bridge</p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="#"><i class="fa fa-play"></i></a>
  												<a href="/"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  										<li class="playlist-number">
  											<!-- song information -->
  											<div class="song-info">
  												<!-- song title -->
  												<h4>Melodi Song Track Eight</h4>
  												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Artist</strong>: Alter Bridge</p>
  											</div>
  											<!-- music icon -->
  											<div class="music-icon">
  												<a href="#"><i class="fa fa-play"></i></a>
  												<a href="#"><i class="fa fa-pause"></i></a>
  											</div>
  											<div class="clearfix"></div>
  										</li>
  									</ul>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<!--/ hero end -->




  			<!-- featured abbum -->
  			<div class="featured " id="featuredalbum">
  				<div class="container">
  					<!-- default heading -->
  					<div class="default-heading">
  						<!-- heading -->
  						<h2>Featured Album</h2>
  					</div>
  					<!-- featured album elements -->
  					<div class="featured-element">
  						<div class="row">
  							<div class="col-md-4 col-sm-6">
  								<!-- featured item -->
  								<div class="featured-item ">
  									<!-- image container -->
  									<div class="figure">
  										<!-- image -->
  										<img class="img-responsive" src="<?=ASSETS?>music/img/featured/1.jpg" alt="" />

  									</div>
  									<!-- featured information -->
  									<div class="featured-item-info">
  										<!-- featured title -->
  										<h4>Power Pop</h4>

  									</div>
  								</div>
  							</div>
  							<div class="col-md-4 col-sm-6">
  								<!-- featured item -->
  								<div class="featured-item ">
  									<!-- image container -->
  									<div class="figure">
  										<!-- image -->
  										<img class="img-responsive" src="<?=ASSETS?>music/img/featured/2.jpg" alt="" />

  									</div>


  									<!-- featured information -->
  									<div class="featured-item-info">
  										<!-- featured title -->
  										<h4>Bad Brains</h4>
  									</div>
  								</div>
  							</div>
  							<div class="col-md-4 col-sm-6">
  								<!-- featured item -->
  								<div class="featured-item ">
  									<!-- image container -->
  									<div class="figure">
  										<!-- image -->
  										<img class="img-responsive" src="<?=ASSETS?>music/img/featured/3.jpg" alt="" />
  									</div>
  									<!-- featured information -->
  									<div class="featured-item-info">
  										<!-- featured title -->
  										<h4>The Mars Volta</h4>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>


        <?php  $this->view("music/footer",$data); ?>
