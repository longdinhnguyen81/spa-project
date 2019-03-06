@extends('templates.spa.master')
@section('content')
	<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 550px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 8000, 'gridwidth': 1170, 'gridheight': 550, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/spa/img/bg-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">BẠN MUỐN TÌM MỘT</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="/templates/spa/img/slides/slide-white-line.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt=""></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">BEAUTY SPA?</h1>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Hãy đến với chúng tôi DANA SPA</div>
								
							</li>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/spa/img/bg-2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-145','-145','-145','-320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE APPLICATION, WEB, WE ARE</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['145','145','145','320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-180','-180','-180','-300']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">V</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-120','-120','-120','-200']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">I</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-50','-50','-50','-80']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">N</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['50','50','50','65']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">A</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['120','120','120','190']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">S</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":2300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['180','190','190','290']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">S</div>

								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['85','85','85','140']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['26','26','26','45']">The best choice for your new website, new apllication</div>
							</li>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/spa/img/bg-3.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="/templates/spa/img/slides/slide-white-line.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt=""></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">WEB DESIGN?</h1>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Check out our options and features</div>	
							</li>
						</ul>
					</div>
				</div>
				<!-- End Slider -->

				<!-- Start Intro-->
				<div class="home-intro home-intro-primary" id="home-intro" style="margin-bottom:20px;">
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



				<div class="container mb-5">
					<div class="row justify-content-center">
						<div class="col-xl-8 text-center mb-4">
							<h2 class="font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeIn">Các điều trị nổi bật</h2>
							<hr class="custom-divider">
							<p class="line-height-9 text-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><span class="opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a consectetur ullamcorper. Vestibulum varius pharetra lorem, in maximus libero placerat sed.</span></p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Thâm Mụn</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Nám</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Nám</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Nám</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Nám</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Nám</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Nám</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="service.html"><img src="/templates/spa/img/nam-2.jpg" class="img-fluid" alt=""></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Trị Nám</span>
												<span class="thumb-info-type" style="background-color: #70f;" >Điều trị da & SPA</span>
											</span>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>


					<div class="row pt-4 mt-5">
						<div class="col">
							<div class="row pt-2 clearfix">
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
										<div class="feature-box-icon">
											<i class="fas fa-spa icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Customer Support</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
										<div class="feature-box-icon">
											<i class="fas fa-concierge-bell icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Sliders</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										<div class="feature-box-icon">
											<i class="fas fa-glass-martini-alt icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">HTML5</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
										<div class="feature-box-icon">
											<i class="far fa-clock icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Icons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<section class="section section-primary border-0 py-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
							<div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light text-7 mb-2">Who We Are</h2>
								<p class="lead font-weight-light text-color-light text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<p class="font-weight-light text-color-light text-2 mb-4 opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendun magna ex, et faucibus lacus venenatis eget</p>
								<a href="#" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">LEARN MORE</a>
							</div>
							<div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
								<img class="img-fluid box-shadow-3 my-2 border-radius" src="/templates/spa/img/hinh-dana-team.jpg" alt="">
							</div>
						</div>
					</div>
				</section>


				<!-- Our Doctor -->
				<div class="container">
					<div class="row py-5 my-5">
						<div class="col-md-6 order-2 order-md-1 text-center text-md-left appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
							<div class="owl-carousel owl-theme nav-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
								<div>
									<img class="img-fluid rounded-0 mb-4" src="/templates/spa/img/hinh-1.jpg" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
									<p class="text-3 mb-0">Bác sĩ da liễu</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="/templates/spa/img/hinh-1.jpg" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
									<p class="text-3 mb-0">Bác sĩ da liễu</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="/templates/spa/img/hinh-1.jpg" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
									<p class="text-3 mb-0">Bác sĩ giải phẫu</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="/templates/spa/img/hinh-1.jpg" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
									<p class="text-3 mb-0">Bác sĩ điều dưỡng</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="/templates/spa/img/hinh-1.jpg" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
									<p class="text-3 mb-0">DESIGNER</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2">Hãy đặt hẹn ngay cho các <strong class="font-weight-extra-bold">Bác Sĩ</strong> để được tư vấn</h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
							<a href="#" class="btn btn-rounded btn-primary box-shadow-2 mb-2 font-weight-semibold btn-px-4 btn-py-2 text-2">Đặt hẹn</a>
						</div>
					</div>
				</div>
				<!-- End our doctor -->
				<!-- bg-color-primary-->
				<section class="section section-height-3 section-text-light  border-0 m-0 appear-animation" data-appear-animation="fadeIn" style="background-color:#db6969;">
					<div class="container">
						<div class="row">

							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 4000}">
									<div class="row">
										<div class="col-lg-4 order-lg-2">
											<img src="/templates/spa/img/khach-hang.png" class="img-fluid" alt="">
										</div>
										<div class="col-lg-7 order-lg-1">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
												<blockquote>
													<p class="text-5 line-height-5 mb-0" style="padding-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong class="font-weight-bold text-2 opacity-10">- John Smith. Okler</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 order-lg-2">
											<img src="/templates/spa/img/khach-hang.png" class="img-fluid" alt="">
										</div>
										<div class="col-lg-7 order-lg-1">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
												<blockquote>
													<p class="text-5 line-height-5 mb-0" style="padding-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong class="font-weight-bold text-2 opacity-10">- John Smith. Okler</strong></p>
												</div>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<center><h4>Các hình ảnh của chúng tôi</h4></center>
								<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/slide-hinh/1.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Cấy tóc lên đầu<em>dịch vụ cấy tóc an toàn và chất lượng tại dana spa</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/slide-hinh/2.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Cấy tóc lên đầu<em>dịch vụ cấy tóc an toàn và chất lượng tại dana spa</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/slide-hinh/4.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Cấy tóc lên đầu<em>dịch vụ cấy tóc an toàn và chất lượng tại dana spa</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/slide-hinh/6.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Cấy tóc lên đầu<em>dịch vụ cấy tóc an toàn và chất lượng tại dana spa</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/slide-hinh/5.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/slide-hinh/6.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/slide-hinh/1.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/projects/project-4.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/projects/project-5.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/projects/project-6.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/projects/project-7.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/projects/project-1.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/projects/project-2.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid rounded" src="/templates/spa/img/projects/project-3.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop