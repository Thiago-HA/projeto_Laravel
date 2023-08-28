@extends('layouts.main')

@section('title')
    Produto {{$id}}
@endsection

@section('head')
    
@endsection

@section('content')
    @if ($id != null)
        teste produto {{$id}}
    @endif
@endsection