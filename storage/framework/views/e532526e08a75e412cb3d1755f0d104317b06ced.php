<!-- Author:bhavik chudasama
sidebar without login -->
<div class="left-sidebar">
				<div class="sidebar-boxs">
					<!-- shows all categories -->
					<div class="type-videos">
						<ul>
							<?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="<?php echo e(route('homecat.show',$row1->id)); ?>"><?php echo e($row1->category); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div>
			</div><?php /**PATH /var/www/Tube/resources/views/layouts/sidebar1.blade.php ENDPATH**/ ?>