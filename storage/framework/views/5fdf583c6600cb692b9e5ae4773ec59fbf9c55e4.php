<!-- Author :bhavik chudasama -->
<!-- shows all subscriptions -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
			<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
				<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
				
					<div class="content-grid">
					<h3><?php echo e($row->name); ?>.</h3>
						<ul>
						
							<li><?php echo e($row->email); ?></li>
                            <li>subscribed since:<?php echo e($row->updated_at); ?>

							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="<?php echo e(route('vid.show',$row->uid)); ?>">videos</a>
                        <form action="<?php echo e(route('subs.destroy', $row->id)); ?>" method="post">
				       <?php echo csrf_field(); ?> 
                         <?php echo method_field('DELETE'); ?> 
                          <button type="submit" class="btn btn-danger">Delete</button> 
                                
                        </form>		
										
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
		<div class="copy-right">
			<p> &copy; 2020 Videos. All rights reserved | Design by gebster</p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>

<?php /**PATH /var/www/Tube/resources/views/subs.blade.php ENDPATH**/ ?>