@extends('layouts.app')
@section('header')
<link rel="shortcut icon" href="{{ asset('static/images/red_newspaper.png') }}" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
<title>Notícias</title>
@endsection
@section('body')
@include('layouts.navbar')
<div class="container py-5">
  <h1 class="mb-3">Detalhes da Notícia</h1>
  <div class="col mb-3">
    <label class="form-label">Título</label>
    <input type="text" class="form-control" readonly value="{{ $news->title }}">
  </div>
  <div class="col mb-3">
    <label class="form-label">Descrição</label>
    <textarea class="form-control" readonly>{{ $news->description }}</textarea>
  </div>
  <div class="row">
    <div class="col mb-3">
      <label class="form-label">Data de Criação</label>
      <input type="text" class="form-control" readonly value="{{ $news->created_at }}">
    </div>
    <div class="col mb-3">
      <label class="form-label">Última Modificação</label>
      <input type="text" class="form-control" readonly value="{{ $news->updated_at }}">
    </div>
  </div>
  <br>
  <div class="btn-area">
    <a href="/news" type="button" class="btn btn-primary btn-icon">
      <span class="material-symbols-outlined">arrow_back</span>Voltar
    </a>
  </div>
</div>
@endsection
