<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php echo $__env->make('admin_assets.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <title >SB Admin 2 - Blank</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php echo $__env->make('admin_content.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php echo $__env->make('admin_content.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

       
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>comments</th>
                <th>commented by</th>
                <th>email</th>
                <th>commented on</th>
                <th>video name</th>
                <th>video description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($row->comment); ?></td>
                <td><?php echo e($row->name); ?></td>
                <td><?php echo e($row->email); ?></td>
                <td><?php echo e($row->updated_at); ?></td>
                <td><?php echo e($row->vname); ?></td>
                <td><?php echo e($row->vdes); ?></td>
                
                <td>
                <form action="<?php echo e(route('adcom.destroy', $row->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
				 <?php echo method_field('DELETE'); ?>
					 <button type="submit" class="btn btn-danger">Delete</button>
 					
				</form>
                
                  </a>
                  </td>
            
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
        <tr>
                <th>comments</th>
                <th>commented by</th>
                <th>email</th>
                <th>commented on</th>
                <th>video name</th>
                <th>video description</th>
                <th>Actions</th>
            </tr>        
            </tfoot>
    </table>
    </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     <?php echo $__env->make('admin_content.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
<?php echo $__env->make('admin_assets.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /var/www/Tube/resources/views/adcom.blade.php ENDPATH**/ ?>