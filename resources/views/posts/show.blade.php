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
                            <p>{!! $post->body !!}</p>
    
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

							<!-- article share -->
							<!-- <ul class="share">
								<li>SHARE:</li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul> -->
							<!-- /article share -->
						</div>
						<!-- /article tags share -->

						<!-- article comments -->
						<div class="article-comments">
							<h3>Comments ({{count($comments)}})</h3>
							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/avatar-1.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>Joe Doe</h4>
										<span class="time">2 min ago</span>
										<a href="#" class="reply">Reply</a>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>

								<!-- comment -->
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/avatar-2.jpg" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4>Joe Doe</h4>
											<span class="time">2 min ago</span>
											<a href="#" class="reply">Reply</a>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								<!-- /comment -->
							</div>
							<!-- /comment -->

							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/avatar-1.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>Joe Doe</h4>
										<span class="time">2 min ago</span>
										<a href="#" class="reply">Reply</a>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<!-- /comment -->
						</div>
						<!-- /article comments -->

						<!-- article reply form -->
						<div class="article-reply">
							<h3>Leave a reply</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<form>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input class="input" placeholder="Name" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="input" placeholder="Email" type="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="input" placeholder="Website" type="text">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" placeholder="Message"></textarea>
										</div>
										<button class="primary-button">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /article reply form -->
					</div>
					<!-- /article -->
				</main>
				<!-- /MAIN -->

				<!-- ASIDE -->
				<aside id="aside" class="col-md-3">
					<!-- category widget -->
					<div class="widget">
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
					</div>
					<!-- /category widget -->

					<!-- posts widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Posts</h3>
						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-1.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-2.jpg" alt="">
								</div>
								<div class="widget-content">
									Vix fuisset tibique facilisis cu. Justo accusata ius at
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-3.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->
					</div>
					<!-- /posts widget -->

					<!-- causes widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Causes</h3>

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-1.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 64%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-2.jpg" alt="">
								</div>
								<div class="widget-content">
									Vix fuisset tibique facilisis cu. Justo accusata ius at
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 75%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-3.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 53%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
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
            <div class="alert alert-dismissible alert-success fade show">
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
            <p>Login/Register to comment on the post...</p><hr>
            @endif

            <!-- Loading discus comment plugin -->
            <!--<div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            /*(function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://laraveleducation.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();*/
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>-->

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
                                                            <h6 class="comment-name {{ $reply->user->id == $post->user_id ? 'by-author' : '' }}">{{ $reply->user->name }}</h6>
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
                                                    <h6 class="comment-name">{{ Auth::user()->name }}</h6>
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
