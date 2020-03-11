<!-- Author :bhavik chudasama -->
<!-- shows all subscriptions -->
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
						<h3>Subscriptions</h3>
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
				<!-- shows all subscriptions -->
				@foreach($result as $row)
				
				
					<div class="content-grid">
					<h3>{{ $row->name }}.</h3>
						<ul>
						
							<li>{{ $row->email}}</li>
                            <li>subscribed since:{{$row->updated_at}}
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="{{ route('vid.show',$row->uid) }}">videos</a>
                        <form action="{{ route('subs.destroy', $row->id) }}" method="post">
				       @csrf 
                         @method('DELETE') 
                          <button type="submit" class="btn btn-danger">Delete</button> 
                                
                        </form>		
										
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

		<!---End-wrap---->
	</body>
</html>

