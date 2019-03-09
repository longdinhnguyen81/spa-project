			<footer id="footer" class="mt-0">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-lg-4 mb-5 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Dana SPA</h5>
							<p class="text-4 mb-3">Chúng tôi tự tin là đối tác của các bạn<br> trong các lĩnh vực làm đẹp.</p>
						</div>
						<div class="col-lg-2 mb-4 mb-md-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Blog</h5>
							<ul class="list list-icons list-icons-sm d-inline-flex flex-column">
								@foreach($categorys as $cat)
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="{{ route('spa.news.news', str_slug($cat->name)) }}" class="link-hover-style-1 ml-1">{{ $cat->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Liên hệ</h5>
							<p class="text-4 mb-2"><span class="text-color-light">Địa chỉ:</span> 455 Trần Hưng Đạo – TP. Đà Nẵng</p>
							<p class="text-4 mb-2"><span class="text-color-light">Số điện thoại:</span> 0934 734 555</p>
							<p class="text-4 mb-2"><span class="text-color-light">Email:</span> <a href="mailto:danaspa455@gmail.com">danaspa455@gmail.com</a></p>
						</div>
						<div class="col-lg-3 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Theo dõi</h5>
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-0 mt-lg-3">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/danabeautyclinicandacademy" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="https://www.facebook.com/danabeautyclinicandacademy" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="https://www.facebook.com/danabeautyclinicandacademy" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container container-lg">
					<div class="footer-copyright footer-copyright-style-2">
						<div class="py-2">
							<div class="row py-4">
								<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
									<p> Vinasofts © Copyright 2018. All Rights Reserved.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="/templates/spa/vendor/jquery/jquery.min.js"></script>
		<script src="/templates/spa/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/templates/spa/vendor/popper/umd/popper.min.js"></script>
		<script src="/templates/spa/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/templates/spa/vendor/common/common.min.js"></script>
		<script src="/templates/spa/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/templates/spa/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/templates/spa/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/templates/spa/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/templates/spa/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/templates/spa/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/templates/spa/vendor/vide/jquery.vide.min.js"></script>
		<script src="/templates/spa/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/templates/spa/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="/templates/spa/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/templates/spa/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/templates/spa/js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>