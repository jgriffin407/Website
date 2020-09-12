<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>tindog | Meet New and Interesting Dogs Near You!</title>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
  <!--Bootstrap CDN & Local CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!--Font Awesome Glyphs-->
  <script src="https://kit.fontawesome.com/d3308abf92.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><u>NOTE</u></strong> This website is for demonstration purposes only. None of the links work at this time.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <section class = "colored-section" id="title">
    <div class="container-fluid">

      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">tindog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cta">Download</a>
            </li>
          </ul>
        </div>
      </nav>



      <!-- Title -->

      <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">Meet new and interesting dogs nearby.</h1>
          <button type="button" class="btn btn-lg btn-dark download-button"><i class="fab fa-apple"></i> Download</button>
          <button type="button" class="btn btn-lg btn-outline-light download-button"><i class="fab fa-google-play"></i> Download</button>
        </div>
        <div class="col-lg-6">
          <img class="title-image" src="images/iphone6.png" alt="iphone-mockup">
        </div>
      </div>
    </div>
  </section>


  <!-- Features -->

  <section class = "white-section" id="features">
    <div class="container-fluid">

      <div class="row">


        <div class="feature-box col-lg-4">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Easy to use.</h3>
          <p>So easy to use, even your dog could do it.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-bullseye fa-4x"></i>
          <h3 class="feature-title">Elite Clientele</h3>
          <p>We have all the dogs, the greatest dogs.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-heart fa-4x"></i>
          <h3 class="feature-title">Guaranteed to work.</h3>
          <p>Find the love of your dog's life or your money back.</p>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- Testimonials -->

  <section class = "colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof.</h2>
          <img class="testimonial-image" src="images/dog-img.jpg" alt="dog-profile">
          <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">My dog used to be so lonely, but with TinDog's help, they've found the love of their life. I think.</h2>
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>




  </section>


  <!-- Press -->

  <section class = "colored-section" id="press">
    <img class="press-logo" src="images/TechCrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section class = "white-section" id="pricing">

    <h2 class="section-heading">A Plan for Every Dog's Needs</h2>
    <p>Simple and affordable price plans for your and your dog.</p>

    <div class="row">
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Chihuahua</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">Free</h2>
            <p>5 Matches Per Day</p>
            <p>10 Messages Per Day</p>
            <p>Unlimited App Usage</p>
            <button type="button" class="btn btn-outline-dark btn-lg btn-block">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Labrador</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">$49 / mo</h2>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <button type="button" class="btn btn-dark btn-lg btn-block">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3>Mastiff</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">$99 / mo</h2>
            <p>Priority Listing</p>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <button type="button" class="btn btn-dark btn-lg btn-block">Sign Up</button>
          </div>
        </div>
      </div>
    </div>



  </section>


  <!-- Call to Action -->

  <section class = "colored-section" id="cta">

    <div class="container-fluid">


      <h3 class="big-heading">Find the True Love of Your Dog's Life Today.</h3>
      <button type="button" class="download-button btn btn-lg btn-dark download-button"><i class="fab fa-apple"></i> Download</button>
      <button type="button" class="download-button btn btn-lg btn-light download-button"><i class="fab fa-google-play"></i> Download</button>

    </div>

  </section>


  <!-- Footer -->

  <footer class = "white-section" id="footer">
    <div class="container-fluid">

      <i class="action-icon fab fa-twitter"></i>
      <i class="action-icon fab fa-facebook-f"></i>
      <i class="action-icon fab fa-instagram"></i>
      <i class="action-icon fas fa-envelope"></i>

      <p>© Copyright 2020 TinDog</p>

    </div>
  </footer>
  <!--Bootstrap jQuery Scripts-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
