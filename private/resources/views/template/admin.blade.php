
<!DOCTYPE html>
<html>

@include('template.partial._head')

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Wiasata</span>Tegal</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
	@include('template.partial._sidebar')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@yield('main')
	</div>	<!--/.main-->
	
	@include('template.partial._script')
		
</body>
</html>