@extends('templates.spa.master')
@section('content')
<div role="main" class="main">
				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-image:url(/templates/spa/img/bg-1.jpg); background-size: cover; background-position: center; min-height: 300px;">
				</section>

			<div class="container">

				<div class="row mt-5">
					<div class="col-lg-8">
						<h2 class="font-weight-semibold mb-3">Welcome to DanaSpa</h2>

						<p class="lead font-weight-normal">Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ, và biến nó trở nên tỏa sáng hơn bao giờ hết”.</p>



						<div class=row>
							<div class=col-md-6>
								<img src="/templates/spa/img/gioi-thieu-1.png" alt="" class="img-fluid box-shadow-custom" /> 
							</div>
							<div class=col-md-6>
								<img src="/templates/spa/img/gioi-thieu-2.png" alt="" class="img-fluid box-shadow-custom" /> 
							</div>
						</div>

						<p class="lead font-weight-normal">Và với vẻ đẹp mà Dana đã giúp chị em phụ nữ khai phá, chúng tôi mong muốn rằng từ vẻ đẹp ấy chị em có thể tự tin và làm chủ cuộc sống của mình, không chỉ là trong gia đình mà còn các mối quan hệ khác trong xã hội.</p>
						<p class="lead font-weight-normal">“ĐẸP LÀ MỘT LỢI THẾ KHÓ AI SÁNH BẰNG CỦA CHỊ EM.”</p>
						<p class="lead font-weight-normal">Sứ mệnh này không đơn giản chỉ là một ý tưởng nung nấu từ đội ngũ lãnh đạo Dana mà nó đã được hiện thực hóa bởi đội ngũ bác sĩ, kỹ thuật viên tay nghề cao được đào tạo chuyên nghiệp theo tiêu chuẩn Hàn Quốc.</p>
						<p class="lead font-weight-normal">Đặc biệt, Dana tự hào là một trong những thẩm mỹ viện đầu tiên tại Đà Nẵng sở hữu các công nghệ hàng đầu hiện nay được chuyển giao trực tiếp từ Châu Âu giúp cho việc làm đẹp của chị em trở nên hiệu quả và an toàn hơn bao giờ hết!</p>

						<div class="row justify-content-center text-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
							<div class="col-lg-8">
								<p class="text-6 text-color-dark line-height-7 negative-ls-1 px-5">Chúng tôi tự tin là đối tác của các bạn trong các lĩnh vực công nghệ</p>
								<p class="opacity-9 text-4">100% khách hàng hài lòng khi hợp tác với chúng tôi</p>
							</div>
						</div>
						<div class="row featured-boxes featured-boxes-style-4">
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
									<div class="box-content px-4">
										<i class="icon-featured fas fa-mobile-alt icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Thiết bị hiện đại</h4>
										<p class="mb-0">Dana Spa luôn được chuyển giao công nghệ mới nhất trên thế giới</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
									<div class="box-content px-4">
										<i class="icon-featured fab fa-edge icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Mỹ phẩm cao cấp</h4>
										<p class="mb-0">Dana Spa chuyên dùng những dòng sản phẩm cao cấp để phục vụ khách hàng</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
									<div class="box-content px-4">
										<i class="icon-featured fas fa-search-dollar icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Bác sĩ nước ngoài</h4>
										<p class="mb-0">Đội ngũ bác sĩ đến từ đa quốc gia trên thế giới có nhiều năm kinh nghiệm trong nghề</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									<div class="box-content px-4">
										<i class="icon-featured fas fa-desktop icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Tư vấn chuyên nghiệp</h4>
										<p class="mb-0">Đội ngũ tư vấn viên nhiệt tình chuyên đưa ra những tư vấn tốt nhất cho khách hàng</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col">

									<p class="text-6 text-center text-color-primary">Các hình ảnh đẹp tại DanaSpa</p>

									<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
										<div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 4, 'margin': 10, 'loop': false, 'nav': false, 'dots': false, 'stagePadding': 40}">
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/phun-may-tan-bot-2.jpg">
													<img class="img-fluid img-responsive"  src="/templates/spa/img/tham-my/dich-vu/phun-may-tan-bot-2.jpg" alt="Beauty Image Dana Spa">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/cang-da-mat-1.jpg">
													<img class="img-fluid img-responsive" src="/templates/spa/img/tham-my/dich-vu/cang-da-mat-1.jpg" alt="Beauty Image Dana Spa">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png">
													<img class="img-fluid img-responsive" src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png" alt="Beauty Image Dana Spa">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-2.png">
													<img class="img-fluid" src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-2.png" alt="Beauty Image Dana Spa"">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/giam-beo-lipo-1.png">
													<img class="img-fluid" src="/templates/spa/img/tham-my/dich-vu/giam-beo-lipo-1.png" alt="Beauty Image Dana Spa">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/laser-carbon-1.png">
													<img class="img-fluid" src="/templates/spa/img/tham-my/dich-vu/laser-carbon-1.png" alt="Beauty Image Dana Spa">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/HIFU-1.png">
													<img class="img-fluid" src="/templates/spa/img/tham-my/dich-vu/HIFU-1.png" alt="Beauty Image Dana Spa">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="/templates/spa/img/tham-my/dich-vu/phun-moi-2.png">
													<img class="img-fluid" src="/templates/spa/img/tham-my/dich-vu/phun-moi-2.png" alt="Beauty Image Dana Spa">
												</a>
											</div>
										</div>
									</div>
								</div>

							</div>
					</div>

					<div class="col-lg-4">
						<p class="mt-5 mb-2 mx-auto text-6 text-color-primary text-center">Giới Thiệu thẩm mỹ viện</p>
						<div class="embed-responsive embed-responsive-16by9">
						  	<iframe width="560" height="315" src="https://www.youtube.com/embed/NR1sWCmQMxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>						
						<p class="mt-5 mb-2 mx-auto text-6 text-color-primary text-center">Khách hàng sử dụng dịch vụ</p>
						<div class="owl-carousel owl-theme dots-inside mt-2" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 2000}">
							<div>
								<img src="/templates/spa/img/tham-my/avatar/khach-hang-1.png" alt="" class="img-fluid box-shadow-custom" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/avatar/khach-hang-2.png" alt="" class="img-fluid box-shadow-custom" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/avatar/khach-hang-3.png" alt="" class="img-fluid box-shadow-custom" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/avatar/khach-hang-4.png" alt="" class="img-fluid box-shadow-custom" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/avatar/khach-hang-5.png" alt="" class="img-fluid box-shadow-custom" /> 
							</div>
						</div>
						<ul class="list list-icons list-primary mt-5">
							<li><i class="fas fa-check"></i>Tất cả các dòng Sản phẩm sử dụng tại Dana Beauty đều có thành phần chiết xuất từ thảo dược thiên nhiên, của các hãng Mỹ phẩm lớn như Maystar của Tây Ban Nha, Bạch Linh,…. </li>
							<li><i class="fas fa-check"></i> Dana được chuyển giao các loại máy công nghệ cao, tiên tiến nhất trong lĩnh vực thẩm mỹ của thế giới, được chứng nhận ISO 9000, chứng nhận FDA Hoa Kì, CE chứng nhận đạt tiêu chuẩn Châu Âu.</li>
							<li><i class="fas fa-check"></i> Các thiết bị sử dụng tại Dana luôn là công nghệ hàng đầu Việt Nam và được bảo an toàn sử dụng cũng như đảm vệ sinh an toàn tuyệt đối.</li>
							<li><i class="fas fa-check"></i> Chúng tôi luôn quan niệm con người là tài sản qúy nhất của công ty, cho dù máy móc có hiện đại đến đâu cũng chịu sự điều khiển của con người.</li>
							<li><i class="fas fa-check"></i> Một đội ngũ nhân viên luôn được cập nhật học hỏi những kiến thức mới, những ứng dụng công nghệ tiến tiến của nghành thẩm mỹ thế giới từ các chuyên gia thẩm mỹ trong và ngoài nước</li>
						</ul>
						<p class="mt-5 mb-2 mx-auto text-6 text-color-primary">100% các khách hàng hài long</p>
						<div class="embed-responsive embed-responsive-16by9">
						  	<iframe width="560" height="315" src="https://www.youtube.com/embed/XdBsAXOxYfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>

			</div>

			<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
				<div class="container">
					<div class="row">
						<div class="col-sm-9 col-lg-9">
							<div class="call-to-action-content">
								<h3>"Công nghệ là cách nhanh nhất và tốt nhất để bạn cải thiện kinh doanh!"</h3>
								<p class="mb-0">Liên hệ ngay với chúng tôi để chúng tôi có thể giúp bạn.</p>
							</div>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="{{ route('spa.index.contact') }}" target="_blank" class="btn btn-lg btn-primary">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</section>
@stop
@section('meta')
<title>Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng</title>
		<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung" />
		<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />
		<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

		<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
		<meta property="og:image" content= "/templates/spa/img/logo.png" />
		<meta property="og:url" itemprop="url" content="{{ route('spa.index.aboutus') }}">

		<meta itemprop="name" content="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
		<meta itemprop="image" content= "/templates/spa/img/logo.png" />
@stop