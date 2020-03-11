<!-- Author :bhavik chudasama
editing category by admin -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  @include('admin_assets.css')

  <title >Tube admin</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  @include('admin_content.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin_content.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- form for editing category -->
        <form method="post" action="{{ route('admin.update', $data->id) }}" enctype="multipart/form-data">

        
	@csrf
	@method('PATCH')
        <div class="form-group">
		<label class="col-md-4 text-right">Enter category</label>
		<div class="col-md-8">
			<input type="text" name="category" class="form-control input-lg" value="{{$data->category}}"/>
            <input type="submit"  class="btn btn-primary input-lg" />
		</div>
	    </div>
        </form>
    </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     @include('admin_content.footer')
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
@include('admin_assets.js')

</body>

</html>

