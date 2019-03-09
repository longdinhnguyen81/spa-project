@extends('templates.spa.master')
@section('content')
	<div role="main" class="main" style="background-color: #eee">
        <div class="slider-container rev_slider_wrapper">
			<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 4000, 'gridwidth': 1170, 'gridheight': 400, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'false': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
				<ul>
					<li>

                		<img src="/upload/{{ $service->picture }}"
                			alt=""
                			data-bgposition="center center" 
                			data-bgfit="cover" 
                			data-bgrepeat="no-repeat" 
                			class="img-fluid"
                			style="min-height: 110px;">
                	</li>
                </ul>
            </div>
        </div

		<!-- Intro -->
		<div class="home-intro home-intro-quaternary" style="background-color:#333;margin:0;" id="home-intro">
			<div class="container">

				<div class="row text-center">
					<div class="col">
						<p class="mb-0">
							Các bạn sẽ tìm thấy những dịch vụ spa và thẩm mỹ tốt nhất tại <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-light text-color-light font-weight-semibold text-5">DanaSpa</span>
							<span>Với đội ngũ bác sỹ tư vấn chuyên nghiệp và nhiều kinh nghiệm</span>
						</p>
					</div>
				</div>

			</div>
		</div>
		<!-- End Intro -->

		<!-- Start Service -->
		<div class="container py-4" style="background-color: #fff; margin-top:40px;">

			<div class="row">
				<div class="col-lg-9">
					<div class="blog-posts single-post">
					
						<article class="post post-large blog-single-post border-0 m-0 p-0">
							<div class="post-date ml-0">
								<span class="day">{{date_format($service->updated_at,'d')}}</span>
								<span class="month">{{date_format($service->updated_at,'M')}}</span>
							</div>
					
							<div class="post-content ml-0">
					
								<h1 class="font-weight-bold text-color-primary" style="text-transform: uppercase;"><a>{{ $service->title }}</a></h1>

								<div class="post-meta">
									<span><i class="far fa-folder"></i> <a href="javascript:void(0)">{{ $service->catpackage->name }}</a> </span>
								</div>

								<p>{!! $service->detail !!}
							</div>
						</article>			
					</div>
				</div>
@include('templates.spa.leftbar')
							</aside>
						</div>
					</div>

				</div>

			</div>
				<!-- End service -->

			</div>
@stop
@section('meta')
<title>{{ $service->title }}</title>
		<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung" />
		<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />
		<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

		<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
		<meta property="og:image" content= "/upload/{{ $service->img }}" />
		<meta property="og:url" itemprop="url" content="{{ route('spa.service.service',str_slug($service->title)) }}">

		<meta itemprop="name" content="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
		<meta itemprop="image" content= "/upload/{{ $service->img }}" />
@stop