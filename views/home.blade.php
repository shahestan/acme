@extends('base')

		@section('content')
        <div class="row align-items-center">
            <div class="col-md-12">

				<div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="/assets/slider/benjamin-behre-1554442-unsplash.jpg" height="400px" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							Acme Nature Tours
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/assets/slider/meric-dagli-1554494-unsplash.jpg" height="400px" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							Experiance Nature as Never Before
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/assets/slider/brian-patrick-tagalog-1554897-unsplash.jpg" height="400px" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							Register Now!
						</div>
					</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

            </div>
		</div>
		
		<div class="row">
			<div class="col-md-4 card card-body bg-light text-center">
				<h3>About</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			</div>
			<div class="col-md-4 text-center">
				<h3>Tours</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			</div>
			<div class="col-md-4 card card-body bg-light text-center">
				<h3>Contact</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			</div>
		</div>
		@stop