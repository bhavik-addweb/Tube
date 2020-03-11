<!-- Author:bhavik chudasama
sidebar without login -->
<div class="left-sidebar">
				<div class="sidebar-boxs">
					<!-- shows all categories -->
					<div class="type-videos">
							<h3>Categories</h3>
							<ul>
							@foreach($data1 as $row1)
							<li><a href="{{ route('homecat.show',$row1->id) }}">{{ $row1->category }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="copy-right">
			<p> &copy; 2020 Videos. All rights reserved | Design by gebster</p>
		</div>
			</div>