@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')


{{-- @include('frontend.loader') --}}

@include('frontend.topbar.topbar1')
@include('frontend.topbar.topbar2')
@include('frontend.topbar.topbar3')
@include('frontend.topbar.topbar4')
@include('frontend.topbar.topbar5')

    <!--Breadcrumb-->
	<div>
		<div class="owl-carousel testimonial-owl-carousel2 slider slider-header">
			@foreach ($sliders as $slider)
				<div class="bannerimg cover-image sptb-1 shadow-font" data-bs-image-src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}">
					<div class="header-text mb-0">
						<div class="container">
							<div class="text-center text-white ">
								<h1 class="">Les Blogs</h1>
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
									{{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
									<li class="breadcrumb-item active text-white" aria-current="page"> Les Blogs</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>

	<!--/Breadcrumb-->

    <!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row">
                            @foreach ($blogs as $blog)
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <a href="">
                                        <div class="card">
                                            <div class="item7-card-img">
                                                <a href="{{ route('blog.detail',['slug_pays'=>'tg','slug_blog'=>$blog->slug_blog]) }}"></a>
												@if ($blog->image1)
													<img src="{{ asset('assets/images/blogs') }}/{{ $blog->image1 }}" alt="{{ $blog->titre }}" class="cover-image">
												@else
													<img src="{{ asset('assets/images/blogs/f1.jpg') }}" alt="{{ $blog->titre }}" class="cover-image">
												@endif
                                                
                                            </div>
                                            <div class="card-body">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="{{ route('blog.detail',['slug_pays'=>'tg','slug_blog'=>$blog->slug_blog]) }}"><i class="fa fa-calendar-o text-muted me-2"></i>{{ date('d/m/Y', strtotime($blog->created_at))}}</a>
                                                    <div class="ms-auto">
                                                        <a href="{{ route('blog.detail',['slug_pays'=>'tg','slug_blog'=>$blog->slug_blog]) }}"><i class="fa fa-comment-o text-muted me-2"></i>@foreach ($nombres as $nb) @if ($nb->blog == $blog->id) {{ $nb->nb }}  @endif @endforeach Comment(s)</a>
                                                    </div>
                                                </div>
                                                <a href="{{ route('blog.detail',['slug_pays'=>'tg','slug_blog'=>$blog->slug_blog]) }}" class="text-dark"><h4 class="font-weight-semibold">{{ Str::limit($blog->titre, 30) }}</h4></a>
                                                <p>{{ Str::limit($blog->descriptionCourte, 100) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
						</div>
						<div class="center-block text-center">
							<ul class="pagination mb-0">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="#" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Add listing-->


@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer5')
@include('frontend.footer.footer6')
@include('frontend.footer.footer7')
@include('frontend.footer.footer9')
@include('frontend.footer.footer10')
@include('frontend.footer.footer11')
@include('frontend.footer.footer13')
@include('frontend.footer.footer14')
@include('frontend.footer.footer12')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')