<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Cover Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <!-- background-repeat: no-repeat;
    background-position: center; -->
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

<body class="d-flex h-100% text-center text-black  bg-image BckGrndImg"   style="height: 100vh;">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
          <div>
            <!-- <h3 class="float-md-start mb-0"><img src="image\WaterBearerTransparent.png">Water~Bearer</h3> -->
            <nav class="nav nav-masthead justify-content-center float-md-center">
              <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#"><img src="image\WaterBearerTransparent.png">Water~Bearer Prepared Still Water and Ice</a>
              <!-- <a class="nav-link fw-bold py-1 px-0" href="#">Products</a>
              <a class="nav-link fw-bold py-1 px-0" href="#">Analysis</a>
              <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a> -->
            </nav>
          </div>
        </header>
        <br>
        <br>
        <!-- sticky-top -->
        <!-- <nav class="navbar navbar-expand-md navbar-dark bg-transparent ">

        		<div class="container">
        			<a  href="" class="navbar-brand"><img src="image\WaterBearerTransparent.png">Prepared Still H2O Provider<a/>

        			<button  type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
        				<span class="navbar-toggler-icon"></span>
        			</button>
        		</div>
        		<div class="collapse navbar-collapse" id="navbarResponsive">
        			<ul class="navbar-nav ml-auto">
        				<li class="nav-item">
        					<a href="#" class="nav-link indexItem active">Home</a>
        				</li>
        				<li class="nav-item">
        					<a href="#" class="nav-link indexItem">Products</a>
        				</li>
        				<li class="nav-item">
        					<a href="#" class="nav-link indexItem">Analysis</a>
        				</li>
        				<li class="nav-item">
        					<a href="#" class="nav-link indexItem ">Contact</a>
        				</li>
        			</ul>
        		</div>
        </nav> -->

        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">

            <div class="carousel-item active">
              <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
              <!-- <img src="pic_trulli.jpg" alt="Italian Trulli"> -->
              <img src="image/10LiterQuickserver500x500.jpeg" alt="Italian Trulli">

              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>10 Liter re-fill bottles</h1>
                  <p>'High quality and light weight 10 liter water bottles filled with pure prepared still water for only R160 '.</p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
              <img src="image/20LiterQuickserver500x500.png" alt="Italian Trulli">

              <div class="container">
                <div class="carousel-caption">
                  <h1>20 Liter re-fill bottles</h1>
                  <p>High quality and light weight 20 liter water bottles filled with pure prepared still water for only R200</p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="image/foto1.png" alt="Water Bottles">

              <div class="container">
                <div class="carousel-caption">
                  <h1>PET Bottles</h1>
                  <p>500ml, 7l and 10l PET bottle products available</p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="image/foto2.png" alt="Water Bottles">

              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>PET Bottles</h1>
                  <p>500ml, 7l and 10l PET bottle products available</p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
                </div>
              </div>
            </div>

          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> <!-- //Carousel -->
        <br>
        <br>
        <br>



        <!-- Marketing messaging and featurettes
          ================================================== -->
          <!-- Wrap the rest of the page in another container to center all the content. -->

          <!-- <div class="container marketing"> -->

            <!-- Three columns of text below the carousel -->



            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Deliveries <span class="text-muted">Save the trip</span></h2>
                <p class="lead">Have your water containers filled on-site</p>
              </div>
              <div class="col-md-5">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="image/WaterDeliveriesWBNoLogoTransparentGimp.png">
              </div>
            </div>

            <hr class="featurette-divider">
            <!-- Analysis -->
            <div class="row featurette ">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Analysis <span class="text-muted">Water Testing</span></h2>
                <p class="lead">Water testing done by acredited laboratoriums</p>
              </div>

              <div class="col-md-5">
                <table width="50%">

                  <?php include 'phpDocs/analysis.php';?>
                </table>
                <br>

                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                <!-- <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="image/WaterDeliveriesWBNoLogoTransparentGimp.png"> -->
              </div>
              <hr class="featurette-divider">
            </div>

            <!-- <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
              </div>
              <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

              </div>
            </div>

            <hr class="featurette-divider"> -->

            <!-- /END THE FEATURETTES -->

          <!-- </div> -->
          <!-- /.container -->





        <!-- <main class="px-3 text-black">
          <h1>Cover your page.</h1>
          <p class="lead">Cover is a one-page template for buildin simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        </main> -->


        <div class="row">
          <div class="col-lg-12">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <h2 class="fw-normal">Agent</h2>
            <div class="AgentDetails">
              <img class="rounded-circle" src="image\ProfilePic3small.jpeg">
              <p>Abraham</p>
              <p>cell 083 656 8563</p>
              <p>email water@water-bearer.co.za</p>
            </div>
            <button class="btn-secondary">
              <p><a href="#">View details</a></p>
            </button>
          </div>

        </div><!-- /.row -->

        <footer class="mt-auto text-white-50">
          <p>Website for Water~Bearer PS, by <a href="#" class="text-white">AG</a>.</p>
        </footer>
    </div>
      <script src="script.js"></script>
      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
