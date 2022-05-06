@extends('layouts/layout')

@section('title', 'Task')

@section('main')

<h2>{{ $task->title }}</h2>
	<div class="task-content">
		<div class="card">
			<div class="card-content">
				<div class="content">
					<p>{{ $task->description }}</p>
					<p>  Creation Date : {{ $task->created_at->format('jS \\of F Y') }}</p>
					<div class="card-footer">
					<a href="/" class="card-footer-item">Back to List of Tasks ></a>
			</div>
			</div>
		</div>
	</div>
@endsection
