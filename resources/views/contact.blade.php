<!-- Author :bhavik chudasama -->
<!-- contact form -->
<!DOCTYPE HTML>
	<head>
		<title>Videos Website Template | singlepage :: W3layouts</title>
		
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			@include('layouts.app')
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
						<h3>contact form</h3>
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
				
		  		<div class="artical-commentbox">
				  				
		  						 	<h3>DROP A MESSAGE</h3>
		  						 	<div class="table-form">
									   <!-- form for contact -->
									   <form method="post" action="{{ route('con.store' )}}" >
										@csrf

										<input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}">
										<input type="text" class="textbox" value="TO:-Admin"disabled >
										<textarea placeholder="Message:" name="message" required></textarea>	
										<input class="button"type="submit" value="submit"/>
									</form>
									
								</div>
		  						<!-- shows all messages done by user -->
							<h3>My Messages to admin</h3>	   
					@foreach($data2 as $row)
					</br>
					<div class="content">
					{{ $row->message }}.
						<ul>
						 <li>texted on:{{$row->updated_at}}</li>
							</ul>

                        <form action="{{ route('con.destroy', $row->id) }}" method="post">
				       @csrf 
                         @method('DELETE') 
                          <button type="submit" class="btn btn-danger">Delete</button> 
                                
                        </form>		
										
					</div>
					</br>
					@endforeach
					</div>
					</div>
					
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


