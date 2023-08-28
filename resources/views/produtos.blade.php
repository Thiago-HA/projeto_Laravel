@extends('layouts.main')

@section('title', 'Produtos')

@section('head')
    
@endsection

@section('content')
    <h1>Produtos</h1>
    @if ($busca != '')
        <p>O usuário está buscando por<strong> {{$busca}}</strong></p>
    @endif
@endsection