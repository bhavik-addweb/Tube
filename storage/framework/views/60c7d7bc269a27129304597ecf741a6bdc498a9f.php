<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div align="right">
	<a href="<?php echo e(route('vid.index')); ?>" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="<?php echo e(route('crud.update', $data->id)); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<?php echo method_field('PATCH'); ?>
	<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">Enter new name</label>
			<div class="col-md-6">
			<input type="text" class="textbox" name="vname" value="<?php echo e($data->vname); ?>" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">Enter New description</label>
			<div class="col-md-6">
			<input type="text" class="textbox" name="vdes" value="<?php echo e($data->vdes); ?>" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">Select thumbnail</label>
		<div class="col-md-6">
			<input type="file" name="image" />
			<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="<?php echo e($data->image); ?>" />
		</div>
	</div>

	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>





<?php /**PATH /var/www/Tube/resources/views/edit.blade.php ENDPATH**/ ?>