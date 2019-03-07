@extends('layout.principal')
@section('content')
<div class="content">
	@foreach ($projects as $project)
		<li>{{ $project->title }}</li>
	@endforeach
</div>
@endsection