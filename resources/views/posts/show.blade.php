@extends('layouts.singlehome')
@section('header-styles')
    <link rel="stylesheet" href="{{ asset('css/commentBox.css') }}">
@endsection


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
							<h1>{{$post->title}}</h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/blogPage">Blog</a></li>
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

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<main id="main" class="col-md-9">
					<!-- article -->
					<div class="article">
						<!-- article img -->
						<div class="article-img">
							<img src="{{ $post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="">
						</div>
						<!-- article img -->

						<!-- article content -->
						<div class="article-content">
							<!-- article title -->
							<h2 class="article-title">{{$post->title}}</h2>
							<!-- /article title -->

							<!-- article meta -->
							<ul class="article-meta">
								<li>{{ $post->created_at ? $post->created_at->toFormattedDateString() : 'Date unavailable'}}</li>
								<li>By {{ $post->user->name }}</li>
								<li>{{count($comments)}} Comments</li>
							</ul>
							<!-- /article meta -->
                            <p style="font-weight: bold;">{!! $post->body !!}</p>

						</div>
						<!-- /article content -->

						<!-- article tags share -->
						<div class="article-tags-share">
							<!-- article tags -->
							<ul class="tags">
								<li>CATEGORY:</li>
								<li><a href="#">{{$post->category->name }}</a></li>

							</ul>
							<!-- /article tags -->


						</div>
						<!-- /article tags share -->



					</div>
					<!-- /article -->
				</main>
				<!-- /MAIN -->

				<!-- ASIDE -->
				<aside id="aside" class="col-md-3">
					<!-- category widget -->
					<!-- <div class="widget">
						<h3 class="widget-title">Category</h3>
						<div class="widget-category">
							<ul>
								<li><a href="#">Health<span>(57)</span></a></li>
								<li><a href="#">Food<span>(86)</span></a></li>
								<li><a href="#">Education<span>(241)</span></a></li>
								<li><a href="#">Donation<span>(65)</span></a></li>
								<li><a href="#">Events<span>(14)</span></a></li>
							</ul>
						</div>
					</div> -->
					<!-- /category widget -->

					<!-- posts widget -->
					<div class="widget">
                        <h3 class="widget-title">Latest Posts</h3>
                        @if(count($posts) > 0)
                        <!-- single post -->
                        @foreach ($posts as $key => $post)
						<div class="widget-post">
							<a href="{{ route('blogposts.show',$post->slug) }}">
								<div class="widget-img">
								<img src="{{ $post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="">
								</div>
								<div class="widget-content">
								  {{$post->title}}
								</div>
							</a>
							<ul class="article-meta">
								<li>By {{$post->user->name }}</li>
								<li>{{ $post->created_at ? $post->created_at->toFormattedDateString() : 'Date unavailable'}}</li>
							</ul>
						</div>
						<!-- /single post -->
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


					</div>
					<!-- /posts widget -->

					<!-- causes widget -->
					<div class="widget">
						<h3 class="widget-title">Hammerhometheglucose</h3>

						<!-- single causes -->
						<div>

							<div>
							<ul>
							    <li> <a href="/">Home</a> </li><br>
								<li> <a href="/">About Us</a></li><br>
								<li> <a href="/contact">Contact</a> </li><br>
								<li> <a href="/field_work">Gallary</a></li><br>
								<li> <a href="/blog">Education</a> </li><br>
							</ul>


							</div>
						</div>
						<!-- /single causes -->


					</div>
					<!-- causes widget -->
				</aside>
				<!-- /ASIDE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

    @endsection

    @section('responses')
    <div class="responses">
        <div class="container"><br><br>
            <h3><b>Responses</b></h3>
            <hr>
            @if(Session::has('comment_submitted'))
            <div class="alert alert-dismissible alert-success">
                {{ session('comment_submitted')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if(Auth::check())
            <div class="comments-container">
                <ul id="comments-list" class="comments-list">
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <!-- <div class="comment-avatar">
                            <img src="{{ Auth::user()->photo_id ? Auth::user()->photo->file : '/images/placeholder.png' }}" alt="">
                        </div> -->
                        <!-- Comment Box -->
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name">{{ Auth::user()->name }}</h6>
                            </div>
                            <div class="comment-content">
                                @if(Auth::user()->checkRole() == 'Admin')
                                {!! Form::open(['method' => 'POST','action'=>'PostCommentsController@store']) !!}
                                    {!! Form::hidden('post_id',$post->id) !!}
                                    <div class="form-group">
                                    {!! Form::textarea('body',null,['placeholder' => 'What are your thoughts?','class' => 'form-control','rows' => 3, 'required']) !!}
                                    </div>
                                    {!! Form::submit('Submit Comment', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close()!!}
                                <div class="display-error">@include('layouts.messages')</div>
                                @elseif(Auth::check())
                                {!! Form::open(['method' => 'POST','action'=>'PostCommentsController@createComment']) !!}
                                    {!! Form::hidden('post_id',$post->id) !!}
                                    <div class="form-group">
                                    {!! Form::textarea('body',null,['placeholder' => 'What are your thoughts?','class' => 'form-control','rows' => 3, 'required']) !!}
                                    </div>
                                    {!! Form::submit('Submit Comment', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close()!!}
                                @endif
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <hr>
            @else
            <p style="font-weight: bold;">Login/Register to comment on the post...</p><hr>
            @endif


            <!-- Displaying all the comments and its reply-->
            <div class="comments-container">
                <ul id="comments-list" class="comments-list">
                    @foreach ($comments as $key => $comment)
                        @if($comment->is_active == 1)
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <!-- <div class="comment-avatar">
                                        <img src="{{$comment->user->photo_id ? $comment->user->photo->file : '/images/placeholder.png'}}" alt="">
                                    </div> -->
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name {{ $comment->user_id == $comment->post->user_id ? 'by-author' : ''}}">{{ $comment->user->name }}</h6>
                                            <span>{{ $comment->created_at ? $comment->created_at->diffForHumans() : 'Date unavailable'}}</span>
                                                <i data-index="{{ $key }}" class="fa fa-reply replyToggle"></i>
                                            <!--<i class="fa fa-heart"></i>-->
                                        </div>
                                        <div class="comment-content">
                                            {{ $comment->body }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <!-- Replies for the comment -->
                                <ul class="comments-list reply-list ">
                                    <!-- Put foreach here after ul-->
                                    @if(count($comment->replies) > 0)
                                        @foreach($comment->replies as $reply)
                                            @if($reply->is_active == 1)
                                                <li>
                                                    <!-- Avatar -->
                                                    <div class="comment-avatar">
                                                            <img src="{{ $reply->user->photo_id ? $reply->user->photo->file : '/images/placeholder.png'}}" alt="">
                                                    </div>
                                                    <div class="comment-box">
                                                        <div class="comment-head">
                                                            <h5 class="comment-name {{ $reply->user->id == $post->user_id ? 'by-author' : '' }}">{{ $reply->user->name }}</h5>
                                                            <span>{{ $reply->created_at ? $reply->created_at->diffForHumans() : 'Date unavailable'}}</span>
                                                             <!--<i class="fa fa-reply"></i>-->
                                                            <!--<i class="fa fa-heart"></i>-->
                                                        </div>
                                                        <div class="comment-content">
                                                            {{ $reply->body }}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if(Auth::check())
                                    <div class="comment-reply-container" id="{{ $key }}">
                                        <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar">
                                                    <img src="{{ Auth::user()->photo_id ? Auth::user()->photo->file : '/images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h4 class="comment-name">{{ Auth::user()->name }}</h4>
                                                </div>
                                                <div class="comment-content">
                                                    {!! Form::open(['method' => 'POST','action'=>'CommentRepliesController@createReply']) !!}
                                                        {!! Form::hidden('comment_id',$comment->id) !!}
                                                        <div class="form-group">
                                                        {!! Form::textarea('body',null,['placeholder' => 'What are your thoughts?','class' => 'form-control','rows' => 3, 'required']) !!}
                                                        </div>
                                                        {!! Form::submit('Submit Reply', ['class' => 'btn btn-primary']) !!}
                                                    {!! Form::close()!!}
                                                    <div class="display-error">@include('layouts.messages')</div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    @endif
                                    <!-- ends foreach here before ul -->
                                </ul>
                                <!-- Reply section for a comment ends -->
                            </li>
                        @endif
                    @endforeach
                </ul><hr>
            </div> <!--Comments-Container ends --><br>
        </div><!-- container division tag ends -->
    </div><!-- responses division tag ends -->
@endsection
