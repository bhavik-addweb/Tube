<!-- Author :bhavik chudasama -->
<!-- editing video by user -->
@include('layouts.app')
<div align="right">
	<a href="{{ route('vid.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">Enter new name</label>
			<div class="col-md-6">
			<input type="text" class="textbox" name="vname" value="{{ $data->vname }}" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">Enter New description</label>
			<div class="col-md-6">
			<input type="text" class="textbox" name="vdes" value="{{ $data->vdes }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">Select thumbnail</label>
		<div class="col-md-6">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>

	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>





