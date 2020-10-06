@extends('frontendtemplate')
@section('title','readmore');


@section('content')
  <!-- Intro section -->
  <section class="intro-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <img src="{{ asset('frontendtemplate/instylr/img/intro-img.jpg')}}" alt="">
        </div>
        <div class="col-lg-7 intro-text">
          <span>Aenean quis velit pulvinar,</span>
          <h2>"Bigger Isn’t Always Better When It Comes To Beauty Blog Examples"</h2>
          <p>Larger bloggers, vloggers, and celebrities have often grown on other platforms to an extent that their blog only serves to promote their other channels or products. Many are outdated and neglected. And while they may still generate a good amount of traffic due to their name alone, they don’t always serve as the best source of inspiration.</p>
        </div>
        



		<div class="container my-5">
			<div class="accordion" id="myAccordion">
				

				<div class="container my-5 themed-container">
					<h2 class="text text-center text-secondary shadow bg-light"> Product Lines</h2>
					<div class="accordion" id="myAccordion">
						<div class="card">
							<div class="card-header">
								
								<button class="btn btn-link btn-block text-left text-dark" data-target="#cone" data-toggle="collapse">Eye Collections</button>
							</div>
							<div class="collapse" id="cone" data-parent="#myAccordion" >
								<div class="card-body">
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<img src="{{ asset('frontendtemplate/instylr/img/eye-feature.jpg')}}" class="img-fluid">
										</div>
										<div class="col-md-4 col-sm-4">
											<img src="{{ asset('frontendtemplate/instylr/img/mascera.jpg')}}" class="img-fluid">
										</div>
										<div class="col-md-4 col-sm-4">
											<img src="{{ asset('frontendtemplate/instylr/img/eye-feature1.jpg')}}" class="img-fluid">
										</div>
									</div>


									
									



									<div class="card">
										<div class="card-header">
											<button class="btn btn-link btn-block text-left text-dark" data-target="#two" data-toggle="collapse" data-toggle="collapse">Accessories Collection</button>
										</div>
										<div class="collapse" id="two">
											<div class="card-body">
												<div class="row">
													<div class="col-md-4 col-sm-4">
														<img src="{{ asset('frontendtemplate/instylr/img/mask.jpg')}}" class="img-fluid w-70 h-95">
													</div>
													<div class="col-md-4 col-sm-4">
														<img src="{{ asset('frontendtemplate/instylr/img/saipowder.jpg')}}" class="img-fluid">
														<img src="{{ asset('frontendtemplate/instylr/img/powder1.jpg')}}" class="img-fluid">
													</div>
													<div class="col-md-4 col-sm-4">
														<img src="{{ asset('frontendtemplate/instylr/img/Pinkacc.jpg')}}" class="img-fluid">
														<img src="{{ asset('frontendtemplate/instylr/img/nudeacc.jpg')}}" class="img-fluid">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<button class="btn btn-link btn-block text-left text-dark" data-target="#three" data-toggle="collapse" >Lipstick Collection</button>
										</div>
										<div class="collapse" id="three" >
											<div class="card-body">
												<div class="row">
													<div class="col-md-4 col-sm-4">
														
														
														<img src="{{ asset('frontendtemplate/instylr/img/lipstickguess.jpg')}}" class="img-fluid"></div>

														<div class="col-md-4 col-sm-4">

															<img src="{{ asset('frontendtemplate/instylr/img/saiguess.jpg')}}" class="img-fluid"></div>
															
															

															<div class="col-md-4 col-sm-4 h-40">
																<img src="{{ asset('frontendtemplate/instylr/img/lipstickbg.jpg')}}" class="img-fluid">
															</div>
															

															
														</div>

													</div>
												</div>
											</div>


										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

  </section>
  <!-- Intro section end-->

  
@endsection
