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
					<h1>CONTACT US</h1>
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li><a href="/contactus">Contact Us</a></li>
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

		<br><br><br><br>

		<div class="col-md-3">
		@if (session('response') )
                <div class="alert alert-success">
                    {{ session('response') }}
                </div>


                @endif
		</div>
		<div class="col-md-6">


		<form class="form-horizontal" method="POST" action="{{ route('store.contacts') }}">
                        {{ csrf_field() }}
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" required name="email"
						placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
						else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Full Name</label>
					<input type="text" class="form-control" name="name" required placeholder="Enter Full Name">
				</div>
				<div class="form-group">
    <label>Message</label>
    <textarea class="form-control" name="message"  required rows="3"></textarea>
  </div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
		<div class="col-md-6"></div>
	</div>

</div>
<br><br><br><br>


@endsection