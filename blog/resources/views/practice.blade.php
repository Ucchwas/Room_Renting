@extends('layouts.app')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      @section('content')

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/room1.jpg" alt="First slide" height="300" width="200">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/room2.jpg" alt="Second slide" height="300" width="200">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/room3.jpg" alt="Third slide" height="300" width="200">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Welcome to Bachelor Bari.com</h1>
          <p>An unique media to your accomodation and free space. we provide all kind of accomodation sollution for bachelor people</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>it is established due to the necessity of bachelors. As population is increasing, it is getting really difficult to find accomodations for bachelors. Some social misinterpretation lies behind it. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>New rooms are available here in dhanmondi,mdpur,mirpur rampura etc etc. you can find homelike environment here.  </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Our vision is to spead this facility across the country</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>
      </div> <!-- /container -->
      <html>
<body>

<h2>Our Parners</h2>
<p><a href="https://www.w3schools.com/html/">Visit our Global Parners</a></p>
<p><a href="https://www.booking.com/"><img src="https://seeklogo.net/wp-content/uploads/2015/09/bookingcom-logo-vector-download.jpg" width="200" height="200"></a></p>
</body>
</html>

      @endsection
