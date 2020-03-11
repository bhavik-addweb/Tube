<!-- Author :bhavik chudasama
shows category at admin panel-->
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

          <!-- Page Heading -->
          
   <!-- Modal for adding category-->
            <div class="modal fade" id="createcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">create category</h5>

                    
                  </div>
                  <div class="modal-body">
                  <form method="post" action="{{ route('admin.store' )}}" enctype="multipart/form-data">

                    @csrf

                    <label >Enter category</label>

                    <input type="text" name="cat" class="form-control input-lg" />
                


                  
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
            </div>
          </div>
         <!-- table for categories -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <a href="#createcat" type="button" class="btn btn-primary" style="float : right;"data-toggle="modal" ><i class="fa fa-plus"></i></a>
        <thead>
            <tr>
                <th>CATEGORIES</th>
                 <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($data as $row)
                <td>{{$row->category}}</td>
                
                <td><a href="{{route('admin.edit',$row->id)}}" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  </a>
                  <form action="{{ route('admin.destroy', $row->id) }}" method="post">
                @csrf
				 @method('DELETE')
					 <button type="submit" class="btn btn-danger">Delete</button>
 					
				</form>
                
                  </td>
            
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th>CATEGORIES</th>
                 <th>Actions</th>   
            </tr>
        </tfoot>
    </table>
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
