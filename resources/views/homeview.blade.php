<!-- Author :bhavik chudasama -->
<!-- video player file without login-->
<!DOCTYPE HTML>
<head>
		<title>Tube</title>
		<link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
		<script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- style for like dislike -->

<style type="text/css">
/* This is purely for the demo */
.container {
max-width: 800px;
margin: 0 auto;
}
.plyr {
border-radius: 4px;
margin-bottom: 15px;
}
</style>
<style>
.fa {
  font-size: 20px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}
</style>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {
// This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
const player = new Plyr('#player');

// Expose
window.player = player;

// Bind event listener
function on(selector, type, callback) {
document.querySelector(selector).addEventListener(type, callback, false);
}

// Play
on('.js-play', 'click', () => {
player.play();
});

// Pause
on('.js-pause', 'click', () => {
player.pause();
});

// Stop
on('.js-stop', 'click', () => {
player.stop();
});

// Rewind
on('.js-rewind', 'click', () => {
player.rewind();
});

// Forward
on('.js-forward', 'click', () => {
player.forward();
});
});
</script>

</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			@include('layouts.app')
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!-- Modal -->
		<div class="modal fade" id="addplay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Add to playlist</h5>
 
                </div>
                <div class="modal-body">
			please login
				</br>
				</br>

			  </div>
            </div>
          </div>
		  </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			@include('layouts.sidebar1')
			<div class="right-content">
			<!-- content and information of video -->
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>{{$data->vname}}</h3>
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
				<div class="inner-page">
		
				<video controls crossorigin playsinline poster="{{ URL::to('/') }}/videos/{{$data->image}}" id="player">
			<!-- Video files -->
			<source src="{{ URL::to('/') }}/videos/{{$data->video}}"  type="video/mp4" size="1080">
			<!-- Caption files -->
			<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
			default>
			<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

			</video>
				</div>
				<div class="clear"> </div>
				<div class="title">
						<ul>
						
					<!-- likes and comment counts of video -->
						<li><h4>{{  $query  }}</h4><li>
						<li><h4>{{  $query1  }}</h4><li>
						<li>
						<form method="post" action="{{ route('subs.store' )}}" >
						@csrf
						<input type="hidden" name="uid" value="{{ $data->uid }}">
								<button type="submit" >
						<img src="/images/sub.png" title="subscribe">subscribe</a></li></button>
						</form>
						<li>
						<a href="#addplay"  data-toggle="modal" ><i class="fa fa-plus"></i></a>
						<li>
					</ul>
				</div>
				<div class="video-details">
					<ul>
						<li><p>Uploaded on <a href="#">{{$data->updated_at}}</a> by <a href="{{ route('vid.show',$data->uid) }}">{{ $result1->name}} </a></p></li>
						<li><span>{{$data->vdes}}</span></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<div class="tags">
					<ul>
						<li><h3>Category:</h3></li>
						<li><h3>{{$data2->category}}</h3></li>
						
					
				
				<div class="clear"> </div>
				<form method="post" action="{{ route('like.store' )}}" >
						@csrf
						<input type="hidden" name="id"value="{{ $data->id }}">
							<li><button type="submit"class="fa fa-thumbs-up"  title="image-name" ></button></li>
						</form>
						<!-- form for like dislike-->
							<form action="{{ route('like.destroy', $data->id) }}" method="post">
							@csrf
						@method('DELETE')
						<li><button type="submit"class="fa fa-thumbs-down" title="image-name" ></button></li>
						</ul>
							</form>
							</div>
				<div class="share-artical">
					<h3> Also share on</h3>
		  					<ul>
		  						<li><a href="#"><img src="/images/facebook.png" title="facebook">Facebook</a></li>
		  						<li><a href="#"><img src="/images/twiter.png" title="Twitter">Twiiter</a></li>
		  						<li><a href="#"><img src="/images/in.png" title="linked-in">Linked-in</a></li>
		  						<li><a href="#"><img src="/images/google+.png" title="google+">Google+</a></li>
		  						<li><a href="#"><img src="/images/pintrest.png" title="pintrest">Pintrest</a></li>
		  						<li><a href="#"><img src="/images/rss.png" title="rss">Rss</a></li>
		  					</ul>
							  <!-- shows comment -->
							  <h3> comments</h3>
							  <div class="video-details">
									  </br>
									  	@foreach($result as $row3)
										<h6>By</h6>
										<span><h4> {{ $row3->email}}</h4>
										<a href="{{ route('vid.show',$row3->uid) }}"><h4>{{ $row3->name}}</h4></a></span>
										<span><h4>comment:{{ $row3->comment}}</h4>
										<h4>{{ $row3->updated_at}}</h4></span>
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
