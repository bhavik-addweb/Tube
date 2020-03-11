

<!DOCTYPE HTML>
	<head>
		<title>Videos Website Template | Home :: W3layouts</title>
		<link href="/css/style.css" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
				<?php echo $__env->make('assets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			<div class="left-sidebar">
				<div class="sidebar-boxs">
					<div class="sidebar-box">
						<h2>Album-Name</h2>
						<a href="#"><img src="images/allbum.jpg" title="image-name" /></a>
						<h3>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT.</h3>
						<div class="rate">
							<b style="width:100%"> </b> 
							<a href="#">Rate 1/5</a>
							<a href="#">Rate 2/5</a>
							<a href="#">Rate 3/5</a>
							<a href="#">Rate 4/5</a>
							<a href="#">Rate 5/5</a>
							<div class="clear"> </div>
						</div>
						<input type="button" value="Rate it" />
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ut labore et dolore magna aliqua.</p>
					</div>
					<div class="clear"> </div>
					<div class="type-videos">
						<h3>Labels</h3>
						<ul>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Collections of videos</h3>
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
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="content-grids">
					<div class="content-grid">
						<a href="singlepage.html"><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" title="allbum-name"width="200" height="200" /></a>
						<h3><?php echo e($row->first_name); ?>.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" />  </a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="<?php echo e(route('crud.show', $row->id)); ?>">Watch now</a>
					</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
		<div class="copy-right">
			<p> &copy; 2020 Videos. All rights reserved | Design by gebster</p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->



	<!-- <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
				<form action="<?php echo e(route('crud.destroy', $row->id)); ?>" method="post">
				
					 
					 <div class="col-md-4 col-sm-6">
					<div class="card" style="width:200px ">
					<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" class="img-thumbnail" width="200" />
						<div class="card-body">
						<h4 class="card-title"><?php echo e($row->first_name); ?></h4>
						<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> 
						<a href="<?php echo e(route('crud.show', $row->id)); ?>"class = "btn btn-info"><span class="glyphicon glyphicon-play"></span> play now</a>	
						</div>
					</div>
					</div>
					 
					
						 <div class="item">
						<div class="thumb">
						<a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
						<div class="hover-content">
						
						</div>
						</div></a>
						<div class="image">
						<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" class="img-thumbnail" width="200"  />
						<h2><?php echo e($row->first_name); ?></h2>
						
						</div>
						</div>
						</div>
						</div>			
					<a href="<?php echo e(route('crud.edit', $row->id)); ?>" class="btn btn-warning">Edit</a>
					<?php echo csrf_field(); ?> -->
					<!-- <?php echo method_field('DELETE'); ?> -->
					<!-- <button type="submit" class="btn btn-danger">Delete</button> -->
<!-- 					
				</form> -->
		
	<!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> --> 


<?php /**PATH /var/www/Laravel-5.8-Crud-Tutorial-master/resources/views/index.blade.php ENDPATH**/ ?>