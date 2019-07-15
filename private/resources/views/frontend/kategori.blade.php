
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Wisata Tegal</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@include('frontend.partials._link')
	</head>
	<body class="animsition">
		<!-- Header -->
		@include('frontend.partials._header')

		<!-- Title Page -->
        <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{asset('public/assetfrontend/images/bg-title-page-03.jpg')}});">
            <h2 class="tit6 t-center">
                KATEGORI WISATA
            </h2>
        </section>


        <!-- Kategori -->
        <section class="section-ourmenu bg2-pattern p-t-115 p-b-120" id="kategori">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Kategori
				</span>

				<h3 class="tit5 t-center m-t-2">
					Wisata
				</h3>
			</div>
    			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{ asset('public/assetfrontend/images/our-menu-01.jpg')}}" alt="IMG-MENU">

								
								<!-- Button2 -->
								<a href="pantai.php" class="btn2 flex-c-m txt5 ab-c-m size4">
								
									Pantai
								</a>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{ asset('public/assetfrontend/images/our-menu-05.jpg')}}" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="pegunungan.php" class="btn2 flex-c-m txt5 ab-c-m size8">
									Pegunungan
								</a>
							</div>
							
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{ asset('public/assetfrontend/images/our-menu-13.jpg')}}" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size6">
									Keluarga
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<!-- <div class="col-12">
							
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{ asset('public/assetfrontend/images/our-menu-08.jpg')}}" alt="IMG-MENU">

								
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
									Bermain
								</a>
							</div>
						</div> -->

						<!-- <div class="col-12">
					
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{ asset('public/assetfrontend/images/our-menu-10.jpg')}}" alt="IMG-MENU">

								
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
									Belanja
								</a>
							</div>
						</div> -->

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{ asset('public/assetfrontend/images/our-menu-16.jpg')}}" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size9">
									Sejarah
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
		
		<!-- Footer -->
		@include('frontend.partials._footer')

		<!-- Script -->
		@include('frontend.partials._script')
	</body>
</html>
