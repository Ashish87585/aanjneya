@extends('layout')
@section('content')

<!-- Start Page Title Area -->
        <div class="page-title-area item-bg-1 jarallax"  data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="page-title-content">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<h2>Gallery</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home 
									</a>
								</li>
								<li>Gallery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

@stop