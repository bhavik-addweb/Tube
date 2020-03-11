<!-- Author :bhavik chudasama -->
<!-- shows all playlists of user -->
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
						<h3>Playlists</h3>
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
				  				<!-- form for making new playlist -->
                                  <h3>Make new playlist</h3>
                                  <div class="table-form">
                                  <form method="post" action="{{ route('playlist.store' )}}" >
                                   @csrf

                                   <input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}">
                                   <input type="text" class="textbox" placeholder="Enter new playlist name" name="play_name" required/>
                                   <input class="button"type="submit" value="submit"/>
                               </form>
                               
                           </div>
                      </div>                         
				</br>
				<!-- shows all playlist of user -->
				@foreach($data2 as $row)
				<div class="content-grid">
					<h3>{{ $row->play_name }}.</h3>

						<a class="button" href="{{ route('myplaylist.show',$row->id) }}">videos</a>
                        <form action="{{ route('playlist.destroy', $row->id) }}" method="post">
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
		<!---start-copy--->
		<!---End-wrap---->
	</body>
</html>

