<!DOCTYPE HTML>
	<head>
		<title>Videos Website Template | singlepage :: W3layouts</title>
		
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
		<div class="wrap">
			<div class="left-sidebar">
				<div class="sidebar-boxs">
			
					<div class="type-videos">
					<h3><a href="<?php echo e(route('vid.index')); ?>">MY CHANNEL</h3></a>
						<ul>
							<?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="<?php echo e(route('cat.show',$row1->id)); ?>"><?php echo e($row1->category); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
				
		  		<div class="artical-commentbox">
				  				
		  						 	<h3>Edit Profile</h3>
		  						 	<div class="table-form">
									   <form method="post" action="<?php echo e(route('prof.store' )); ?>" >
										<?php echo csrf_field(); ?>

										<input type="hidden" class="textbox" name="uid"value="<?php echo e(Auth::user()->id); ?>">
										<input type="text" class="textbox" value="<?php echo e(Auth::user()->name); ?>" >
										<input type="text" class="textbox" value="<?php echo e(Auth::user()->email); ?>">
										
										<input class="button"type="submit" value="submit"/>
									</form>
									
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
		<div class="copy-right">
			<p> &copy; 2013 Videos. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>


<?php /**PATH /var/www/Tube/resources/views/profile.blade.php ENDPATH**/ ?>