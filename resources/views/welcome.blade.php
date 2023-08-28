@extends('layouts.main')

@section('title', 'Home')

@section('head')

<link rel="stylesheet" href="/css/style.css">
<script src="/js/script.js"></script>

@endsection

@section('content')

    <h1 id="teste" onclick="test()">Hdome</h1>
    @if (15 > 10)
        

        <h1>{{$nome}}</h1>
    @else 
    <style>
        h1{
            color: blue
        }
        </style>
    @endif


    @for ($i = 0; $i < count($lista); $i++)
        <h2>{{$lista[$i]}} oi</h2>
    @endfor

@endsection
