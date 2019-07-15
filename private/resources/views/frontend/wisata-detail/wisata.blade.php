
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
        <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{asset('public/assetfrontend/images/blog-01.jpg')}});">
            <h2 class="tit6 t-center">
                Pantai Alam Indah
            </h2>
        </section>


        <!-- Content page -->
        <section>
            <div class="bread-crumb bo5-b p-t-17 p-b-17">
                <div class="container">
                    <a href="index.html" class="txt27">
                        Home
                    </a>

                    <span class="txt29 m-l-10 m-r-10">/</span>

                    <a href="{{url('/wisata-kategori')}}" class="txt27">
                        Pantai
                    </a>

                    <span class="txt29 m-l-10 m-r-10">/</span>

                    <span class="txt29">
                        Pantai Alam Indah
                    </span>
                </div>
            </div>

            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-lg-9">
                        <div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
                            <!-- Block4 -->
                            <div class="blo4 p-b-63">
                                <!-- - -->
                                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                    <a href="blog-detail.html">
                                        <img src="{{asset('public/assetfrontend/images/blog-01.jpg')}}" alt="IMG-BLOG">
                                    </a>

                                    <div class="date-blo4 flex-col-c-m">
                                        <span class="txt30 m-b-4">
                                            28
                                        </span>

                                        <span class="txt31">
                                            Dec, 2018
                                        </span>
                                    </div>
                                </div>

                                <!-- - -->
                                <div class="text-blo4 p-t-33">
                                    <h4 class="p-b-16">
                                        <a href="blog-detail.html" class="tit9">Pantai Alam Indah</a>
                                    </h4>

                                    <div class="txt32 flex-w p-b-24">
                                        <span>
                                            by Admin
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                            28 December, 2018
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                            0 Comments
                                        </span>
                                    </div>

                                    <p>
                                        Pantai Alam Indah yang bertempat di pesisir kota tegal ini sangat indah.
                                    </p>
                                </div>
                            </div>

                            <!-- Leave a comment -->
                            @include('frontend.wisata-detail.komentar')
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3">
                        <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                            <!-- Categories -->
                            @include('frontend.wisata-detail.menu_kategori')
                            
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
