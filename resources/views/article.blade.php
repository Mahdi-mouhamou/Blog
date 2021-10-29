@extends('layouts.app')

@section('content')

<h1>welcome in my first application</h1>
 @foreach( $posts as $post )
<h1> {{ $post }} </h1>
@endforeach

@endsection