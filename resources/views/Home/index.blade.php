@extends('layouts.default')
@section('page_title','Home')

@section('contenuto')
@dump($data)
@foreach ($data as $movie)
<div class="container">
    <h5>{{$movie['title']}}</h5>
    
</div>
    
@endforeach

@endsection