@extends('layout')
@section('title','Portfolio')
@section('content')
<h1>Portfolio</h1>
<ul>
	@forelse($portfolio as $portfolioItem)
		<li>
			{{ $portfolioItem['title'] }}
			<pre>{{ $loop->last ? 'Es el ultimo' : '' }}</pre>
			<pre>{{ $loop->first ? 'Es el primero' : '' }}</pre>
		</li>

	@empty
		<li>No hay proyectos para mostrar</li>
	@endforelse
</ul>
@endsection()