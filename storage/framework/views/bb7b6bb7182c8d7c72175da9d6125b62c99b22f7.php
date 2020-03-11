<!-- Author :bhavik chudasama -->
<!-- form for uploading video -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE HTML>


	<body>
		<!---start-wrap---->
			<!---start-header---->
			
			<!---End-header---->
		</div>
		<div class="clear"> </div>
	
<body>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>
<div align="right">
	<a href="<?php echo e(route('crud.index')); ?>" class="btn btn-default">Back</a>
</div>

<form method="post" action="<?php echo e(route('crud.store' )); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right">Enter video Name</label>
		<div class="col-md-6">
			<input type="text" name="vname" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group row">
		<label class="col-md-4 text-right">Enter description</label>
		<div class="col-md-6">
			<input type="textarea" name="vdes" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6">
			<input type="hidden" name="id" class="form-control input-lg" value="<?php echo e(Auth::user()->id); ?>" />
		</div>
	</div>

	
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right">categories</label>
		<div class="col-md-6">
			<select name="cat_id">
			<?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option class="option" value=" <?php echo e($row1->id); ?>"><?php echo e($row1->category); ?>.</option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			
		</div>
	</div>

	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right">Select thumbnail Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right">video</label>
		<div class="col-md-8">
			<input type="file" name="video" />
		</div>
	</div>

	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>
</body>
<html>




<?php /**PATH /var/www/Tube/resources/views/create.blade.php ENDPATH**/ ?>