@extends('frontendtemplate')
@section('title','parts');


@section('content')
  <!-- Intro section -->
  <section class="intro-section spad">
    <div class="container-fluid">
  <div class="container my-3 w-100 h-30">
  <div class="carousel slide" data-ride="carousel" id="myCarousel">
    <div class="carousel-inner">
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
      <div class="carousel-item active">
        <img src="{{ asset('frontendtemplate/instylr/img/saimask.jpg')}}" class="d-block w-100 h-20">
        <div class="img-overlays"></div>
        <div class="carousel-caption d-none d-block ">
          <h5>Face Masks</h5>
          <p>Whitening</p>
          <p>Anti-Aging</p>
          <p>Pore Reduction</p>
          <p>Smoothing</p>
          <p>Hydrating</p>

        </div>
      </div>
    
    <div class="carousel-item ">
        <img src="{{ asset('frontendtemplate/instylr/img/maskbg1.jpg')}}" class="d-block w-100">
        <div class="img-overlays"></div>
        <div class="carousel-caption d-none d-block ">
          <!-- <h5>DETOXING AND PORE TIGHTENING EFFECTS</h5> -->
          <h5>DETOXING AND PORE TIGHTENING EFFECTS</h5>
          <p>Co-Enzyme Q 10 and Tea Tree Oil
This high-quality SAI Pore reduction Face Mask is specially mode to unclog and tighten the pores. Formulating with highly concentrated active Co-enzyme Q10, tea tree oil and charcoal, it purifies the skin pores down to the deeper skin layer and instantly repairs the skin by reducing the pore size. Your face will look pore-less and hence, flowless.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontendtemplate/instylr/img/maskbg.jpg')}}" class="d-block w-100">
        <div class="img-overlays"></div>
        <div class="carousel-caption d-none d-block ">
          <h5>FIRMING AND LIFTING EFFECTS</h5>
          <p>Collagen and EGF
This high-quality SAI Anti-Aging Face Mask is specially made to prevent and minimize the fine lines, wrinkles and saggy skin. Formulating with highly concentrated active collagen and EGF (Epidermal Growth Factor), it helps repair the skin cells, rejuvenate the skin layers and boost the skin texture. You will feel a flim, youthful and luminous appearance back again.</p>
        </div>
      </div>
  </div>
 </div>

</div>





<div class="container">
  <div class="row">
    <div class="col-md-3">
     <div class="card">
          <div class="card-img">
        <img src="{{ asset('frontendtemplate/instylr/img/MaskAnti-1.jpg')}}" class="img-fluid"class="card-img-top border image">
         <div class="view-detail" data-target="#item-detail" data-toggle="modal">
          <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
           </span>
        </div>
            </div>
      <div class="card-body text-center">
        <p>Anti Aging</p>
        <hr class="item-divider">
        <p>2500Ks</p>
        
      </div>
    </div>
  </div>




<div class="col-md-3">
     <div class="card">
          <div class="card-img">
        <img src="{{ asset('frontendtemplate/instylr/img/Maskhydra-1.jpg')}}" class="img-fluid"class="card-img-top border image">
         <div class="view-detail" data-target="#item-detail" data-toggle="modal">
          <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
           </span>
        </div>
            </div>
      <div class="card-body text-center">
        <p>Hydrating Mask</p>
        <hr class="item-divider">
        <p>2500Ks</p>
        
      </div>
    </div>
  </div>





<div class="col-md-3">
     <div class="card">
          <div class="card-img">
        <img src="{{ asset('frontendtemplate/instylr/img/MaskPore-1.jpg')}}" class="img-fluid"class="card-img-top border image">
         <div class="view-detail" data-target="#item-detail" data-toggle="modal">
          <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
           </span>
        </div>
            </div>
      <div class="card-body text-center">
        <p>Pore Reduction</p>
        <hr class="item-divider">
        <p>2500Ks</p>
        
      </div>
    </div>
  </div>


<div class="col-md-3">
     <div class="card">
          <div class="card-img">
        <img src="{{ asset('frontendtemplate/instylr/img/Masksmoothing-1.jpg')}}" class="img-fluid"class="card-img-top border image">
         <div class="view-detail" data-target="#item-detail" data-toggle="modal">
          <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
           </span>
        </div>
            </div>
      <div class="card-body text-center">
        <p>Smoothing Mask
        <hr class="item-divider">
        <p>2500Ks</p>
        
      </div>
    </div>
  </div>
</div>
</div>
<br>


<div class="container my-5 text-center">
			<h2>Eye Selection</h2>
			<hr class="divider">
		</div>



		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="{{ asset('frontendtemplate/instylr/img/eye-feature.jpg')}}" class="img-fluid"class="card-img-top border image">
							<div class="view-detail" data-target="#item-detail" data-toggle="modal">
								<span class="fa-stack fa-lg">
									<i class="fas fa-circle fa-stack-2x"></i>
									<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
								</span>
							</div>
						</div>
						<div class="card-body text-center">
							<p>Eye Liner</p>
							<hr class="item-divider">
							<p>8000MMK</p>
							
						</div>
					</div>
				</div>




				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="{{ asset('frontendtemplate/instylr/img/mascera.jpg')}}" class="img-fluid"class="card-img-top border image">
							<div class="view-detail" data-target="#item-detail" data-toggle="modal">
								<span class="fa-stack fa-lg">
									<i class="fas fa-circle fa-stack-2x"></i>
									<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
								</span>
							</div>
						</div>
						<div class="card-body text-center">
							<p>Mascera</p>
							<hr class="item-divider">
							<p>12000MMK</p>
							
						</div>
					</div>
				</div>





				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="{{ asset('frontendtemplate/instylr/img/starry.jpg')}}" class="img-fluid"class="card-img-top border image">
							<div class="view-detail" data-target="#item-detail" data-toggle="modal">
								<span class="fa-stack fa-lg">
									<i class="fas fa-circle fa-stack-2x"></i>
									<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
								</span>
							</div>
						</div>
						<div class="card-body text-center">
							<p>Starry</p>
							<hr class="item-divider">
							<p>18000MMK</p>
							
						</div>
					</div>
				</div>


				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="{{ asset('frontendtemplate/instylr/img/eye-feature1.jpg')}}" class="img-fluid"class="card-img-top border image">
							<div class="view-detail" data-target="#item-detail" data-toggle="modal">
								<span class="fa-stack fa-lg">
									<i class="fas fa-circle fa-stack-2x"></i>
									<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
								</span>
							</div>
						</div>
						<div class="card-body text-center">
							<p>Gold Dust</p>
							<hr class="item-divider">
							<p>18000MMK</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
  </section>
  <!-- Intro section end-->

  
@endsection
