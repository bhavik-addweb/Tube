<!-- Author :bhavik chudasama -->
<!-- form for uploading video -->
@include('layouts.app')
<!DOCTYPE HTML>


	<body>
		<!---start-wrap---->
			<!---start-header---->
			
			<!---End-header---->
		</div>
		<div class="clear"> </div>
	
<body>
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.store' )}}" enctype="multipart/form-data">

	@csrf
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
			<input type="hidden" name="id" class="form-control input-lg" value="{{ Auth::user()->id }}" />
		</div>
	</div>

	
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right">categories</label>
		<div class="col-md-6">
			<select name="cat_id">
			@foreach($data1 as $row1)
			<option class="option" value=" {{ $row1->id }}">{{ $row1->category }}.</option>
			@endforeach
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




