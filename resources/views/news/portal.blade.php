@extends('layouts.app')
@section('header')
<link rel="shortcut icon" href="{{ asset('static/images/red_newspaper.png') }}" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/portal.css') }}">
<title>Notícias</title>
@endsection
@section('body')
@include('layouts.navbar')
<div class="container py-5">
  <h1 class="mb-3">Portal de Notícias</h1>
  @if($news->count() > 0)
    @foreach($news as $rs)
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $rs->title }}</h5>
        <p class="card-text">{{ $rs->description }}</p>
        <p class="card-date">
          Última atualização em
          {{ date_format(date_create(substr($rs->updated_at, 0, 10)), "d/m/Y") }}
        </p>
      </div>
    </div>
    @endforeach
  @else
    <div class="text-center">Não há Notícias cadastradas!</div>
  @endif
</div>
<script type="text/javascript" src="{{ asset('static/js/index.js') }}"></script>
@endsection
