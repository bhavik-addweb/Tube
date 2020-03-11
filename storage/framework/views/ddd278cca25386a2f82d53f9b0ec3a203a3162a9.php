


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Logout</h2>
	<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
	    Logout
	</a>    
	<form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
	    <?php echo e(csrf_field()); ?>

	</form>
</div>

</body>
</html>
<?php /**PATH /var/www/Tube/resources/views/auth/admin/logout.blade.php ENDPATH**/ ?>