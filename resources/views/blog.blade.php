@extends('layouts.singlehome')





@section('content')

<!-- /NAVGATION -->
			<!-- Page Header -->
			<div id="page-header">
			<!-- section background -->
			<div class="section-bg" style="background-image: url({{ asset('himg/background-2.jpg') }});"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>WELCOME TO OUR BLOG</h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/team">MY BLOG</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->
	</header>
	<!-- /HEADER -->


<div class="container">

    <div class="row">


    <!-- BLOG -->
<div id="blog" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		@if(count($posts) > 0)
		<div class="row">
			<!-- section title -->
			<div class="col-md-8 col-md-offset-2">
				<div class="section-title text-center">
					<h2 class="title">Our Blog</h2>
					<p class="sub-title">Our Program Updates And News</p>
				</div>
			</div>
			<!-- /section title -->
			@foreach ($posts as $key => $post)
			<!-- blog -->
			<div class="col-md-4">
				<div class="article">
					<div class="article-img">
						<a href="single-blog.html">
							<img src="{{$post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="">
						</a>
					</div>
					<div class="article-content">
						<h3 class="article-title"><a href="single-blog.html">{{ str_limit($post->title,70) }}</a></h3>
						<ul class="article-meta">
							<li>{{ $post->created_at ? $post->created_at->toFormattedDateString() : 'Date Unavailable' }}</li>
							<li>By {{ $post->user_id ? $post->user->name : 'Anonymous' }}</li>
						
						</ul>
						<p>{!! $post->body !!}</p>
						<a class="primary-button" href="{{ route('blogposts.show',$post->slug) }}" >Read More</a>
					</div>
				</div>
			</div>
			<!-- /blog -->
			@endforeach
			<!-- Pagination -->
			<div class="row">
				<div class="col">
					<div class="d-flex align-items-center justify-content-center"> {{ $posts->links() }}</div>
				</div>
			</div>
			@else
			<div class="NoDataMessage">
				<h2><b>No Posts to Show!!</b></h2>
			</div>
			@endif


			<!-- /row -->
		</div>
	</div>
	<!-- /container -->
</div>
<!-- /BLOG -->
 

       
  </div>

</div>

    

@endsection

