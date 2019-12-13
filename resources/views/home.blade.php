@extends('layouts.master')

@section('content')
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- LEFT COLUMN -->
					<div class="profile-left">
						<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="" id="picture" class="img-circle" alt="Avatar">
							</div>
						</div>
						<!-- END PROFILE HEADER -->
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">
						<!-- TABBED CONTENT -->
						<div class="custom-tabs-line tabs-line-bottom left-aligned">
							<ul class="nav" role="tablist">
								<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Profile</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-bottom-left1">
                            <label>Name</label>
                            <input class="form-control" placeholder="Default input" type="text" id="name">
                            <br>
                            <label>Gender</label>
                            <input class="form-control" placeholder="Default input" type="text" id="gender">
                            <br>
                            <label>Address</label>
                            <input class="form-control" placeholder="Default input" type="text" id="address">
                            <br>
                            <label>Email</label>
                            <input class="form-control" placeholder="Default input" type="email" id="email">
                            <br>
                            <label>Date Of Birth</label>
                            <input class="form-control" placeholder="Default input" type="text" id="dob">
                            <br>
                            <label>Age</label>
                            <input class="form-control" placeholder="Default input" type="text" id="age">
                            <br>
                            <label>Phone Number</label>
                            <input class="form-control" placeholder="Default input" type="text" id="phone">
                            <br>
							</div>
						</div>
						<!-- END TABBED CONTENT -->
					</div>
					<!-- END RIGHT COLUMN -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
@endsection
