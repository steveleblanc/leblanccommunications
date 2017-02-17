@extends('layouts.app')

@section ('content')
<div class="stretch container">
	<div class="col-md-3 fileUploader">
		<h2>File Uploader</h2>
		{!! Form::open(array('url' => '/handleUpload', 'files' => true)) !!}
		<div class="form-group">
			<div class="form-group col-md-3-offset-1">
			{!! Form::file('content') !!}
			</div>
			{!! Form::token() !!}
			<div class="form-group col-md-3-offset-1">
			{!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
			</div>
			{!! Form::close() !!}
		</div><br><br>
		@if(count($errors))
			<ul class="alert-danger" role="alert">
				@foreach($errors->all() as $error)
					{{ $error }}
				@endforeach
			</ul>
		@endif
	</div>
	<div class="col-md-9">
	<h2>Your FIles List</h2>
	@foreach ($files as $file)		
		<div class="col-md-4">		
			<img class="img-responsive fileUploaderImg" src="/resources/uploads/{{ $file->filename }}">
			<b>{{ $file->filename }}</b><br>
			{{ $file->created_at }}		
			{{ " " }}{{ link_to_route('deleteFile', 'Delete', ($file->id)) }}<br><br><br><br>
		</div>
	@endforeach
	</div>
</div>
@endsection