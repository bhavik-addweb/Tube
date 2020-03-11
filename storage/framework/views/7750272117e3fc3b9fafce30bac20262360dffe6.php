
<!DOCTYPE HTML>

	<head>
		<title>Videos Website Template | Home :: W3layouts</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link href="/css/style.css" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
				<?php echo $__env->make('assets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<form method="post" action="<?php echo e(route('crud.store')); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 text-right">video</label>
		<div class="col-md-8">
			<input type="file" name="video" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>
</body>
<html>




<?php /**PATH /var/www/Laravel-5.8-Crud-Tutorial-master/resources/views/create.blade.php ENDPATH**/ ?>