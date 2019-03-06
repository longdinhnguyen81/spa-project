@extends('templates.spa.master')
@section('content')
<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 4000, 'gridwidth': 1170, 'gridheight': 400, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="" data-transition="fade">
								<img src="/templates/spa/img/tham-my/slide/slide-1.png"
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
							<li class="" data-transition="fade">
								<img src="/templates/spa/img/tham-my/slide/slide-2.png"
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
							<li class="" data-transition="fade">
								<img src="/templates/spa/img/tham-my/slide/slide-3.png"
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Intro-->
				<div class="home-intro home-intro-primary mb-0" id="home-intro">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<p class="mb-0">
									Thẩm mỹ viện, SPA và chăm sóc da <strong>Uy tín nhất</strong> tại đà nẵng
									<span>100% khách hàng hài lòng với dịch vụ của chúng tôi</span>
								</p>
							</div>
						</div>

					</div>
				</div>
				<!-- End Intro-->
				
				<section class="section pt-0 my-0 pb-0 min-height-screen border-0 bg-color-light-scale-3 mt-0" id="demos">
					<div class="container-fluid">
						<div class="row justify-content-center py-4 py-sm-0 bg-color-dark-scale-2">
							<div class="col-auto col-sm-12 col-md-auto">
								<ul class="nav nav-light nav-active-style-1 sort-source justify-content-center flex-column flex-sm-row" data-sort-id="portfolio" data-option-key="filter">
									<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Tất cả</a></li>
									<li class="nav-item" data-option-value=".dieu-tri-da"><a class="nav-link" href="#">Điều Trị Da</a></li>
									<li class="nav-item" data-option-value=".tre-hoa-da"><a class="nav-link" href="#">Trẻ Hóa Da</a></li>
									<li class="nav-item" data-option-value=".cham-soc-co-the"><a class="nav-link" href="#">Chăm Sóc Cơ Thể</a></li>
									<li class="nav-item" data-option-value=".tham-my-ngoai-khoa"><a class="nav-link" href="#">Thẩm Mỹ</a></li>
									<li class="nav-item" data-option-value=".phun-thieu-tham-my"><a class="nav-link" href="#">Phun Thiêu Thẩm Mỹ</a></li>
								</ul>
							</div>
						</div>

						<div class="row min-height-screen bg-color-light">
							<div class="col min-height-screen">
								<div class="sort-destination-loader min-height-screen mt-5 pt-2">
									<div class="row portfolio-list sort-destination overflow-visible" data-sort-id="portfolio">
									<!-- Điều Trị Da -->
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/tham-my/dich-vu/cang-da-mat-1.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Trị Thâm Mụn</span>
																		<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Điều Trị Thâm Mụn</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Trị Sẹo Rỗ</span>
																		<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Điều Trị Sẹo Rỗ</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Trị Mụn</span>
																		<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Điều Trị Mụn</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Trị Nhám-Tàng Nhang</span>
																		<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Điều Trị Nhám - Tàng nhang</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Phi Kim - Lăn Kim</span>
																		<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Điều Trị Phi Kim - Lăn Kim</a></h2>
												</div>
											</div>
										</div>
									<!--Hết Điều Trị Da -->
									<!--Star Chăm sóc Da-->
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Collagen Căn Bóng</span>
																		<span class="thumb-info-type" style="background-color:#e67300;" >Chăm sóc da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Collagen Căn Bóng</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Chăm Sóc Da Cơ Bản</span>
																		<span class="thumb-info-type" style="background-color:#e67300;" >Chăm sóc da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Chăm Sóc Da Cơ Bản</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Đào Thải Độc Tố</span>
																		<span class="thumb-info-type" style="background-color:#e67300;" >Chăm sóc da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Đào Thải Độc Tố</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Chăm Sóc Da Cơ Bản</span>
																		<span class="thumb-info-type" style="background-color:#e67300;" >Chăm sóc da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Chăm Sóc Da Cơ Bản</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item dieu-tri-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Da Trắng Sáng Octoline</span>
																		<span class="thumb-info-type" style="background-color:#e67300;" >Chăm sóc da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Da Trắng Sáng Octoline</a></h2>
												</div>
											</div>
										</div>
									<!-- End Chăm sóc da -->
									<!-- Start Trẻ Hóa Da -->
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tre-hoa-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">HIFU Nâng Cơ</span>
																		<span class="thumb-info-type" style="background-color:#269900;" >Trẻ Hóa Da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">HIFU Nâng Cơ</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tre-hoa-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">PRP Trẻ Hóa Da</span>
																		<span class="thumb-info-type" style="background-color:#269900;" >Trẻ Hóa Da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">PRP Trẻ Hóa Da</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tre-hoa-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Laser Carbon</span>
																		<span class="thumb-info-type" style="background-color:#269900;" >Trẻ Hóa Da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Laser Carbon</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tre-hoa-da px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Laser Co2 Fractional</span>
																		<span class="thumb-info-type" style="background-color:#269900;" >Trẻ Hóa Da</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Laser Co2 Fractional</a></h2>
												</div>
											</div>
										</div>
									<!-- End trẻ Hóa Da -->
									<!-- Chăm sóc cơ thể -->
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item cham-soc-co-the px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Cấy Tinh Chất Giảm Béo</span>
																		<span class="thumb-info-type" style="background-color:#b30086;" >Chăm Sóc Cơ Thể</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Cấy Tinh Chất Giảm Béo</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item cham-soc-co-the px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Giảm Béo Cavi LPO</span>
																		<span class="thumb-info-type" style="background-color:#b30086;" >Chăm Sóc Cơ Thể</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Giảm Béo Cavi LPO</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item cham-soc-co-the px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Tắm Trắng White Plus</span>
																		<span class="thumb-info-type" style="background-color:#b30086;" >Chăm Sóc Cơ Thể</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Tắm Trắng White Plus</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item cham-soc-co-the px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Tắm Trắng Cao Cấp Hoàng Gia</span>
																		<span class="thumb-info-type" style="background-color:#b30086;" >Chăm Sóc Cơ Thể</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Tắm Trắng Cao cấp Hoàng Gia</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item cham-soc-co-the px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Triệt Lông</span>
																		<span class="thumb-info-type" style="background-color:#b30086;" >Chăm Sóc Cơ Thể</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Triệt Lông</a></h2>
												</div>
											</div>
										</div>
									<!--End Chăm sóc Cơ thể -->
									<!--Start Thẩm mỹ ngoại khoa -->
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tham-my-ngoai-khoa px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Căng Da Mặt</span>
																		<span class="thumb-info-type" style="background-color:#b38600;" >Thẩm mỹ ngoại khoa</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Căng Da Mặt</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tham-my-ngoai-khoa px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Nâng Mũi</span>
																		<span class="thumb-info-type" style="background-color:#b38600;" >Thẩm mỹ ngoại khoa</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Nâng Mũi</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tham-my-ngoai-khoa px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Cắt Mí</span>
																		<span class="thumb-info-type" style="background-color:#b38600;" >Thẩm mỹ ngoại khoa</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Cắt Mí</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tham-my-ngoai-khoa px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Lúm Đồng Tiền</span>
																		<span class="thumb-info-type" style="background-color:#b38600;" >Thẩm mỹ ngoại khoa</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Lúm Đồng Tiền</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tham-my-ngoai-khoa px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Hút Mỡ Giảm Béo</span>
																		<span class="thumb-info-type" style="background-color:#b38600;" >Thẩm mỹ ngoại khoa</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Hút Mỡ Giảm Béo</a></h2>
												</div>
											</div>
										</div>
									<!--End Thẩm mỹ ngoại khoa -->
									<!--Start Thẩm mỹ nội khoa -->
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tham-my-ngoai-khoa px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Filter</span>
																		<span class="thumb-info-type" style="background-color:#990000;" >Thẩm mỹ nội khoa</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Filter</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tham-my-ngoai-khoa px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Botox</span>
																		<span class="thumb-info-type" style="background-color:#990000;" >Thẩm mỹ nội khoa</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Botox</a></h2>
												</div>
											</div>
										</div>
									<!--End Thẩm mỹ nội khoa -->
									<!--Start Phun Thiêu thẩm mỹ-->
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item phun-thieu-tham-my px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Phun Lông Mày Tán Bột</span>
																		<span class="thumb-info-type" style="background-color:#4d0066;" >Phun Thiêu thẩm mỹ</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Phun Lông Mày Tán Bột</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item phun-thieu-tham-my px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Phun Lông Mày Lụa</span>
																		<span class="thumb-info-type" style="background-color:#4d0066;" >Phun Thiêu thẩm mỹ</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Phun Lông Mày Lụa</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item phun-thieu-tham-my px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Phun Mí Mở Tròng</span>
																		<span class="thumb-info-type" style="background-color:#4d0066;" >Phun Thiêu thẩm mỹ</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Phun Mí Mở Tròng</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item phun-thieu-tham-my px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Phun Môi Hồng Baby Callogen</span>
																		<span class="thumb-info-type" style="background-color:#4d0066;" >Phun Thiêu thẩm mỹ</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Phun Môi Hồng Baby Callogen</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item phun-thieu-tham-my px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="service.html"><img src="/templates/spa/img/previews/preview-one-page.jpg" class="img-fluid" alt=""></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">Phun Khử Thâm Môi</span>
																		<span class="thumb-info-type" style="background-color:#4d0066;" >Phun Thiêu thẩm mỹ</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Phun Khử Thâm Môi</a></h2>
												</div>
											</div>
										</div>
									<!--End Phun Thiêu thẩm mỹ -->
									</div>
								</div>
							</div>
						</div>
						<div class="row my-4 bg-color-light-scale-3 pb-5 p-relative z-index-1">
							<div class="col text-center mt-3 mb-5">
								<p>Sure! <strong class="text-color-light">All demos are included</strong>, choose one and start right now to build your website.</p>
								<a href="index-classic.html" class="btn btn-light-2 btn-outline btn-rounded btn-xl font-weight-semibold text-2 px-5 py-3 box-shadow-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800">VIEW MAIN DEMO</a>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop