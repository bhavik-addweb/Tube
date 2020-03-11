<!-- Author :bhavik chudasama -->
<!-- shows all videos -->
@include('layouts.app')
<!DOCTYPE HTML>
	<head>
		<title>Tube</title>
		
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
				
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			@include('layouts.sidebar')
			
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Tube videos</h3>
					</div>
					<div class="right-content-heading-right">
						<div class="social-icons">
			                <ul>
			                    <li><a class="facebook" href="#" target="_blank"> </a></li>
			                    <li><a class="twitter" href="#" target="_blank"></a></li>
			                    <li><a class="googleplus" href="#" target="_blank"></a></li>
			                    <li><a class="pinterest" href="#" target="_blank"></a></li>
			                    <li><a class="dribbble" href="#" target="_blank"></a></li>
			                    <li><a class="vimeo" href="#" target="_blank"></a></li>
			                </ul>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<!-- shows all videos -->
				@foreach($data as $row)
				
				
					<div class="content-grid">
					
						<a href="singlepage.html"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" title="allbum-name"width="200" height="200" /></a>
						
						<h3>{{ $row->vname }}.</h3>
						<a class="button" href="{{ route('crud.show', $row->id) }}">Watch now</a>
										
					</div>
					@endforeach
					</div>
				<div class="clear"> </div>
					
					<!---start-pagenation----->
					
					<!---End-pagenation----->
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
		<!---start-copy-right---->
	
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>
