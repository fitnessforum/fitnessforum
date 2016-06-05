@extends('layouts.app')


@section('content')

@foreach ($categories as $element)
	<p>{{$element->name}}</p>
@endforeach
<br>
@foreach ($topics as $element)
	<p>{{$element->name}}</p>
@endforeach
<br>
@foreach ($posts as $element)
	<p>{{$element->name}}</p>
@endforeach
	<div class="col-md-8 col-md-offset-2">
		Sample forum show
	</div>


@stop
