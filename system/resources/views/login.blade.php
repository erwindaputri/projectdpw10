<!DOCTYPE html>
<html>

<head>
  @include('toko.section.assets')
</head>

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{url('public')}}/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      @include('toko.section.header')
    </header>
    
<div class="container py-2">
    <div class="row">
        <div class="col-md-12">
			<div class="logo">
				<a href="#">
					<img src="images/logo.png" alt="" />
				</a>
			</div>
            <div class="row">
                <div class="col-md-6 login-form mx-auto">
                    <!-- form card login -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">Login Admin</h3>
                        </div>
                        <div class="card-body">
                            @include('template.utils.notif')
                            <form action="{{url('/login')}}" method="post">
                              @csrf
                                <div class="form-group">
                                    <input for="username" class="form-control" name="username" placeholder="Username" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input for="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
								<div class="row mb-3">
									<div class="col-md-6">
										<div class="checkbox checkbox-primary">
											<input id="checkbox1" class="styled" type="checkbox">
											<label for="checkbox1">
												Remember me 
											</label>
										</div>
									</div>
									<div class="col-md-6 text-right">
										<a href="#">forgot password?</a>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-12 text-center"><button type="submit" class="btn btn-success rippler btn-wd rippler-default" id="btnLogin">Login</button></div>
								</div>
                            </form>
							<div class="naw-text mb-3">
								<h5></h5>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="create-box text-block text-center my-0">
										<span class="text-small font-weight-semibold">Not a member ?</span>
										<a href="#" class="text-black text-small">Create new account</a>
									</div>
								</div>
							</div>
                        </div>
                        <!--/card-block-->
						<div class="card-footer">
							<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://html.design/">Vegetables</a></div>
						</div>
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->

  <!-- end  footer section -->
@include('toko.section.js')
</body>

</html>