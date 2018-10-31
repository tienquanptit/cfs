@extends('admin.index')
@section('content')
    @foreach($confessions as $confession)
        {{ $confession->title }}
    @endforeach
@endsection