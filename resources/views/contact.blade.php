@extends('layout')
@section('title','Contact')
@section('content')
<h1>{{ __('Contact') }}</h1>
@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif
<form method="post" action=" {{ route('contact') }} ">
	@csrf
	<input name="name" placeholder="Nombre ... " value="{{ old('name') }}"><br>
	{!! $errors->first('name', '<small>:message</small><br>') !!}

	<input type="text" name="email" placeholder="Email ... " value="{{ old('email') }}"><br>
	{!! $errors->first('email', '<small>:message</small><br>') !!}

	<input name="subject" placeholder="Asunto ... " value="{{ old('subject') }}"><br>
	{!! $errors->first('subject', '<small>:message</small><br>') !!}

	<textarea name="content" placeholder="Mensaje ... ">{{ old('content') }}</textarea><br>
	{!! $errors->first('content', '<small>:message</small><br>') !!}

	<button>Enviar</button>
</form>
@endsection()