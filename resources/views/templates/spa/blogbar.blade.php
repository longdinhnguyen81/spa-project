						<div class="col-lg-3 order-2">
							<aside class="sidebar">
								<form action="{{ route('spa.news.search') }}" method="get">
									<div class="input-group mb-3 pb-1">
										<input class="form-control text-1" placeholder="Tìm kiếm bài viết..." name="name" value="{{ old('name') }}" type="text">
										<span class="input-group-append">
											<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
										</span>
									</div>
								</form>
								<div class="tabs tabs-primary mb-4 pb-2">
									<ul class="nav nav-tabs">
										<li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Chủ Đề hot</a></li>
										<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Dịch vụ</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												@foreach($newblogs as $newblog)
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="{{ route('spa.news.detail', ['slug' =>str_slug($newblog->title), 'id' => $newblog->id]) }}">
																<img src="/upload/{{ $newblog->img }}" width="50" height="50" alt="{{ $newblog->title }}">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="{{ route('spa.news.detail', ['slug' =>str_slug($newblog->title), 'id' => $newblog->id]) }}">{{ $newblog->title }}</a>
														<div class="post-meta">
															 {{ date_format($newblog->updated_at, 'M d, y') }}
														</div>
													</div>
												</li>
											@endforeach
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
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
														<a href="{{ route('spa.service.service', str_slug($newservice->title)) }}">{{ $newservice->name }}</a>
														<div class="post-meta">
															 {{ date_format($newservice->updated_at, 'M d, YY') }}
														</div>
													</div>
												</li>
											@endforeach
											</ul>
										</div>
									</div>
								</div>
								<h5 class="font-weight-bold pt-4">About Us</h5>
								<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
								<div style="margin-bottom:20px;">
									<img alt="" class="img-fluid rounded" src="img/slide-hinh/2.jpg">
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
																<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nguyễn Thu Phượng</a>
														<div class="post-meta">
															 Hoa hậu
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nguyễn Văn A</a>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nguyễn Văn B</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="fb-page" data-href="https://www.facebook.com/danabeautyclinicandacademy/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/danabeautyclinicandacademy/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/danabeautyclinicandacademy/">DaNa Beauty Clinic &amp; Academy</a></blockquote></div>
								<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1797819373651791&autoLogAppEvents=1"></script>
							</aside>
						</div>