						<div class="col-lg-3">
							<aside class="sidebar">
								<div class="tabs tabs-dark mb-4 pb-2">
									<ul class="nav nav-tabs">
										<li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Dịch vụ khác</a></li>
										<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Ngẫu nhiên</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
											@foreach($newservices as $newservice)
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="{{ route('spa.service.service', str_slug($newservice->title)) }}">
																<img src="/upload/{{ $newservice->img }}" width="50" height="50" alt="{{ $newservice->title }}">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="{{ route('spa.service.service', str_slug($newservice->title)) }}">{{ $newservice->title }}</a>
														<div class="post-meta">
															 {{ date_format($newservice->updated_at, 'M d, y') }}
														</div>
													</div>
												</li>
											@endforeach
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												@foreach($ranservices as $ranservice)
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="{{ route('spa.service.service', str_slug($ranservice->title)) }}">
																<img src="/upload/{{ $ranservice->img }}" width="50" height="50" alt="{{ $ranservice->title }}">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="{{ route('spa.service.service', str_slug($ranservice->title)) }}">{{ $ranservice->title }}</a>
														<div class="post-meta">
															 {{ date_format($ranservice->updated_at, 'M d, y') }}
														</div>
													</div>
												</li>
											@endforeach
											</ul>
										</div>
									</div>
								</div>
								<div style="margin-bottom:20px;">
									<img alt="" class="img-fluid rounded" src="/templates/spa/img/slide-hinh/2.jpg">
								</div>

								<div class="tabs tabs-dark mb-4 pb-2">
									<ul class="nav nav-tabs">
											<li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Người nổi tiếng</a></li>
										</ul>
									<div class="tab-content">
											<div class="tab-pane active" id="popularPosts">
												<ul class="simple-post-list">
													<li>
														<div class="post-image">
															<div class="img-thumbnail img-thumbnail-no-borders d-block">
																<a href="blog-post.html">
																	<img src="/templates/spa/img/blog/square/blog-11.jpg" width="50" height="50" alt="">
																</a>
															</div>
														</div>
														<div class="post-info">
															<a href="#">Nguyễn Thu Phượng</a>
															<div class="post-meta">
																 Hoa hậu
															</div>
														</div>
													</li>
													<li>
														<div class="post-image">
															<div class="img-thumbnail img-thumbnail-no-borders d-block">
																<a href="blog-post.html">
																	<img src="/templates/spa/img/blog/square/blog-24.jpg" width="50" height="50" alt="">
																</a>
															</div>
														</div>
														<div class="post-info">
															<a href="#">Nguyễn Văn A</a>
														</div>
													</li>
													<li>
														<div class="post-image">
															<div class="img-thumbnail img-thumbnail-no-borders d-block">
																<a href="blog-post.html">
																	<img src="/templates/spa/img/blog/square/blog-42.jpg" width="50" height="50" alt="">
																</a>
															</div>
														</div>
														<div class="post-info">
															<a href="#">Nguyễn Văn B</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="fb-page" data-href="https://www.facebook.com/danabeautyclinicandacademy/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/danabeautyclinicandacademy/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/danabeautyclinicandacademy/">DaNa Beauty Clinic &amp; Academy</a></blockquote></div>
    								<div id="fb-root"></div>
									<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1797819373651791&autoLogAppEvents=1"></script>
    							</div>
								</div>		